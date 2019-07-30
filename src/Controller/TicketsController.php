<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


/**
 * Tickets Controller
 *
 * @property \App\Model\Table\TicketsTable $Tickets
 *
 * @method \App\Model\Entity\Tickets[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TicketsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);
        $this->Auth->deny();
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tickets = $this->paginate($this->Tickets);

        $this->set(compact('tickets'));
    }

    /**
     * View method
     *
     * @param string|null $id Tickets id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tickets = $this->Tickets->get($id, [
            'contain' => []
        ]);

        $this->set('tickets', $tickets);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tickets = $this->Tickets->newEntity();
        if ($this->request->is('post')) {
            $tickets = $this->Tickets->patchEntity($tickets, $this->request->getData());
            if ($this->Tickets->save($tickets)) {
                $this->Flash->success(__('The tickets has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tickets could not be saved. Please, try again.'));
        }
        $this->set(compact('tickets'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tickets id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tickets = $this->Tickets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tickets = $this->Tickets->patchEntity($tickets, $this->request->getData());
            if ($this->Tickets->save($tickets)) {
                $this->Flash->success(__('The tickets has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tickets could not be saved. Please, try again.'));
        }
        $this->set(compact('tickets'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tickets id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tickets = $this->Tickets->get($id);
        if ($this->Tickets->delete($tickets)) {
            $this->Flash->success(__('The tickets has been deleted.'));
        } else {
            $this->Flash->error(__('The tickets could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
