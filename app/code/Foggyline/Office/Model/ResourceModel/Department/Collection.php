<?php
/**
 * Created by PhpStorm.
 * User: maxin
 * Date: 8/24/2016
 * Time: 6:04 p.m.
 */
namespace Foggyline\Office\Model\ResourceModel\Department;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            'Foggyline\Office\Model\Department',
            'Foggyline\Office\Model\ResourceModel\Department'
        );
    }
}
