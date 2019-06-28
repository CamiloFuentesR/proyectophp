@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Producto</div>

                <div class="card-body">
                    <p><strong>Nombre : </strong>{{ $product->name }}</p>
                    <p><strong>Descripcion  : </strong>{{ $product->description }}</p>
                </div>
                <div class="card-footer">
                        <div class="form-actions" align="left">
                            <a href="{{ route('products.index') }}" class="btn btn-outline btn-success btn-sm">Volver</a>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
