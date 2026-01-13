<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderItemFixture
 */
class OrderItemFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'order_item';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'order_item_id' => 1,
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'subtotal' => 1.5,
            ],
        ];
        parent::init();
    }
}
