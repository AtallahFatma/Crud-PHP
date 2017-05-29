<?php

namespace AppBundle\Controller;

use AppBundle\Form\EntityType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
     /*   return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);*/

     //dump($this->runCommand($this->getParameter('kernel.root_dir').'/../bin/console'));
    /* print_r($this->runCommand("generate:doctrine:entity --entity=AppBundle:Post"));

     return new Response();*/

       /* $message= \Swift_Message::newInstance()
            ->setSubject('sub')
            ->setFrom('fatma.atallah@gmailcom')
            ->setTo('fatma.atallah@gmailcom')
            ->setBody('un mail');

        $this->get('mailer')->send($message);*/




        $form=$this->createForm(EntityType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()){

            $nom = $form['name']->getData();
            $att1=$form['att1']->getData();
            $att2=$form['att2']->getData();
            $att3=$form['att3']->getData();

            $v=array(

                'command' => 'generate:doctrine:entity',
                '--entity' => 'AppBundle:'.$nom,
                '--fields' => $att1.':string(length=100 nullable=true unique=false) '.$att2.':text '.$att3.':text'
            );

            $cmd= $this->get('Cmd');
            return new Response($cmd->exec($v));

        }

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('default/CreateEntity.html.twig', array(
            'form' => $form->createView(),
        ));



    }

    /**
     * @Route("/CreateEntity", name="Creer_entites")
     * @Method({"GET", "POST"})
     */
    public function CreateEntity(Request $request){

        $form=$this->createForm(EntityType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()){

            $nom = $form['name']->getData();
            $att1=$form['att1']->getData();
            $att2=$form['att2']->getData();
            $att3=$form['att3']->getData();

            $v=array(

                'command' => 'generate:doctrine:entity',
                '--entity' => 'AppBundle:'.$nom,
                '--fields' => $att1.':string(length=100 nullable=true unique=false) '.$att2.':text '.$att3.':text'
            );

            $cmd= $this->get('Cmd');
            return new Response($cmd->exec($v));



        }

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('default/CreateEntity.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
