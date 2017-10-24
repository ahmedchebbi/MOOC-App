<?php

namespace Mooc\CourseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mooc\CourseBundle\Entity\Commentscourse;
use Mooc\CourseBundle\Form\CommentscourseType;

/**
 * Commentscourse controller.
 *
 */
class CommentscourseController extends Controller
{

    /**
     * Lists all Commentscourse entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MoocCourseBundle:Commentscourse')->findAll();

        return $this->render('MoocCourseBundle:Commentscourse:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Commentscourse entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Commentscourse();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('courses_show', array('id' => $entity->getIdCourse())));
        }

        return $this->render('MoocCourseBundle:Commentscourse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Commentscourse entity.
     *
     * @param Commentscourse $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Commentscourse $entity)
    {
        $form = $this->createForm(new CommentscourseType(), $entity, array(
            'action' => $this->generateUrl('commentscourse_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Commentscourse entity.
     *
     */
    public function newAction()
    {
        $entity = new Commentscourse();
        $form   = $this->createCreateForm($entity);

        return $this->render('MoocCourseBundle:Commentscourse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Commentscourse entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Commentscourse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentscourse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocCourseBundle:Commentscourse:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }
             
 

    /**
     * Displays a form to edit an existing Commentscourse entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Commentscourse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentscourse entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocCourseBundle:Commentscourse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Commentscourse entity.
    *
    * @param Commentscourse $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Commentscourse $entity)
    {
        $form = $this->createForm(new CommentscourseType(), $entity, array(
            'action' => $this->generateUrl('commentscourse_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Commentscourse entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Commentscourse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentscourse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('commentscourse_edit', array('id' => $id)));
        }

        return $this->render('MoocCourseBundle:Commentscourse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Commentscourse entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MoocCourseBundle:Commentscourse')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commentscourse entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('commentscourse'));
    }

    /**
     * Creates a form to delete a Commentscourse entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentscourse_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}