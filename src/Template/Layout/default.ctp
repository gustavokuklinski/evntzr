<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

    <!-- Fontfaces CSS-->
    <?= $this->Html->css('/assets/admin/css/font-face.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/bootstrap-4.1/bootstrap.min.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/animsition/animsition.min.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/wow/animate.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/css-hamburgers/hamburgers.min.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/slick/slick.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/select2/select2.min.css') ?>
    <?= $this->Html->css('/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>
    <?= $this->Html->css('/assets/admin/css/theme.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="animsition">
    <!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1>?= //$this->Html->link(__('HOME'), ['controller' => 'static', 'action' => 'index']) ?></h1>
            </li>
            ?php //if($this->Session->read('Auth')) { ?>
              <li class="name"> ?= //$this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')) ?></li>
              <li class="name"> ?= //$this->Html->link('Admin', array('controller' => 'users', 'action' => 'index')) ?></li>
              <li class="name"> ?= //$this->Html->link('Clients', array('controller' => 'clients', 'action' => 'index')) ?></li>
            ?php // } else { ?>
              <li class="name"> ?= //$this->Html->link('Login', array('controller' => 'users', 'action' => 'login')) ?></li>
          ?php // } ?>
        </ul>
        <div class="top-bar-section">
          <ul>

          </ul>
        </div>
    </nav> -->
<?= $this->Flash->render() ?>
    <div class="page-wrapper">

      <?php if($this->Session->read('Auth')) { ?>
      <?php include('menu.ctp') ?>
      <?php } ?>


    <?= $this->fetch('content') ?>
  </div>

    <!-- <div class="container clearfix">
    </div>
    <footer>
    </footer>-->

    <?= $this->Html->script('/assets/admin/vendor/jquery-3.2.1.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/bootstrap-4.1/popper.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/bootstrap-4.1/bootstrap.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/slick/slick.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/wow/wow.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/animsition/animsition.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/counter-up/jquery.waypoints.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/counter-up/jquery.counterup.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/circle-progress/circle-progress.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/chartjs/Chart.bundle.min.js') ?>
    <?= $this->Html->script('/assets/admin/vendor/select2/select2.min.js') ?>
    <?= $this->Html->script('/assets/admin/js/main.js') ?>

</body>
</html>
