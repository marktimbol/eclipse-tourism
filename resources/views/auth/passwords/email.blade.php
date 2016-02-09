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
                    <form role="form" method="POST" action="/password/email">
                        {!! csrf_field() !!}
                        <div class="col s12 m12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>E-Mail Address</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group col s12 m12">
                            <button type="submit" class="btn btn-primary">
                                <i class="material-icons left">email</i> Send Password Reset Link
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
