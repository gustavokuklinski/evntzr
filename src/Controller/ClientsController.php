<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

// Utiliza o OpenBoleto para gerar boleto bancário, precisa configurar o banco
use OpenBoleto\Banco\Itau;
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
      $this->Auth->allow('add', 'view');
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

    // Gera a emissão do boleto
    public function paymentSlip($id = null)
    {

      $this->loadModel('Tickets');
      $recentTickets = $this->Tickets->find('all');
      $this->set('recentTickets', $recentTickets);

      $this->loadModel('Settings');
      $recentSettings = $this->Settings->find('all');
      $this->set('recentSettings', $recentSettings);

      $client = $this->Clients->get($id, [
          'contain' => []
      ]);

      $this->set('client', $client);


      // pega informação dos ingressos
      foreach ($recentTickets as $tickets):
          $ticketPrice = floatval($tickets->price);
          $ticketName = $tickets->name;
      endforeach;

      foreach ($recentSettings as $settings):
          $companyName = $settings->name;
          $companyDocument = $settings->document;
          $companyAddress = $settings->address;
          $companyState = $settings->state;
          $companyRegion = $settings->region;

      endforeach;

      // Boleto
      $sacado = new Agente($client->name, "CPF: " . $client->document);
      $cedente = new Agente($companyName, "CPF/CNPJ: <br />" . $companyDocument, $companyAddress, '00000-000', $companyState, $companyRegion);

      // Configura o banco com os dados necessários
      $boleto = new Itau(array(
          // Parâmetros obrigatórios
          'dataVencimento' => new \DateTime('2019-09-20'),
          'valor' => $ticketPrice,
          'sequencial' => 1234567, // Para gerar o nosso número
          'sacado' => $sacado,
          'cedente' => $cedente,
          'agencia' => 1724, // Até 4 dígitos
          'carteira' => 112,
          'conta' => 1040, // Até 8 dígitos
          'convenio' => 1234, // 4, 6 ou 7 dígitos
          'instrucoes' => array(
            'Pagar até o vencimento',
            'Ingresso: ' . $tickets->name,
            'Gerado com: EVTZR'
          )
      ));

      $this->set('boleto', $boleto);
    }
}
