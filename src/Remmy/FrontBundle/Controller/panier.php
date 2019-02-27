<?php

class shopping
{
  public function getTotalPrice()
  {
    $prix = 0;
    foreach($this->getProduct() as $prod) {
      $Tprice += $prod->getProduct();
    }
    
    return $Tprice;
  }
}