<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

require_once 'exercice2.php';

class Student extends Person
{
    protected $grades = [];

    public function getAverage()
    {
        return 'Moyenne générale : ' . array_sum($this->grades) / count($this->grades);
    }

    /**
     * Get the value of grades
     */
    public function getGrades()
    {
        return $this->grades;
    }

    /**
     * Set the value of grades
     */
    public function setGrades($grades): self
    {
        $this->grades = $grades;

        return $this;
    }
}

$student = new Student('Kevin', 'Gregoire', 20);
$student->setGrades([10, 20, 5, 12, 19]);
echo $student->getAverage();