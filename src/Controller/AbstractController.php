<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 15:38
 * PHP version 7
 */

namespace Controller;

use Twig_Loader_Filesystem;
use Twig_Environment;
session_start();

/**
 *
 */
abstract class AbstractController
{
    protected $twig;

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(APP_VIEW_PATH);
        $this->twig = new Twig_Environment(
            $loader,
            [
                'cache' => !APP_DEV,
                'debug' => APP_DEV,
            ]
        );
        $this->twig->addExtension(new \Twig_Extension_Debug());
    }
}


// Créer une méthode conection, peut-être la mettre dans chaque controller, ou une class connectionManager instancier dans chaque méthode de controller, conditionnner isset($_POST['email']) && isset($_POST['password']) ou la meme avec des session. cas 1 première fois que tu te connecte, cas 2 t'es déjà connecté. Du coup dans le layout, le contenu de la navbar change si connecté ou non. Du coup, on pourrait avoir n'importe quelle méthode d'un controller qui commence par $_POST? $_SESSION? else la méthode en question.
