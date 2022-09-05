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

        'name',
        'program_id',
        
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