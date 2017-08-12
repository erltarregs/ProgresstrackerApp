<?php

namespace Qi\ProgTrack\ProgTrackerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="pt")
     */
    public function indexAction()
    {
        return $this->render('QiProgTrackProgTrackerBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/home", name="home")
     */
    public function homeAction()
    {
        return $this->render('QiProgTrackProgTrackerBundle:Default:index.html.twig');
    }
}
