<?php
/**
 * Created by PhpStorm.
 * User: maxin
 * Date: 8/24/2016
 * Time: 5:58 p.m.
 */
namespace Foggyline\Office\Model;

class Department extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model \ResourceModel\Department');
    }
}
