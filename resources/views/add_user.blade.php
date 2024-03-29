@extends('master.master')
@section('title','Thêm thành viên')
@section('content')
<!-- content -->
<article class="content dashboard-page">
    <div class="col-md-12">
        <div class="card card-block sameheight-item" style="height: 720px;">
            <div class="title-block">
                <h3 class="title"> THÊM THÀNH VIÊN </h3>

                <hr>
            </div>
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label">Họ Và Tên</label>
                    <input name="full" type="text" class="form-control underlined"> </div>
                {{-- shoError in helper/function/function.php --}}
                {{ showError($errors, 'full') }}


                <div class="form-group">
                    <label class="control-label">Số điện thoại</label>
                    <input name="phone" type="text" class="form-control underlined"> </div>
                {{-- shoError in helper/function/function.php --}}
                {{ showError($errors, 'phone') }}

                <div class="form-group">
                    <label class="control-label">Địa chỉ</label>
                    <input name="address" type="text" class="form-control underlined"> </div>
                {{-- shoError in helper/function/function.php --}}
                {{ showError($errors, 'address') }}

                <div class="form-group">
                    <label class="control-label">Số CMT</label>
                    <input name="id_number" type="text" class="form-control underlined"> </div>
                {{-- shoError in helper/function/function.php --}}
                {{ showError($errors, 'id_number') }}

                <div align='right'>
                    <button type="submit" class="btn btn-success">Thêm</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                </div>
            </form>
        </div>
    </div>

</article>
<!-- end content -->
@stop
