<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/

class Product {
    protected $name;
    protected $price_without_tax;
    protected $vat_rate;

    

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price_without_tax
     */
    public function getPriceWithoutTax()
    {
        return $this->price_without_tax;
    }

    /**
     * Set the value of price_without_tax
     */
    public function setPriceWithoutTax($price_without_tax): self
    {
        $this->price_without_tax = $price_without_tax;

        return $this;
    }

    /**
     * Get the value of vat_rate
     */
    public function getVatRate()
    {
        return $this->vat_rate;
    }

    /**
     * Set the value of vat_rate
     */
    public function setVatRate($vat_rate): self
    {
        $this->vat_rate = $vat_rate;

        return $this;
    }

    public function getPriceWithVat() {
        return $this->price_without_tax + $this->price_without_tax * $this->vat_rate / 100;
    }
}

$product = new Product();
$product->setName('Voiture');
$product->setPriceWithoutTax(20000);
$product->setVatRate(20);

echo 'Nom du produit : ' . $product->getName() . '<br>';
echo 'Prix HT : ' . $product->getPriceWithoutTax() . '€ <br>';
echo 'TVA : ' . $product->getVatRate() . '% <br>';
echo 'Prix TTC : ' . $product->getPriceWithVat() . '<br>';