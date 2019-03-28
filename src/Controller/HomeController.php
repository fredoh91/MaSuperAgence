<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController {
    
    
    /**
     *
     * @var Environment 
     */
    private $twig;
    
    
    public function __construct(Environment $twig)
    {
        $this->twig=$twig;
    }
    public function index (): Response
    {
        return new Response ($this->twig->render('pages/home.html.twig'));
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

