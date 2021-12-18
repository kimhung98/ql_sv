<?php

namespace App\Http\Controllers;

use App\SinhVien;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SinhVien::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sinhvien = new SinhVien;
        $sinhvien->masv = $request->masv;
        $sinhvien->hoten = $request->hoten;
        $sinhvien->gioitinh = $request->gioitinh;
        $sinhvien->ngaysinh = $request->ngaysinh;
        $sinhvien->quequan = $request->quequan;
        $sinhvien->cmnd = $request->cmnd;
        $sinhvien->sdt = $request->sdt;
        $sinhvien->phong = $request->phong;
        $sinhvien->save();
        if ($request->admin_view) {
            return redirect()->route('sinhvien.index');
        }
        return $sinhvien;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return SinhVien::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sinhvien = SinhVien::find($id);
        $sinhvien->masv = $request->masv;
        $sinhvien->hoten = $request->hoten;
        $sinhvien->gioitinh = $request->gioitinh;
        $sinhvien->ngaysinh = $request->ngaysinh;
        $sinhvien->quequan = $request->quequan;
        $sinhvien->cmnd = $request->cmnd;
        $sinhvien->sdt = $request->sdt;
        $sinhvien->phong = $request->phong;
        $sinhvien->save();
        if ($request->admin_view) {
            return redirect()->route('sinhvien.index');
        }
        return $sinhvien;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return SinhVien::where('id',$id)->delete();
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $sinhvien = SinhVien::where('hoten','LIKE', '%' . $request->key . '%')->get();
        return view('danhsach', compact('sinhvien'));
    }
}
