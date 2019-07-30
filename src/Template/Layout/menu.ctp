<!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                          <?php echo $this->Html->image("evntzr.png", ['style' => 'width: 50%']) ?>

                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">

                  <ul class="list-unstyled navbar__list">
                      <li>
                        <?= $this->Html->link('Dashboard', array('controller' => 'static', 'action' => 'dashboard')) ?>
                      </li>
                      <li>
                          <?= $this->Html->link('Clientes', array('controller' => 'clients', 'action' => 'index')) ?>
                      </li>
                      <li>
                          <?= $this->Html->link('Ingressos', array('controller' => 'tickets', 'action' => 'index')) ?>
                      </li>
                      <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>
                        <li>
                            <?= $this->Html->link('Administradores', array('controller' => 'users', 'action' => 'index')) ?>
                        </li>
                      <?php } ?>
                      <li>
                        <?= $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')) ?>
                      </li>

                  </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                  <?php echo $this->Html->image("evntzr.png", ['style' => 'width: 50%']) ?>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                          <?= $this->Html->link('Dashboard', array('controller' => 'static', 'action' => 'dashboard')) ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Clientes', array('controller' => 'clients', 'action' => 'index')) ?>
                        </li>
                        <li>
                            <?= $this->Html->link('Ingressos', array('controller' => 'tickets', 'action' => 'index')) ?>
                        </li>
                        <?php if($this->Session->read('Auth.User.role') === 'admin') { ?>
                          <li>
                              <?= $this->Html->link('Administradores', array('controller' => 'users', 'action' => 'index')) ?>
                          </li>
                        <?php } ?>
                        <li>
                          <?= $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')) ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
