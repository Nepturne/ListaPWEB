<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes Marcados</title>
</head>
<body>
<?php
    error_reporting(0);
    $nomes = $_REQUEST['opcoes'];

    if(isset($nomes)){
        foreach ($nomes as $indice => &$nome) {
            echo $nome.'</br>';
        }
    }
    else{
        echo 'Nenhum item selecionado.';
    }
?>
</body>
</html>