<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/27/2016
 * Time: 11:24 AM
 */

class Krauskopf_BrandDirectory_Block_Adminhtml_Brand_Edit_Form extends Mage_Adminhtml_Block_Widget_Form{

    protected function _prepareForm(){
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl(
                'krauskopf_branddirectory_admin/brand/edit',
                array(
                    '_current' => true,
                    'continue' => 0,
                )
            ),
            'method' => 'post',
        ));
        $form->setUseContainer(true);
        $this->setForm($form);

        $fieldset = $form->addFieldset(
            'general',
            array(
                'legend' => $this->__('Brand Details')
            )
        );

        $brandSingleton = Mage::getSingleton('krauskopf_branddirectory/brand');

        $this->_addFieldsToFieldset($fieldset, array(
            'name' => array(
                'label' => $this->__('Name'),
                'input' => 'text',
                'required' => true,
            ),
            'url_key' => array(
                'label' => $this->__('URL Key'),
                'input' => 'text',
                'required' => true,
            ),
            'description' => array(
                'label' => $this->__('Description'),
                'input' => 'textarea',
                'required' => true,
            ),
            'visibility' => array(
                'label' => $this->__('Visibility'),
                'input' => 'select',
                'required' => true,
                'options' => $brandSingleton->getAvailableVisibilies(),
            ),
        ));
        return $this;
    }

    protected function _addFieldsToFieldset(
        Varien_Data_Form_Element_Fieldset $fieldset, $fields)
    {
        $requestData = new Varien_Object($this->getRequest()
            ->getPost('brandData'));

        foreach ($fields as $name => $_data) {
            if ($requestValue = $requestData->getData($name)) {
                $_data['value'] = $requestValue;
            }

            // Wrap all fields with brandData group.
            $_data['name'] = "brandData[$name]";

            // Generally, label and title are always the same.
            $_data['title'] = $_data['label'];

            // If no new value exists, use the existing brand data.
            if (!array_key_exists('value', $_data)) {
                $_data['value'] = $this->_getBrand()->getData($name);
            }

            // Finally, call vanilla functionality to add field.
            $fieldset->addField($name, $_data['input'], $_data);
        }

        return $this;
    }

    protected function _getBrand(){
        if(!$this->hasData('brand')){
            $brand = Mage::registry('current_brand');

            if(!$brand instanceof
            Krauskopf_BrandDirectory_Model_Brand){
                $brand = Mage::getModel('krauskopf_branddirectory/brand');
            }
            $this-setData('brand', $brand);
        }
        return $this->getData('brand');
    }
}