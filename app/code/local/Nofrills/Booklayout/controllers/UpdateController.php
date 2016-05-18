<?php
	class Nofrills_Booklayout_UpdateController  extends Mage_Core_Controller_Front_Action
	{
		public function indexAction()
		{
			$layout = Mage::getSingleton('core/layout');
			$xml = simplexml_load_string('<layout>
			<block type="nofrills_booklayout/helloworld" name="root" output="toHtml" />
		</layout>', 'Mage_Core_Model_Layout_Element');
		$layout->setXml($xml);
		$layout->generateBlocks();
		echo $layout->setDirectOutput(true)->getOutput();
		}       				
	}