<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 12/30/2015
 * Time: 8:20 PM
 */

class Krauskopf_Reports_Block_Adminhtml_Reps_Edit_Form extends Mage_Adminhtml_Block_Widget_Form{

    public function __construct(){
        parent::__construct();

        $this->setId('krauskopf_reports_reps_form');
        $this->setTitle($this->__('Reps Information'));
    }

    protected function _prepareForm(){

        $model = Mage::register('krauskopf_reports');

        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
            'method' => 'post'
        ));

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend' => Mage::helper('checkout')->__('Reps Information'),
            'class' => 'fieldset-wide',
        ));

        if($model->getId()){
            $fieldset->addField('id', 'hidden', array(
                'name' => 'id',
            ));
        }

        $fieldset->addField('name', 'text', array(
            'name' => 'name',
            'label' => Mage::helper('checkout')->__('Name'),
            'title' => Mage::helper('checkout')->__('Name'),
            'required' => true,
        ));

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}