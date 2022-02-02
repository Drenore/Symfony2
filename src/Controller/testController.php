<?php 

    namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class testController
    {
        public function index()
        {
            dd("ça fonctionne !");
            
        }
        public function test(Request $request)
        {

           
           
           
            $age = $request->query->get('age', 0);
       
            return new Response("Vous avez $age ans"); 
            
        }

        public function test2(Request $request, $age)
        {
            
            return new Response("Vous avez $age ans !");
        }
    }
