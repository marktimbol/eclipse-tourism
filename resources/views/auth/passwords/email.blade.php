@extends('public.layouts.public')

@section('pageTitle', 'Reset Password')

@section('body_class', 'page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col m6 offset-m3">
                
                <h1 class="page__title">Reset Password</h1>

                @include('errors.forms')

                <div class="row">
                    <form class="form-horizontal" role="form" method="POST" action="/password/email">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="material-icons left">email</i> Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
