@extends('layout.app')
@section('content')
    <div class="header"><h2 class="text-center">Danh sách sinh viên trong ký túc xá</h2></div>
    <div class="container">
        <div class="row content-top">
            <div class="col-md-4">
                <a href="{{ route('sinhvien.create') }}" class="btn btn-success"><i class="fas fa-plus-circle"></i> Thêm</a>
            </div>
            <div class="col-md-8">
                <form action="{{ route('api.sinhvien.search') }}" method="post" class="col-md-8">
                    <div class="is-flex">
                        <input type="text" class="form-control" name="key">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Tìm kiếm</button>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Mã sinh viên</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Ngày sinh</th>
                <th>Quê quán</th>
                <th>CMND</th>
                <th>SDT</th>
                <th>Phòng</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($sinhvien as $value)
                    <tr>
                        <td class="id">{{ $value->id }}</td>
                        <td>{{ $value->masv }}</td>
                        <td>{{ $value->hoten }}</td>
                        <td>{{ $value->gioitinh }}</td>
                        <td>{{ $value->ngaysinh }}</td>
                        <td>{{ $value->quequan }}</td>
                        <td>{{ $value->cmnd }}</td>
                        <td>{{ $value->sdt }}</td>
                        <td>{{ $value->phong }}</td>
                        <td>
                            <a href="{{ route('sinhvien.edit', $value->id) }}" class="btn btn-primary"><i
                                    class="far fa-edit"></i></a>
                            <a href="" class="delete btn btn-success"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.delete').click(function (e) {
                e.preventDefault();
                var id = $(this).parents('tr').find('.id').text();
                console.log(id)
                $.ajax({
                    url: '/api/sinhvien/' + id,
                    type: 'DELETE',
                    success: function (data) {
                        alert('Bạn đã xóa thể loại có id là: ' + id);
                        location.reload();
                    },
                    error: function () {
                    }
                });
            });
        });
    </script>
@endsection
