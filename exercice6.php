<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */

class ShoppingCart
{
    private $items;
    private $total;

    public function __construct()
    {
        $this->items = [];
        $this->total = 0;
    }

    public function addItem($name, $price)
    {
        $this->items[] = ['name' => $name, 'price' => $price];
    }

    public function displayItems()
    {
        foreach ($this->items as $item) {
            echo $item['name'] . '  ' . $item['price'] . '€' . '<br>';
        }
    }

    public function calculateTotal()
    {
        $this->total = 0;
        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }
        echo 'Total : ' . $this->total . '€';
    }
}

$cart = new ShoppingCart();
$cart->addItem('Eau', 2);
$cart->addItem('Savon', 4);

$cart->displayItems();
echo '<br>';
$cart->calculateTotal();
