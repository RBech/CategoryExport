<?php
require_once Mage::getModuleDir('controllers', 'Mage_Adminhtml').DS.'Catalog/CategoryController.php';

class RBech_CategoryExport_Adminhtml_Catalog_CategoryController extends Mage_Adminhtml_Catalog_CategoryController
{
    /**
     * Export order grid to CSV format
     */
    public function exportCsvAction()
    {
        $this->_initCategory();
        $fileName   = 'category_products.csv';
        $grid       = $this->getLayout()->createBlock('adminhtml/catalog_category_tab_product');
        $this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
    }
}