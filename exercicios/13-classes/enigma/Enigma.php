<?php
class Enigma
{
    static function criptografar(string $texto_decifrado): string
    {
        for ($i = 0; $i < strlen($texto_decifrado); $i++):
            if ($texto_decifrado[$i] == "e" || $texto_decifrado[$i] == "E"):
                $texto_decifrado[$i] = "U";
            elseif ($texto_decifrado[$i] == "i" || $texto_decifrado[$i] == "I"):
                $texto_decifrado[$i] = "A";
            elseif ($texto_decifrado[$i] == "o" || $texto_decifrado[$i] == "O"):
                $texto_decifrado[$i] = "E";
            elseif ($texto_decifrado[$i] == "u" || $texto_decifrado[$i] == "U"):
                $texto_decifrado[$i] = "I";
            elseif ($texto_decifrado[$i] == "p" || $texto_decifrado[$i] == "P"):
                $texto_decifrado[$i] = "B";
            elseif ($texto_decifrado[$i] == "b" || $texto_decifrado[$i] == "B"):
                $texto_decifrado[$i] = "P";
            elseif ($texto_decifrado[$i] == "a" || $texto_decifrado[$i] == "A"):
                $texto_decifrado[$i] = "O";
            endif;
        endfor;
        return $texto_decifrado;
    }

    static function decifrar(string $texto_cifrado): string
    {
        for ($i = 0; $i < strlen($texto_cifrado); $i++):
            if ($texto_cifrado[$i] == "U"):
                $texto_cifrado[$i] = "e";
            elseif ($texto_cifrado[$i] == "A"):
                $texto_cifrado[$i] = "i";
            elseif ($texto_cifrado[$i] == "E"):
                $texto_cifrado[$i] = "o";
            elseif ($texto_cifrado[$i] == "I"):
                $texto_cifrado[$i] = "u";
            elseif ($texto_cifrado[$i] == "B"):
                $texto_cifrado[$i] = "p";
            elseif ($texto_cifrado[$i] == "P"):
                $texto_cifrado[$i] = "b";
            elseif ($texto_cifrado[$i] == "O"):
                $texto_cifrado[$i] = "a";
            endif;
        endfor;
        return $texto_cifrado;
    }
}
