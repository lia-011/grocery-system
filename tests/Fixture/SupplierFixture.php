<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SupplierFixture
 */
class SupplierFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'supplier';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'supplier_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'contact_number' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'address' => 1,
            ],
        ];
        parent::init();
    }
}
