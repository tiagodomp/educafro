<?php
/**
 * Created by PhpStorm.
 * User: Tiago Pereira
 * Date: 16/01/2019
 * Time: 08:36
 */
namespace App\Shell;

use Cake\Console\ConsoleOptionParser;
use Cake\Console\Shell;
use Cake\Log\Log;
use Psy\Shell as PsyShell;

///Classe shell responsavel por preencher todos os dados iniciais do usuario no banco de dados, criar os arquivos de identificação e as pastas de uploads
class UserIncorporarShell extends Shell
{

    /**
     * Start the shell and interactive console.
     *
     * @return int|null
     */
    public function main()
    {

    }