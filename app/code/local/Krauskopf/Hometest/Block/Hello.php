<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/21/2016
 * Time: 6:02 PM
 */

class Krauskopf_Hometest_Block_Hello extends Mage_Core_Block_Template{

    public function sayHi(){
        $categoryId = 3;
        $products = Mage::getSingleton('catalog/category')->load($categoryId)
            ->getProductCollection()
            ->addAttributeToSelect('*');
        return $products;
    }
}