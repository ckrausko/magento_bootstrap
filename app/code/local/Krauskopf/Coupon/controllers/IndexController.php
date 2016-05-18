<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 11/7/2015
 * Time: 2:21 PM
 */

class Krauskopf_Coupon_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        $code = $this->getRequest()->getParam('coupon_code');

        if($code != ''){
            Mage::getSingleton("checkout/session")->setData("coupon_code",$code);
            Mage::getSingleton('checkout/cart')->getQuote()->setCouponCode($code)->save();
            echo $code;
        }

        if ($this->getRequest()->getParam('url')) {
            //using raw header instead of _redirect because _redirect appends a /
            header('HTTP/1.1 301 Moved Permanently');
            $gclid = $this->getRequest()->getParam('gclid');
            $url = $this->getRequest()->getParam('url');
            header('Location: /' . $url . '?gclid=' . $gclid);
	        die();
         }
        else {
            $this->_redirect("/");
        }
    }
}