<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */
?>

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

                          <h3 class="title-3 m-b-30">Configuração</h3>



<table class="table table-borderless table-striped">
  <tr>
      <th scope="row"><?= __('Id') ?></th>
      <td><?= $this->Number->format($setting->id) ?></td>
  </tr>
  <tr>
      <th scope="row"><?= __('Name') ?></th>
      <td><?= h($setting->name) ?></td>
  </tr>
  <tr>
      <th scope="row"><?= __('Document') ?></th>
      <td><?= h($setting->document) ?></td>
  </tr>
  <tr>
      <th scope="row"><?= __('Address') ?></th>
      <td><?= h($setting->address) ?></td>
  </tr>
  <tr>
      <th scope="row"><?= __('State') ?></th>
      <td><?= h($setting->state) ?></td>
  </tr>
  <tr>
      <th scope="row"><?= __('Region') ?></th>
      <td><?= h($setting->region) ?></td>
  </tr>
  <tr>
      <th scope="row"><?= __('Created') ?></th>
      <td><?= h($setting->created) ?></td>
  </tr>
  <tr>
      <th scope="row"><?= __('Updated') ?></th>
      <td><?= h($setting->updated) ?></td>
  </tr>
    </table>
<br />

    <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>
      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $setting->id], array('class' => 'btn btn-primary btn-sm')) ?>
      <?= $this->Form->postLink(__('Exluir'), ['action' => 'delete', $setting->id], array('class' => 'btn btn-danger btn-sm'), ['confirm' => __('Are you sure you want to delete # {0}?', $setting->id)]) ?>
    <?php } ?>


  </div>
  </div>
  </div>

  </div>
  </div>
  </div>
  </div>
  </div>
