@extends('layouts.dashboard')

@section('content')
    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated ">
        <div class="bmd-layout-content">
            <div class="container mt-5" style="display:block;">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header text-center">{{ __('Register') }}</div>
                            @if (Request::is('admin/*'))
                                <div class="card-body">

                                    <form method="POST" action="{{ route('admin.register') }}"class="p-5">
                                        @csrf
                                        <div class="form-group">
                                            <label class="bmd-label-static">name</label>
                                            <input id="name" type="text" class="form-control" name="name"
                                                placeholder="Enter full name">
                                        </div>

                                      
                                        <div class="form-group m-0 bmd-form-group">
                                            <label class="bmd-label-static">Email address</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group m-0 bmd-form-group">
                                            <label class="bmd-label-static">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group mb-3 bmd-form-group">
                                            <label class="bmd-label-static">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                placeholder="Confirm password" name="password_confirmation">
                                        </div>
                                        <button type="submit" class="btn shade f-primary btn-block">Submit</button>
                                    </form>
                                </div>
                            @elseif(Request::is('employer/*'))
                                
                                <div class="card-body">

                                    <form method="POST" action="{{ route('employer.register') }}" class="p-5">
                                        @csrf
                                        <div class="form-group">
                                            <label class="bmd-label-static">name</label>
                                            <input id="name" type="text" class="form-control" name="name"
                                                placeholder="Enter full name">
                                        </div>
                                                   <div class="form-group">
                                            <label class="bmd-label-static">phone</label>
                                            <input id="phone" type="text" class="form-control" name="phone"
                                                placeholder="Enter your phone">
                                        </div>
                                        <div class="form-group m-0 bmd-form-group">
                                            <label class="bmd-label-static">Email address</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group m-0 bmd-form-group">
                                            <label class="bmd-label-static">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group mb-3 bmd-form-group">
                                            <label class="bmd-label-static">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                placeholder="Confirm password" name="password_confirmation">
                                        </div>
                                        <button type="submit" class="btn shade f-primary btn-block text-center">Submit</button>
                                    </form>
                                </div> 

                                @else  
                                <div>user</div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
