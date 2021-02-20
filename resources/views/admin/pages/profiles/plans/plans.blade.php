@extends('adminlte::page')

@section('title', 'Planos do Perfil')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Perfis</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('plans.profiles', $profile->id) }}">Planos</a></li>
    </ol>

    <h1>Planos do Perfil <strong>{{ $profile->name }}</strong>
        @stop

        @section('content')
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th width="80">Ações</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($plans as $plan)
                            <tr>
                                <td>
                                    {{ $plan->name }}
                                </td>
                                <td>
                                    {{ $plan->description }}
                                </td>
                                <td>
                                    <a href="{{ route('plans.profiles.detach', [$profile->id, $plan->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    @if (isset($filters))
                        {!! $plans->appends($filters)->links() !!}
                    @else
                        {!! $plans->links() !!}
                    @endif
                </div>
            </div>
@stop
