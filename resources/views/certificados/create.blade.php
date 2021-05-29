@include('_partials.menu')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('certificados.index')}}">Certificados</a></li>
      <li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
    </ol>
  </nav>
  @include('includes.alerts')

<div class="card">
    <div class="card-body">
        <h4>Cadastrar certificados</h4>

        <form action="{{route('certificados.store')}}" class="needs-validation" novalidate method="POST">
         @include('certificados._partials.form')
            <button class="btn btn-success" type="submit"><i class="fas fa-plus-square"></i> Cadastrar</button>


