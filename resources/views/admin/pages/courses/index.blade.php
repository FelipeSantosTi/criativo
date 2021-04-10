@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('courses.index') }}">Cursos</a></li>
    </ol>

    <h1>Cursos <a href="{{ route('courses.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('courses.search') }}" method="POST" class="form form-inline">
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
                    @foreach ($courses as $course)
                        <tr>
                            <td>
                                {{ $course->name }}
                            </td>
                            <td>
                                {{ $course->description }}
                            </td>
                            <td>
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-default"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $courses->appends($filters)->links() !!}
            @else
                {!! $courses->links() !!}
            @endif
        </div>
    </div>
@stop
