<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<div class="page-container">


            <!-- MAIN CONTENT-->
            <!-- MAIN CONTENT-->
                        <div class="main-content">

                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">

                                                <div class="card-body">

                                                  <h3 class="title-3 m-b-30"><?= h($user->name) ?></h3>



                                                  <table class="table table-borderless table-striped">
                                                    <tr>
                                                        <th scope="row"><?= __('Id') ?></th>
                                                        <td><?= $this->Number->format($user->id) ?></td>
                                                    </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Nome') ?></th>
                                                          <td><?= h($user->name) ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Email') ?></th>
                                                          <td><?= h($user->email) ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Permissão') ?></th>
                                                          <td><?= h($user->role) ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Criado') ?></th>
                                                          <td><?= h($user->created) ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Atualizado') ?></th>
                                                          <td><?= h($user->modified) ?></td>
                                                      </tr>
                                                  </table><br />
                                                  <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>
                                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], array('class' => 'btn btn-primary btn-sm')) ?>
                                                    <?= $this->Form->postLink(__('Exluir'), ['action' => 'delete', $user->id], array('class' => 'btn btn-danger btn-sm'), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                                  <?php } ?>
                                                </div>
                                            </div>
                                        </div>

</div>
</div>
</div>
</div>
</div>
