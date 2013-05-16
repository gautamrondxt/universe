<?php

// src/Acme/HelloBundle/Controller/DefaultController.php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\HelloBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function newAction(Request $request) {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
                ->add('task', 'text')
                ->add('dueDate', 'date')
                ->add('description', 'textarea')
                ->add('check', 'checkbox', array(
                    'label' => 'Show this entry publicly?',
                    'required' => false,
                ))
                ->getForm();
        if ($request->getMethod() == 'POST') {
           /*   $em = $this->getDoctrine()->getManager();
              $em->persist($task);
              $em->flush();
              return new Response('Created product id ' . $task->getId()); */
        }

        return $this->render('HelloBundle:Default:new.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}

?>