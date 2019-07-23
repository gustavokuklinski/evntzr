<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
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
                                              <h2 class="title-1">Editar Administrador</h2>
                                              <?= $this->Html->link(__('Ver todos'), ['action' => 'index'], array('class' => 'au-btn au-btn-icon au-btn--blue')) ?>
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

                                                    <?= $this->Form->create($user) ?>

                                                        <div class="form-group">
                                                          <label for="cc-payment" class="control-label mb-1">Nome</label>
                                                          <?php echo $this->Form->control('name', ['class' => 'form-control', 'label' => false]); ?>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="cc-payment" class="control-label mb-1">E-mail</label>
                                                          <?php echo $this->Form->control('email', ['class' => 'form-control', 'label' => false]); ?>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="cc-payment" class="control-label mb-1">Senha</label>
                                                          <?php echo $this->Form->control('password', ['class' => 'form-control', 'label' => false]); ?>
                                                        </div>

                                                        <div>
                                                          <?= $this->Form->button(__('Atualizar'), ['class'=>'btn btn-lg btn-info btn-block']) ?>
                                                        </div>
                                                    <?= $this->Form->end() ?>
                                                </div>
                                            </div>
                                        </div>

</div>
</div>
</div>
</div>
</div>
