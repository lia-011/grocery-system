<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Product Controller
 *
 * @property \App\Model\Table\ProductTable $Product
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
// src/Controller/ProductsController.php

public function index()
{
    $productsTable = $this->fetchTable('Products');
    $categoriesTable = $this->fetchTable('Categories');

    $featuredProducts = $productsTable->find()
        ->where(['is_featured' => 1])
        ->all();

    // All categories
    $categories = $categoriesTable->find()->all();

    // All products
    $products = $productsTable->find()->all();

    $this->set(compact('featuredProducts', 'categories', 'products'));
}


    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Product->get($id, contain: ['Categories']);
        $this->set(compact('products'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
    $product = $this->Products->newEmptyEntity();
if ($this->request->is('post')) {
    $data = $this->request->getData();

    // Handle image upload
    if (!empty($data['image']) && $data['image']->getError() === 0) {
        $filename = time() . '_' . $data['image']->getClientFilename();
        $targetPath = WWW_ROOT . 'img/products/' . $filename;
        $data['image']->moveTo($targetPath);
        $data['image'] = $filename; // save filename to DB
    } else {
        unset($data['image']);
    }

    $product = $this->Products->patchEntity($product, $data);

    if ($this->Products->save($product)) {
        $this->Flash->success('Product added successfully.');
        return $this->redirect(['action' => 'index']);
    }

    $this->Flash->error('Failed to add product.');
}


    $categories = $this->Products->Categories->find('list', ['keyField' => 'id', 'valueField' => 'category_name']);
    $this->set(compact('products', 'categories'));
}

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Product->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Product->patchEntity($product, $this->request->getData());
            if ($this->Product->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $categories = $this->Product->Categories->find('list', limit: 200)->all();
        $this->set(compact('products', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Product->get($id);
        if ($this->Product->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
