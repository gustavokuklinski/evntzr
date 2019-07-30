<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
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

<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
        <div class="cover_item" style="background: url('/assets/template/img/demo.jpg');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Seu evento aqui!
                            </h2>
                            <strong class="cover-xl-text">EVNTZR</strong>
                            <p class="cover-date">
                                12-14 Fevereiro de 2018  - Rio de Janeiro - RJ.
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                Comprar ingressos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cover_item" style="background: url('/assets/template/img/demo.jpg');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                A melhor ferramenta para
                            </h2>
                            <strong class="cover-xl-text">ingressos</strong>
                            <p class="cover-date">
                                12-14 Fevereiro de 2018  - Rio de Janeiro - RJ.
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                Adquira o seu lugar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cover_nav">
        <ul class="cover_dots">
            <li class="active" data="0"><span>1</span></li>
            <li  data="1"><span>2</span></li>
            <li  data="2"><span>3</span></li>
        </ul>
    </div>
</section>
<!--cover section slider end -->

<!--event info -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 col-md-3">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            DATA
                        </h5>
                        <p>
                            12-14 Fevereiro 2018
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 col-md-3">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Localização
                        </h5>
                        <p>
                            Rio Centro,
                            Rio de Janeiro - RJ
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 col-md-3">
                <div class="icon_box_two">
                    <i class="ion-ios-pricetag-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Ingressos
                        </h5>
                        <p>
                            R$65 / 1º lote
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--event info end -->


<!--event countdown -->
<section class="bg-img pt70 pb70" style="background: url('/assets/template/img/demo.jpg');">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center color-light">Faltam para acontecer o evento!</h4>
                <div class="countdown"></div>
            </div>
        </div>
    </div>
</section>
<!--event count down end-->


<!--about the event -->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                Sobre o EVNTZR
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing eli. Integer iaculis in lacus a sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                </p>
                <p>
                    In rhoncus massa nec  sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod quis. Maecenas ornare, ex in malesuada tempus.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p>
                    In rhoncus massa nec  sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod quis. Maecenas ornare, ex in malesuada tempus.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing eli. Integer iaculis in lacus a sollicitudin. Ut hendrerit hendrerit nisl a accumsan. Pellentesque convallis consectetur tortor id placerat. Curabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
                </p>
            </div>
        </div>


    </div>
</section>
<!--about the event end -->




<!--Price section-->
<section class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
              Ingressos
            </h3>
        </div>

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

                    <div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Comprar</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!--price section end -->



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
