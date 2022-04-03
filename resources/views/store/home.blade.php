@extends('store.layouts.app')
@include('store.pagecontent.products')
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

                    @auth
                        {{ __('You are logged in!') }}
                    @endauth
                </div>
            </div>
            @yield('products')
        </div>


            
    </div>
</div>
@endsection