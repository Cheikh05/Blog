<?php

/* @Home/Default/home.html.twig */
class __TwigTemplate_89dfc950424236058739db284cfb4852ef53144f72c83e49523821c1012d6aad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog.template.html.twig", "@Home/Default/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "blog.template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Home/Default/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Home/Default/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div class=\"container-fluid\">
  <div class=\"col-md-11 content-home\">
   <form class=\"form form-inline form-search\">
     
     <input type=\"text\" name=\"key_search\" class=\"search form-control\" placeholder=\"Chercher un article parmis +10000 articles\"/>
     <select class=\"form-control\">
        <option value=\"all\">Selectionnez une catégorie</option>
        <option value=\"\">Formation</option>
        <option value=\"\">Actualite</option>
        <option value=\"\">Informatique</option>
        <option value=\"\">Video</option>
        <option value=\"\">Sport</option>
     </select>
     <button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span></button>

   <form>
  </div>



      <div class=\"col-md-8 content-home-left\">
         <div class=\"content-article\">
             <img src=\"../img/img.jpeg\" width=\"100%\" height=\"200px\">
            <h3 class=\"text-center\">Développement Wevb et mobile</h3>
             <p>Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
                 Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
             </p>

         </div>
          <div class=\"content-article\">
              <img src=\"../img/img.jpeg\" width=\"100%\" height=\"200px\">
              <h3 class=\"text-center\">Développement Wevb et mobile</h3>
              <p>Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
                  Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
              </p>

          </div>
          <div class=\"content-article\">
              <img src=\"../img/img.jpeg\" width=\"100%\" height=\"200px\">
              <h3 class=\"text-center\">Développement Wevb et mobile</h3>
              <p>Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
                  Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
              </p>

          </div>
      </div>
      <div class=\"col-md-4 content-home-right\">
          <p class=\"text-info\"> Fil d'actalité >> </p>
          <hr>

      </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Home/Default/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'blog.template.html.twig' %}
{% block body %}
  <div class=\"container-fluid\">
  <div class=\"col-md-11 content-home\">
   <form class=\"form form-inline form-search\">
     
     <input type=\"text\" name=\"key_search\" class=\"search form-control\" placeholder=\"Chercher un article parmis +10000 articles\"/>
     <select class=\"form-control\">
        <option value=\"all\">Selectionnez une catégorie</option>
        <option value=\"\">Formation</option>
        <option value=\"\">Actualite</option>
        <option value=\"\">Informatique</option>
        <option value=\"\">Video</option>
        <option value=\"\">Sport</option>
     </select>
     <button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span></button>

   <form>
  </div>



      <div class=\"col-md-8 content-home-left\">
         <div class=\"content-article\">
             <img src=\"../img/img.jpeg\" width=\"100%\" height=\"200px\">
            <h3 class=\"text-center\">Développement Wevb et mobile</h3>
             <p>Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
                 Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
             </p>

         </div>
          <div class=\"content-article\">
              <img src=\"../img/img.jpeg\" width=\"100%\" height=\"200px\">
              <h3 class=\"text-center\">Développement Wevb et mobile</h3>
              <p>Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
                  Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
              </p>

          </div>
          <div class=\"content-article\">
              <img src=\"../img/img.jpeg\" width=\"100%\" height=\"200px\">
              <h3 class=\"text-center\">Développement Wevb et mobile</h3>
              <p>Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
                  Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article Contenu de mon article
              </p>

          </div>
      </div>
      <div class=\"col-md-4 content-home-right\">
          <p class=\"text-info\"> Fil d'actalité >> </p>
          <hr>

      </div>
  </div>
{% endblock %}", "@Home/Default/home.html.twig", "/home/cheikh/Bureau/Symfony/Blog/src/HomeBundle/Resources/views/Default/home.html.twig");
    }
}
