<?php
/**
 * Created by PhpStorm.
 * User: maxin
 * Date: 8/24/2016
 * Time: 5:44 p.m.
 */

namespace Foggyline\office\Model;

class Deparment extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\ResourceModel\Department');
    }
}
