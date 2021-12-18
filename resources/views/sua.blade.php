@extends('layout.app')
@section('content')
    <div class="header"><h2 class="text-center">Sửa thông tin sinh viên</h2></div>
    <div class="row form">
        <div class="col-md-6">
            @if(session('error'))
                <div class="alert alert-success">
                    {{session('error')}}
                </div>
            @endif
            <form action="{{ route('api.sinhvien.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="admin_view" value="true">
                <div class="form-group">
                    <label>Mã sinh viên</label>
                    <input class="form-control" name="masv" placeholder="Nhập tên mã sinh vien"
                           value="{{ $sinhvien->masv }}"/>
                </div>

                <div class="form-group">
                    <label>Họ tên sinh viên</label>
                    <input class="form-control" name="hoten" placeholder="Nhập họ tên sinh viên"
                           value="{{ $sinhvien->hoten }}"/>
                </div>
                <div class="form-group">
                    <label>Giới tính: </label>
                    <label class="radio-inline">
                        <input name="gioitinh" value="Nam" type="radio"
                        @if($sinhvien->gioitinh == 'Nam')
                            {{"checked"}}
                            @endif >Nam
                    </label>
                    <label class="radio-inline">
                        <input name="gioitinh" value="Nu" type="radio"
                        @if($sinhvien->gioitinh == 'Nu')
                            {{"checked"}}
                            @endif >Nu
                    </label>
                </div>

                <div class="form-group">
                    <label>Ngày sinh</label>
                    <input class="form-control" name="ngaysinh"
                           placeholder="Nhập ngày sinh (dd/mm/yy)" value="{{ $sinhvien->ngaysinh }}"/>
                </div>
                <div class="form-group">
                    <label>Quê quán</label>
                    <input class="form-control" name="quequan" placeholder="Nhập quê quán"
                           value="{{ $sinhvien->quequan }}"/>
                </div>

                <div class="form-group">
                    <label>CMND</label>
                    <input class="form-control" name="cmnd"
                           placeholder="Nhập số CMND" value="{{ $sinhvien->cmnd }}"/>
                </div>
                <div class="form-group">
                    <label>SDT</label>
                    <input class="form-control" name="sdt"
                           placeholder="Nhập sdt" value="{{ $sinhvien->sdt }}"/>
                </div>
                <div class="form-group">
                    <label>Phòng</label>
                    <input class="form-control" name="phong"
                           placeholder="Nhập số phòng" value="{{ $sinhvien->phong }}"/>
                </div>

                <div class="button">
                    <button type="submit" class="btn btn-primary"> Sửa</button>
                    <button type="reset" class="btn btn-success"> Làm mới</button>
                </div>
            </form>
        </div>
    </div>
    <a href="{{ route('sinhvien.index') }}" class="btn btn-danger">Back</a>
@endsection
