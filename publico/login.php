<?php
/**
 * Created by PhpStorm.
 * User: Tiago Pereira
 * Date: 30/09/2018
 * Time: 13:30
 */
echo "Carregando login...";

session_start();
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET('code'))){

    //entre com o app ID
    $appId = '227954701420288';

    //entre com o app secret
    $appsecret = '2e7ef549e1404a920f37d986c6328af9';

    //Url informada no campo de "SITE URL"
    $redirectUri = urlencode('http://localhost/educafro/publico/logado.php');

    // Obtém o código de busca
    $code = $_GET('code');

    //Monta a URL para recuperar o token  de acesso e assim obter os dados do usuário
    $token_url = "https://graph.facebook.com/oauth/access_token?" . "client_id" . $appId . "&redirect_uri=" . $redirectUri . "&client_secret=" . $appsecret . "code=" . $code;

    //Recupera os dados
    $response = @file_get_contents($token_url);

    if($response){
        $params = null;
        parse_str($response, $params);

        if(isset($params['access_token']) && $params['access_token']){
            $graph_url = "https://graph.facebook.com/me?access_token=".$params['access_token'];
            $user = json_decode(file_get_contents($graph_url));

            //Verifica se os dados vieram corretamente
            if(isset($user->email) && $user->email){
                // Acesso aos dados do usuário
                $__SESSION['facebookEmail']=$user->email;
                $__SESSION['facebookNome']=$user->nome;
                $__SESSION['facebookLocalizacao']=$user->localizacao;
                $__SESSION['facebookUid']=$user->id;
                $__SESSION['facebookUsername']=$user->username;
                $__SESSION['facebookLink']=$user->link;
            } else {
                echo "Erro de conexão com o Facebook";
                exit(0);
            }
        }else{
            echo "Erro de conexão com o Facebook";
            exit(0);
        }
    }else if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['error'])){
        echo 'Permissão não concedida';
    }
}
?>