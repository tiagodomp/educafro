<?php
/**
* Created by PhpStorm.
* User: Tiago Pereira
* Date: 14/10/2018
*/

$session = $this->request->getSession();
$user = $session->read('Auth.User');
$perfil = $session->read('Perfil');


//obter URL para o iframe através dos dados em sesssion
//verifico o nivel de permissão do usuário
if($user['roles_id'] === 3) {

//verifico qual é o tipo do aluno sendo 2 igual a itafro e 3 igual medAfro
if ($user['type'] == 'itafro' or $user['type'] == 'Itafro' or $user['type'] == 2){
$code = '?Id=61420&Coupon='.$perfil['Codigo.code'];
}elseif($perfil['type'] == 'medafro' or $user['type'] == 'Medafro' or $user['type'] == 3){
$code = '?Id=61414&Coupon='.$perfil['Codigo.code'];
} else {
$code = 'null';
}
}
$url = 'https://descomplica.com.br/assinatura/PromoCodeFull/'.$code;

?>
<!-- index.ctp/.. -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <?= $this->Flash->render() ?>
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles mt-3">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Educafro Descomplica</h3>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Lado esquerdo-->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><span class="lstick"></span>Olá, <?php echo $user['first_name']; ?></h4>
                    <table class="table vm font-14">
                        <tr>
                            <td class="b-0">Seja bem-vindo a versão BETA do sistema Educafro descomplica.</td>
                            <td class="text-right font-medium b-0"></td>
                        </tr>
                    </table>
                    <p>
                        Em breve estará disponível acesso ao seu histórico de provas, gabaritos e as bonificações recebidas. Adquira o seu <a href="#" data-toggle="modal" data-target="#bannerformmodal" style="text-decoration: none; color: red;">código único e intransferível</a> clicando abaixo, para acessar e estudar na plataforma online de ensino Descomplica.
                    </p>

                    <div class="my-5">
                        <div class="swing">
                            <a href="#" onclick="exibir('iframe')" style="text-decoration: none; color: inherit;">
                                <div class="btn-iframe">
                                    <p><?php if(!empty($perfil['Codigo.code'])){
                                        echo $perfil['Codigo.code'];
                                        }else{
                                        echo 'Erro em adquir seu código';
                                        } ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Lado Direito -->
        <!-- ============================================================== -->
        <div class="col-lg-9 col-md-12">
            <div class="iframe-container" id="iframe">
                        <iframe src="<?php echo $url; ?>" frameborder="0"></iframe>
                    </div><!--
            <div class="card">
                <div class="card-body">
                    
                </div>
            </div> -->
        </div>
    </div>	
</div>

<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sobre o Código</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>
                        <b>1. Condições gerais de uso dos Serviços:</b>
                        1.1Ao aceitar estes Termos de Uso, você tem o direito não exclusivo, intransferível, não sub-licenciável e limitado de acessar a Plataforma descomplica, acessar e usar os Serviços, unicamente para uso pessoal e não comercial.

                        1.2. Todos os direitos não previstos expressamente nestes Termos de Uso estão reservados a Educafro Descomplica.

                        1.3. Você concorda que a licença é para o seu uso pessoal e não comercial e que ninguém além de você usará os Serviços. Você não tem direitos de cópia, reprodução ou alteração no todo ou em qualquer parte dos Serviços de propriedade doEducafro Descomplica.

                        1.4. Além da licença limitada estabelecida nestes Termos de Uso, você não tem qualquer outro direito, título ou propriedade sobre os Serviços. Você entende e reconhece que, em quaisquer circunstâncias, os seus direitos com relação ao Serviços serão limitados pelos direitos autorais e/ou leis de propriedade intelectual aplicável e ainda por estes Termos de Uso.

                        1.5. Os Serviços permitem que os alunos da Educafro tenham acesso à Plataforma Descomplica, troquem mensagens com outros Membros, individualmente ou em grupos, se conectem com professores contratados independentes, que fornecem instruções ao vivo e/ou gravadas, tutorial e serviços de aprendizagem nas salas de aula on-line (o "Conteúdo"). O Conteúdo inclui, aulas pré-gravadas, aulas ao vivo, monitorias online, correção de redação e demais Serviços oferecidos na Plataforma Descomplica, materiais de apoio, podendo conter interação e feedback com os Membros.

                        1.6. O Descomplica poderá modificar os Serviços e/ou Conteúdo ou descontinuar a sua disponibilidade a qualquer momento. Os serviços oferecidos nos aplicativos podem ser diferentes dos derviços oferecidos no site do Descomplica (https://descomplica.com.br).

                        <b>2. Proibição de Revenda:</b>
                        2.1. Você concorda em não reproduzir, duplicar, copiar, vender, revender ou explorar com quaisquer fins comerciais, o código adquirido no sistema ou qualquer porção do sistema Educafro Descomplica.
                    </p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-blue">Ok, eu concordo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade descomplicaformmodal" tabindex="-1" role="dialog" aria-labelledby="descomplicaformmodal" aria-hidden="true" id="descomplicaformmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Ative seu código</h4>
                    </div>
                    <div class="modal-body">

                        <div class="iframe-container">
                            <iframe src="<?php echo $url; ?>" frameborder="0"></iframe>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-blue">Vou estudar</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        
        <script>
            function exibir(iframe) {
                var display = document.getElementById(iframe).style.display;
                document.getElementById(iframe).style.display = 'none';
            }
    }
        </script>
        <!-- ../public.ctp -->