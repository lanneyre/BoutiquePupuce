<?php
/*
    By Alexis-Mathieu
    Cette classe nécessite d'être instancier et donc de créer un objet panier 
*/
class panier {

    // Attribut de type tableau contenant le panier
    private $_productList;

    function __construct($cartSession) {
        // Lorsque la classe est instanciée, le panier contenu dans la session est passé en argument et est stocké dans l'attribut de l'objet
        $this->_productList = $cartSession;
    }

    // Cette fonction renvoie le contenu de l'attribut productList
    function getCart()
    {
        return $this->_productList;
    }

    // Cette fonction ajoute un produit au panier
    function addProduct($product, $quantity)
    {
        // Si le produit existe déjà dans le panier au augmente sa quantitée
        if(in_array($product, $this->_productList)){
            $currentProduct = array_search($product, $this->_productList);
            $currentProduct[1] += $quantity;
        }
        // Sinon on ajoute un tableau avec 2 cases la première contient un objet de type produit et la seconde la quantité 
        else {
            $this->_productList[] = [$product, $quantity];
        }        
    }
    // Cette fonction supprime du panier une ligne
    function removeProduct($product){        
        foreach ($this->_productList as $key => $value) {
            if(array_search($product, $value) !== false){
                unset($this->_productList[$key]);
            }
        }
    }
}