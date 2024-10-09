<?php

class Analisador
{
    static function doarPara(string $tipoSang): array
    {
        $compatibilidade = [
            "A+" => ['A+', 'AB+'],
            "A-" => ['A-', 'A+', 'AB-', 'AB+'],
            "B+" => ['B+', 'AB+'],
            "B-" => ['B-', 'B+', 'AB-', 'AB+'],
            "AB+" => ['AB+'],
            "AB-" => ['AB-', 'AB+'],
            "O+" => ['O+', 'A+', 'B+', 'AB+'],
            "O-" => ['O-', 'O+', 'A-', 'A+', 'B-', 'B+', 'AB-', 'AB+'],
        ];
        return $compatibilidade[$tipoSang];
    }
    static function recebeDe(string $tipoSang): array
    {
        $compatibilidade = [
            "A+" => ["A+", "A-", "O+", "O-"],
            "A-" => ["A-", "O-"],
            "B+" => ["B+", "B-", "O+", "O-"],
            "B-" => ["B-", "O-"],
            "AB+" => ["todos os tipos."],
            "AB-" => ["A-", "B-", "O-", "AB-"],
            "O+" => ["O+", "O-"],
            "O-" => ["O-"],
        ];
        return $compatibilidade[$tipoSang];
    }
}
