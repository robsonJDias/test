<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

/*verVenda, cadastrarVenda, atualizarVenda e excluirVenda.*/

class VendasController extends Controller
{

    public function listarVendas()
    {
        $vendas = Venda::all();
        foreach($vendas as $venda){
            echo " as vendas é: " . $venda->vendas . '<br>';
        }
    }

    public function verVenda($id)
    {


    }
   /* - Produto: IPhone 13 Pro Max
    - Quant.: 2
    - Preço Unitário: R$ 7.000,00
    - Total: R$ 14.000,00*/
    public function cadastraVenda()
    {

    }

    public function atualizarVenda()
    {

    }

    public function excluirVenda()
    {

    }

}
