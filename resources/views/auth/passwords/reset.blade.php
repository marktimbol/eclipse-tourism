@extends('public.layouts.public')
@section('pageTitle', 'Reset Password')
@section('body_class', 'page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col m6 offset-m3">
                <h1 class="page__title">Reset Password</h1>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                    {!! csrf_field() !!}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="col s12 m12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>E-Mail Address</label>
                        <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col s12 m12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col s12 m12 form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group col s12 m12">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-refresh"></i>Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
