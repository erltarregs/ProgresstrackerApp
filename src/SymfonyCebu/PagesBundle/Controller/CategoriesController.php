<?php

namespace SymfonyCebu\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoriesController extends Controller
{
    /**
     * @Route("/categories/insert")
     */
    public function insertAction()
    {
        return $this->render('SymfonyCebuPagesBundle:Categories:insert.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/categories/list")
     */
    public function listAction()
    {
        return $this->render('SymfonyCebuPagesBundle:Categories:list.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/categories/show/{slug}")
     */
    public function showAction($slug)
    {
        return $this->render('SymfonyCebuPagesBundle:Categories:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/categories/update/{id}")
     */
    public function updateAction($id)
    {
        return $this->render('SymfonyCebuPagesBundle:Categories:update.html.twig', array(
            // ...
        ));
    }

}
