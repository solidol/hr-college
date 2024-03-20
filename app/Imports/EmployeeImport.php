<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\User;
use App\Models\Employee;
use App\Models\PositionCard;
use App\Models\Attestation;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

use Hash;

class EmployeeImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $r = 0;
        foreach ($collection as $row) {
            $r++;
            if ($r < 3)
                continue;


            $u = User::create([
                'name' => 'user_' . $row[1],
                'email' => $row[21],
                'password' => Hash::make($row['21']),
                'roles' => 'employee',
                'status' => 1
            ]);


            $emp = Employee::create([
                'reg_number' => $row[1],
                'lastname' => $row[2],
                'firstname' => $row[3],
                'secondname' => $row[4],
                'birthdate' => ExcelDate::excelToDateTimeObject($row[5])->format('Y-m-d')
            ]);
            $emp->user()->save($u);



            $pc1 = PositionCard::create([
                'date_start' => ExcelDate::excelToDateTimeObject($row[14])->format('Y-m-d'),
                'position_id' => 50,
                'position_type' => 1,
                'volume' => 1,
            ]);
            $pc1->attestations()->save(
                new Attestation([
                    'at_date'=> ExcelDate::excelToDateTimeObject($row[15])->format('Y-m-d'),
                    'position_rank_id' => 4,

                ])
            );
            $emp->positionCards()->save(
                $pc1
            );

            $pc2 = PositionCard::create([
                'date_start' => ExcelDate::excelToDateTimeObject($row[19])->format('Y-m-d'),
                'position_id' => 51,
                'position_type' => 1,
                'volume' => 0.5,
            ]);
            $pc2->attestations()->save(
                new Attestation([
                    'position_rank_id' => 5,
                    'at_date' => ExcelDate::excelToDateTimeObject($row[20])->format('Y-m-d'),
                ])
            );
            $emp->positionCards()->save(
                $pc2
            );



        }
    }
}
