<?php
/**
* @var \App\View\AppView $this
* @var \App\Form\CadastrosForm $cadastro
*/


$session = $this->request->getSession();
if($session->check('Registro') && $session->check('Validar') ){
$dadosR = $session->read('Registro');
$dadosV = $session->read('Validar');
}

?>
<!--continuar editando form utilizando pages-profile.html -->

<div class="col-lg-8 col-xlg-9 col-md-7 mx-auto my-5" style="max-width: 50rem;" >
    <div class="card" style="background-color: rgba(218, 223, 225, 1)">

        <?=  $this->Html->image( 'public/Educafro cadastro negro  desconto descomplica 2.png', 
        ['alt' => 'Cadastre-se A Educafro Descomplica para você',   
        'class' => 'card-img-top']
        )?>
        <div class="card-body">

            <?= $this->Form->create($cadastro, ['class'=>'form-horizontal form-material'])?>

            <div class="card bg-light mb-3">
                <div class="h2 card-header"><?= __('Seus Dados') ?></div>

                <div class="card-body">

                    <div class="form-group">
                        <h5 class="card-title">Nome Completo</h5>
                        <?php
                        
                        if($dadosR['User.type'] == 4){
                            echo $this->Form->control('nome',
                            ['type' => 'text',
                            'disabled' => 'true',
                            'placeholder' => 'Nome indefinido',
                            'label' => false,
                            'maxlength' => 60,
                            'value' => 'Nome Indefinido',

                            'class'=>'form-control form-control-line'
                            ]);
                        }else{
                            echo $this->Form->control('nome',
                            ['type' => 'text',
                            'disabled' => 'true',
                            'placeholder' => 'Seu Nome',
                            'label' => false,
                            'maxlength' => 60,
                            'value' => $dadosV['User.perfi.nome'],
                            'required' =>true,

                            'class'=>'form-control form-control-line'
                            ]);
                        }
                        ?>
                    </div>

                    <div class="form-group my-5">
                        <h5 class="card-title">Numero do RG</h5>
                        <?php
                        echo $this->Form->control('rg',
                        ['type' => 'text',
                        'placeholder' => 'Seu RG',
                        'label' => false,
                        'maxlength' => 13,
                        'id' => 'inputRG',
                        'required' =>true,

                        'class'=>'form-control form-control-line'
                        ]);
                        ?> 
                    </div>

                    <div class="form-group my-5">
                        <h5 class="card-title">Numero do CPF</h5>
                        <?php
                        echo $this->Form->control('cpf',
                        ['type' => 'text',
                        'placeholder' => 'Seu CPF',
                        'disabled' => 'true',
                        'value' => $dadosV['User.perfi.cpf'],
                        'label' => false,
                        'maxlength' => 14,
                        'div' => false,
                        'required' => true,

                        'class'=>'form-control form-control-line'
                        ]);
                        ?> 
                    </div>

                </div>
            </div>


            <div class="card bg-light mb-3">
                <div class="h2 card-header"><?= __('Seu Endereço') ?></div>

                <div class="card-body">

                    <div class="form-group">
                        <h5 class="card-title">CEP </h5>
                        <?php
                        if($dadosR['User.type'] == 4){
                            echo $this->Form->control('cep',
                            ['type' => 'text',
                            'placeholder' => 'Seu CEP',
                            'value' => '00000-000',
                            'disabled' => 'true',
                            'label' => false,
                            'maxlength' => 9,
                            'div' => false,

                            'class'=>'form-control form-control-line'
                            ]);
                        }else{
                        echo $this->Form->control('cep',
                        ['type' => 'text',
                        'placeholder' => 'Seu CEP',
                        'value' => $dadosV['User.perfi.cep'],
                        'disabled' => 'true',
                        'label' => false,
                        'maxlength' => 9,
                        'div' => false,
                        'required' =>true,

                        'class'=>'form-control form-control-line'
                        ]);
                        }
                        ?> 
                    </div>

                    <div class="form-group my-5">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td class="col-md-1 font-weight-bold text-left">Logradouro</td>
                                        <td class="col-md-4"><?php if($dadosR['User.type'] == 4){echo 'CEP Indefenido';}else{ echo $dadosV['User.perfi.endereco'];} ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-md-1 font-weight-bold text-left">Bairro</td>
                                        <td class="col-md-4"><?php if($dadosR['User.type'] == 4){echo 'CEP Indefenido';}else{echo $dadosV['User.perfi.bairro'];} ?></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-1 font-weight-bold text-left">Cidade</td>
                                        <td class="col-md-4"><?php if($dadosR['User.type'] == 4){echo 'CEP Indefenido';}else{ echo $dadosV['User.perfi.cidade'];} ?></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-1 font-weight-bold text-left">Estado</td>
                                        <td class="col-md-4"><?php if($dadosR['User.type'] == 4){echo 'CEP Indefenido';}else{ echo $dadosV['User.perfi.estado'];} ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>    
                    </div>

                    <div class="form-group my-5">
                        <h5 class="card-title"><?php if($dadosR['User.type'] == 4){echo 'Logradouro';}else{echo 'Número e complemento';} ?></h5>
                            <?php
                        if($dadosR['User.type'] == 4){
                            echo $this->Form->control('endereco-num',
                            ['type' => 'text',
                            'placeholder' => 'seu Logradouro',
                            'maxlength' => 40 ,
                            'label' => false,
                            'div' => false,
                            'required' =>true,

                            'class'=>'form-control form-control-line'
                            ]);
                        }else{
                            echo $this->Form->control('endereco-num',
                            ['type' => 'text',
                            'placeholder' => '123, apto:30, bloco A',
                            'maxlength' => 40 ,
                            'label' => false,
                            'div' => false,
                            'required' =>true,

                            'class'=>'form-control form-control-line'
                            ]);
                        }
                        ?>
                    </div>    

                </div>
            </div>



            <div class="card bg-light mb-3">
                <div class="h2 card-header"><?= __('Seu Contato') ?></div>

                <div class="card-body">

                    <div class="form-group mb-5">
                        <div class="row">

                            <div class="col-4">
                                <h5 class="card-title">DDD</h5>
                                <?php
                                echo $this->Form->control('ddd',
                                ['type' => 'text',
                                'value' => $dadosV['User.contato.ddd'],
                                'placeholder' => 'DDD',
                                'label' => false,
                                'maxlength' => 4,
                                'div' => false,
                                'id' => 'inputDDD',
                                'required' =>true,

                                'class'=>'form-control form-control-line'
                                ]);
                                ?> 
                            </div>

                            <div class="col-8">
                                <h5 class="card-title">seu Número</h5>
                                <?php
                                echo $this->Form->control('numero',
                                ['type' => 'text',
                                'placeholder' => 'seu telefone',
                                'value' => $dadosV['User.contato.num'],
                                'label' => false,
                                'maxlength' => 11,
                                'id' => 'inputTEL',
                                'required' =>true,

                                'class'=>'form-control form-control-line'
                                ]);
                                ?> 
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="card bg-light mb-3">
                <div class="h2 card-header"><?= __('Seu perfil') ?></div>

                <div class="card-body">

                    <div class="form-group my-5">
                        <h5 class="card-title"><?= __('Nome social') ?> </h5>
                        <?php
                        echo $this->Form->control('username',
                        ['type' => 'text',
                        'placeholder' => 'Escolha o seu Username',
                        'value' => $dadosR['User.username'],
                        'label' => false,
                        'maxlength' => 20,
                        'required' =>true,

                        'class'=>'form-control form-control-line'
                        ]);
                        ?> 
                    </div>

                    <div class="form-group my-5">
                        <h5 class="card-title">E-mail</h5>
                        <?php
                        echo $this->Form->email('email',
                        ['type' => 'email',
                        'placeholder' => 'Digite seu E-mail',
                        'disabled' => 'true',
                        'value' => $dadosR['User.email'],
                        'label' => false,
                        'maxlength' => 40 ,
                        'div' => false,
                        'required' => true,

                        'class'=>'form-control form-control-line' 
                        ]);
                        ?> 
                    </div>

                    <div class="form-group my-5">
                        <h5 class="card-title">Senha</h5>
                        <?php
                        echo $this->Form->password('password',
                        ['type' => 'password',
                        'placeholder' => 'Sua senha',
                        'disabled' => 'true',
                        'value' => $dadosR['User.senha'],
                        'label' => false,
                        'maxlength' => 30,
                        'required' => true,
                        

                        'class'=>'form-control form-control-line'
                        ]);
                        ?> 
                    </div>
                    <div class="form-group my-5">
                        <h5 class="card-title">Primeiro Nome</h5>
                        <?php
                        
                        if($dadosR['User.type'] == 4){
                        echo $this->Form->control('first_name',
                        ['type' => 'text',
                        'placeholder' => 'Seu primeiro Nome',
                        'label' => false,
                        'maxlength' => 15,
                        'required' => true,

                        'class'=>'form-control form-control-line'
                        ]);
                        }else{
                        echo $this->Form->control('first_name',
                        ['type' => 'text',
                        'placeholder' => 'Seu primeiro Nome',
                        'value' => $dadosV['User.first_name'],
                        'label' => false,
                        'maxlength' => 15,
                        'required' => true,

                        'class'=>'form-control form-control-line'
                        ]);
                        }
                        ?> 
                    </div>                   

                    <div class="form-group my-5">
                        <h5 class="card-title">Sobrenome</label>
                            <?php
                            if($dadosR['User.type'] == 4){
                                echo $this->Form->control('last_name',
                                ['type' => 'text',
                                'placeholder' => 'Seu sobrenome',
                                'label' => false,
                                'maxlength' => 30,
                                'required' => true,

                                'class'=>'form-control form-control-line'
                                ]);
                            }else{
                                echo $this->Form->control('last_name',
                                ['type' => 'text',
                                'value' => $dadosV['User.last_name'],
                                'placeholder' => 'Seu sobrenome',
                                'label' => false,
                                'maxlength' => 30,
                                'required' => true,

                                'class'=>'form-control form-control-line'
                                ]);
                            }
                            ?>
                    </div>
                    
                    
                </div>
            </div>


                <div class="form-group w-100">
                        <?= $this->Form->postButton('Salvar',
                        ['controller'=>'Cadastros', 'action' => 'cadastro', $cadastro['id']],
                        ['type'=>'submit', 'class' => 'submit w-100', 'name'=>'signup_submit']
                        );?>
                </div>


            </div>

            <?= $this->Form->end() ?>

        </div>
    </div>
</div>