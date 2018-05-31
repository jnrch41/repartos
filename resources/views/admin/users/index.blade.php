@extends('admin.template.main')

@section('content')

  <div class="jumbotron">
    <h4>Listado de usuarios</h4>
    <p>Aquí puede ver todos los usuarios</p>
  </div>

<div class="header_users">
  <a href="{{ route('admin.users.create') }}" class="btn btn-success">Nuevo usuario</a>
    <select class="form-control select">
      <option selected>Seleccione..</option>
      <option>Ver administradores</option>
      <option>Ver supervisores</option>
      <option>Ver repartidores</option>
    </select>
</div>

  <table class="table table-striped">
    <thead>
      <th>#</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Tipo</th>
      <th>Accion</th>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
          @if ($user->type == "admin")
            <span class="label label-danger">{{ $user->type }}</span>
          @else
            <span class="label label-primary">{{ $user->type }}</span>
          @endif
          </td>
          <td>
            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">
              <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
              Editar
            </a>

            <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro desea eliminarlo?')" class="btn btn-danger">
              <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
              Borrar
            </a>
          </td>

        </tr>
      @endforeach
    </tbody>
  </table>
  {!! $users->render() !!}

@endsection
