<?php

namespace Adit\Bundle\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/projekti", name="projekti_link")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('AditProjektBundle:Default:index.html.twig');
    }
}
