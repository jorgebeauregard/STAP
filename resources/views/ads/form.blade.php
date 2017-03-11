<div class="form-panel">
	<div class="form-group">
		{!! Form::label('category_id', 'Categoria:'); !!}
		{!! Form::select('category_id', $clients); !!}
	</div>
	<div class="form-group">
		{!! Form::label('quantity', 'Escribe la cantidad de anuncios de este tipo:'); !!}
		{!! Form::text('quantity'); !!}
	</div>
	<div class="form-group">
		{!! Form::label('limit', 'Selecciona una fecha limite:'); !!}
		{!! Form::date('limit', \Carbon\Carbon::now()); !!}
	</div>
	<div class="form-group">
		{!! Form::label('path', 'Haga click aqui para agregar la imagen anuncio:'); !!}
		{!! Form::file('path') !!}
	</div>
	<div class="form-group">
		{!! Form::submit($submit_text, ['class'=>'btn primary btn-success']); !!}
	</div>
</div>
{!! Form::close() !!}