<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
?>

<div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">

                            <div class="header-button">

                              <div class="account-wrap">
                                  <div class="account-item clearfix js-item-menu">
                                      <div class="content">
                                          <a class="js-acc-btn" href="#">Minha conta</a>
                                      </div>
                                      <div class="account-dropdown js-dropdown">
                                          <div class="account-dropdown__footer">
                                              <?= $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')) ?>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Clientes registrados</h2>
                                    <?= $this->Html->link(__('+ Adicionar Cliente'), ['action' => 'add'], array('class' => 'au-btn au-btn-icon au-btn--blue')) ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25"></h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                      <thead>
                                          <tr>
                                              <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                              <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                              <th scope="col"><?= $this->Paginator->sort('payment') ?></th>
                                              <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                              <th scope="col" class="actions"><?= __('Actions') ?></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($clients as $client): ?>
                                          <tr>
                                              <td><?= h($client->name) ?></td>
                                              <td><?= h($client->email) ?></td>
                                              <td><?= h($client->payment) ?></td>
                                              <td><?= h($client->created) ?></td>
                                              <td class="actions">
                                                  <?= $this->Html->link(__('View'), ['action' => 'view', $client->id], array('class' => 'btn btn-primary')) ?>
                                                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id, 'class' => 'btn btn-primary'], array('class' => 'btn btn-primary')) ?>
                                                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id, 'class' => 'btn btn-primary'], array('class' => 'btn btn-danger'), ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
                                              </td>
                                          </tr>
                                          <?php endforeach; ?>
                                      </tbody>
                                    </table>
                                </div>
                                <div class="paginator">
                                    <ul class="pagination">
                                        <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
                                        <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                                        | <?= $this->Paginator->numbers() ?> |
                                        <?= $this->Paginator->next(__('Próximo') . ' >') ?>
                                        <?= $this->Paginator->last(__('Último') . ' >>') ?>
                                    </ul>
                                    <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}. Mostrando {{current}} cliente(s) de {{count}} do total')]) ?></p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
