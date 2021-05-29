<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificado;
use PDF;
use App\Http\Requests\StoreUpdateCertificado;
class CertificadoController extends Controller{


    protected $repositorio;
    public function __construct(Certificado $certificado)
    {
        $this->repositorio = $certificado;
    }


//Exibe todos os certificados
public function index()
{
    $certificados = $this->repositorio->paginate();
    return view('certificados.index',['certificados'=>$certificados]);
}

//Requisita a página de criação de formulários
public function create()
    {
        return view('certificados.create');
    }

//Grava as informações do certificado
    public function store(StoreUpdateCertificado $request)
    {
        $certificado = $this->repositorio->create($request->all());
        return redirect()->route('certificados.index',['certificado'=>$certificado])->with('msg',"Certificado do aluno: '$certificado->nome', gravado com sucesso!");;
    }

//Requisita a página de edição do certificado escolhido.
    public function edit($id)
    {
        if (!$certificado = $this->repositorio->find($id))
        {
            return redirect()->back();
        }
        return view('certificados.edit',['certificado'=>$certificado]);
    }

//Atualiza o certificado com as alterações escolhidas.
    public function update($id, StoreUpdateCertificado $request)
    {
        if (!$certificado = $this->repositorio->find($id))
        {
            return redirect()->back();
        }
        $certificado->update($request->all());
        return redirect()->route('certificados.index',['certificado'=>$certificado])->with('msg',"Certificado do aluno: '$certificado->nome', editado com sucesso!");
    }


    //Exclui o certificado escolhido.
    public function destroy($id)
    {
        if (!$certificado = $this->repositorio->find($id))
        {
            return redirect()->back();
        }
        $certificado->delete();
        return redirect()->route('certificados.index')->with('msg',"Certificado do aluno: '$certificado->nome', deletado com sucesso!");
    }


     //Exibe o certificado escolhido
     public function show($id)
     {
         if (!$certificado = $this->repositorio->find($id))
         {
             return redirect()->back();
         }

         return view('certificados.show',['certificado'=>$certificado]);
     }


//Gera os PDFs em uma nova aba, possibilitando o download do arquivo.
    public function gerapdf($id){

        if (!$certificado = $this->repositorio->find($id))
        {
            return redirect()->back();
        }

        view()->share('certificado',$certificado);
        $pdf  =  PDF::loadView('certificados/certificado', $certificado)->setPaper('A4', 'landscape');

        return $pdf->stream();
    }

    //Função que realiza a busca de certificado pelo nome e/ou sobrenome do aluno
    public function search(Request $request){

        $filtros =  $request->except('_token');
        $certificados = $this->repositorio->pesquisar($request->filtro);

        return view('certificados.index',[
            'filtros'=>$filtros,
            'certificados'=>$certificados,
        ]);
    }
}
