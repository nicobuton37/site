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

  public function contactAction()
  {
    return $this->get('templating')->renderResponse('NBHomeBundle:Contact:contact.html.twig');
  }

  public function aboutAction()
  {
    return $this->get('templating')->renderResponse('NBHomeBundle:About:about.html.twig');
  }

  public function portfolioAction()
  {
    return $this->get('templating')->renderResponse('NBHomeBundle:Portfolio:portfolio.html.twig');
  }

  public function blogAction()
  {
    return $this->get('templating')->renderResponse('NBHomeBundle:Blog:blog.html.twig');
  }
}
