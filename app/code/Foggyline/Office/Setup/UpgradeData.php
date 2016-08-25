<?php
/**
 * Created by PhpStorm.
 * User: maxin
 * Date: 8/25/2016
 * Time: 3:30 p.m.
 */

namespace Foggyline\Office\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use MAgento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $departmentFactory;
    protected $employeeFactory;

    public function __construct(
        \Foggyline\Office\Model\DeparmentFactory $deparmentFactory,
        \Foggyline\Office\Model\EmployeeFactory $employeeFactory
    )
    {
        $this->departmentFactory = $deparmentFactory;
        $this->employeeFactory = $employeeFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $salesDepartment = $this->departmentFactory->create();
        $salesDepartment->setSales('Sales');
        $salesDepartment->save();

        $employee = $this->employeeFactory->create();
        $employee->setDepartmentId($salesDepartment->getId());
        $employee->setEmail('john@sales.loc');
        $employee->setLastName('John');
        $employee->setLastName('Doe');
        $employee->setServiceYears(3);
        $employee->setDob('1983-03-28');
        $employee->setSalary(38000.00);
        $employee->setVatNumber('GB123456789');
        $employee->setNote('Just some notes about Jhon');
        $employee->save();


        $setup->endSetup();
    }
}
