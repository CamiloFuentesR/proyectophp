@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="table">
                  <th>  @can('roles.create')
                    <a  href="{{ route('roles.create') }}"
                    class="  pull-right btn btn-sm btn-primary " >
                    Crear</a>
                    @endcan</th>
                <div class="table-header">
                    <h3>Roles</h3>
                </div>
                <div class="table-body">

                    <table class="table table-bordered table-condensed table-striped table-hover">
                        <thead>
                                <tr>
                                        <th width="10px">ID</th>
                                        <th>Nombre</th>

                                        <th aria-colspan="3">Ver&nbsp;</th>
                                        <th aria-colspan="3">Edit&nbsp;</th>
                                        <th aria-colspan="3">Elim&nbsp;</th>

                                    </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)

                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td width="10px">
                                    @can('roles.show', Model::class)

                                    <a href="{{ route('roles.show', $role->id) }}" data-toggle="tooltip" data-placement="botton" data-original-tittle="tooltip on botton" title="Click para ver este role" class="red-tooltip"><span class=" btn btn-sm btn-primary fa fa-eye " style="color:honeydew"></span></a>

                                    @endcan
                                </td>
                                <td width="10px">
                                        @can('roles.edit', Model::class)

                                        <a href="{{ route('roles.edit', $role->id) }}" class=" btn btn-sm btn-success fa fa-pencil" style="color:honeydew"></a>

                                        @endcan
                                    </td>

                                    <td width="10px">
                                            @can('roles.destroy')
                                            {!! Form::open(['route'=>['roles.destroy',$role->id],
                                            'method'=>'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger fa fa-trash " style="color:honeydew">

                                            </button>

                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
