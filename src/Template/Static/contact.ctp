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
                        Contato
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="/">Home</a>  | </li>
                <li><span>Contato</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->


<!--contact section -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row justify-content-center mt100">
            <div class="col-md-6 col-12">
                <div class="contact_info">
                    <h5>
                        EVNTZR é para você!
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

                    <ul class="icon_list pt50">
                        <li>
                            <i class="ion-location"></i>
                            <span>
                                        Estrada do Joá<br/>
                                        Rio de Janeiro, RJ
                            </span>
                        </li>
                        <li>
                            <i class="ion-ios-telephone"></i>
                            <span>
                                       +55 21 9999 9999
                                </span>
                        </li>
                        <li>
                            <i class="ion-email-unread"></i>
                            <span>
                                    contato@evntzr.rocks
                                </span>
                        </li>

                        <li>
                            <i class="ion-planet"></i>
                            <span>
                                    www.evntzr.rocks
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="contact_form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Assunto">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" cols="4" rows="4" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-rounded btn-primary">ENVIAR</button>
                    </div>
                </div>
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
                Adquira seu ingresso!
            </h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 text-md-left text-center color-light">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec gravida tempus. Integer iaculis in aazzzCurabitur a pulvinar nunc. Maecenas laoreet finibus lectus, at volutpat ligula euismod.
            </div>
            <div class="col-md-3 text-md-right text-center">
                <a href="#" class="btn btn-primary btn-rounded mt30">Comprar</a>
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
