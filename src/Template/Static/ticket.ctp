<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="#">
          <?php echo $this->Html->image("evntzr.png", ['style' => 'width: 68%']) ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <?= $this->Html->link('Ingressos', ['action' => 'ticket'], ['class'=>'nav-link']) ?>
                </li>
                <li class="nav-item">
                  <?= $this->Html->link('Contato', ['action' => 'contact'], ['class'=>'nav-link']) ?>
                </li>

            </ul>
        </div>
    </div>
</header>
<!--header end here-->
<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="/assets/template/img/demo.jpg">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                        Ingressos
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  | </li>
                <li><span>Ingressos</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

<br /><br />
<!--Price section-->
<section class="mb50">
    <div class="container">
        <div class="row justify-content-center">

          <?php foreach ($recentTickets as $tickets): ?>
            <div class="col-md-4 col-12">
                <div class="price_box active">
                    <div class="price_highlight">
                        <?php if(h($tickets->lot) == "0"){echo '1º Lote';} else if(h($tickets->lot) == "1"){echo '2º Lote';} else {echo 'Lote especial';} ?>
                    </div>
                   <div class="price_header">
                       <h4>
                           <?= h($tickets->name) ?>
                       </h4>
                   </div>
                    <div class="price_tag">
                        <?= h($tickets->price) ?> <sup>R$</sup>
                    </div>
                    <div class="price_features">
                        <?= h($tickets->description) ?>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!--price section end -->
<!--contact section -->
<section class="pb100">
    <div class="container">
        <div class="row justify-content-center mt100">
            <div class="col-md-6 col-12">
                <div class="contact_info">
                    <h5>
                        Garanta seu ingresso!
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in lacus a sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                    </p>
                    <ul class="social_list">
                        <li>
                            <a href="https://facebook.com" target="_blank"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com" target="_blank"><i class="ion-social-instagram"></i></a>
                        </li>
                    </ul>


                </div>
            </div>
            <div class="col-md-6 col-12">
                * Atenção, aceitamos apenas 1 ingresso por pessoa
                <?= $this->Form->create('client', array('url'=>array('controller'=>'Clients', 'action'=>'add'))) ?>

                    <div class="form-group">
                      <?php echo $this->Form->control('name', ['class' => 'form-control', 'label' => false, 'placeholder'=>'Nome completo']); ?>
                    </div>
                    <div class="form-group">
                      <?php echo $this->Form->control('email', ['class' => 'form-control', 'label' => false, 'placeholder'=>'E-mail']); ?>
                    </div>
                    <div class="form-group">
                      <?php echo $this->Form->control('genre', ['class' => 'form-control', 'label' => false, 'options' => ['0' => 'Mulher', '1' => 'Homem', '2' => 'Outro']]); ?>
                    </div>


                    <div class="form-group">
                      <?php foreach ($recentTickets as $tickets):
                        echo $this->Form->radio('tickets_id', [
                          [
                          'value' => $tickets->id,
                          'text' => $tickets->name
                          ]
                        ]);
                      endforeach; ?>


                    </div>


                    <div class="form-group">
                      <?php echo $this->Form->control('phone', ['class' => 'form-control', 'label' => false, 'placeholder'=>'Telefone']); ?>
                    </div>
                    <div class="form-group">
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
                      <?php echo $this->Form->control('document', ['class' => 'form-control', 'label' => false, 'placeholder'=>'CPF']); ?>
                    </div>
                    <div class="form-group text-right">
                      <?php echo $this->Form->hidden('payment', ['label' => false]); ?>
                      <?php echo $this->Form->hidden('transactionhash', ['value' => md5(uniqid(time(), true))]); ?>

                      <?= $this->Form->button(__('Garantir meu ingresso!'), ['class'=>'btn btn-rounded btn-primary']) ?>
                    </div>
                <?= $this->Form->end() ?>

            </div>
        </div>
    </div>
</section>
<!--contact section end -->



<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background: url('/assets/template/img/demo.jpg');">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                Dúvidas?
            </h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 text-md-left text-center color-light">
              Em caso de dúvidas para adquirir seu ingresso ou se desejar comprar por telefone, entre em contato conosco!<br />Estaremos felizes em poder ajudar trazendo o melhor atendimento possível!
            </div>
            <div class="col-md-3 text-md-right text-center">
              <?= $this->Html->link('Fale conosco!', ['action' => 'contact'], ['class'=>'btn btn-primary btn-rounded mt30']) ?>

            </div>
        </div>
    </div>
</section>
<!--get tickets section end-->

<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">

            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Ingressos</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->
