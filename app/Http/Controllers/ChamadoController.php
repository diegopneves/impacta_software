<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChamadoRequest;
use App\Models\Chamado;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChamadoController extends Controller
{
    // Listar os chamado
    public function indexdashboard(Request $request)
    {
        $chamados = Chamado::when($request->has('nome'), function ($whenQuery) use ($request){
            $whenQuery->where('nome', 'like', '%' . $request->nome . '%');
        })
        ->orderByDesc('created_at')
        ->paginate(5)
        ->withQueryString();


        //carregar view
       return view('chamado.index', [
        'chamados' => $chamados,
        'nome' => $request->nome,
    ]);

    }


    // Detalhes do chamado
    public function createdashboard()
    {
        //carregar view
        return view('chamado.create');

    }

    // Carregar o formunlário cadastrar novo chamado
    public function store(ChamadoRequest $request)
    {
        // Validar o formulário
        $request->validated();

        // Cadastrar no banco de dados na tabela chamados o novo chamado
        $chamado = Chamado::create($request->all());

        // Redirecionar o chamado, enviar a mensagem de sucesso
        return redirect()->route('chamado.show', ['chamado' => $chamado->id ])->with('success', 'Chamado aberto com sucesso');




    }

    // Cadastrar no banco de cados novo chamado
    public function showdashboard(Chamado $chamado)
    {

        //carregar view
        return view('chamado.show', ['chamado' => $chamado]);

    }

    // Carregar o formulário editar o chamado
    public function editdashboard(Chamado $chamado)
    {
        //carregar view
        return view('chamado.edit', ['chamado' => $chamado]);

    }

    // Editar no banco de dados o chamado
    public function update(ChamadoRequest $request, Chamado $chamado)
    {
        //carregar view
        $request->validated();

        try{

        $chamado->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'motificado_em' => $request->motificado_em,
            'descrição' => $request->descrição,
            'logradouro' => $request->logradouro,

        ]);

        // Salvar log
        Log::info('Chamado editado com sucesso!', ['id' => $chamado->id, 'chamado' => $chamado]);

        return redirect()->route('chamado.show', ['chamado' => $chamado->id ])->with('success', 'Chamado editada com sucesso');
    } catch(Exception $e){

        // Salvar log
        Log::warning('Chamado não editado', ['error' => $e->getMessage()]);

        // Redirecionar o usuário, enviar a mensagem de erro
        return back()->withInput()->with('error', 'Chamado não editado!');
    }

    }

    // Excluir o chamado no banco de dados
    public function destroy(Chamado $chamado)
    {
        //carregar view
        $chamado->delete();

        return redirect()->route('chamado.index')->with('success', 'Chamado apagado com sucesso');



    }
}
