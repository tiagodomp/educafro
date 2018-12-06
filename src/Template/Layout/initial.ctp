<?php
/**
* CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
* @link          https://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       https://opensource.org/licenses/mit-license.php MIT License
*/

$cakeDescription = 'Educafro Descomplica';
?>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

        <meta name="google-signin-client_id" content="350259929220-305vvf0tpj21uasm2g7frfjklhlej80a.apps.googleusercontent.com">

        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css([  'public/bootstrap.min.css', 
        'public/bootstrap-grid.min.css',
        'public/bootstrap-reboot.min.css',
        'public/initial.css',
        'public/step'
        ]); ?>

    </head>
    <body>
        <main id="initial">
            <?= $this->fetch('content') ?>
        </main>
        
        
        
        <?= $this->Html->script(['public/jquery.validate.js']); ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

        <!--validar dados para areá registro -->        
        <script>
            $(document).ready(function () {
                var $inputCpf = $("#inputCPF");
                $inputCpf.mask('000.000.000-00', {reverse: true});
            });
            
            $(document).ready(function () {
                var $inputDDD = $("#inputDDD");
                $inputDDD.mask('(00)', {reverse: true});
            });
            
            $(document).ready(function () {
                var $inputTEL = $("#inputTEL");
                if($inputTEL.length > 8){
                $inputTEL.mask('0.0000-0000', {reverse: true});
                }else{
                $inputTEL.mask('0000-0000', {reverse: true});
                }
            });
            
            $(document).ready(function () {
                var $inputRG = $("#inputRG");
                if($inputRG.length > 9){
                $inputRG.mask('00.000.000-AA', {reverse: true});
                }else{
                $inputRG.mask('00.000.000-A', {reverse: true});
                }
            });
            
        </script>

    </body>
</html>