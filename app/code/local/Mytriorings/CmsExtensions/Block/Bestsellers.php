<?php
/**
 * Created by PhpStorm.
 * User: kniej
 * Date: 2017-07-29
 * Time: 18:40
 */

class Mytriorings_CmsExtensions_Block_Bestsellers extends Mage_Core_Block_Template
{
    public function getBestsellers($categoryId)
    {
//        die('cms extension block');
        $bestsellers = Mage::getModel('cmsextensions/bestsellers')->fetchBestSellingProducts($categoryId);

        return $bestsellers;
    }
}