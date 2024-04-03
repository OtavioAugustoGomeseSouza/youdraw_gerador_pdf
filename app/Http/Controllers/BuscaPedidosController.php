<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf;

class BuscaPedidosController extends Controller
{
 

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* O corpo da requisição esperado aqui é o seguinte
        {"unique_ids":[
            "1711371046286x961010783098186200",
            "1710448755776x771294361054025500",
            "1710198115353x731113498942161900"
        ]} */


        //converte o JSON num aarray
        $info_pedidos = $request->json()->all();

        /*busca as informações do pedido no busca_info_api da youdraw, o tipo aqui muda o que é buscado 
        Eu poderia mandar a informação no $info_pedidos mas preferi testar a chamada*/
        $response = Http::send('POST', 'https://adminyoudraw.bubbleapps.io/version-test/api/1.1/wf/busca_info_api', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode([
                'tipo' => 'pedidos',
                'unique_ids' => $info_pedidos['unique_ids']
            ]),
        ]);

        //converte o $response para um array para utilizar
        $corpoRequisicao = $response->body();
        $arrayRequisicao = json_decode($corpoRequisicao, true);


        foreach ($arrayRequisicao['response']['retorno'] as &$preço_fornecedor) {
            $preço_fornecedor['preço_fornecedor'] = round(($preço_fornecedor['cart']['subtotal'] / $preço_fornecedor['taxa_youdraw']),2);
        }

        $pdf = PDF::loadView('PdfView', ['pedidos' => $arrayRequisicao['response']['retorno']]);
        
    
        // Verificar se a solicitação foi bem-sucedida
        if ($response->successful()) {
            return $pdf->download('Pdf_pedidos.pdf');
            //return $arrayRequisicao;

        } else {
            $statusCode = $response->status();
        }

    }



    /**
     * Display the specified resource.
     */
    public function show(Pdf $pdf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pdf $pdf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pdf $pdf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pdf $pdf)
    {
        //
    }
}
