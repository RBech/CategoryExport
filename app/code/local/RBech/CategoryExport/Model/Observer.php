<?php
class RBech_CategoryExport_Model_Observer
{
    public function addExport(Varien_Event_Observer $observer)
    {
        $block = $observer->getEvent()->getBlock();

        if ($block->getId() === 'catalog_category_products') {
            $block->addExportType('*/*/exportCsv', Mage::helper('adminhtml')->__('CSV'));
        }
    }
}