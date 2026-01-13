<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Http\Exception\NotFoundException;
use Cake\Auth\DefaultPasswordHasher;


/**
 * Users Controller
 *
 * Handles user registration, login, logout, and admin CRUD
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }
    
public function register()
{
    $this->viewBuilder()->setLayout('auth');
    $user = $this->Users->newEmptyEntity();

    if ($this->request->is('post')) {
        $data = $this->request->getData();
        $data['role'] = 0;
        $data['created_at'] = date('Y-m-d H:i:s');

        $user = $this->Users->patchEntity($user, $data);

if ($this->Users->save($user)) {
    $this->Flash->success('Registration successful. Please login.');
    $this->set('redirectAfter', true);
} else {
    $this->Flash->error('Registration failed. Please try again.');
}
    }
$this->set(compact('user'));
}

    /**
     * Login method for users
     */
public function login()
{
     $this->viewBuilder()->setLayout('auth');
    if ($this->request->is('post')) {
        $username = $this->request->getData('username');
        $password = $this->request->getData('password');

        $user = $this->Users->find()
            ->where(['username' => $username])
            ->first();

       if ($user && password_verify($password, $user->password)) {
    // Save user to session
    $this->request->getSession()->write('Auth', [
        'user_id' => $user->user_id,
        'username' => $user->username,
        'role' => $user->role
    ]);

    // Redirect based on role
    if ($user->role === 1) {
        return $this->redirect(['controller' => 'Admin', 'action' => 'dashboard']);
    }

    return $this->redirect(['controller' => 'Shop', 'action' => 'index']);
       }
    }
}

    /**
     * Logout method
     */
    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $this->Authentication->logout();
        }
        return $this->redirect('/');
    }

    /**
     * Admin: list all users
     */
    public function index()
    {
        // Only admin can access
        $this->Authorization->authorize($this->Users->newEmptyEntity());

        $query = $this->Users->find();
        $users = $this->paginate($query);
        $this->set(compact('users'));
    }

    /**
     * Admin: view single user
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    /**
     * Admin: edit user
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be updated. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Admin: delete user
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
