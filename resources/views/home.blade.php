@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('helpers.flash-message')
            <div class="card">
                <div class="card-header">Projetos a Serem Avaliados</div>
                <div class="card-body">
                    @if (count($projects) > 0)
                        <table class="table table-responsive" style="display: table">
                            <thead>
                                <tr>
                                    <th>Projeto</th>
                                    <th class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td style="width: 70%">
                                        {{ $project->name }}
                                    </td>
                                    <td style="width: 30%">
                                        <a
                                            class="btn btn-info btn-block"
                                            href="{{ route('evaluations.create', $project->getKey()) }}"
                                        >
                                            Avaliar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Você já avaliou todos os projetos!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection