<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Satish\CustomerLoginTrack\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        /**
         * Create table 'customer_entity'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('customer_login_track')
        )->addColumn(
            'entity_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Entity Id'
        )->addColumn(
            'customer_id',
        		\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [ 'unsigned' => true, 'nullable' => false],
            'Customer Id'
        )->addColumn(
        				'ip',
        				\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
        				255,
        				['nullable' => false],
        				'Ip'
        				)->addColumn(		
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
            'Created At'
        )->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
            'Updated At'
        )->addIndex(
            $installer->getIdxName('customer_login_track', ['customer_id']),
            ['customer_id']
        )->setComment(
            'Customer Login Track'
        );
        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}
