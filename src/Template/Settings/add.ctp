<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */
?>
<div class="page-container">
<div class="main-content">

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="title-3 m-b-30">Nova configuração</h3>

                          <?= $this->Form->create($setting) ?>
    <fieldset>

            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Empresa</label>
              <?php echo $this->Form->control('name', ['class' => 'form-control', 'label' => false]); ?>
            </div>
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">CPF/CNPJ</label>
              <?php echo $this->Form->control('document', ['class' => 'form-control', 'label' => false]); ?>
            </div>
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Endereço</label>
              <?php echo $this->Form->control('address', ['class' => 'form-control', 'label' => false]); ?>
            </div>
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Estado</label>
              <?php echo $this->Form->control('state', ['class' => 'form-control', 'label' => false]); ?>
            </div>
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">UF</label>
              <?php echo $this->Form->control('region', ['class' => 'form-control', 'label' => false]); ?>
            </div>



    </fieldset>
    <?= $this->Form->button(__('Cadastrar'), ['class'=>'btn btn-primary btn-sm']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
