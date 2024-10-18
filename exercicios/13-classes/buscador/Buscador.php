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
        // $marcas_carros = [];
        // foreach (static::CARROS as $carro) {
        //     if ($carro['marca'] == $marca) {
        //         $marcas_carros[] = $carro;
        //     }
        // }
        // return $marcas_carros;
        if (empty($marca)) {
            return static::CARROS;
        }
        return array_filter(static::CARROS, function($carro) use($marca) {
            return ($carro['marca'] == $marca);
            // uma verificação com o array filter me retorna um resultado boleano true or false
        });
    }

    static function filtraModelo(string $modelo):array
    {
        // $modelo_Carros = [];
        // foreach (static::CARROS as $carro) {
        //     if ($carro['modelo'] == $modelo) {
        //         $modelo_Carros[] = $carro;
        //     }
        // }
        // return $modelo_Carros;
        if (empty($modelo)){
            return static::CARROS;
        }
        return array_filter(static::CARROS, function($carro) use($modelo) {
            return ($carro['modelo'] == $modelo);
        });
    }

    static function filtraCategoria(string $categoria):array
    {
        // $categoria_carros = [];
        // foreach (static::CARROS as $carro) {
        //     if ($carro['categoria'] == $categoria) {
        //         $categoria_carros[] = $carro;
        //     }
        // }
        // return $categoria_carros;
        if (empty($categoria)){
            return static::CARROS;
        }
        return array_filter(static::CARROS, function($carro) use($categoria) {
            return ($carro['categoria'] == $categoria);
        });
    }

    static function filtraPrecoMin(float $preco_min):array
    {
        // $preco_carros = [];
        // foreach (static::CARROS as $carro) {
        //     if ($carro['preco'] >= $preco_min && $carro['preco'] <= $preco_max) {
        //         $preco_carros[] = $carro;
        //     }
        // }
        // return $preco_carros;
        if (empty($preco_min)){
            return static::CARROS;
        }
        return array_filter(static::CARROS, function($carro) use($preco_min) {
            return ($carro['preco'] >= $preco_min);
        });
    }

    static function filtraPrecoMax(float $preco_max):array
    {
        if (empty($preco_max)){
            return static::CARROS;
        }
        return array_filter(static::CARROS, function ($carro) use($preco_max) {
            return ($carro['preco'] <= $preco_max);
        });
    }

    static function filtraAnoMin(int $ano_min):array
    {
        // $ano_carros = [];
        // foreach (static::CARROS as $carro) {
        //     if ($carro['ano'] >= $ano_min && $carro['ano'] <= $ano_max) {
        //         $ano_carros[] = $carro;
        //     }
        // }
        // return $ano_carros;
        if (empty($ano_min)) {
            return static::CARROS;
        }
        return array_filter(static::CARROS, function($carro) use($ano_min) {
            return ($carro['ano'] >= $ano_min);
        });
    }

    static function filtraAnoMax(int $ano_max):array
    {
        if (empty($ano_max)) {
            return static::CARROS;
        }
        return array_filter(static::CARROS, function($carro) use($ano_max) {
            return ($carro['ano'] <= $ano_max);
        });
    }

    static function filtrar(string $marca = "", string $modelo = "", string $categoria = "", float $preco_min = 0, float $preco_max = 0, int $ano_min = 0, int $ano_max = 0) {
        $carros_da_marca = static::filtraMarca($marca);
        $carros_do_modelo = static::filtraModelo($modelo);
        $carros_da_categoria = static::filtraCategoria($categoria);
        $carros_do_preco_min = static::filtraPrecoMin($preco_min);
        $carros_do_preco_max = static::filtraPrecoMax($preco_max);
        $carros_do_ano_min = static::filtraAnoMin($ano_min);
        $carros_do_ano_max = static::filtraAnoMax($ano_max);
        $carros_encontrados = array_filter(static::CARROS, function($carro) use($carros_da_marca, $carros_do_modelo, $carros_da_categoria, $carros_do_preco_min, $carros_do_preco_max, $carros_do_ano_min, $carros_do_ano_max) {
            if (in_array($carro, $carros_da_marca) && in_array($carro, $carros_do_modelo) && in_array($carro, $carros_da_categoria) && in_array($carro, $carros_do_preco_min) && in_array($carro, $carros_do_preco_max) && in_array($carro, $carros_do_ano_min) && in_array($carro, $carros_do_ano_max)) {
                return true; 
            } else {
                return false;
            }
        });
        return $carros_encontrados;
    }


}