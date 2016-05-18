<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 12/30/2015
 * Time: 8:09 PM
 */

class Krauskopf_Reports_Block_Adminhtml_Reps_Grid extends Mage_Adminhtml_Block_Widget_Grid{

    public function __construct(){
        parent::__construct();

        $this->setDefaultSort('id');
        $this->setId('krauskopf_reports_reps_grid');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    protected  function _getCollectionClass(){
        return 'krauskopf_reports/reps_collection';
    }

    protected function _prepareCollection(){
        $collection = Mage::getResourceModel($this->_getCollectionClass());
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }

    protected function _prepareColumns(){
        $this->addColumn('id',
            array(
                'header' => $this->__('ID'),
                'align' => 'right',
                'width' => '50px',
                'index' => 'id'
            )
        );
        $this->addColumn('name',
            array(
                'header' => $this->__('Name'),
                'index' => 'name'
            ));
        return parent::_prepareColumns();
    }

    public function getRowUrl($row){
        return $this->getUrl('*/*/edit', array('id'=>$row->getId()));
    }

}
