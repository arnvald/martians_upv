<?php

namespace Martians\MartiansBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MartiansBundle:Default:index.html.twig', array('name' => $name));
    }
}
