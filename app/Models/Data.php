<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    protected $table = 'datas';
    public $timestamps = false;
    //use SoftDeletes;
    //protected $dates=[''];
 

    protected $fillable = ['nama', 'nik', 'jns_kl', 'tmpt_lhr','tgl_lhr', 'alamat', 'nohp', 'pekerjaan', 'angt_klg'];//whitelist
    // protected $guarded = [];//blacklist
}
