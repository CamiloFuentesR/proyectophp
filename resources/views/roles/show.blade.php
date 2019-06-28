@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role</div>

                <div class="card-body">
                    <p><strong>Nombre : </strong>{{ $role->name }}</p>
                    <p><strong>Slug : </strong>{{ $role->slug }}</p>
                    <p><strong>Descripcion  : </strong>{{ $role->description }}</p>
                </div>
                <div class="card-footer">
                        <div class="form-actions" align="left">
                            <a href="{{ route('roles.index') }}" class="btn btn-outline btn-success btn-sm">Volver</a>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
