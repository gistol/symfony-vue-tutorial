<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Route("/{route}", name="vue_pages", requirements={"route"=".+"})
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/notification/register", name="notification_register")
     */
    public function registerAction()
    {

        return  new JsonResponse(array('new' => 'yes', "success" => true));
    }
}
