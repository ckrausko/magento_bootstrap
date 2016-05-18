<?php

class Krauskopf_Coupon_Model_Observer extends Mage_Core_Model_Observer{

    public function applyCoupon($observer){
        $code = trim(Mage::getSingleton("checkout/session")->getData("coupon_code"));
        if ($code != ''){
            Mage::getSingleton('checkout/cart')->getQuote()->setCouponCode($code)->save();
        }
    }
}