<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 12/30/2015
 * Time: 8:27 PM
 */

class Krauskopf_Reports_Adminhtml_RepsController extends Mage_Adminhtml_Controller_Action{

    public function indexAction(){

        $this->_initAction()
            ->renderLayout();
    }
    public function newAction(){
        $this->_forward('edit');
    }

    public function editAction(){
        $this->_initAction();

        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('krauskopf_reports/reps');

        if($id){

            $model->load($id);

            if(!$model->getId()){
                Mage::getSingleton('adminhtml/session')->addError($this->__('This reps no longer exists.'));
                $this->_redirect('*/*/');

                return;
            }
        }

        $this->_title($model->getId() ? $model->getName() : $this->__('New Reps'));

        $data = Mage::getSingleton('adminhtml/session')->getRepsData(true);
        if(!empty($data)){
            $model->setData($data);
        }

        Mage::register('krauskopf_reports', $model);

        $this->_initAction()
            ->_addBreadCrumb($id ? $this->__('Edit Reps') : $this->__('New Reps'), $id ? $this->__('Edit Rep') : $this->__('New Reps'))
            ->_addContent($this->getLayout()->createBlock('krauskopf_reports/adminhtml_reps_edit')->setData('action', $this->getUrl('*/*/save')))
            ->renderLayout();
    }

    public function saveAction(){


        if($postData = $this->getRequest()->getPost()){
            $model = Mage::getSingleton('krauskopf_reports/reps');
            $model->setData($postData);

            try{
                $model->save();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('This Rep has been saved.'));

                return;
            }
            catch(Mage_Core_Exception $e){
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
            catch(Exception $e){
                Mage::getSingleton('adminhtml/session')->addError($this->__('An error occured while saving this rep'));
            }

            Mage::getSingleton('adminhtml/session')->setRepsData($postData);
            $this->_redirectReferer();
        }
    }

    public function messageAction(){
        $data = Mage::getModel('krauskopf_reports/reps')->load($this->getRequest()->getParam('id'));
        echo $data->getContent();
    }

    protected function _initAction(){

        $this->loadLayout()
            ->_setActiveMenu('sales/krauskopf_reports_reps')
            ->_title($this->__('Sales'))->_title($this->__('Reps'))
            ->_addBreadcrumb($this->__('Sales'), $this->__('Sales'))
            ->_addBreadcrumb($this->__('Reps'), $this->__('Reps'));
         return $this;
    }

    protected function _isAllowed(){
        return Mage::getSingleton('admin/session')->isAllowed('sales/krauskopf_reports_reps');
    }
}