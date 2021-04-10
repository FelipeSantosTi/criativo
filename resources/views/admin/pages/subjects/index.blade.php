@extends('adminlte::page')

@section('title', 'Disciplinas')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('subjects.index') }}">Disciplinas</a></li>
    </ol>

    <h1>Disciplinas <a href="{{ route('subjects.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('subjects.search') }}" method="POST" class="form form-inline">
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
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>
                                {{ $subject->name }}
                            </td>
                            <td>
                                {{ $subject->description }}
                            </td>
                            <td>
                                <a href="{{ route('subjects.show', $subject->id) }}" class="btn btn-default"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
{{--                                <a href="{{ route('subjects.courses', $subject->id) }}" class="btn btn-info"><i class="fas fa-graduation-cap"></i></a>--}}
{{--                                <a href="{{ route('subjects.courses', $subject->id) }}" class="btn btn-success"><i class="fas fa-book"></i></a>--}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $subjects->appends($filters)->links() !!}
            @else
                {!! $subjects->links() !!}
            @endif
        </div>
    </div>
@stop
