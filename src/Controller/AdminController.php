<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

class AdminController extends AppController
{
    public function dashboard()
    {
        $this->viewBuilder()->setLayout('admin');
        // Admin-only protection
        if ($this->request->getSession()->read('Auth.role') !== 1) {
            $this->Flash->error('You are not authorized.');
            return $this->redirect(['controller' => 'Pages', 'action' => 'display', 'home']);
        }

        $usersTable = $this->fetchTable('Users');
        $productsTable = $this->fetchTable('Product');
        $ordersTable = $this->fetchTable('Orders');

        $totalUsers = $usersTable->find()->count();
        $totalProducts = $productsTable->find()->count();
        $totalOrders = $ordersTable->find()->count();

        $this->set(compact('totalUsers', 'totalProducts', 'totalOrders'));
    }
}
