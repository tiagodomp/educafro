<?php
/**
* @var \App\View\AppView $this
* @var \App\Form\RegistrosForm $registro
*/
?>
<section id="login-box">
    <div class="left">
        <?= $this->Form->create($registro) ?>
        <h1>Registre-se</h1>
        <div class="mb-5">
            <?= $this->Form->control('username',['id' => 'inputUsername',
            'class' => 'entrada',
            'placeholder' => 'Nome Social',
            'label' => false,
            'maxlength' => 15
            ]
            ); ?>
        </div>
        <div class="my-5">
            <?= $this->Form->control('cpf',[
            'id' => 'inputCPF',
            'class' => 'entrada',
            'placeholder' => 'Seu CPF',
            'required' => true,
            'label' => false,
            'maxlength' => 14
            ]
            ); ?>
        </div>
        <div class="my-5">
            <?= $this->Form->control('email',[
            'id' => 'inputEmail',
            'class' => 'entrada',
            'placeholder' => 'Seu E-mail',
            'required' => true,
            'label' => false,
            'maxlength' => 60
            ]
            ); ?>
        </div>
        <div class="my-5">
            <?= $this->Form->password('password',['type' => 'password', 
            'id' => 'inputPassword',
            'class' => 'entrada',
            'required' => true, 
            'placeholder' => 'Sua senha',
            'label' => false,
            'maxlength' => 30
            ]
            ); ?>
        </div>
        <div class="my-5">
            <?= $this->Form->password('password2',['type' => 'password', 
            'id' => 'inputPassword2',
            'class' => 'entrada',
            'required' => true, 
            'placeholder' => 'Repita a senha',
            'label' => false,
            'maxlength' => 30,
            'div' => false
            ]
            ); ?>
        </div>    
        <?= $this->Form->postButton('Cadastre-se', ['action'=>'registro'], ['type'=>'submit', 'class' => 'submit', 'name'=>'signup_submit', 'div' => false]);?>
        <?= $this->Form->end() ?>
        <p class="mt-5 mb-3 text-muted text-center">Se você já se cadastrou <?= $this->Html->link('faça Login',['controller' => 'Users', 'action' => 'login', '_full'=> true]
            );?> e ative o seu  cupom desconto de 100% no <a class="text-muted" href="https://descomplica.com.br" target="_blank">descomplica.com.br</a> </p>                        
    </div>
    <div class="right">
        <div class="camada">
            <span class="loginwith invisible">Cadastre-se na<br />EDUCAFRO Descomplica</span>

            <button class="social-signin facebook">Entrar com Facebook</button>
            <button class="social-signin google">Entrar com Google</button>
        </div>
    </div>
    <div class="ou">OU</div>
</section>