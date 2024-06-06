<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;

#[AsController]
class LuckyController
{
    #[Route('/')]
    public function raiz( Environment $twig): Response
    {
        $template=$twig->render('raiz.html.twig');
        return new Response($template); 
    }
    #[Route('/hello')]
    public function name( Environment $twig): Response
    {
       $name=$_POST['username'];
        $template=$twig->render('name.html.twig', [
            'name' => $name
        ]);

        return new Response($template); 
    }
    #[Route('/suma')]
    public function sum( Environment $twig): Response
    {
       $num1=$_POST['num1'];
       $num2=$_POST['num2'];
        $template=$twig->render('sum.html.twig', [
            'sum' => $num1+$num2
        ]);

        return new Response($template); 
    }
}