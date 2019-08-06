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

    <?= $this->Html->css('/assets/template/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/assets/template/css/font-awesome.min.css') ?>
    <?= $this->Html->css('/assets/template/css/et-line.css') ?>
    <?= $this->Html->css('/assets/template/css/ionicons.min.css') ?>
    <?= $this->Html->css('/assets/template/css/owl.carousel.min.css') ?>
    <?= $this->Html->css('/assets/template/css/owl.theme.default.min.css') ?>
    <?= $this->Html->css('/assets/template/css/animate.min.css') ?>
    <?= $this->Html->css('/assets/template/css/main.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>




    <?= $this->fetch('content') ?>


    <?= $this->Html->script('/assets/template/js/jquery.min.js') ?>
    <?= $this->Html->script('/assets/template/js/popper.js') ?>
    <?= $this->Html->script('/assets/template/js/bootstrap.min.js') ?>
    <?= $this->Html->script('/assets/template/js/waypoints.min.js') ?>
    <?= $this->Html->script('/assets/template/js/owl.carousel.min.js') ?>
    <?= $this->Html->script('/assets/template/js/parallax.min.js') ?>
    <?= $this->Html->script('/assets/template/js/jquery.counterup.min.js') ?>
    <?= $this->Html->script('/assets/template/js/jquery.countdown.min.js') ?>
    <?= $this->Html->script('/assets/template/js/wow.min.js') ?>
    <?= $this->Html->script('/assets/template/js/main.js') ?>

</body>
</html>
