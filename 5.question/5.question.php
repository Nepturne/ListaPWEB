<?php
/*
    5 - Questão:
    ============================================
    Sobre o Princípio da Substituição de Liskov 
    (Liskov Substitution Principle - LSP), 
    considere o exemplo de código baixo. 
    Discuta qual problema poderia ocorrer 
    dessa implementação e quais as possíveis 
    soluções que temos para seguir esse princípio.
    Caso prefira, adicione um código de exemplo 
    (repl.it ou gist no GitHub) que siga o LSP.
    ============================================
    Resposta:
    O problema que poderia ocorrer é que na instância 
    da class DatabaseLogger numa classe subsequente
    por exemplo class Layer , no uso do método log 
    caso fosse necessário especificar o comportamento
    do método teríamos uma dualidade de utilização.
    Pois a assinatura dos métodos está idêntica
    porém com comportamentos distintos, trazendo
    uma informalidade genérica a um comportamento
    pragmático.
*/

class Logger{
    public function log($mensagem){
        $this->append($mensagem);
    }
}

// sub-classe
class DatabaseLogger extends Logger{
    public function log($mensagem){
        $this->database->insert('log', ['message' => $mensagem]);
    }
}

$fileLogger->log('Não foi possível enviar o pedido.');
$databaseLogger->log('Não foi possível enviar o pedido.');

?>