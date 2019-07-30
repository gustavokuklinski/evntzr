<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Static Controller
 *
 *
 * @method \App\Model\Entity\Static[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StaticController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function index() {
      $this->loadModel('Tickets');
      $recentTickets = $this->Tickets->find('all', [
          'limit' => 3,
          'order' => 'Tickets.lot ASC'
      ]);
      $this->set('recentTickets', $recentTickets);


      $this->viewBuilder()->setLayout('raw');

    }
    public function contact() {
      $this->viewBuilder()->setLayout('raw');
    }
    public function ticket() {
      $this->loadModel('Tickets');
      $recentTickets = $this->Tickets->find('all', [
          'limit' => 3,
          'order' => 'Tickets.lot ASC'
      ]);
      $this->set('recentTickets', $recentTickets);

      $this->viewBuilder()->setLayout('raw');
    }

    public function dashboard() {
      $this->loadModel('Tickets');
      $recentTickets = $this->Tickets->find('all');
      $this->set('recentTickets', $recentTickets);
      
      $this->loadModel('Clients');
      $recentClients = $this->Clients->find('all', [
          'limit' => 5,
          'order' => 'Clients.created DESC'
      ]);
      $this->set('recentClients', $recentClients);


      $recentPayClients = $this->Clients->find('all', [
          'conditions' => ['Clients.payment' => '1'],
          'limit' => 5,
          'order' => 'Clients.created DESC'
      ]);
      $this->set('recentPayClients', $recentPayClients);

    }
}
