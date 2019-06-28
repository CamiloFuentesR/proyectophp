@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="table">
                 <!-- aqui se pregunta ,puede el usuario crear productos?, si tiene los permisos, se mostrara el boton crear-->
                 <th>  @can('products.create')
                        <a  href="{{ route('products.create') }}"
                        class="top-right btn btn-sm btn-primary pull-right   "><!-- primero va el nombre delpermiso, luego el nombre de la ruta-->
                        Crear</a>
                        @endcan </th>
                <div class="table-header">
                    <thead>
                        <tr>
                               <th> <h3>Productos</h3></th>

                        </tr>
                     </thead>
                    </div>
                <div class="table-body">
                    <table class="table table-bordered table-condensed table-striped table-hover">
                        <thead>
                                <tr>
                                        <th width="10px">ID</th>
                                        <th>Nombre</th>
                                        <th aria-colspan="3">Ver&nbsp;</th>
                                        @can('products.edit', Model::class)
                                        <th aria-colspan="3">Edit&nbsp;</th>
                                        @endcan
                                        @can('products.destroy')
                                        <th aria-colspan="3">Elim&nbsp;</th>
                                        @endcan
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td width="10px">

                                    <a href="{{ route('products.show', $product->id) }}" data-toggle="tooltip" data-placement="botton" data-original-tittle="tooltip on botton" title="Click para ver este producto" class="red-tooltip"><span class=" btn btn-sm btn-primary fa fa-eye " style="color:honeydew"></span></a>

                                </td>
                                <td width="10px">
                                        @can('products.edit', Model::class)

                                        <a href="{{ route('products.edit', $product->id) }}" data-toggle="tooltip" data-placement="botton" data-original-tittle="tooltip on botton" title="Click para editar este producto"class=" btn btn-sm btn-success fa fa-pencil" style="color:honeydew"></a>

                                        @endcan
                                    </td>

                                    <td width="10px">
                                            @can('products.destroy')
                                            {!! Form::open(['route'=>['products.destroy',$product->id],
                                            'method'=>'DELETE']) !!}
                                            <button data-toggle="tooltip" data-placement="botton" data-original-tittle="tooltip on botton" title="Click para eliminar este producto"class="btn btn-sm btn-danger fa fa-trash " style="color:honeydew"></button>

                                            {!! Form::close() !!}
                                             @endcan
                                        </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
