<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <?php echo $this->Html->image("evntzr.png", ['style' => 'width: 50%']) ?>
                            </a>
                        </div>
                        <div class="login-form">
                          <?= $this->Form->create() ?>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <?php echo $this->Form->control('email', ['class' => 'au-input au-input--full', 'label' => false, 'placeholder' => 'E-mail']); ?>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <?php echo $this->Form->control('password', ['class' => 'au-input au-input--full', 'label' => false, 'placeholder' => 'Password']); ?>
                                </div>
                                <?= $this->Form->button(__('Login'), ['class'=>'au-btn au-btn--block au-btn--green m-b-20']) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
