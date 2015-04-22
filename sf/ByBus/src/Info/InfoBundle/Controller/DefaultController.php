<?php

namespace Info\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Info\DemoBundle\Entity\City;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InfoInfoBundle:Default:index.html.twig', array('name' => $name));
    }

}
