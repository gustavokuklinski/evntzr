<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
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
            <!-- MAIN CONTENT-->
                        <div class="main-content">
                          <div class="section__content section__content--p30">
                              <div class="container-fluid">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="overview-wrap">
                                              <h2 class="title-1">Adm: <?= h($user->name) ?></h2>

                                              <?= $this->Html->link(__('Ver todos'), ['action' => 'index'], array('class' => 'au-btn au-btn-icon au-btn--blue')) ?>
                                              <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], array('class' => 'au-btn au-btn-icon au-btn--blue')) ?>
                                              <?= $this->Form->postLink(__('Exluir'), ['action' => 'delete', $user->id, 'class' => 'btn btn-primary'], array('class' => 'btn btn-danger'), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>

                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div><br />
                            <div class="section__content section__content--p30">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">

                                                <div class="card-body">
                                                  <table class="vertical-table">
                                                      <tr>
                                                          <th scope="row"><?= __('Name') ?></th>
                                                          <td><?= h($user->name) ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Email') ?></th>
                                                          <td><?= h($user->email) ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Id') ?></th>
                                                          <td><?= $this->Number->format($user->id) ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Created') ?></th>
                                                          <td><?= h($user->created) ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th scope="row"><?= __('Modified') ?></th>
                                                          <td><?= h($user->modified) ?></td>
                                                      </tr>
                                                  </table>

                                                </div>
                                            </div>
                                        </div>

</div>
</div>
</div>
</div>
</div>
