<?php
/**
 * Created by PhpStorm.
 * User: kniej
 * Date: 2017-07-29
 * Time: 18:41
 */

class Mytriorings_CmsExtensions_Model_Bestsellers extends Mage_Core_Model_Abstract
{
    public function fetchBestSellingProducts($categoryId)
    {
        $category = Mage::getModel('catalog/category')->load($categoryId);
        $bestsellers = Mage::getResourceModel('reports/product_collection')
            ->addOrderedQty()
            ->addAttributeToSelect('*')
            ->addAttributeToSelect(array('entity_id', 'name', 'price'))
            ->addCategoryFilter($category)
            ->setOrder('order_qty', 'DESC')
            ->setPageSize(5);

        return $bestsellers;
    }
}