<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inventory Model
 *
 * @method \App\Model\Entity\Inventory newEmptyEntity()
 * @method \App\Model\Entity\Inventory newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Inventory> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inventory get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Inventory findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Inventory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Inventory> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inventory|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Inventory saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Inventory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Inventory>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Inventory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Inventory> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Inventory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Inventory>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Inventory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Inventory> deleteManyOrFail(iterable $entities, array $options = [])
 */
class InventoryTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('inventory');
        $this->setDisplayField('inventory_id');
        $this->setPrimaryKey('inventory_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('product_id')
            ->requirePresence('product_id', 'create')
            ->notEmptyString('product_id');

        $validator
            ->integer('supplier_id')
            ->requirePresence('supplier_id', 'create')
            ->notEmptyString('supplier_id');

        $validator
            ->integer('quantity_added')
            ->requirePresence('quantity_added', 'create')
            ->notEmptyString('quantity_added');

        $validator
            ->dateTime('date_added')
            ->requirePresence('date_added', 'create')
            ->notEmptyDateTime('date_added');

        return $validator;
    }
}
