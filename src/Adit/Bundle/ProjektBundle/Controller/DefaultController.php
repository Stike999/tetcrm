<?php

namespace Adit\Bundle\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/statusi", name="adit_statusi_link")
     * @Template()
     */
    public function indexStatusAction()
    {
        return $this->render('AditProjektBundle:Projekt:statusi.html.twig');
    }
    
    /**
     * @Route("/statusAdd", name="adit_status_add")
     * @Template()
     */
    public function addStatusAction()
    {
        return $this->render('AditProjektBundle:Projekt:status_update.html.twig');
    }
    
    /**
     * @Route("/statusUpdate", name="adit_status_update")
     * @Template()
     */
    public function updateStatusAction()
    {
        return 0;
    }
    
    /**
     * @Route("/statusDelete", name="adit_status_delete")
     * @Template()
     */
    public function deleteStatusAction()
    {
        return 0;
    }
    
    /**
     * @Route("/tip", name="adit_tipovi_link")
     * @Template()
     */
    public function indexTipoviAction()
    {
        return $this->render('AditProjektBundle:Projekt:tipovi.html.twig');
    }
    
    /**
     * @Route("/tipAdd", name="adit_type_add")
     * @Template()
     */
    public function addTipoviAction()
    {
        return 0;
    }
    
    /**
     * @Route("/tipUpdate", name="adit_type_update")
     * @Template()
     */
    public function updateTipoviAction()
    {
        return 0;
    }
    
    /**
     * @Route("/tipDelete", name="adit_type_delete")
     * @Template()
     */
    public function deleteTipoviAction()
    {
        return 0;
    }
}
