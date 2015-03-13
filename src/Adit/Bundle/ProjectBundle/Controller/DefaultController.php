<?php
 
namespace Adit\Bundle\ProjectBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Adit\Bundle\ProjectBundle\Entity\Project;
use Symfony\Component\HttpFoundation\Response;
 
class DefaultController extends Controller
{
    /**
    * @Route("/index", name="adit_simple_index")
    * @Template
    */
    public function indexAction()
    {
      return array();
    }
 
    /**
    * @Route("/create", name="adit_simple_create")
    * @Template("AditProjectBundle:Default:update.html.twig")
    */
    public function createAction()
    {
        $formAction = $this->get('oro_entity.routing_helper')
        ->generateUrlByRequest('adit_simple_create', $this->getRequest());
        $entity = new Project();
        return $this->update($entity, $formAction);
    }
 
    /**
    * @Route("/update/{id}", name="adit_simple_update", requirements={"id"="\d+"})
    * @Template
    */
    public function updateAction(Project $entity)
    {
        $formAction = $this->get('router')->generate('adit_simple_update', ['id' => $entity->getId()]);
 
         return $this->update($entity, $formAction);
    }
        /**
     * @param Project   $entity
     * @param string $formAction
     *
     * @return array
     */
    protected function update(Project $entity, $formAction)
    {
        $saved = false;
     
        if ($this->get('adit_simple.form.handler')->process($entity)) {
            if (!$this->getRequest()->get('_widgetContainer')) {
                $this->get('session')->getFlashBag()->add(
                    'success',
                    $this->get('translator')->trans('Projekt uspješno spremljen')
                );
     
                return $this->get('oro_ui.router')->redirectAfterSave(
                    ['route' => 'adit_simple_update', 'parameters' => ['id' => $entity->getId()]],
                    ['route' => 'adit_simple_index'],
                    $entity
                );
            }
            $saved = true;
        }
     
        return array(
            'entity'     => $entity,
            'saved'      => $saved,
            'form'       => $this->get('adit_simple.form.handler')->getForm()->createView(),
            'formAction' => $formAction
        );
    }
 
    /**
    * @Route("/delete/{id}", name="adit_simple_delete", requirements={"id"="\d+"})
    * @Template
    */
    public function deleteAction($id)
    {
        $manager = $this->getDoctrine()->getManager();
        $entity = $manager->find('Adit\Bundle\ProjectBundle\Entity\Project', $id);
     
        if (!$entity) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $this->get('translator')->trans('Projekt nije pronađen')
            );
            return $this->redirect($this->generateUrl('adit_simple_index'));
        }
     
        $manager->remove($entity);
        $manager->flush();
     
        $this->get('session')->getFlashBag()->add(
            'success',
            $this->get('translator')->trans('Projekt obrisan')
        );
     
        return $this->redirect($this->generateUrl('adit_simple_index'));
        }
}