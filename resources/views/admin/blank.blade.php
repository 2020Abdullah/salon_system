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
                                    <h3 class="lite-text ">Jumborton</h3>
                                    <span class="lite-text text-gray">Style and Options of Jumborton</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item "><a href="#">Component</a></li>
                                <li class="breadcrumb-item active">Jumborton</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content -->
                
            <!-- end of content -->
        </div>
    </div>
</div>
@endsection