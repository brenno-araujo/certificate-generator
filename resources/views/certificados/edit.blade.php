@include('_partials.menu')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('certificados.index')}}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{route('certificados.index')}}">Certificados</a></li>
      <li class="breadcrumb-item active" aria-current="page">Editar Certificado</li>
    </ol>
  </nav>

<div class="card">
    <div class="card-body">
        <h4>Editar certificado</h4>

        <form action="{{route('certificados.update',$certificado->id)}}" class="needs-validation" novalidate method="POST">
            @method('PUT')
         @include('certificados._partials.form')
            <button class="btn btn-success" type="submit"><i class="fas fa-plus-square"></i> Editar</button>


