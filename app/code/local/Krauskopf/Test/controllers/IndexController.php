<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/1/2016
 * Time: 8:33 PM
 */
class Krauskopf_Test_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
       $this->loadLayout();
        $this->renderLayout();
    }
}