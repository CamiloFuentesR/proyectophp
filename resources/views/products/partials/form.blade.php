<div class="form-group">
{{ Form::label('name','Nombre del producto') }}
@csrf
{{ Form::text('name',null,['class'=>'form-control']) }}
</div>
<div class="form-group">
        {{ Form::label('description','Descripcion del producto') }}
        @csrf
        {{ Form::text('description',null,['class'=>'form-control']) }}
</div>
<div class="form-group">
        {{ Form::submit('Guardar',['class'=> 'btn btn-sm btn-primary']) }}
       <a href="{{ route('products.index') }}" class="btn btn-outline btn-success btn-sm">Volver</a>

</div>




