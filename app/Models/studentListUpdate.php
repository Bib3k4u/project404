<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\studentListUpdate;

class studentListUpdate extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [

        'program_id',
        'name',
        'admission_no',
        'specialization',
        'year',
        'semester',
        'email_id',
        'contact_no',
        'nri_status',
        'noc_status',
        'session',
    ];
    public $timestamps = false;
}