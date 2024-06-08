@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        <div><a type="submit" class="btn btn-primary mb-2 mt-2" href="{{route('admin.promo.index')}}">Перейти к админ панели</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
