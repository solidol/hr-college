<?php

namespace App\Imports;

use App\Models\PedagogicalRank;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\User;
use App\Models\Employee;
use App\Models\PositionCard;
use App\Models\Position;
use App\Models\PositionRank;
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
                'name' => 'user_' . trim($row[1]),
                'email' => trim($row[20]),
                'password' => Hash::make('111111'),
                'roles' => 'employee',
                'status' => 1
            ]);


            $emp = Employee::create([
                'reg_number' => trim($row[1]),
                'lastname' => trim($row[2]),
                'firstname' => trim($row[3]),
                'secondname' => trim($row[4]),
                'birthdate' => ExcelDate::excelToDateTimeObject($row[5])->format('Y-m-d'),
                'gender' => ($row[6] == 'ч' ? 1 : 0),
                'all_experience' => $row[7],
                'ped_experience' => $row[8],

            ]);
            $emp->user()->save($u);


            $pc1id = Position::where('title', 'LIKE', trim($row[9]))->get()[0]->id;

            $pc1 = PositionCard::create([
                'date_start' => ExcelDate::excelToDateTimeObject($row[12])->format('Y-m-d'),
                'position_id' => $pc1id,
                'position_type' => 1,
                'volume' => 1,
            ]);


            $pr1id = 1;

            switch (trim($row[10])) {
                case "без категорії":
                    $pr1id = 2;
                    break;
                case "відповідає займаній посаді":
                    $pr1id = 3;
                    break;
                case "друга":
                    $pr1id = 4;
                    break;
                case "перша":
                    $pr1id = 5;
                    break;
                case "вища":
                    $pr1id = 6;
                    break;
                default:
                    $pr1id = 1;
            }

            $pedrank1id = PedagogicalRank::where('title', 'LIKE', trim($row[19]))->get()[0]->id;
            $pc1->attestations()->save(
                new Attestation([
                    'at_date' => ExcelDate::excelToDateTimeObject($row[13])->format('Y-m-d'),
                    'position_rank_id' => $pr1id,
                    'pedagogical_rank_id' => $pedrank1id

                ])
            );
            $emp->positionCards()->save(
                $pc1
            );
            /*
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
            */


        }
    }
}
