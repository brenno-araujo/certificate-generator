@include('_partials.menu')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('certificados.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">certificados</li>
    </ol>
</nav>

@include('includes.alerts')

<div class="card">


    <div class="card-body">
        <table class="table table-hover">
            <h4>Certificados <a href="{{ route('certificados.create') }}" class="btn btn-success"> <i
                        class="fas fa-plus-square"></i> Cadastrar</a></h4>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data do certificado</th>
                    <th scope="col" width='130'>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($certificados as $certificado)
                    <tr>
                        <td>
                            {{ $certificado->nome }}
                        </td>
                        <td>
                            {{ $certificado->descricao }}
                        </td>
                        <td>
                            <div class=" form form-inline">
                                <a href="{{ route('certificado.gerapdf', $certificado->id) }}" class="btn btn-primary ml-1">Gerar</a>
                                <a href="{{ route('certificados.show', $certificado->id) }}" class="btn btn-info ml-1">Ver</i></a>
                                <a href="{{ route('certificados.edit', $certificado->id) }}" class="btn btn-warning ml-1">Editar</i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if (isset($filtros))
        <div class="row d-flex justify-content-center">
            {!! $certificados->appends($filtros)->links() !!}
        </div>

    @else
        <div class="row d-flex justify-content-center">
            {!! $certificados->links() !!}

        </div>
    @endif


</div>
