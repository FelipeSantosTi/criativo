@extends('adminlte::page')

@section('title', 'Cargos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('roles.index') }}">Cargos</a></li>
    </ol>

    <h1>Cargos <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('roles.search') }}" method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Filtro" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th width="230">Ações</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>
                            {{ $role->name }}
                        </td>
                        <td>
                            {{ $role->description }}
                        </td>
                        <td>
                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-default"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            <a href="{{ route('roles.permissions', $role->id) }}" class="btn btn-dark"><i class="fas fa-lock"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $roles->appends($filters)->links() !!}
            @else
                {!! $roles->links() !!}
            @endif
        </div>
    </div>
@stop
