<?php 
class Formatador {
    static function paraReais(float $valor):string {
        return "R$ " . number_format($valor, 2, ",", '.');
    }
    static function paraDolar(float $valor):string {
        return "U$ " . number_format($valor, 2, ".", ",");
    }
    static function dataHoje():string {
        return date("d/m/Y");
    }
}