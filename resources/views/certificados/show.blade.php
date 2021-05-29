@include('_partials.menu')
<nav aria-label="breadcrumb">

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('certificados.index') }}">Certificados</a></li>
        <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
    </ol>
</nav>
<div class="card-body">
    <h4>Certificados</h4>
    <table class="table table-bordered">

        <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{$certificado->id}}</td>
            </tr>
          <tr>
            <th scope="row">Nome</th>
            <td>{{$certificado->nome}}</td>
          </tr>
          <tr>
            <th scope="row">Data de nascimento</th>
            <td>{{$certificado->dataBr()}}</td>
          </tr>
          <tr>
            <th scope="row">Pais</th>
            <td>{{$certificado->pais}}</td>
          </tr>
          <tr>
        </tbody>
      </table>
      <div class="card-footer form form-inline">
        <form action="{{ route('certificados.destroy', $certificado->id) }}" method="POST">
            @csrf
            <div class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title btn btn-danger">Excluir</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        @method('DELETE')
                      <button type="submit" class="btn btn-primary">Sim, excluir</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    </div>
                  </div>
                </div>
              </div>
            <a href="{{ route('certificados.edit', $certificado->id) }}" class="btn btn-warning ml-1"><i class="fas fa-edit"></i> Editar</i></a>


        </form>
</div>
