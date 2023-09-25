<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //public string $produto = '';
    public function __construct(Produto $produto)
    {

        $this->produto = $produto;

    }

    Public function index(Request $request)
    {
        $pesquisar = $request->pesquisar;
        $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');
        
        return view('pages.produtos.paginacao', compact('findProduto'));        
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Produto::find($id);
        $buscaRegistro->delete();
        return response()->json(['success' => true]);
    }
    
}
