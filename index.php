<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Usando Formulário</title>
</head>
<body>



<h1>Digite seus dados</h1>

<form action="muda.php" method="post">

    <p>Nome:        <input type="text"  name="nome" id="nome"></p>
    <p>Idade:       <input type="number" name="idade" id="idade"></p>
    <p>Contato:     <input type="text" name="contato"  id="contato"></p>
    <p>Formação:    <input type="text" name="formacao" id="formacao"></p>
    <p>Objetivo:    <input type="text" name="objetivo" id="objetivo"></p>
    <p>Experiência: <input type="text" name="experiencia" id="experiencia"></p>

    <input type="submit" value="ENTREGAR" class="botao">

</form>


    
</body>
</html>