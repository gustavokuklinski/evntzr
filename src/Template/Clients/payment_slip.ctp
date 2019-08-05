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
                          <h3 class="title-3 m-b-30">Boleto: <?= h($client->name) ?></h3>
                          <?php echo $boleto->getOutput(); ?>
                        </div>
                    </div>
                </div>

</div>
</div>
</div>
</div>
</div>
