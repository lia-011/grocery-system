<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventoryFixture
 */
class InventoryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'inventory';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'inventory_id' => 1,
                'product_id' => 1,
                'supplier_id' => 1,
                'quantity_added' => 1,
                'date_added' => '2025-12-25 08:21:39',
            ],
        ];
        parent::init();
    }
}
