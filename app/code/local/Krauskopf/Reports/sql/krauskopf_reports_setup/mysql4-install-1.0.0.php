<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 12/30/2015
 * Time: 7:47 PM
 */

$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('krauskopf_reports/reps'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' =>true,
        'nullable' => false,
        'primary' => true,
    ), 'ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_CLOB, 0, array(
        'nullable' => false,
    ), 'Name');

$installer->getConnection()->createTable($table);

$installer->endSetup();