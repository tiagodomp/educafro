<?php

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
$session = $this->request->getSession();
if($session->check('Flash')){
    
}
?>
<section class="card shadow p-3 mb-5 bg-white rounded mx-auto mt-5" style="width: 30rem;">
    <div>
        <?= $this->Form->create();?>
        <h1 class="mt-3 text-center font-weight-light">Entre na sua conta...</h1>
        <div class="card-header-pills">
            <div class="row mx-5 my-2 justify-content-between">
                <div class="col-4">
                    <fb:login-button
                        scope="public_profile,email"
                        onlogin="checkLoginState();">
                    </fb:login-button>
                    <div class="fb-login-button" data-width="60" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
                </div>
                <div class="col-4">
                    <div class="g-signin2" data-onsuccess="onSignIn"></div>
                </div>
            </div>
        </div>
        <div class="card-body">
            
            

            <div class="form-label-group my-4">
                <!--<input type="email" id="inputEmail" class="form-control" placeholder="Email/username" required="true" autofocus="true" aria-describedby="loginHelp"> -->
                <?= $this->Form->control('email',['type' => 'email', 
                'id' => 'inputEmail',
                'class' => 'form-control',
                'placeholder' => 'Seu E-mail',
                'aria-describedby' => 'loginHelp',
                'label' => false,
                'div' => false
                ]
                ); ?>
                <small id="loginHelp" class="form-text text-muted" style="margin-top: 2.5rem;  ">
                    Utilize o mesmo e-mail cadastrado no <a class="text-muted" href="http://itafro.educafro.org.br/" target="_blank">Itafro</a> ou no <a class="text-muted"  href="http://med-afro.educafro.org.br/" target="_blank">Medafro</a>
                </small>
            </div>
            <div class="form-label-group my-4">
                <?= $this->Form->password('password',['type' => 'password', 
                'id' => 'inputPassword',
                'class' => 'form-control',
                'placeholder' => 'Sua senha',
                'label' => false,
                'div' => false
                ]
                ); ?>
            </div>


            <div class="col-auto my-1">
                <div class="custom-control custom-checkbox mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                    <label class="custom-control-label" for="customControlAutosizing">Lembre-se de mim</label>
                </div>
            </div>

            
			<?= $this->Flash->render() ?>

            <div class="mt-5">
                <!--
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                -->
                <?= $this->Form->button('Entrar', ['class' => 'btn btn-lg btn-primary btn-block'] ); ?>
                <p class="mt-5 mb-3 text-muted text-center">Caso você não tenha cadastro <?= $this->Html->link('Registre-se agora',['controller' => 'Registros', 'action' => 'registro', '_full'=> true]
                    );?> e garanta o seu  cupom desconto de 100% no Educafro <a class="text-muted" href="https://descomplica.com.br" target="_blank">descomplica</a> </p>
            </div>
            <?= $this->Form->end() ?>
            </form>
        </div>
    </div>
</section>