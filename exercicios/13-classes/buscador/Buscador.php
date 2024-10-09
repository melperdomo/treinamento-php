<?php
class Buscador
{
    const CARROS = [
        [
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'ano' => 2020,
            'categoria' => 'Sedan',
            'preco' => 120000.00
        ],
        [
            'marca' => 'Honda',
            'modelo' => 'Civic',
            'ano' => 2019,
            'categoria' => 'Sedan',
            'preco' => 110000.00
        ],
        [
            'marca' => 'Volkswagen',
            'modelo' => 'Gol',
            'ano' => 2018,
            'categoria' => 'Hatch',
            'preco' => 55000.00
        ],
        [
            'marca' => 'Chevrolet',
            'modelo' => 'Onix',
            'ano' => 2021,
            'categoria' => 'Hatch',
            'preco' => 65000.00
        ],
        [
            'marca' => 'Ford',
            'modelo' => 'EcoSport',
            'ano' => 2020,
            'categoria' => 'SUV',
            'preco' => 90000.00
        ],
        [
            'marca' => 'Renault',
            'modelo' => 'Duster',
            'ano' => 2021,
            'categoria' => 'SUV',
            'preco' => 95000.00
        ],
        [
            'marca' => 'Fiat',
            'modelo' => 'Strada',
            'ano' => 2022,
            'categoria' => 'Picape',
            'preco' => 80000.00
        ],
        [
            'marca' => 'Jeep',
            'modelo' => 'Compass',
            'ano' => 2021,
            'categoria' => 'SUV',
            'preco' => 140000.00
        ],
        [
            'marca' => 'Hyundai',
            'modelo' => 'HB20',
            'ano' => 2020,
            'categoria' => 'Hatch',
            'preco' => 60000.00
        ],
        [
            'marca' => 'Nissan',
            'modelo' => 'Kicks',
            'ano' => 2021,
            'categoria' => 'SUV',
            'preco' => 100000.00
        ],
        [
            'marca' => 'Renault',
            'modelo' => 'Clio',
            'ano' => 2002,
            'categoria' => 'Hatch',
            'preco' => 20000.00
        ],
    ];
    static function filtraMarca(string $marca):array
    {
        $marcas_carros = [];
        foreach (static::CARROS as $carro) {
            if ($carro['marca'] == $marca) {
                $marcas_carros[] = $carro;
            }
        }
        return $marcas_carros;
    }
    static function filtraModelo(string $modelo):array
    {
        $modelo_Carros = [];
        foreach (static::CARROS as $carro) {
            if ($carro['modelo'] == $modelo) {
                $modelo_Carros[] = $carro;
            }
        }
        return $modelo_Carros;
    }
    static function filtraCategoria(string $categoria):array
    {
        $categoria_carros = [];
        foreach (static::CARROS as $carro) {
            if ($carro['categoria'] == $categoria) {
                $categoria_carros[] = $carro;
            }
        }
        return $categoria_carros;
    }
    static function filtraPreco(float $preco_min, float $preco_max):array
    {
        $preco_carros = [];
        foreach (static::CARROS as $carro) {
            if ($carro['preco'] >= $preco_min && $carro['preco'] <= $preco_max) {
                $preco_carros[] = $carro;
            }
        }
        return $preco_carros;
    }
    static function filtraAno(int $ano_min, int $ano_max):array
    {
        $ano_carros = [];
        foreach (static::CARROS as $carro) {
            if ($carro['ano'] >= $ano_min && $carro['ano'] <= $ano_max) {
                $ano_carros[] = $carro;
            }
        }
        return $ano_carros;
    }
}