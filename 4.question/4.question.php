<?php
/*
    4 - Questão:
    ============================================
    Considere a imagem a seguir. Defina qual 
    princípio SOLID está sendo violado e como 
    poderíamos fazer para corrigir esse problema.
    ============================================

    Resposta: 
    Dependency inversion principle (Princípio da inversão da dependência)

    Por que o código está acoplado , e dessa forma se a classe for usada
    em outros lugares, as outras terão que ir junto.
*/

class Programmer
{
    public function code()
    {
        return 'coding';
    }
}

class Tester
{
    public function test()
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process($member)
    {
        if ($member instanceof Programmer) {
            $member->code();
        } elseif ($member instanceof Tester){
            $member->test();
        }

        throw new Exception('Invalid input member');
    }
}

?>

<?php
//---------------------------------------------------------------------------------------------------------------------------------------
// Correção:

class Programmer
{
    public function code()
    {
        return 'coding';
    }
}

class Tester
{
    public function test()
    {
        return 'testing';
    }
}

class ProjectManagement
{
    public function process($member)
    {
        if ($member instanceof Programmer) {
            $member->code();
        } elseif ($member instanceof Tester){
            $member->test();
        }

        throw new Exception('Invalid input member');
    }
}
//---------------------------------------------------------------------------------------------------------------------------------------
?>