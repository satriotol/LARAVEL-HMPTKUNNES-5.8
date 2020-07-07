<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $table ="pesan";

    protected $fillable =['nama_pengirim','email_pengirim','isi_pesan'];
}
