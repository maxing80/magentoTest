<?php
/**
 * Created by PhpStorm.
 * User: maxin
 * Date: 8/25/2016
 * Time: 9:53 a.m.
 */

namespace Foggyline\Office\Model\ResourceModel\Employee;

class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\Employee', 'Foggyline\Office\Model\ResourceModel\Employee');
    }
}