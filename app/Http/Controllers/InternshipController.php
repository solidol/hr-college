<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\InternshipType;
use App\Models\Employee;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\Institution;
use App\Models\StoredFile;
use App\Models\PositionCard;

class InternshipController extends Controller
{
    public function index(Employee $employee)
    {
        return view('internships.index', ['employee' => $employee]);
    }
    public function show(Internship $internship)
    {
        return view('internships.show', ['internship' => $internship]);
    }
    public function edit(Internship $internship)
    {
        $ittp = InternshipType::all();
        return view('internships.edit', ['internship' => $internship, 'internshipTypes' => $ittp]);
    }
    public function create(PositionCard $positioncard)
    {
        $ittp = InternshipType::all();
        $ins = Institution::all();
        $dt = DocumentType::where('parent_id', 3)->get();
        return view('internships.create', [
            'institutions' => $ins,
            'internshipTypes' => $ittp,
            'documentTypes' => $dt,
            'positioncard' => $positioncard
        ]);
    }
    public function store(Request $request, PositionCard $positioncard)
    {
        $internship = new Internship();
        $internship->thesis = $request->thesis;
        $internship->institution = $request->institution;
        $internship->department = $request->department;
        $internship->date_start = $request->date_start;
        $internship->date_end = $request->date_end;
        if ($request->cb_one_day) {
            $internship->date_end = $internship->date_start;
        }
        $internship->hours = $request->hours;
        $internship->thesis = $request->thesis;
        $internship->status = 1;
        $internship->description = $request->description;
        $internship->position_card_id = $positioncard->id;
        $internship->internship_type_id = $request->internship_type;
        $internship->save();

        $documnent = new Document();
        $documnent->number = $request->doc_number;
        $documnent->fullname = $positioncard->employee->fullname;
        $documnent->title = $request->doc_title;
        $documnent->date_start = $request->doc_date_start;
        $documnent->institution = $request->doc_institution;
        $documnent->description = $request->doc_description;
        $documnent->employee_id = $positioncard->employee->id;
        $documnent->document_type_id = $request->doc_type;
        $documnent->save();

        $f = new StoredFile(
            $request->file('file'),
            $positioncard->employee,
            [
                'title' => $request->doc_title,
                'description' => $request->doc_description,
                'attachable_type' => Document::class,
                'attachable_id' => $documnent->id,
            ]
        );
        $f->save();
        $internship->documents()->save($documnent);

        return redirect()->route('internships.edit', ['internship' => $internship])->with('success', 'Стажування збережено!');
    }
    public function update(Request $request, Internship $internship)
    {
        $internship->thesis = $request->thesis;
        $internship->institution = $request->institution;
        $internship->department = $request->department;
        $internship->date_start = $request->date_start;
        $internship->date_end = $request->date_end;
        $internship->hours = $request->hours;
        $internship->thesis = $request->thesis;
        $internship->status = 1;
        $internship->description = $request->description;
        $internship->internship_type_id = $request->internship_type;
        $internship->save();
        return redirect()->route('internships.edit', ['internship' => $internship])->with('success', 'Стажування збережено!');
    }
}
