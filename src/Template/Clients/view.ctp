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

                          <h3 class="title-3 m-b-30"><?= h($client->name) ?></h3>

                          <table class="table table-borderless table-striped">
                              <tr>
                                  <th scope="row"><?= __('Id') ?></th>
                                  <td><?= $this->Number->format($client->id) ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Nome') ?></th>
                                  <td><?= h($client->name) ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Email') ?></th>
                                  <td><?= h($client->email) ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Gênero') ?></th>
                                  <td><?php if(h($client->genre) === "0") { echo "Mulher"; } elseif (h($client->genre) === "1") {echo "Homem";} else {echo "Outro";} ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Telefone') ?></th>
                                  <td><?= h($client->phone) ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Aniversário') ?></th>
                                  <td><?= h($client->birthday) ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Código de transação') ?></th>
                                  <td><?= h($client->transactionhash) ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Criado') ?></th>
                                  <td><?= h($client->created) ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Modificado') ?></th>
                                  <td><?= h($client->modified) ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Pago?') ?></th>
                                  <td><?= $client->payment ? __('Sim') : __('Não'); ?></td>
                              </tr>
                              <tr>
                                  <th scope="row"><?= __('Ingresso') ?></th>
                                  <td>
                                    <?php foreach ($recentTickets as $tickets):
                                      if (h($client->tickets_id) == $tickets->id) {
                                        echo $tickets->name . " - R$" . $tickets->price;
                                      }
                                    endforeach; ?>
                                  </td>
                              </tr>
                              <tr>
                                <?= $this->Html->script('qrcode.min.js') ?>
                                <th scope="row">QR Code</th>
                                <td>
                                  <div id="qrcode"></div>
                                </td>
                                <script type="text/javascript">
                                var qrcode = new QRCode(document.getElementById("qrcode"), {
                                text: "ID:<?= $this->Number->format($client->id) ?>\nTR:<?= h($client->transactionhash) ?>\nPG:<?= $client->payment ? __('S') : __('N'); ?>",
                                width: 128,
                                height: 128,
                                colorDark : "#000000",
                                colorLight : "#ffffff",
                                correctLevel : QRCode.CorrectLevel.H
                                });
                                </script>
                              </tr>

                          </table><br />
                          <?= $this->Html->link(__('Editar'), ['action' => 'edit', $client->id], array('class' => 'btn btn-primary btn-sm')) ?>

                          <?= $this->Html->link(__('Gerar Boleto'), ['action' => 'paymentSlip', $client->id], array('class' => 'btn btn-primary btn-sm')) ?>


                          <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], array('class' => 'btn btn-danger btn-sm'), ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
                          <?php } ?>
                        </div>
                    </div>
                </div>

</div>
</div>
</div>
</div>
</div>
