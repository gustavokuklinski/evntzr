<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $tickets
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

                          <h3 class="title-3 m-b-30"><?= h($tickets->name) ?></h3>



<table class="table table-borderless table-striped">
  <tr>
      <th scope="row"><?= __('Id') ?></th>
      <td><?= $this->Number->format($tickets->id) ?></td>
  </tr>
        <tr>
            <th scope="row"><?= __('Título') ?></th>
            <td><?= h($tickets->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preço') ?></th>
            <td><?= h($tickets->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lote') ?></th>
            <td><?= h($tickets->lot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição') ?></th>
            <td><?= $this->Text->autoParagraph(h($tickets->description)); ?></td>
        </tr>
    </table>
<br />

    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tickets->id], array('class' => 'btn btn-primary btn-sm')) ?>
    <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>
      <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $tickets->id], array('class' => 'btn btn-danger btn-sm'), ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
    <?php } ?>


  </div>
  </div>
  </div>

  </div>
  </div>
  </div>
  </div>
  </div>
