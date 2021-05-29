@include('_partials.menu')
<nav aria-label="breadcrumb">

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('certificados.index') }}">Dashboard</a></li>
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
            <td>{{$certificado->data}}</td>
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
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
</div>
