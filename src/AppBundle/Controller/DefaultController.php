<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\View\View;

class DefaultController extends \FOS\RestBundle\Controller\FOSRestController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/usersnames", name="namespage")
     */
    public function getUsersnames (Request $request)
    {

        $users=$this
                ->getDoctrine()
                ->getEntityManager()
                ->getRepository('AppBundle:User')
                ->findAll();
        
        $usersNames = array();
        
        foreach($users as $value)
        {
            $usersNames[]=$value->getUsername();    
        }
        
        $view = $this->view($usersNames, 200)->setFormat("json");
        
        return $this->handleView($view);
        
    }
    
    /**
     * @Route("/message", name="message")
     */
    
    public function getUsersgroups (Request $request)
    {
      
        $var = 'Great day for everyone!';
        
        $view = $this->view($var, 200)->setFormat("json");
        
        return $this->handleView($view);
        
    }
}
