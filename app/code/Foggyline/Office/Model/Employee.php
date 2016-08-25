<?php

/**
 * Created by PhpStorm.
 * User: maxin
 * Date: 8/25/2016
 * Time: 9:35 a.m.
 */

namespace Foggyline\Office\Model;

class Employee extends \Magento\Framework\Model\AbstractModel
{
    const  ENTITY = 'foggyline_office_employee';

    public function _construct()
    {
        $this->_init('Foggyline\Office\Model\ResourceModel\Employee');
    }
}
