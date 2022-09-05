<?php

namespace App\Imports;
use Hash;
use App\Models\studentListUpdate;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class STudentLIst implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new studentListUpdate([
            
            'name'  => $row['name'],
            'program_id' => $row['program_id'],
            'name'=> $row['name'],
            'admission_no' => $row['admission_no'],
            'specialization' => $row['specialization'],
            'year' => $row['year'],
            'semester' => $row['semester'],
            'email_id' => $row['email_id'],
            'contact_no' => $row['contact_no'],
            'nri_status' => $row['nri_status'],
            'noc_status' => $row['noc_status'],
            'session' => $row['session'],
        ]);
    }
}
