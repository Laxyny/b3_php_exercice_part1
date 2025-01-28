<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */

require_once 'exercice2.php';

class Employee extends Person
{
    protected $salary;
    protected $position;

    public function __construct(string $first_name, string $last_name, int $age, int $salary, string $position)
    {
        parent::__construct($first_name, $last_name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function afficheInfos()
    {
        echo "<br>Nom : " . $this->getFirstName() . " " . $this->getLastName() . "<br>";
        echo "Age : " . $this->getAge() . " ans<br>";
        echo "Salaire : " . $this->salary . "€<br>";
        echo "Job : " . $this->position . "<br>";
    }
}

$employee = new Employee('Kevin', 'Gregoire', 20, 2000, 'Dev');
$employee->afficheInfos();