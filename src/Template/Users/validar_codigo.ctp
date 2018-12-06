<?php
/**
* Created by PhpStorm.
* User: Tiago Pereira
* Date: 14/10/2018
*/
$session = $this->request->getSession();
$perfil = $session->read('Auth.User');

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
                    <h4 class="card-title"><span class="lstick"></span>Olá, <?php echo $perfil['first_name']; ?></h4>
                    <table class="table vm font-14">
                        <tr>
                            <td class="b-0">Seja bem-vindo a versão BETA do sistema Educafro descomplica.</td>
                            <td class="text-right font-medium b-0"></td>
                        </tr>
                    </table>
                    <p>
                        Em breve estará disponível acesso ao seu histórico de provas, gabaritos e as bonificações recebidas. Adquira o seu <a href="#descomplicaformmodal" data-toggle="modal" data-target="#descomplicaformmodal" style="text-decoration: none; color: red;">código único e intransferível</a> clicando abaixo, para acessar e estudar na plataforma online de ensino Descomplica.
                    </p>

                    <div class="my-5">
                        <div class="swing" style="max-width: 21rem;">
                            <?php $id = $perfil['id']; ?>
                            <a href='<?php echo $this->Url->build([
                               "controller" => "Users",
                               "action" => "validarCodigo",
                               "$id"
                               ]);?>'
                               
                               >
                                <div class="btn-iframe">                       
                                    <p> Obter o meu cupom Descomplica </p>
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
            <div class="card">
                <div class="card-body">

                    Canvas

                </div>
            </div>
        </div>

        <script>
            var tipo = "<?php echo $tipo ?>";
            
            if (tipo === 4 || tipo === 1 || tipo === 0)
            {
                document.getElementById('btn-ativacao').className = 'dois';
            }
        </script>   
    </div>	
</div>
<!-- ../index.ctp -->

