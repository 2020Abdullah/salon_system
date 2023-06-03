@extends('layouts.dashboard')

@section('content')
<div class="bmd-layout-container bmd-drawer-f-l avam-container bmd-drawer-in animated ">
    @include('admin.includes.header')
    @include('admin.includes.sidebar')
    <div class="bmd-layout-content">
        <div class="container-fluid ">
            <!-- page header -->
            <div class="row">
                <div class="page-header breadcrumb-header p-3 mr-2 ml-2 m-2">
                    <div class="row align-items-end ">
                        <div class="col-lg-8">
                            <div class="page-header-title text-left-rtl">
                                <div class="d-inline">
                                    <h3 class="lite-text ">تعديل بيانات الموظف</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active"><a href="#">تعديل بيانات الموظف</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
                <div class="jumbotron shade pt-5">
                    <form method="POST" action="{{route('admin.employee.update')}}">
                        @csrf
                        <input type="hidden" value="{{ $emp->id }}" name="id">
                        <div class="mb-3">
                            <label for="code">كود الموظف</label>
                            <input type="text" class="form-control" name="code" value="{{ $emp->code }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="name">اسم الموظف</label>
                            <input type="text" class="form-control" name="name" value="{{ $emp->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone">رقم الهاتف</label>
                            <input type="number" class="form-control" name="phone" value="{{ $emp->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" class="form-control" name="email" value="{{ $emp->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="password">تعيين كلمة سر جديدة</label>
                            <input type="password" class="form-control" name="new_password" placeholder="new password">
                        </div>
                        <div class="submit_btn">
                            <button type="submit" class="btn btn-custom flat f-second fnt-xxl">حفظ</button>
                        </div>
                    </form>
                </div>
            <!-- end of content -->
        </div>
    </div>
</div>
@endsection