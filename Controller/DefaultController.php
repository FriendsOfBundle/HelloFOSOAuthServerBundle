<?php

namespace FOB\HelloOAuthServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FOBHelloOAuthServerBundle:Default:index.html.twig', array('name' => $name));
    }
}
