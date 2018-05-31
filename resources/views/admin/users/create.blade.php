@extends('admin.template.main')

@section('content')

  <div class="jumbotron">
    <h4>Creación de usuarios</h4>
    <p>Aquí puede crear todos los usuarios</p>
  </div>

  {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

       <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
      </div>

        <div class="form-group">
         {!! Form::label('email', 'Email') !!}
         {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Ingrese un email', 'required']) !!}
       </div>

       <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '************', 'required']) !!}
      </div>

      <div class="form-group">
       {!! Form::label('type', 'Tipo') !!}
       {!! Form::select('type', ['' => 'Seleccione un nivel..', 'repartidor' => 'Repartidor', 'supervisor' => 'Supervisor',
         'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
     </div>

     <div class="form-group">
      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@endsection
