<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Response;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        return array('people' => array(
            array('name'=>'homero')
            ));
    }
    /**
     * @Route("/informatorio", name="_demo_informatorio")
     * @Template()
     */
    public function informatorioAction()
    {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="_demo_hello")
     * @Template()
     */
    public function helloAction($name)
    {
        return array('fake' => 'hardcode!!');
    }

    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $mailer = $this->get('mailer');

            // .. setup a message and send it
            // http://symfony.com/doc/current/cookbook/email.html

            $request->getSession()->getFlashBag()->set('notice', 'Message sent!');

            return new RedirectResponse($this->generateUrl('_demo'));
        }

        return array('form' => $form->createView());
    }
    /**
     * @Route("/component1", name="_demo_component1")
     * @Template()
     */    
    public function component1Action() {
        $response = new Response('<h2></h2>');
        
        return $response;
    }
    
    /**
     * @Route("/from", name="_demo_from")
     */
    public function fromAction() {
        $urlDestino = 
                $this->generateUrl('_demo_to',  array('name' => '12345'));
        return $this->redirect($urlDestino);
    }
    
    /**
     * @Route("/to/{name}", name="_demo_to")
     */
    public function toAction($name) {
        return new Response("Redirected to $name!!");
    }

    /**
     * @Route("/action1", name="_demo_action1")
     */
    public function action1Action() {
        return $this->forward(
                'AcmeDemoBundle:Demo:action2',
                array('name' => '4141414')
        ); 
    }
    
    /**
     * @Route("/action2/{name}", name="_demo_action2")
     */
    public function action2Action($name) {
        return new Response("Response from action2 with $name");
    }
    
    /**
     * @Route("/fake", name="_demo_fake")
     */
    public function fakeAction() {
        throw $this->createNotFoundException('This does not exist!');
    }
    
    /**
     * @Route("/parameters", name="_demo_parameters")
     */
    public function parametersAction(Request $req) {
        $isAjax = $request->isXmlHttpRequest();
        $post = $req->request->get('datos');                
        return new Response('I am here ' . $_POST['datos']);
    }
    
    
    
    
    
    
    
    
    
}











