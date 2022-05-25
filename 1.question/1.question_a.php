<?php
/* 1 - Questão:
==========================================
Em uma página PHP, defina um array
com um conjunto de nomes indexados 
numericamente.  -> OK
==========================================
Em seguida, crie um
formulário e gere uma série de 
checkboxes, um para cada item do 
array definido. -> OK
==========================================
O índice do elemento
no array deve ser usado como 
valor (atributo value) do checkbox -> OK
==========================================
E o nome deve ser “opcoes[]”. -> OK
==========================================
Ao submeter o formulário, a action
que o recebe deve exibir uma lista
HTML não ordenada com todos os 
elementos marcados.  -> OK
==========================================
Se nenhum item foi selecionado, mostre uma
mensagem. -> Ok
========================================== */
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.question.php -> Professor Felipe Alencar</title>
    <style>
        p,
        label {
            font: 1rem 'Fira Sans', sans-serif;
        }

        input {
            margin: .4rem;
        }
        fieldset {
            width: 320px;
        }
    </style>
</head>
<body>

<form method="post" action="1.question_svck.php">
    <fieldset>
        <legend>Selecione os nomes desejados:</legend>
        
        <div>
        <?php
            $nomes = array('Lucas', 'Marcos', 'Carlos', 'Antônio', 'José');
            foreach ($nomes as $indice => &$nome) {
                echo 
                '
                <input type="checkbox" id="scales" name="opcoes[]" value="'.$indice.'" checked>
                <label for="scales">'.$nome.'</label>
                </br>
                ';
            }
        ?>
        </div>
    </fieldset>
    <input type="submit" value="Enviar">
</form>

</body>
</html>