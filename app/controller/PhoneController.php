<?php

class PhoneController
{
        function index()
            {
                $view = new View();
                $view->render(
                    'phones/index',
                    [
                    "phones"=>Phone::read()
                    ]
                );

            }

        

}