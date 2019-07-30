<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

use OpenBoleto\Banco\BancoDoBrasil;
use OpenBoleto\Agente;

/**
 * Clients Controller
 *
 * @property \App\Model\Table\ClientsTable $Clients
 *
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientsController extends AppController
{
  public function beforeFilter(Event $event)
  {
     // allow all action
      $this->Auth->allow('add');
  }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $clients = $this->paginate($this->Clients);

        $this->set(compact('clients'));
    }

    /**
     * View method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('Tickets');
        $recentTickets = $this->Tickets->find('all');
        $this->set('recentTickets', $recentTickets);

        $client = $this->Clients->get($id, [
            'contain' => []
        ]);

        $this->set('client', $client);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      $this->loadModel('Tickets');
      $recentTickets = $this->Tickets->find('all');
      $this->set('recentTickets', $recentTickets);

        $client = $this->Clients->newEntity();
        if ($this->request->is('post')) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {

              if($this->Auth->user()) {
                $this->Flash->success(__('The client has been saved.'));
                return $this->redirect(['action' => 'index']);

              } else {
                return $this->redirect(['controller' => 'Static', 'action' => 'index']);

              }

            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $this->set(compact('client'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
      $this->loadModel('Tickets');
      $recentTickets = $this->Tickets->find('all');
      $this->set('recentTickets', $recentTickets);

        $client = $this->Clients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $client = $this->Clients->patchEntity($client, $this->request->getData());
            if ($this->Clients->save($client)) {
                $this->Flash->success(__('The client has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The client could not be saved. Please, try again.'));
        }
        $this->set(compact('client'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Client id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $client = $this->Clients->get($id);
        if ($this->Clients->delete($client)) {
            $this->Flash->success(__('The client has been deleted.'));
        } else {
            $this->Flash->error(__('The client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function gerarBoleto($id = null)
    {
      $this->loadModel('Tickets');
      $recentTickets = $this->Tickets->find('all');
      $this->set('recentTickets', $recentTickets);

      $client = $this->Clients->get($id, [
          'contain' => []
      ]);

      $this->set('client', $client);

      $sacado = new Agente($client->name, "CPF: " . $client->document);
      $cedente = new Agente('EVNTZR', '000.000.000-00', 'Estrada Rua, 0000', '00000-000', 'Estado', 'UF');

      foreach ($recentTickets as $tickets):
          $ticketPrice = floatval($tickets->price);
          $ticketName = $tickets->name;
      endforeach;


      $boleto = new BancoDoBrasil(array(
          // Parâmetros obrigatórios
          'dataVencimento' => new \DateTime('2019-09-20'),
          'valor' => $ticketPrice,
          'sequencial' => 1234567, // Para gerar o nosso número
          'sacado' => $sacado,
          'cedente' => $cedente,
          'agencia' => 1724, // Até 4 dígitos
          'carteira' => 18,
          'conta' => 10403005, // Até 8 dígitos
          'convenio' => 1234, // 4, 6 ou 7 dígitos
          'descricaoDemostrativo' => array(
            'Ingresso: ' . $tickets->name,
            'EVTZR'
          )
      ));

      echo $boleto->getOutput();
    }
}
