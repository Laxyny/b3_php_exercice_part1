<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

class Math
{
    public static function add($a, $b): float
    {
        return $a + $b;
    }

    public static function subtract($a, $b): float
    {
        return $a - $b;
    }

    public static function multiply($a, $b): float
    {
        return $a * $b;
    }
}

echo Math::add(1.2, 4.5) . '<br>';
echo Math::subtract(100, 16.2) . '<br>';
echo Math::multiply(11.3, 2) . '<br>';