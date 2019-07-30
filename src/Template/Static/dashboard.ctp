<div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content">

                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                          <div class="col-lg-6">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h3 class="title-3 m-b-40">Clientes cadastrados</h3>

                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-striped">
                                              <tbody>
                                                <tr>
                                                    <td scope="col"><?= __('Nome') ?></td>
                                                    <td scope="col"><?= __('Data') ?></td>

                                                    <td scope="col" class="actions"></td>
                                                </tr>
                                                  <?php foreach ($recentClients as $client): ?>
                                                  <tr>
                                                      <td><?= h($client->name) ?></td>
                                                      <td><?= h($client->created) ?></td>

                                                      <td class="actions">
                                                          <?= $this->Html->link(__('Ver'), ['controller'=>'clients', 'action' => 'view', $client->id], array('class' => 'btn btn-primary btn-sm')) ?>

                                                      </td>
                                                  </tr>
                                                  <?php endforeach; ?>
                                              </tbody>
                                            </table>
                                        </div>
                                        <?= $this->Html->link(__('Ver todos'), ['controller' => 'clients', 'action' => 'index'], array('class' => 'btn btn-primary btn-sm')) ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                  <div class="card m-b-30">
                                      <div class="card-body">
                                          <h3 class="title-3 m-b-40">Clientes Pagos</h3>

                                          <div class="table-responsive m-b-40">
                                              <table class="table table-borderless table-striped">
                                                <tbody>
                                                  <tr>
                                                      <td scope="col"><?= __('Nome') ?></td>
                                                      <td scope="col"><?= __('CPF') ?></td>
                                                      <td scope="col"><?= __('Pago?') ?></td>
                                                      <td scope="col"><?= __('Ingresso') ?></td>
                                                      <td scope="col" class="actions"></td>
                                                  </tr>
                                                    <?php foreach ($recentPayClients as $client): ?>
                                                    <tr>
                                                        <td><?= h($client->name) ?></td>
                                                        <td><?= h($client->document) ?></td>
                                                        <td>
                                                          <?php if(h($client->payment) == 0) { echo "Não"; } else { echo "Sim"; } ?>
                                                        </td>
                                                        <td>
                                                          <?php foreach ($recentTickets as $tickets):
                                                            if (h($client->tickets_id) == $tickets->id) {
                                                              echo $tickets->name;
                                                            }
                                                          endforeach; ?>

                                                        </td>
                                                        <td class="actions">
                                                            <?= $this->Html->link(__('Ver'), ['controller'=>'clients', 'action' => 'view', $client->id], array('class' => 'btn btn-primary btn-sm')) ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                              </table>
                                          </div>
                                          <?= $this->Html->link(__('Ver todos'), ['controller' => 'clients', 'action' => 'index'], array('class' => 'btn btn-primary btn-sm')) ?>
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
