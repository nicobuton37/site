<?php
// src/NB/HomeBundle/Controller/HomeController.php


namespace NB\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
  public function indexAction()
  {
    return $this->get('templating')->renderResponse('NBHomeBundle:Home:index.html.twig');
  }
}
