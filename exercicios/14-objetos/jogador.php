<?php 

class Jogador
{
    public string $nome;
    public int $pontos = 0;
    function jogarDados()
    {
        $resultado = rand(1, 6);
        $this -> pontos += $resultado;
    }
}