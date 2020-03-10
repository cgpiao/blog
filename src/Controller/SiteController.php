<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
   /**
    * @Route("/login", name="app_homepage")
    */
   function home() {
      return $this->render('home.html.twig');
   }
}