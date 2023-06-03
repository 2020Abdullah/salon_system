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
                                    <h3 class="lite-text ">كل الموظفين</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item "><a href="{{ route('admin.employee.index') }}">صفحة الموظفين</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="table-action">
                <a href="#" class="btn flat f-second fnt-xxs">
                    إضافة موظف جديد
                </a>
            </div>
            <div class="jumbotron shade pt-5">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td>رقم الموظف</td>
                            <td>كود الموظف</td>
                            <td>اسم الموظف</td>
                            <td>البريد الإلكتروني</td>
                            <td>رقم هاتف الموظف</td>
                            <td>اتخاذ إجراء</td>
                        </tr>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $employee->code }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>
                                    <a href="{{route('admin.employee.edit', $employee->id)}}" class="btn main f-first fnt-xxs">تعديل</a>
                                    <a href="{{route('admin.employee.destory', $employee->id)}}" class="btn main f-forth fnt-xxs">حذف</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection