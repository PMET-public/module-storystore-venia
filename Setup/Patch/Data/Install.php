<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace StoryStore\Venia\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\DataInstall\Model\Process;

class Install implements DataPatchInterface
{
    /** @var Process  */
    protected $process;

    public function __construct(Process $process)
    {
        $this->process = $process;
    }

    public function apply()
    {
       $this->process->loadFiles(['StoryStore_Venia::fixtures/categories.csv',
            'StoryStore_Venia::fixtures/stores.csv',
            'StoryStore_Venia::fixtures/product_attributes.csv',
            'StoryStore_Venia::fixtures/products.csv',
            'StoryStore_Venia::fixtures/blocks.csv',
            'StoryStore_Venia::fixtures/dynamic_blocks.csv',
            'StoryStore_Venia::fixtures/pages.csv',
            'StoryStore_Venia::fixtures/config.json',
            'StoryStore_Venia::fixtures/config.csv',
            'StoryStore_Venia::fixtures/customers.csv']);
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
