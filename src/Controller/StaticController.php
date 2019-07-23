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
      $this->viewBuilder()->setLayout('raw');
    }
    public function about() {
      $this->viewBuilder()->setLayout('raw');
    }
}
