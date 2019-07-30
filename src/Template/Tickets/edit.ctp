<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tickets $tickets
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
                          <h3 class="title-3 m-b-30">Editar ingresso</h3>

    <?= $this->Form->create($tickets) ?>
    <fieldset>

            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Título</label>
              <?php echo $this->Form->control('name', ['class' => 'form-control', 'label' => false]); ?>
            </div>
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Preço</label>
              <?php echo $this->Form->control('price', ['class' => 'form-control', 'label' => false]); ?>
            </div>
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Descrição</label>

            <?php echo $this->Form->control('description', ['class' => 'form-control', 'label' => false]); ?>
            </div>
            <div class="form-group">
              <label for="cc-payment" class="control-label mb-1">Lote</label>

              <?php echo $this->Form->control('lot',
                ['class' => 'form-control', 'label' => false, 'options' => ['0' => '1º Lote', '1' => '2º Lote', '3' => 'Lote especial']]
              );?>
            </div>


    </fieldset>
    <?= $this->Form->button(__('Atualizar'), ['class'=>'btn btn-primary btn-sm']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
