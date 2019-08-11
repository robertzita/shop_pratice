<?php

class MonitorController
{
        function index()
            {
                $view = new View();
                $view->render(
                    'monitors/index',
                    [
                    "monitors"=>Monitor::read()
                    ]
                );

            }

        

}