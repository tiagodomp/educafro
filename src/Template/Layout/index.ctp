<!DOCTYPE html>
<html lang="pt-Br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Educafro Descomplica.com.br - Bolsas de estudo de até 100%, da matrícula ao final do curso - Graduação, Pós-Graduação, Preparatórios e Ensino Médio/Fundamental">
        <meta name="author" content="Tiago Pereira">

        <meta name="robots" content="noodp">
        <link rel="canonical" href="https://www.educafro.org.br/site/">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Educafro Descomplica - Bolsas de estudo de até 100%">
        <meta property="og:description" content="Educafro - Bolsas de estudo de até 100%, da matrícula ao final do curso - Graduação, Pós-Graduação, Preparatórios e Ensino Médio/Fundamental">
        <meta property="og:url" content="https://www.educafro.org.br/site/">
        <meta property="og:site_name" content="EDUCAFRO - Descomplica">

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        <title>Educafro</title>
        <!-- Bootstrap Core CSS -->
        <?= $this->Html->css([ 'assets/plugins/bootstrap/css/bootstrap.min.css']); ?>
        <!-- This page CSS -->
        <!-- chartist CSS -->
        <?= $this->Html->css([ 'assets/plugins/chartist-js/dist/chartist.min.css']); ?>
        <?= $this->Html->css([ 'assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css']); ?>
        <!--c3 CSS -->
        <?= $this->Html->css([ 'assets/plugins/c3-master/c3.min.css']); ?>
        <!-- Custom CSS -->
        <!-- Custom CSS -->
        <?= $this->Html->css([ 'membro.css']); ?>
        <!-- Dashboard 1 Page CSS -->
        <?= $this->Html->css([ 'pages/dashboard.css' ]); ?>
        <!-- You can change the theme colors from here -->
        <link href="../../../webroot/css/colors/default-dark.css" id="theme" rel="stylesheet" type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
@-webkit-keyframes swing
{
    15%
    {
        -webkit-transform: translateX(5px);
        transform: translateX(5px);
    }
    30%
    {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
    }
    50%
    {
        -webkit-transform: translateX(3px);
        transform: translateX(3px);
    }
    65%
    {
        -webkit-transform: translateX(-3px);
        transform: translateX(-3px);
    }
    80%
    {
        -webkit-transform: translateX(2px);
        transform: translateX(2px);
    }
    100%
    {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
}

.swing{
    width: 90px;
    height: 40px;
}

.swing:hover
{
    -webkit-animation: swing 1s ease;
    animation: swing 1s ease;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
}

.btn-iframe{
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 300px;
  height: 30px;
  cursor: pointer;
  padding: 14px 10px 10px;
  border: 2px solid #27ae60;
  -webkit-border-radius: 50px;
  border-radius: 50px;
  text-align: center;
  font-size:15px;
  font-weight: bold; 
  -o-text-overflow: clip;
  text-overflow: clip;
  letter-spacing: 1px;
  background: rgba(27,216,2,0);
  -webkit-box-shadow: 8px 7px 6px 0 rgba(0,0,0,0.13) ;
  box-shadow: 8px 7px 6px 0 rgba(0,0,0,0.13) ;
  text-shadow: 2px 2px 2px rgba(255,255,255,1) ;
  -webkit-transition: color 300ms cubic-bezier(0.42, 0, 0.46, 0.81) 1ms;
  -moz-transition: color 300ms cubic-bezier(0.42, 0, 0.46, 0.81) 1ms;
  -o-transition: color 300ms cubic-bezier(0.42, 0, 0.46, 0.81) 1ms;
  transition: color 300ms cubic-bezier(0.42, 0, 0.46, 0.81) 1ms;
}


	</style>



</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Educafro</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Img Perfil -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="#"><img src="assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-ticket-account"></i><span class="hide-menu">Código</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Perfil</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-page-variant"></i><span class="hide-menu">Provas</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-currency-btc"></i><span class="hide-menu">Meu caixa</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu">Agenda</span></a></li>
                        
						<li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-mailbox"></i><span class="hide-menu">Deixe sua Opinião</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-logout-variant"></i><span class="hide-menu">Sair</span></a></li>
						
					</ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
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
                                <h4 class="card-title"><span class="lstick"></span>Olá, user</h4>
                                <table class="table vm font-14">
                                    <tr>
                                        <td class="b-0">Seja bem-vindo a versão BETA do sistema Educafro descomplica.</td>
                                        <td class="text-right font-medium b-0"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                     Em breve estará disponível acesso ao seu histórico de provas, gabaritos e as bonificações recebidas. Adquira o seu <a>código único e intransferível</a> clicando abaixo, para acessar e estudar na plataforma online de ensino Descomplica.
										</td>
                                    </tr>
                                </table>
								
								<div class="my-5">
								<div class="swing">
									<a href="#descomplicaformmodal" data-toggle="modal" data-target="#descomplicaformmodal" style="text-decoration: none; color: inherit;">
										<div class="btn-iframe">                       
											<p> Quero o meu cupom Descomplica </p>
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
				</div>	
            </div>
            <!-- ============================================================== -->
            <!-- Fim do Container fluid  -->
            <!-- ============================================================== -->
			
			
			
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">Tiago Pereira © 2018 - Educafro Descomplica </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
			
        </div>
        <!-- ============================================================== -->
        <!-- fim Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- fim Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Todos os Jquery -->
    <!-- ============================================================== -->
    <?= $this->Html->css([ 'assets/plugins/jquery/jquery.min.js']); ?>
    <!-- Bootstrap popper Core JavaScript -->
    <?= $this->Html->css([ 'assets/plugins/bootstrap/js/popper.min.js']); ?>
    <?= $this->Html->css([ 'assets/plugins/bootstrap/js/bootstrap.min.js']); ?>
        <!-- slimscrollbar scrollbar JavaScript -->
        <?= $this->Html->script(['perfect-scrollbar.jquery.min.js']); ?>
        <!--Wave Effects -->
        <?= $this->Html->script(['waves.js']); ?>
        <!--Menu sidebar -->
        <?= $this->Html->script(['sidebarmenu.js']); ?>
        <!--Custom JavaScript -->
        <?= $this->Html->script(['custom.min.js']); ?>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <?= $this->Html->css([ 'assets/plugins/chartist-js/dist/chartist.min.js']); ?>
        <?= $this->Html->css([ 'assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js']); ?>
        <!--c3 JavaScript -->
        <?= $this->Html->css([ 'assets/plugins/d3/d3.min.js']); ?>
        <?= $this->Html->css([ 'assets/plugins/c3-master/c3.min.js']); ?>
        <!-- Chart JS -->
        <?= $this->Html->script(['dashboard.js']); ?>

        <?= $this->fetch('script') ?>
    </body>

</html>