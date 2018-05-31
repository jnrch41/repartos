@extends('admin.template.main')

@section('content')

  <div class="jumbotron">
    <h4>Editar el usuario</h4>
    <p>Aquí puede editar al usuario</p>
  </div>

{!! Form::open(['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}

     <div class="form-group">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
    </div>

      <div class="form-group">
       {!! Form::label('email', 'Email') !!}
       {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Ingrese un email', 'required']) !!}
     </div>

    <div class="form-group">
     {!! Form::label('type', 'Tipo') !!}
     {!! Form::select('type', ['' => 'Seleccione un nivel..', 'repartidor' => 'Repartidor', 'supervisor' => 'Supervisor',
       'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
  </div>

{!! Form::close() !!}

@endsection
