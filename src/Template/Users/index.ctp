<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="page-container">


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card">
                                  <div class="card-body">

                                    <h3 class="title-3 m-b-30">Administradores registrados</h3>
                                    <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>

                                      <?= $this->Html->link(__('+ Adicionar Administrador'), ['action' => 'add'], array('class' => 'btn btn-primary btn-sm')) ?>

                                    <?php } ?>
                                    <br /><br />
                                <div class="m-b-40">
                                    <table class="table table-borderless table-striped">
                                      <tbody>
                                        <tr>
                                            <td scope="col"><?= $this->Paginator->sort('id') ?></td>
                                            <td scope="col"><?= $this->Paginator->sort('name') ?></td>
                                            <td scope="col"><?= $this->Paginator->sort('email') ?></td>
                                            <td scope="col"><?= $this->Paginator->sort('role') ?></td>
                                            <td scope="col" class="actions"><?= __('Ações') ?></td>
                                        </tr>
                                          <?php foreach ($users as $user): ?>
                                          <tr>
                                              <td><?= $this->Number->format($user->id) ?></td>
                                              <td><?= h($user->name) ?></td>
                                              <td><?= h($user->email) ?></td>
                                              <td>
                                                <?php if(h($user->role) === 'admin') { echo "Administrador"; } else { echo "Gerente"; } ?>
                                              </td>
                                              <td class="actions">
                                                  <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], array('class' => 'btn btn-primary btn-sm')) ?>

                                                  <?php if($this->Session->read('Auth.User.role') === 'admin' || $this->Session->read('Auth.User.role') === 'god') { ?>
                                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], array('class' => 'btn btn-primary btn-sm')) ?>
                                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], array('class' => 'btn btn-danger btn-sm'), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                                  <?php } ?>

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
                                    <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}. Mostrando {{current}} de {{count}} do total')]) ?></p>
                                </div>
                                </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
