<?php 

        namespace App\Controller;

        use Symfony\Component\HttpFoundation\Request;
        use Symfony\Component\HttpFoundation\Response;
        use Symfony\Component\Routing\Annotation\Route;

class testController

    {
        /**
         * @Route("/", name="index")
         */
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
        /**
         * 
         * @Route("/test3/{age<\d+>?0}", name="test3", methods={"GET", "POST"}, schemes={"HTTP", "HTTPS"})
         * 
         */
        public function test3(Request $request, $age)
        {

            return new Response("Vous avez $age ans !");
        }
    }
