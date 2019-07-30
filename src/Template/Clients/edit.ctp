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

    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">

                          <h3 class="title-3 m-b-30">Editar cliente</h3>

                            <?= $this->Form->create($client) ?>

                                <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Nome</label>
                                  <?php echo $this->Form->control('name', ['class' => 'form-control', 'label' => false]); ?>
                                </div>
                                <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">E-mail</label>
                                  <?php echo $this->Form->control('email', ['class' => 'form-control', 'label' => false]); ?>
                                </div>
                                <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Gênero</label>
                                  <?php
                                    echo $this->Form->control('genre', ['class' => 'form-control', 'label' => false, 'options' => ['0' => 'Mulher', '1' => 'Homen', '2' => 'Outro']]);
                                  ?>
                                </div>
                                <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Telefone</label>
                                  <?php echo $this->Form->control('phone', ['class' => 'form-control', 'label' => false]); ?>
                                </div>
                                <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Data de nascimento</label>
                                  <?php
                                    echo $this->Form->control('birthday',
                                      [
                                        'type' => 'date',
                                        'class' => 'form-control',
                                        'label' => false,
                                        'minYear' => 1920,
                                        'monthNames' => false,
                                      ]
                                    );
                                  ?>
                                </div>
                                <div class="form-group">
                                  <?php foreach ($recentTickets as $tickets):
                                    echo $this->Form->radio('tickets_id',[
                                      ['value' => $tickets->id, 'text' => $tickets->name]
                                    ]);
                                  endforeach; ?>
                                </div>
                                <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Documento(CPF)</label>
                                  <?php echo $this->Form->control('document', ['class' => 'form-control', 'label' => false]); ?>
                                </div>
                                <div class="form-group">
                                  <label for="cc-payment" class="control-label mb-1">Pago?</label>
                                  <?php echo $this->Form->control('payment', ['label' => false]); ?>
                                </div>

                                <div>
                                  <?php echo $this->Form->hidden('transactionhash', ['value' => md5(uniqid(time(), true))]); ?>

                                  <?= $this->Form->button(__('Atualizar'), ['class'=>'btn btn-primary btn-sm']) ?>
                                  <?= $this->Form->postLink(__('Exluir'), ['action' => 'delete', $client->id], array('class' => 'btn btn-danger btn-sm'), ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>

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
