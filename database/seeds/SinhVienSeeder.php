<?php

use App\SinhVien;
use Illuminate\Database\Seeder;

class SinhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SinhVien::create([
            'masv' => '123456',
            'hoten' => 'Nguyễn Văn A',
            'gioitinh' => 'Nam',
            'ngaysinh' => '01/01/2000',
            'quequan' => 'Hà Nội',
            'cmnd' => '123456789',
            'sdt' => '123456789',
            'phong' => '1',
        ]);

        SinhVien::create([
            'masv' => '123457',
            'hoten' => 'Nguyen Van B',
            'gioitinh' => 'Nam',
            'ngaysinh' => '01/01/2000',
            'quequan' => 'Hà Nội',
            'cmnd' => '123456789',
            'sdt' => '123456789',
            'phong' => '1',
        ]);

        SinhVien::create([
            'masv' => '123458',
            'hoten' => 'Nguyen Van C',
            'gioitinh' => 'Nam',
            'ngaysinh' => '01/01/2000',
            'quequan' => 'Hà Nội',
            'cmnd' => '123456789',
            'sdt' => '123456789',
            'phong' => '1',
        ]);

        SinhVien::create([
            'masv' => '123458',
            'hoten' => 'Nguyen Van D',
            'gioitinh' => 'Nam',
            'ngaysinh' => '01/01/2000',
            'quequan' => 'Hà Nội',
            'cmnd' => '123456789',
            'sdt' => '123456789',
            'phong' => '2',
        ]);
    }
}
