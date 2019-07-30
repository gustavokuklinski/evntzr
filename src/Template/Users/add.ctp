<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\User $user
*/
?>

<div class="page-container">
  <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>


<!-- MAIN CONTENT-->
<!-- MAIN CONTENT-->
<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Novo Administrador</h2>
                <?= $this->Html->link(__('Ver todos'), ['action' => 'index'], array('class' => 'au-btn au-btn-icon au-btn--blue')) ?>
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
                            <label for="cc-payment" class="control-label mb-1">Permissão</label>
                            <?php echo $this->Form->control('role', ['class' => 'form-control', 'label' => false, 'options' => ['admin' => 'Administrador', 'manager' => 'Gerente']]); ?>
                          </div>
                          <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Senha</label>
                            <?php echo $this->Form->control('password', ['class' => 'form-control','label' => false]); ?>
                          </div>

                          <div>

                            <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-primary btn-sm']) ?>
                          </div>
                      <?= $this->Form->end() ?>
                  </div>
              </div>
          </div>

</div>
</div>
</div>
</div>
<?php } else { ?>
<div class="main-content">
  <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="overview-wrap">
                      <h2 class="title-1">Sem permissão de acesso</h2>
                  </div>
              </div>
          </div>
        </div>
      </div>
</div>
<?php } ?>
</div>
</div>
