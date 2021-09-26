@extends('layout.base')

@section('content')
    <div class="row d-flex align-items-center bg-primary p-0" style="min-height: 100vh">
        <div class="col-4 container">
            <div class="text-center justify-content-center d-flex flex-row">
                <i class="fa fa-user-tie text-light mr-2 " style="font-size: 2.5rem;"></i>
                <h3 class="font-weight-bolder pt-2 text-light">Admin Login</h3>
            </div>
            <div class="card rounded shadow-sm">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="email" class="font-weight-bold text-dark">{{trans('common.email_label')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-white">
                                                <i class="fas fa-envelope text-primary"></i>
                                            </div>
                                        </div>
                                        <input type="text" id="email" name="email" placeholder="example@test.com" class="form-control">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="password" class="font-weight-bold text-dark">{{trans('common.password_label')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-white">
                                                <i class="fa fa-lock text-primary"></i>
                                            </div>
                                        </div>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="pl-3 pr-3">
                                @error('email')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-top-0">
                        <div class="row d-flex justify-content-end">
                            <div class="col-3">
                                <button type="submit" class="btn btn-block btn-teal font-weight-bold text-light">{{trans('common.login_label')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom_css')

@endsection

@section('custom_js')

@endsection
