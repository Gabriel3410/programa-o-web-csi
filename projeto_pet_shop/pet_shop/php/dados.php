<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/principal.css">
    <link rel="stylesheet" href="../estilos/banho_tosa.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa" rel="stylesheet">
    <title>Banho e tosa confirmação!</title>
</head>
<body>
    <h1>Confirmação de Banho e tosa!</h1>
<?php

$nome= $_POST["dono"];
$endereco= $_POST["endereco"];
$cep= $_POST["cep"];
$email= $_POST["email_dono"];
$tel= $_POST["tel_dono"];
$nomeAnimal= $_POST["nome_animal"];
$porteAnimal= $_POST["porte_animal"];
$tipoDeTosa= $_POST["tipo_tosa"];
$observacoes= $_POST["observacoes"];
$diaSemana= null;
$enviar= $_POST["enviar"];

if ($enviar=="enviar")
{
    echo " <br> confirmação bem sucedida! <br>";
    
}

if(isset($_POST["dia_semana"]))
    $diaSemana = $_POST["dia_semana"];


echo " <br>Seu nome é: ". $nome. "<br>";
echo "<br>Seu endereço: ". $endereco. "<br>";
echo "<br>Seu CEP: ". $cep. "<br>";
echo "<br>Seu Email: ". $email. "<br>";
echo "<br>Seu tel: ". $tel. "<br>";
echo "<br>O nome do seu animal: ". $nomeAnimal. "<br>";
echo "<br>O porte do seu animal: ". $porteAnimal. "<br>";
echo "<br>Tipo da tosa escolhida: ". $tipoDeTosa. "<br>";
echo "<br>Observações: ". $observacoes. "<br>";
echo "<br>Os dias da semana escolhidos ";
if($diaSemana !== null)
    for($i = 0; $i< count($diaSemana); $i++ )
    {
        echo "|{$diaSemana[$i]}|";
    }


function dd($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
    die();
}
?>  
<br>
<br>
<a id="voltar" href="../index.html">Voltar</a>
</body>
</html>
