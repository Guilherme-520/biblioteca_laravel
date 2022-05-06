<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="/editar-produto/{{$produto->id}}" method="post">
        @csrf
        <label for="lblNome">Nome:</label>
        <input type="text" name="valor" value="{{$produto->nome}}">
        <br>
        <label for="lblValor">Valor:</label>
        <input type="text" name="valor" value="{{$produto->valor}}">
        <br>
        <label for="lblQuantidade">Quantidade:</label>
        <input type="text" name="estoque" value="{{$produto->estoque}}">
        <br>
        <button>cadastrar</button>
    </form>
</body>
</html>