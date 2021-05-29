<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('certificados.index')}}">BAOS Certificados</a>
    <div>
      <form action="{{route('certificado.pesquisar')}}" class="form-inline my-2 my-lg-0">
        @csrf
        <input class="form-control mr-sm-2" type="search" placeholder="Nome do Aluno" name="filtro" value="{{$filtros['filtro'] ?? ''}}">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </nav>

