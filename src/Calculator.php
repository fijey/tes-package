<?php

namespace Fijey\Kalkulator;


class Calculator {


    public static function sum(array $data)
    {
        echo "Tunggu Sebentar ... Data sedang kami proses\n". '<br>';
        return array_sum($data);
    }

    public static function multiply(array $data)
    {
        echo "Tunggu Sebentar ... Data sedang kami proses\n". '<br>';
        return array_product($data);
    }

    public static function DollarToRupiah(int $dollar)
    {   
        $rupiah = 14301;
        
        echo "Tunggu Sebentar ... Data sedang kami proses\n". '<br>';
        
        echo ($dollar * $rupiah);
    }


    public static function decimalToBinary(int $number)
    {
        return decbin($number);
    }
 

    public static function binaryToDecimal(string $string)
    {
        return bindec($string);
    }


}




?>