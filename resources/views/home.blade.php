@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 align="center">Bienvenido {{ Auth::user()->name }}!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottom')
@endsection

