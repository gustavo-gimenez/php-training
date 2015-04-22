<?php

namespace Info\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Info\DemoBundle\Entity\City;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $datetime = \DateTime();
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($object);
        $em->flush();
        
        return $this->render('InfoDemoBundle:Default:index.html.twig', array('name' => $name));
    }
    
        
    public function recordAction()
    {
        $city = new City();
        $city->setName('Ciudadadad14141414');
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($city);
        
        $em->flush();
        
        return new Response('Done!');
        
    }
    
    
}
