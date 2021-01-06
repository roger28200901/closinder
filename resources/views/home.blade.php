@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('成功') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('登入成功!') }}
                    <p>
                        <a href="{{ Route('index') }}">
                            請點擊此連結進入Closinder
                        </a>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
