<?php
declare(strict_types=1);

namespace App\Controller;

class ShopController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('shop');
        $products = $this->fetchTable('Product')->find()->all();
        $categories = $this->fetchTable('Categories')->find()->all();

        $this->set(compact('products', 'categories'));
    }
}

