<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 1/30/2016
 * Time: 6:56 PM
 */
class Krauskopf_Coupon_TestController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        $thing_1 = new Varien_Object();
        $thing_1->setName('Richard');
        $thing_1->setAge(24);

        $thing_2 = new Varien_Object();
        $thing_2->setName('Jane');
        $thing_2->setAge(12);

        $thing_3 = new Varien_Object();
        $thing_3->setName('Spot');
        $thing_3->setLastName('The Dog');
        $thing_3->setAge(7);

        $collection_of_things = new Varien_Data_Collection();
        $collection_of_things
            ->addItem($thing_1)
            ->addItem($thing_2)
            ->addItem($thing_3);

    }
}