<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

Route::get('/', function () {
    $arrayRequisicao = [
        "status" => "success",
        "response" => [
            "retorno" => [
                [
                    "Created Date" => 1710198115359,
                    "Created By" => "non_authenticated_user_adminyoudraw_test",
                    "Modified Date" => 1711564496462,
                    "cliente" => "Otávio Augusto Souza",
                    "usuário" => "1644604811334x514457878178455700",
                    "número do pedido" => "142",
                    "id do pedido" => "533",
                    "data" => 1710198115312,
                    "status 2" => "Pendente",
                    "cart" => [
                        "unique_id" => "1710198115255x429953749395808600",
                        "frete" => 36.4,
                        "subtotal" => 269.45,
                        "total" => 305.85,
                        "itens" => [
                            [
                                "produto_base" => "Camiseta Básica Unissex",
                                "variante" => "Cinza tamanho EGG",
                                "produto_usuario" => "teste cm² 2",
                                "fornecedor" => "Camisetas Rápido",
                                "sku_user_variante" => "teste01"
                            ],
                            [
                                "produto_base" => "Camiseta Básica Unissex",
                                "variante" => "Branca tamanho EG",
                                "produto_usuario" => "teste cm² 2",
                                "fornecedor" => "Camisetas Rápido",
                                "sku_user_variante" => "teste02"
                            ]
                        ]
                    ],
                    "lista de fornecedores" => [
                        "Camisetas Rápido"
                    ],
                    "manualmente" => "não",
                    "id_origem" => 5649364615368,
                    "origem" => "Shopify",
                    "shopify_location_id" => 65157955784,
                    "qrcode" => "https://chart.googleapis.com/chart?chs=500x500&cht=qr&chco=333333&chl=https%3A%2F%2Fdashboard.youdraw.com.br%2Fpedidos_fornecedor%3FQR%3D1710198115353x731113498942161900&chld=H|0",
                    "loja_nome" => "Loja Clã Be More",
                    "Comentários e Mensagens" => [
                        "O status do pedido foi alterado!"
                    ],
                    "webhook_id(Shopify)" => "d353834b-82c6-4178-8497-81a1f241687d",
                    "lista_line_itens_id" => [
                        "13254555369672",
                        "13254555402440"
                    ],
                    "Processamento Fornecedor" => "Incompleto",
                    "data_processamento" => 0,
                    "id do pedido" => "1710198115353x731113498942161900",
                    "taxa_youdraw" => 1.12,
                    "preço_fornecedor" => 240.58
                ],
                [
                    "Created Date" => 1710198115359,
                    "Created By" => "non_authenticated_user_adminyoudraw_test",
                    "Modified Date" => 1711564496462,
                    "cliente" => "Otávio Augusto Souza",
                    "usuário" => "1644604811334x514457878178455700",
                    "número do pedido" => "142",
                    "id do pedido" => "533",
                    "data" => 1710198115312,
                    "status 2" => "Pendente",
                    "cart" => [
                        "unique_id" => "1710198115255x429953749395808600",
                        "frete" => 36.4,
                        "subtotal" => 269.45,
                        "total" => 305.85,
                        "itens" => [
                            [
                                "produto_base" => "Camiseta Básica Unissex",
                                "variante" => "Cinza tamanho EGG",
                                "produto_usuario" => "teste cm² 2",
                                "fornecedor" => "Camisetas Rápido",
                                "sku_user_variante" => "teste01"
                            ],
                            [
                                "produto_base" => "Camiseta Básica Unissex",
                                "variante" => "Branca tamanho EG",
                                "produto_usuario" => "teste cm² 2",
                                "fornecedor" => "Camisetas Rápido",
                                "sku_user_variante" => "teste02"
                            ]
                        ]
                    ],
                    "lista de fornecedores" => [
                        "Camisetas Rápido"
                    ],
                    "manualmente" => "não",
                    "id_origem" => 5649364615368,
                    "origem" => "Shopify",
                    "shopify_location_id" => 65157955784,
                    "qrcode" => "https://chart.googleapis.com/chart?chs=500x500&cht=qr&chco=333333&chl=https%3A%2F%2Fdashboard.youdraw.com.br%2Fpedidos_fornecedor%3FQR%3D1710198115353x731113498942161900&chld=H|0",
                    "loja_nome" => "Loja Clã Be More",
                    "Comentários e Mensagens" => [
                        "O status do pedido foi alterado!"
                    ],
                    "webhook_id(Shopify)" => "d353834b-82c6-4178-8497-81a1f241687d",
                    "lista_line_itens_id" => [
                        "13254555369672",
                        "13254555402440"
                    ],
                    "Processamento Fornecedor" => "Incompleto",
                    "data_processamento" => 0,
                    "id do pedido" => "1710198115353x731113498942161900",
                    "taxa_youdraw" => 1.12,
                    "preço_fornecedor" => 240.58
                ],
                [
                    "Created Date" => 1710198115359,
                    "Created By" => "non_authenticated_user_adminyoudraw_test",
                    "Modified Date" => 1711564496462,
                    "cliente" => "Otávio Augusto Souza",
                    "usuário" => "1644604811334x514457878178455700",
                    "número do pedido" => "142",
                    "id do pedido" => "533",
                    "data" => 1710198115312,
                    "status 2" => "Pendente",
                    "cart" => [
                        "unique_id" => "1710198115255x429953749395808600",
                        "frete" => 36.4,
                        "subtotal" => 269.45,
                        "total" => 305.85,
                        "itens" => [
                            [
                                "produto_base" => "Camiseta Básica Unissex",
                                "variante" => "Cinza tamanho EGG",
                                "produto_usuario" => "teste cm² 2",
                                "fornecedor" => "Camisetas Rápido",
                                "sku_user_variante" => "teste01"
                            ],
                            [
                                "produto_base" => "Camiseta Básica Unissex",
                                "variante" => "Branca tamanho EG",
                                "produto_usuario" => "teste cm² 2",
                                "fornecedor" => "Camisetas Rápido",
                                "sku_user_variante" => "teste02"
                            ]
                        ]
                    ],
                    "lista de fornecedores" => [
                        "Camisetas Rápido"
                    ],
                    "manualmente" => "não",
                    "id_origem" => 5649364615368,
                    "origem" => "Shopify",
                    "shopify_location_id" => 65157955784,
                    "qrcode" => "https://chart.googleapis.com/chart?chs=500x500&cht=qr&chco=333333&chl=https%3A%2F%2Fdashboard.youdraw.com.br%2Fpedidos_fornecedor%3FQR%3D1710198115353x731113498942161900&chld=H|0",
                    "loja_nome" => "Loja Clã Be More",
                    "Comentários e Mensagens" => [
                        "O status do pedido foi alterado!"
                    ],
                    "webhook_id(Shopify)" => "d353834b-82c6-4178-8497-81a1f241687d",
                    "lista_line_itens_id" => [
                        "13254555369672",
                        "13254555402440"
                    ],
                    "Processamento Fornecedor" => "Incompleto",
                    "data_processamento" => 0,
                    "id do pedido" => "1710198115353x731113498942161900",
                    "taxa_youdraw" => 1.12,
                    "preço_fornecedor" => 240.58
                ]
            ]
        ]
    ];

    return view('PdfView',['pedidos'=>$arrayRequisicao['response']['retorno']]);
});

Route::apiResource('/pdf','App\Http\Controllers\PdfController');

Route::apiResource('/pedidos','App\Http\Controllers\BuscaPedidosController');