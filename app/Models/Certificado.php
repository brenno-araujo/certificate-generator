<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'pais', 'nome' ];

    public function dataBr(){
      return date("d/m/Y", strtotime($this->data));

    }


    public function pesquisar($filtro = null)
    {
        $resultado = $this
                          ->where('nome','LIKE',"%{$filtro}%")
                          ->paginate(10);

        return $resultado;
    }





}
