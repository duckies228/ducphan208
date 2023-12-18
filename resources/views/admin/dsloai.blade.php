@extends('admin/layoutadmin')
@section('title') Danh sách các loại sản phẩm  @endsection
@section('noidungchinh')
    <table class="table table-bordered m-auto" id="dsLoai">
        <caption align="top">DANH SÁCH LOẠI SẢN PHẨM</caption>
        <tr> <th>Tên loại </th> <th>Thứ tự</th> <th>Ẩn hiện</th> <th>Sửa Xóa</th> </tr>
        @foreach($dsloai as $loai)
        <tr><td>{{$loai->ten_loai}}</td>
            <td>{{$loai->thutu}}</td>
            <td>{{($loai->anhien==0)? "Đang ẩn":"Đang hiện"}}</td>
            <td>  Sửa Xóa </td>
        </tr>
        @endforeach
    </table>
@endsection
