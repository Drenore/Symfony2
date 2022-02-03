<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 class Hello

 {

     /**
     * @Route("/hello/{nom?World}", name="hello", methods={"GET", "POST"},schemes={"HTTP","HTTPS"})
     * 
     */

     public function hello(Request $request, $nom)
     {

         return new Response("Hello " .$nom. " !");

     }

 }