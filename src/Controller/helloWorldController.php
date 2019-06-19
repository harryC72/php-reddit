<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class helloWorldController extends AbstractController
{

    /**
* @Route("/hello", name="hello_world")
*/

    public function namer()
    {
        $name = "Harald";

        return new Response(
            '<html><body>Hello '.$name.'</body></html>'
        );
    }
}