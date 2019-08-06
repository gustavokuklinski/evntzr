<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>
<br /><br />
<section class="mb50">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-sm-9">
            <div class="row"style="padding: 5%;">
              <div class="col-4" style="opacity: .4">
              <?php echo $this->Html->image("evntzr.png", ['style' => 'width: 100%']) ?>
              </div>

              <div class="col-4">
                <h4>e-TICKT</h4>
              </div>
              <div class="col-4" style="opacity: .4">
              <?php echo $this->Html->image("evntzr.png", ['style' => 'width: 100%']) ?>
              </div>

            </div>
<?php foreach ($client as $client): ?>
<div style="background: #d3ffd5; padding: 5%; border-width: 10px; border-style: none none dotted none;">
  <style type="text/css">
    p {
      color: #000;
    }
  </style>
    <h6 style="position: absolute;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
    right: 0;
    margin-top: 130px;
    margin-right: -102px;
    text-shadow: 1px 1px 1px #000;
    color: #00ff00"><?= md5($this->Number->format($client->id)) ?>- <?= $this->Number->format($client->id) ?></h6>
  <p>
    <strong><?= __('Nome:') ?></strong><br />
    <?= h($client->name) ?>
  </p>
  <p>
    <strong><?= __('Email:') ?></strong><br />
    <?= h($client->email) ?>
  </p>
  <p>
    <strong><?= __('Telefone:') ?></strong><br />
    <?= h($client->phone) ?>
  </p>
  <p>
    <strong><?= __('Código de transação:') ?></strong><br />
    <?= h($client->transactionhash) ?>
  </p>
  <p>
    <strong><?= __('Documento:') ?></strong><br />
    <?= h($client->document) ?>
  </p>
  <p>
    <strong><?= __('Pago?') ?></strong> <?= $client->payment ? __('Sim') : __('Não'); ?>
  </p>
  <p>
    <strong><?= __('Ingresso:') ?></strong><br />
    <?php foreach ($recentTickets as $tickets):
      if (h($client->tickets_id) == $tickets->id) {
        echo $tickets->name . " - R$" . $tickets->price;
      }
    endforeach; ?>
  </p>

  <div style="text-align: right; position: absolute; margin-right: 26px; right: 0; margin-top: -50px; opacity: .3">
    <?php foreach ($recentSettings as $setting): ?>

    <p style="font-size: 10px; line-height: 13px;"><?= h($setting->name) ?><br />
    <?= h($setting->address) ?><br /><?= h($setting->state) ?> <?= h($setting->region) ?><br />
    <?= h($setting->document) ?></p>
  <?php endforeach; ?>
  </div>
</div>

<div style="background: #000; text-align: center; padding: 5%; border-width: 10px; border-style: dotted none dotted none;">
  <p>
    <?= $this->Html->script('qrcode.min.js') ?>
    <div id="qrcode" style="width: 100%; margin: 0;"></div>
    <script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
    text: "ID:<?= $this->Number->format($client->id) ?>\nTR:<?= h($client->transactionhash) ?>\nPG:<?= $client->payment ? __('S') : __('N'); ?>",
    width: 2000,
    height: 2000,
    colorDark : "#000000",
    colorLight : "#ffffff",
    correctLevel : QRCode.CorrectLevel.H
    });
    </script>
  </p>
</div>

<?php endforeach; ?>
<div style="background: #cccc; padding: 5%; border-width: 10px; border-style: dotted none dotted none;">
  <div class="row">
    <div class="col-md-8">
  <?php foreach ($recentSettings as $setting): ?>

  <p style="font-size: 10px; line-height: 13px;"><?= h($setting->name) ?><br />
  <?= h($setting->address) ?><br /><?= h($setting->state) ?> <?= h($setting->region) ?><br />
  <?= h($setting->document) ?></p>
<?php endforeach; ?>
  <p style="font-size: 10px; line-height: 13px;">
    <?= h($client->transactionhash) ?><br />
    <?= h($client->name) ?><br />
    <?= h($client->email) ?>
  </p>
</div>
<div class="col-md-4">
  <div id="qrcode2" style="width: 100%; margin: 0;"></div>
  <script type="text/javascript">
  var qrcode = new QRCode(document.getElementById("qrcode2"), {
  text: "ID:<?= $this->Number->format($client->id) ?>\nTR:<?= h($client->transactionhash) ?>\nPG:<?= $client->payment ? __('S') : __('N'); ?>",
  width: 100,
  height: 100,
  colorDark : "#000000",
  colorLight : "#ffffff",
  correctLevel : QRCode.CorrectLevel.H
  });
  </script>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
