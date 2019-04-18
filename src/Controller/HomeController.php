<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use \App\Repository\PropertyRepository;
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
     * @param PropertyRepository $repository
     * @return Response
     */
    public function index (PropertyRepository $repository): Response
    {
        $properties=$repository->findLatest();
//        return new Response ($this->twig->render('pages/home.html.twig'));
        return $this->render('pages/home.html.twig',[
            'properties' => $properties
        ]);
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

