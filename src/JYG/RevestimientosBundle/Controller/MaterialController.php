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
        $error ="";
        $material = new Material();
        $deposito = new Deposito();

        $material->getAlmacenes()->add($deposito);

        $form = $this->createCreateForm($material);
        $request = $this->getRequest();
        
        if ($request->getMethod() == "POST") 
        {
            $form->handleRequest($request);
            if ($form->isValid()) 
            {   
                //Buscando si ya existe el material que esta agregando
                $repositorio =  $this->getDoctrine()->getRepository('JYGRevestimientosBundle:Material')->findByCodigo($material->getCodigo());
                if ($repositorio) {
                    $session = $request->getSession();
                      $this->addFlash(
                          'cod','Ya existe un material con ese codigo, Por favor modifiquelo y vuelva a seleccionar la imágen'
                       );
                }else{
                    $almacen = $material->getAlmacenes();
                    $material->setAlmacenes($almacen);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($material);
                    $em->flush();

                    return $this->redirect($this->generateUrl('material_show', array('id' => $material->getId())));
                }
            }
        }
        return $this->render('JYGRevestimientosBundle:Material:new.html.twig', array(
            'material' => $material,
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
    private function createCreateForm(Material $entity)
    {
        $form = $this->createForm(new MaterialType(), $entity, array(
            'action' => $this->generateUrl('material_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Crear nuevo Producto',
            'attr' => array('class' => 'btn btn-primary btn-block')
            ))
        ;

        return $form;
    }

    /**
     * Displays a form to create a new Material entity.
     *
     */
    public function newAction()
    {
        $material = new Material();
        /*Si descomentas debajo aparece un form en*/
        //$form   = $this->createCreateForm($entity);
        //$almacen = new Deposito();
        //$material->getAlmacenes()->add($almacen);

        $form = $this ->createForm(new MaterialType(), $material, array(
            'action' => $this->generateUrl('material_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Crear nuevo Producto',
            'attr' => array('class' => 'btn btn-primary btn-block')
            ))
        ;

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
            throw $this->createNotFoundException('No se encontró el material.');
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

        $form->add('submit', 'submit', array(
            'label' => 'Actualizar Datos del Producto',
            'attr' => array('class' => 'btn btn-success btn-block')
            ))
        ;

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
            throw $this->createNotFoundException('No se encuentra el material.');
        }
        // Crea un arreglo del los almacenes actualmente en la base de datos
        $almacenes = array();
        foreach ($entity->getAlmacenes() as $almacen) {
            $almacenes[] = $almacen;
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $codigo = $em->getRepository('JYGRevestimientosBundle:Material')->findByCodigo($entity->getCodigo());
            if($codigo){
                $this->get('session')->getFlashBag()->set('error', 'Ya existe el código.');
            }else{
            // filtra almacenes para que contenga los almacenes que ya no están presentes
                foreach ($entity->getAlmacenes() as $almacen) {
                    foreach ($almacenes as $key => $toDel) {
                        if ($toDel->getId() === $almacen->getId()) {
                            unset($almacenes[$key]);
                        }
                    }
                }
            //para eliminar la relacion
                foreach ($almacenes as $almacen) {
                    $em->persist($almacen);
                    $em->remove($almacen);
                }

                $this->get('session')->getFlashBag()->set('error', 'Se ha modificado exitosamente el producto.');
                $almacen = $entity->getAlmacenes();
                $entity->setAlmacenes($almacen);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('material_edit', array('id' => $id)));
            }
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
            ->add('submit', 'submit', array(
                'label' => 'Eliminar Producto',
                'attr'=> array('class'=>'btn btn-danger btn-block')))
            ->getForm()
        ;
    }
}
