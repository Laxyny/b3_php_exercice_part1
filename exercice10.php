<?php

/**
 * ÉNONCÉ:
 * Refactoriser le code ci-dessous en créant une classe Statistics
 */

class Statistics
{
    private array $numbers;

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * Calcule la somme d'un tableau de nombres
     */
    public function getSum(): float
    {
        return array_sum($this->numbers);
    }

    /**
     * Calcule la moyenne d'un tableau de nombres
     */
    public function getAverage(): float
    {
        if (count($this->numbers) === 0) {
            return 0;
        }
        return $this->getSum() / count($this->numbers);
    }

    /**
     * Trouve la valeur minimale d'un tableau de nombres
     */
    public function getMin(): float
    {
        return count($this->numbers) > 0 ? min($this->numbers) : 0;
    }

    /**
     * Trouve la valeur maximale d'un tableau de nombres
     */
    public function getMax(): float
    {
        return count($this->numbers) > 0 ? max($this->numbers) : 0;
    }
}

// Exemple d’utilisation
$numbers = [10, 5, 8, 20, 3, 15];
$stats = new Statistics($numbers);

echo "Tableau de nombres : " . implode(", ", $numbers) . "<br>";
echo "Somme : " . $stats->getSum() . "<br>";
echo "Moyenne : " . $stats->getAverage() . "<br>";
echo "Valeur minimale : " . $stats->getMin() . "<br>";
echo "Valeur maximale : " . $stats->getMax() . "<br>";
