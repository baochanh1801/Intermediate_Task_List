@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('auth.verifyemail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ trans('auth.sendverifylink') }}
                        </div>
                    @endif

                    {{ trans('auth.checkverifylink') }}
                    {{ trans('auth.notreceiveemail') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ trans('auth.requestanother') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
