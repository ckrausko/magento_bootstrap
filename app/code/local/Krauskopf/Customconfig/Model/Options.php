<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/9/2016
 * Time: 5:45 PM
 */

class Krauskopf_Customconfig_Model_Options{

    public function toOptionArray(){
        return array(
            array('value'=>1, 'label'=>'One'),
            array('value'=>2, 'label'=>'Two'),
            array('value'=>3, 'label'=>'Three'),
            array('value'=>4, 'label'=>'Four')
        );
    }
}