<?php
class RBech_CategoryExport_Model_Observer
{
    public function addExport(Varien_Event_Observer $observer)
    {
        //Get block from observer
        $block = $observer->getEvent()->getBlock();

        //Log block id (temporary)
        Mage::log($block->getId(), null, 'block.log');
    }
}