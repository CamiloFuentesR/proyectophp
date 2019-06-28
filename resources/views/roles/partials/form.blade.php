<div class="form-group">
    {{ Form::label('name','Nombre') }}
    @csrf
    {{ Form::text('name',null,['class'=>'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('slug','Url amigable') }}
        @csrf
        {{ Form::text('slug',null,['class'=>'form-control']) }}

    </div>

    <div class="form-group">
            {{ Form::label('description','Descripcion') }} <!-- primera parte descripcion, segunda nombre-->
            @csrf
            {{ Form::textarea('description',null,['class'=>'form-control']) }}
    </div>

    <hr>
    <h3>Permisio especial</h3>
    <div class="form-group">
    <label>{{  Form::radio('special','all-access') }}Acceso Total</label>
    @csrf
    <label>{{  Form::radio('special','no-access') }}Ningun accesol</label>
    @csrf
    </div>
    <hr>
    <h3>Lista de permisos</h3>
    <div class="form-group">
    <ul class="list-unstyled">

    @foreach ($permissions as $permission )
    <li>
        <label>
            {{ Form::checkbox('permissions[]',$permission->id,null) }}
            @csrf
            {{ $permission->name }}
            <em>({{ $permission->description ? : 'sin descripcion' }})</em>
        </label>
    </li>
    @endforeach
    </ul>
    </div>
    <div class="form-group">
            {{ Form::submit('Guardar',['class'=> 'btn btn-sm btn-primary']) }}
            <a href="{{ route('roles.index') }}" class="btn btn-outline btn-success btn-sm">Volver</a>
            @csrf


    </div>
