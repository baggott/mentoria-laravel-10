<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    Public function index()
    {
        $findProduto = Produto::all();
        
        return view('pages.produtos.paginacao', compact('findProduto'));        
    }
    
}
