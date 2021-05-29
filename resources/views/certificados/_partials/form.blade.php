@csrf
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label>Nome do aluno</label>
                    <input type="text" class="form-control" name="nome"  placeholder="Nome do aluno" value="{{$certificado->nome ?? old('nome')}}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label>Data de nascimento</label>
                    <input type="date" class="form-control" name="data"  placeholder="Data" value="{{$certificado->data ?? old('data')}}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label>Pais</label>
                    <input type="text" class="form-control" name="pais"  placeholder="Pais" value="{{$certificado->pais ?? old('pais')}}" required>
                </div>
            </div>
