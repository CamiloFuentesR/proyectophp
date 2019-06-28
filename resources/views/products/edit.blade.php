@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Producto</div>

                <div class="card-body">
                    {!! Form::model($product,['route'=> ['products.update',$product->id],
                    'method'=>'Put']) !!}
                    @include('products.partials.form')

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
