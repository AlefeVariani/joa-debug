<?php
namespace Joa\Debug;

/**
 * Class for formatting data outputs
 *
 * @author Alefe Variani <alefevariani18@gmail.com>
 */
class Debug
{
    /**
     * Function for displaying data already formatted with the tag <pre>
     *
     * @author Jonas <jonasrodrigeri@unochapeco.edu.br>
     */
    public static function out($dados = '', $opcao = false)
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
