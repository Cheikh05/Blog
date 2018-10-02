<?php

namespace DashboardBundle\Controller;


use ArticleBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public $username = "Anonymous";
    public $formArticle;
    public $error = "";
    public $success = "";
    public function indexAction(Request $request)
    {
        $this->username = $request->query->get("username");

       return $this->articleAction($request);

      //  return $this->render('@Dashboard/Default/dashboard.html.twig',array('username'=>$this->username));
    }



    public function articleAction(Request $request){

        // Creation de l'objet Articlee
        $article = new Article();


        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $article );

        /* Ajout de champ de notre formulaire  */


        $formBuilder
            ->add('titre',      TextType::class)
            ->add('description',     TextType::class)
            ->add('etatPublication', ChoiceType::class, array(
                'choices'  => array(
                    'Publier' => "publier",
                    'Broullon' => "brouillon"
                )))
            ->add('categorie', ChoiceType::class, array(
                'choices'  => array(
                    'Informatique' => "informatique",
                    'Sport' => "sport",
                    'Hi Tech'=>'hitech',
                    'Loisir'=>'loisir',
                    'Non spécifié'=>'notspecify'
                )))
            ->add('imageUrl', FileType::class)
            ->add('Enregistrer',SubmitType::class)
        ;


        $formArticle = $formBuilder->getForm();

        if ($request->isMethod('POST')) {

            $formArticle->handleRequest($request);


            if ($formArticle->isValid()) {
                $article->setDateParution(new \DateTime());
                $article->setAuteur($this->username);

                    // On enregistre notre objet $advert dans la base de données, par exemple
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($article);
                    $em->flush();


                    return $this->redirectToRoute('home_homepage');

                }

            }

        return $this->render('@Dashboard/Default/dashboard.html.twig',array('formArticle'=>$formArticle->createView(),
                                                                        'username'=>$this->username));


    }




}
