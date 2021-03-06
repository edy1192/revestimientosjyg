<?php

namespace JYG\RevestimientosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use JYG\RevestimientosBundle\Entity\ItemCompra;
use JYG\RevestimientosBundle\Form\ItemCompraType;

/**
 * ItemCompra controller.
 *
 */
class ItemCompraController extends Controller
{

    /**
     * Lists all ItemCompra entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('JYGRevestimientosBundle:ItemCompra')->findAll();

        return $this->render('JYGRevestimientosBundle:ItemCompra:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ItemCompra entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ItemCompra();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('itemcompra_show', array('id' => $entity->getId())));
        }

        return $this->render('JYGRevestimientosBundle:ItemCompra:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ItemCompra entity.
     *
     * @param ItemCompra $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ItemCompra $entity)
    {
        $form = $this->createForm(new ItemCompraType(), $entity, array(
            'action' => $this->generateUrl('itemcompra_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ItemCompra entity.
     *
     */
    public function newAction()
    {
        $entity = new ItemCompra();
        $form   = $this->createCreateForm($entity);

        return $this->render('JYGRevestimientosBundle:ItemCompra:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ItemCompra entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JYGRevestimientosBundle:ItemCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ItemCompra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('JYGRevestimientosBundle:ItemCompra:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ItemCompra entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JYGRevestimientosBundle:ItemCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ItemCompra entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('JYGRevestimientosBundle:ItemCompra:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ItemCompra entity.
    *
    * @param ItemCompra $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ItemCompra $entity)
    {
        $form = $this->createForm(new ItemCompraType(), $entity, array(
            'action' => $this->generateUrl('itemcompra_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ItemCompra entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JYGRevestimientosBundle:ItemCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ItemCompra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('itemcompra_edit', array('id' => $id)));
        }

        return $this->render('JYGRevestimientosBundle:ItemCompra:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ItemCompra entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JYGRevestimientosBundle:ItemCompra')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ItemCompra entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('itemcompra'));
    }

    /**
     * Creates a form to delete a ItemCompra entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('itemcompra_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
