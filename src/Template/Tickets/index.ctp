<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tickets[]|\Cake\Collection\CollectionInterface $tickets
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
                                    <h3 class="title-3 m-b-30">Ingressos</h3>
                                    <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>
                                      <?= $this->Html->link(__('+ Adicionar ingresso'), ['action' => 'add'], array('class' => 'btn btn-primary btn-sm')) ?>
                                    <?php } ?>
                                    <br /><br />
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Título') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Preço') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Lote') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tickets as $tickets): ?>
            <tr>
                <td><?= $this->Number->format($tickets->id) ?></td>
                <td><?= h($tickets->name) ?></td>
                <td><?= h($tickets->price) ?></td>
                <td><?= h($tickets->lot) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $tickets->id], array('class' => 'btn btn-primary btn-sm')) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tickets->id], array('class' => 'btn btn-primary btn-sm')) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $tickets->id], array('class' => 'btn btn-danger btn-sm'), ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
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
