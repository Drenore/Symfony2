<?php 

    namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class TestController
    {
        public function index()
        {
            dd("ça fonctionne !");
            
        }
        public function test()
        {

            $request = Request::createFromGlobals();
            dump($request); 
           
            $age = $request->query->get('age', 0);
       
            dd("Vincent à ". $age);
            
        }
    }