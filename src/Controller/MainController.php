<?php
// src/Controller/MainController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController {

    /** * @Route("/") */
    public function home(): Response {
        return $this->render('pages/index.html.twig');
    }

    /** * @Route("/page2") */
    public function page2(): Response {
        return $this->render('pages/page2.html.twig');
    }

    /** * @Route("/page3") */
    public function page3(): Response {
        return $this->render('pages/page3.html.twig');
    }

    /** * @Route("/{slug}") */
    public function all(): Response {
        return $this->render('pages/index.html.twig');
    }
}