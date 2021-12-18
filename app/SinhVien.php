<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinhvien';

    protected $fillable = [
        'masv',
        'hoten',
        'gioitinh',
        'ngaysinh',
        'quequan',
        'cmnd',
        'sdt',
        'phong',
    ];
}
