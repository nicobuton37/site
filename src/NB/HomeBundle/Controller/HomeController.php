<?php
// src/NB/HomeBundle/Controller/HomeController.php


namespace NB\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
  public function indexAction()
  {
    return new Response("Coucou ! ");
  }
}
