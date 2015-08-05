<?php
namespace Joa\Debug;

/**
 * Class para formatação de saídas de dados
 *
 * @author Alefe Variani <alefevariani18@gmail.com>
 */
class Debug
{
    /**
     * Função para exibição de dados já fomatados com a tag <pre>
     *
     * @author Jonas <jonasrodrigeri@unochapeco.edu.br>
     */
    public function out($dados = '', $opcao = false)
    {
        echo '<pre>';
        if ($opcao) {
            var_dump($dados);
        } else if (!$opcao) {
            print_r($dados);
        }
        echo '</pre>';
    }
}
