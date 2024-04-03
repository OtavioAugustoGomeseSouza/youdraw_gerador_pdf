<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela HTML</title>
    <style>
        /* Estilos para centralizar a tabela */
        .table-container {
            display: block; 
            margin-left: auto; 
            margin-right: auto; 
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%; /* Largura da tabela */
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            width: 25%; /* Largura das colunas (25% para cada uma das 4 colunas) */
            text-align: center; /* Centraliza o texto horizontalmente nas células */
        }
        th {
            background-color: #f2f2f2;
        }

        .titulo-principal{
            display: block; 
            margin-left: auto; 
            margin-right: auto; 
            text-align: center;
        }
    </style>
</head>

<body>
<div class="titulo-principal">
    <h1>Tabela Pagamentos</h1>
</div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID Pedido</th>
                    <th>Data do Pagamento</th>
                    <th>Destinatário</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido['id do pedido'] }}</td>
                    @if ($pedido['data_processamento']== 0 || $pedido['data_processamento']== null):
                        <td>Pedido não pago</td>
                    @else
                        <td>{{ $pedido['data_processamento'] }}</td>
                    @endif
                    <td>{{ $pedido['cliente'] }}</td>
                    <td>R$ {{ $pedido['preço_fornecedor'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
