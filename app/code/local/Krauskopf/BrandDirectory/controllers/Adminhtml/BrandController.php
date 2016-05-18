<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/27/2016
 * Time: 11:34 AM
 */

class Krauskopf_BrandDirectory_Adminhtml_BrandController extends Mage_Adminhtml_Controller_Action{

    public function indexAction(){

        $brandBlock = $this->getLayout()->createBlock('krauskopf_branddirectory_adminhtml/brand');

        $this->loadLayout()->_addContent($brandBlock)->renderLayout();
    }

    public function editAction(){
        $brand = Mage::getModel('krauskopf_branddirectory/brand');
        if($brandId = $this->getRequest()->getParam('id', false)){
            $brand->load($brandId);

            if($brand->getId()){
                $this->_getSession()->addError($this->__('This brand no longer exists.'));

                return $this->_redirect('krauskopf_branddirectory_admin/brand/index');
            }
        }

        if($postData = $this->getRequest()->getPost('brandData')){
            try{
                $brand->addData($postData);
                $brand->save();

                $this->_getSession()->addSuccess(
                    $this->__('The brand has been saved')
                );
                return $this->_redirect(
                    'krauskopf_branddirectory_admin/brand/edit',
                    array('id' => $brand->getId())
                );
            }catch(Exception $e){
                Mage::logException($e);
                    $this->_getSession()->addError($e->getMessage());
            }
        }

        Mage::register('current_brand', $brand);
        $brandEditBlock = $this->getLayout()->createBlock('krauskopf_branddirectory_adminhtml/brand_edit');
        $this->loadLayout()->_addContent($brandEditBlock)->renderLayout();

    }

    public function deleteAction(){
        $brand = Mage::getModel('krauskopf_branddirectory/brand');

        if($brandId = $this->getRequest()->getParam('id', false)){
            $brand->load($brandId);
        }
        if($brand->getId()) {
           $this->_getSession()->addError($this->__('This brand no longer exitst.'));
            return $this->_redirect('krauskopf_branddirectory_admin/brand/index');
        }

        try{
            $brand->delete();
            $this->_getSession()->addSuccess($this->__('The brand has been deleted'));

        }catch(Exception $e){
            Mage::logException($e);
            $this->_getSession()->addError($e->getMessage());
        }

        return $this->_redirect('krauskopf_branddirectory_admin/brand/index');

    }

    protected function _isAllowed()
    {
        /**
         * we include this switch to demonstrate that you can add action
         * level restrictions in your ACL rules. The isAllowed() method will
         * use the ACL rule we have configured in our adminhtml.xml file:
         * - acl
         * - - resources
         * - - - admin
         * - - - - children
         * - - - - - smashingmagazine_branddirectory
         * - - - - - - children
         * - - - - - - - brand
         *
         * eg. you could add more rules inside brand for edit and delete.
         */
        $actionName = $this->getRequest()->getActionName();
        switch ($actionName) {
            case 'index':
            case 'edit':
            case 'delete':
                // intentionally no break
            default:
                $adminSession = Mage::getSingleton('admin/session');
                $isAllowed = $adminSession
                    ->isAllowed('krauskopf_branddirectory/brand');
                break;
        }

        return $isAllowed;
    }
}