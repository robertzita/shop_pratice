<?php

class LaptopController
{
        function index()
        {
            $view = new View();
            $view->render(
                'laptops/index',
                [
                "laptops"=>Laptop::read()
                ]
            );

        }

        

}