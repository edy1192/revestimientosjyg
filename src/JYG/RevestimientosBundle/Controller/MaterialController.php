<?php

namespace JYG\RevestimientosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JYG\RevestimientosBundle\Entity\Material;
use JYG\RevestimientosBundle\Form\MaterialType;
use JYG\RevestimientosBundle\Entity\Deposito;
use JYG\RevestimientosBundle\Form\DepositoType;

/**
 * Material controller.
 *
 */
class MaterialController extends Controller
{

    /**
     * Lists all Material entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('JYGRevestimientosBundle:Material')->findAll();

        return $this->render('JYGRevestimientosBundle:Material:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Material entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Material();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('material_show', array('id' => $entity->getId())));
        }

        return $this->render('JYGRevestimientosBundle:Material:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Material entity.
     *
     * @param Material $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    /*private function createCreateForm(Material $entity)
    {
        $form = $this->createForm(new MaterialType(), $entity, array(
            'action' => $this->generateUrl('material_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }*/

    /**
     * Displays a form to create a new Material entity.
     *
     */
    public function newAction()
    {
        $material = new Material();
        //$form   = $this->createCreateForm($entity);
        $almacen = new Deposito();

        $material->getAlmacenes()->add($almacen);

        $form = $this ->createForm(new MaterialType(), $material);

        return $this->render('JYGRevestimientosBundle:Material:new.html.twig', array(
            'entity' => $material,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Material entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JYGRevestimientosBundle:Material')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Material entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('JYGRevestimientosBundle:Material:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Material entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JYGRevestimientosBundle:Material')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Material entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('JYGRevestimientosBundle:Material:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Material entity.
    *
    * @param Material $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Material $entity)
    {
        $form = $this->createForm(new MaterialType(), $entity, array(
            'action' => $this->generateUrl('material_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Material entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JYGRevestimientosBundle:Material')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Material entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('material_edit', array('id' => $id)));
        }

        return $this->render('JYGRevestimientosBundle:Material:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Material entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JYGRevestimientosBundle:Material')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Material entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('material'));
    }

    /**
     * Creates a form to delete a Material entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('material_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
