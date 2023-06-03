@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if (Request::is('admin/*'))
                        <form method="POST" action="{{ route('admin.register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="bmd-label-static">name</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Enter full name">
                            </div>
                            <div class="form-group m-0 bmd-form-group">
                                <label class="bmd-label-static">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group m-0 bmd-form-group">
                                <label class="bmd-label-static">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mb-3 bmd-form-group">
                                <label class="bmd-label-static">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation">
                            </div>
                            <button type="submit" class="btn shade f-primary btn-block">Submit</button>
                        </form>  
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
