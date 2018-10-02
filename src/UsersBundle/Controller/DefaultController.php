<?php

namespace UsersBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use UsersBundle\Entity\Compte;
use UsersBundle\Entity\Utilisateur;

class DefaultController extends Controller
{
    public $formLogin = null;
    public    $modeAuth = false;

    public function registerAction(Request $request)
    {

          $username = "";
    /*Creation de l'objet */
    $user = new Utilisateur();
    /* FormBuilder permet de creer facilement un formulaire a partie d'un objet*/
    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user , array('csrf_protection' => false));

    /* Ajout de champ de notre formulaire  */


        $formBuilder
            ->add('prenom',      TextType::class)
            ->add('nom',     TextType::class)
            ->add('prenom',   TextType::class)
            ->add('email',    EmailType::class)
            ->add('username', TextType::class)
            ->add('password',      PasswordType::class)
            ->add('repeatPassword',      PasswordType::class)
            ->add('sexe', ChoiceType::class, array(
                'choices'  => array(
                    'Homme' => "Homme",
                    'Femme' => "Femme"
                )))
            ->add('Valider',SubmitType::class)

        ;





     /* Création du formulaire a partir de l'objet formBuilder */


    $form = $formBuilder->getForm();




        // Si la requête est en POST
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur


            $form->handleRequest($request);

            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {


               if($user->getPassword() == $user->getRepeatPassword()){
                   $hashPW = password_hash($user->getPassword(),PASSWORD_BCRYPT);
                   $user->setPassword($hashPW);
                   // On enregistre notre objet $advert dans la base de données, par exemple
                   $em = $this->getDoctrine()->getManager();
                   $em->persist($user);
                   $em->flush();

                   $request->getSession()->getFlashBag()->add('notice', 'Inscription reussit.');

                   // On redirige vers la page de visualisation de l'annonce nouvellement créée
                   return $this->redirectToRoute('users_login');
               }else{
                   return $this->render('@Users/Default/register.html.twig',array(
                       'form'=>$form->createView(),
                       'erreur'=>"Veillez verifier les champs",
                   ));
               }

            }
        }


            if($this->formLogin != null){
                return $this->render('@Users/Default/register.html.twig',array(
                    'form'=>$form->createView(),
                    'formLogin'=>$this->formLogin->createView(),
                    'modeAuth'=>$this->modeAuth
                ));
            }

        /* On va passé l'objet créé a la vue  */
        return $this->render('@Users/Default/register.html.twig',array(
            'form'=>$form->createView(),
            'modeAuth'=>$this->modeAuth
            ));
    }






    public function loginAction(Request $request){
        $this->modeAuth = true;

        $compte = new Compte();
        /* FormBuilder permet de creer facilement un formulaire a partie d'un objet*/
        $formBuilderLogin = $this->get('form.factory')->createBuilder(FormType::class, $compte);

        /* Ajout de champ de notre formulaire  */


        $formBuilderLogin
            ->add('usernamee',      TextType::class)
            ->add('passwordd',      PasswordType::class)
            ->add('Connexion',SubmitType::class)
        ;

        $this->formLogin = $formBuilderLogin->getForm();

        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur


            $this->formLogin->handleRequest($request);


            if ($this->formLogin->isValid()) {


                if ($compte->getPasswordd() != "" && $compte->getUsernamee() != "") {

                    $em = $this->getDoctrine()->getManager();
                    $userRepository = $em->getRepository('UsersBundle:Utilisateur');
                    // Recupération de l'utilsateur qui posséde ce username
                    $user = $userRepository->findOneByUsername($compte->getUsernamee());
                   // $em->flush();
                    if($user != null){
                        $hashPW = password_hash($compte->getPasswordd(), PASSWORD_BCRYPT);
                        $compte->setPasswordd($hashPW);

                        if ($user->getPassword() == $compte->getPasswordd()) {
                            return $this->redirectToRoute('dashboard_homepage',array('username' => $user->getUsername()));
                        }else{
                            return $this->redirectToRoute('users_login');
                        }
                    }




                }

            }
                return $this->render('@Users/Default/register.html.twig', array(
                    'form' => $this->form->createView()
                ));
            }

        return $this->registerAction($request);

    }
}
