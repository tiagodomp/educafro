<?php
/**
 * Created by PhpStorm.
 * User: Tiago Pereira
 * Date: 17/01/2019
 * Time: 02:54
 */

/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
use Cake\Core\Configure;
?>

<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
    <div class="sparkline8-list mt-b-30">
        <div class="sparkline8-hd">
            <div class="main-sparkline8-hd">
                <h1><?= __("Seja Bem vindo ao portal Educafro"); ?></h1>
            </div>
        </div>
        <div class="sparkline8-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="login-social-inner">
                            <a href="#" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i class="fa fa-facebook"></i></span>Facebook</a>
                            <a href="#" class="button btn-social basic-ele-mg-b-10 googleplus span-left"> <span><i class="fa fa-google-plus"></i></span>Google</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="basic-login-inner">
                            <h3><?= __("Faça Login"); ?></h3>
                            <?= $this->Flash->render('auth') ?>
                            <?= $this->Form->create() ?>
                                <div class="form-group-inner">
                                    <?= $this->Form->control('email', ['label' => __d('CakeDC/Users', ' Seu email '), 'class' => 'form-control', 'required' => true, 'placeholder' => 'email@email.com']) ?>
                                </div>
                                <div class="form-group-inner">
                                    <?= $this->Form->control('password', ['label' => __d('CakeDC/Users', ' Sua Senha '), 'class' => 'form-control', 'required' => true, 'placeholder' => 'email@email.com']) ?>
                                </div>
                                <div class="login-btn-inner">
                                    <div class="inline-remember-me">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                        <?php if (Configure::read('Users.RememberMe.active')) {
                                            echo $this->Form->control(Configure::read('Users.Key.Data.rememberMe'), [
                                                'type' => 'checkbox',
                                                'label' => __d('CakeDC/Users', 'Remember me'),
                                                'checked' => Configure::read('Users.RememberMe.checked'),
                                                'class' => 'custom-control-input',
                                                'id' => 'customControlAutosizing'
                                            ]);
                                        } ?>
                                        </div>
                                        <?= implode(' ', $this->User->socialLoginList()); ?>
                                        <?= $this->Form->button(__d('CakeDC/Users', 'Login')); ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="basic-login-inner">
                            <h3><?= __("Ainda não tem cadastro")?></h3>
                            <p>You can create an account:</p>
                            <div class="create-account-sign">
                                <a href="#"><i class="fa fa-sign-in big-icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __d('CakeDC/Users', 'Por favor entre com seu E-mail e senha') ?></legend>
        <?= $this->Form->control('email', ['label' => __d('CakeDC/Users', 'Username'), 'required' => true]) ?>
        <?= $this->Form->control('password', ['label' => __d('CakeDC/Users', 'Password'), 'required' => true]) ?>
        <?php
        if (Configure::read('Users.reCaptcha.login')) {
            echo $this->User->addReCaptcha();
        }
        if (Configure::read('Users.RememberMe.active')) {
            echo $this->Form->control(Configure::read('Users.Key.Data.rememberMe'), [
                'type' => 'checkbox',
                'label' => __d('CakeDC/Users', 'Remember me'),
                'checked' => Configure::read('Users.RememberMe.checked')
            ]);
        }
        ?>
        <?php
        $registrationActive = Configure::read('Users.Registration.active');
        if ($registrationActive) {
            echo $this->Html->link(__d('CakeDC/Users', 'Registrar'), ['action' => 'registrar']);
        }
        if (Configure::read('Users.Email.required')) {
            if ($registrationActive) {
                echo ' | ';
            }
            echo $this->Html->link(__d('CakeDC/Users', 'Resetar Senha'), ['action' => 'requestResetPassword']);
        }
        ?>
    </fieldset>
    <?= implode(' ', $this->User->socialLoginList()); ?>
    <?= $this->Form->button(__d('CakeDC/Users', 'Login')); ?>
    <?= $this->Form->end() ?>
</div>