
<?php
$nome = filter_input(INPUT_POST,'nome');
$idade = filter_input(INPUT_POST,'idade');
$contato = filter_input(INPUT_POST,'contato');
$formacao = filter_input(INPUT_POST,'formacao');
$objetivo = filter_input(INPUT_POST,'objetivo');
$experiencia = filter_input(INPUT_POST,'experiencia');

echo("nome: $nome</br></br>");
echo("idade: $idade</br></br>");
echo("contato: $contato</br></br>");
echo("formacao: $formacao</br></br>");
echo("objetivo: $objetivo</br></br>");
echo("Experiência: $experiencia</br></br>");
echo("Currículo entregue com sucessso !")

?>
