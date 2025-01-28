<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

class BankAccount
{
    private $balance;

    public function __construct()
    {
        $this->balance = 0;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        echo 'Dépôt de ' . $amount . '€<br>Nouveau solde : ' . $this->balance . '€<br><br>';
    }

    public function withdraw($amount)
    {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo 'Retrait de ' . $amount . '€<br>Nouveau solde : ' . $this->balance . '€<br>';
        } else {
            echo 'Solde insuffisant<br>';
        }
    }
}

$account = new BankAccount();
$account->deposit(100);
$account->withdraw(75);