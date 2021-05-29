@include('_partials.menu')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Certificados</li>
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
                    <th scope="col">Pais</th>
                    <th scope="col" width='300'>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($certificados as $certificado)
                    <tr>
                        <td>
                            {{ $certificado->nome }}
                        </td>
                        <td>
                            {{ $certificado->pais }}
                        </td>
                        <td>
                            <div class=" form form-inline">
                                <a href="{{ route('certificado.gerapdf', $certificado->id) }}"target="_blank" class="btn btn-primary ml-1"><i class="fas fa-file-pdf"></i> Gerar</a>
                                <a href="{{ route('certificados.show', $certificado->id) }}" class="btn btn-info ml-1"><i class="fas fa-eye"></i> Ver</i></a>
                                <a href="{{ route('certificados.edit', $certificado->id) }}" class="btn btn-warning ml-1"><i class="fas fa-edit"></i> Editar</i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if (isset($filtros))
        <div class="row d-flex justify-content-center modal-footer">
            {!! $certificados->appends($filtros)->links() !!}
        </div>

    @else
        <div class="row d-flex justify-content-center modal-footer">
            {!! $certificados->links() !!}
        </div>
    @endif


</div>
