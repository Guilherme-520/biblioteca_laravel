<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <form action="/cadastrar-produto" method="post">
        @csrf
        <label for="lblName" >Nome:</label>
        <input type="text" name="nome">
        <br>
        <label for="lblValor">Valor</label>
        <input type="text" name="valor">
        <br>
        <label for="lblQuantidade">Quantidade:</label>
        <input type="text" name="estoque">
        <br>
        <button>Cadastrar</button>
        <a href="/">Voltar</a>
    </form>
</body>
</html>