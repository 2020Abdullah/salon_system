@extends('layouts.dashboard')

@section('content')
<div class="bmd-layout-container bmd-drawer-f-l avam-container animated ">
    <div class="bmd-layout-content">
        <div class="container-fluid">
            <div class="main_wrapper">	
                <div class="row ">
                    <div class="col-md-5 card shade mw-center mh-center">
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                            <div class="form-group m-0 bmd-form-group">
                                <label for="exampleInputEmail1" class="bmd-label-static">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                    with
                                    anyone else.</small>
                            </div>
                            <div class="form-group m-0 bmd-form-group">
                                <label for="exampleInputPassword1" class="bmd-label-static">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-check pt-2">
                                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Check me out</label>
                            </div>
                            <button type="submit" class="btn shade f-primary btn-block">Submit</button>
                        </form>
                        <div class="d-flex justify-content-center pt-3 pb-3">
                            <a href="{{ route('google.login') }}">
                                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
                            </a>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
