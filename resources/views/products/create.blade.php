@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Producto</div>

                <div class="card-body">
                    {!! Form::open(['route'=>'products.store']) !!}
                    @include('products.partials.form')

                    {!! form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
