<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{
    
    
//    /**
//     *
//     * @var Environment 
//     */
//    private $twig;
//    
//    
//    public function __construct(Environment $twig)
//    {
//        $this->twig=$twig;
//    }
//    
    /**
     * @Route ("/",name = "home")
     * @return Response
     */
    public function index (): Response
    {
//        return new Response ($this->twig->render('pages/home.html.twig'));
        return $this->render('pages/home.html.twig');
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

