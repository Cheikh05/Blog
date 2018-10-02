<?php

/* @Dashboard/Default/dashboard.html.twig */
class __TwigTemplate_78994e790916668f997f4f6a560a6b0f5f0013a253ad8725e7a13e6b4cdf1b7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog.template.html.twig", "@Dashboard/Default/dashboard.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Default/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Dashboard/Default/dashboard.html.twig"));

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
        echo "
<div class=\"container-fluid\">
    <div class=\"col-md-3 dashboard-left\">
        <img src=\"../img/img.jpeg\" width=\"100px\" height=\"100px\" class=\"img-circle\">
        ";
        // line 7
        if ((($context["username"] ?? $this->getContext($context, "username")) != "")) {
            // line 8
            echo "
            <h4 class=\"text-center\">";
            // line 9
            echo twig_escape_filter($this->env, ($context["username"] ?? $this->getContext($context, "username")), "html", null, true);
            echo "</h4>
        ";
        }
        // line 11
        echo "        <hr>
        <p>
            <button class=\"btn btn-primary btn-block\"><span class=\"
glyphicon glyphicon-plus\"></span> Nouveau article </button>
        </p>
        <p>
            <button class=\"btn btn-primary btn-block\">Article récent </button>
        </p>
        <p>
           <button class=\"btn btn-primary btn-block\">Tous les articles <span class=\"badge\">15</span></button>
        </p>
        <p>
           <button class=\"btn btn-primary btn-block\">Vos Commentaires <span class=\"badge\">5</span></button>
        </p>
        <p>
            <button class=\"btn btn-primary btn-block\"> <span class=\"glyphicon glyphicon-wrench\"></span> Paramétres</button>
        </p>
        <p>
            <button class=\"btn btn-default btn-block btn-deconnexion\">  Deconnexion</button>
        </p>


    </div>
    <div class=\"col-md-8 dashboard-right\">
     <div class=\"row\">
      <div class=\"col-md-6\">
          <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Nouveau articles</div>
              <div class=\"panel-body\">
                  ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formArticle"] ?? $this->getContext($context, "formArticle")), 'form');
        echo "

              </div>
          </div>
      </div>
         <div class=\"col-md-5\">
             <div class=\"panel panel-primary\">
                 <div class=\"panel-heading\">Dernier article</div>
                 <div class=\"panel-body\"></div>
             </div>
         </div>
     </div>
        <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">Liste des articles</div>
                <div class=\"panel-body\"></div>
            </div>
        </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Dashboard/Default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  65 => 11,  60 => 9,  57 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
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
    <div class=\"col-md-3 dashboard-left\">
        <img src=\"../img/img.jpeg\" width=\"100px\" height=\"100px\" class=\"img-circle\">
        {% if username != \"\" %}

            <h4 class=\"text-center\">{{ username }}</h4>
        {% endif %}
        <hr>
        <p>
            <button class=\"btn btn-primary btn-block\"><span class=\"
glyphicon glyphicon-plus\"></span> Nouveau article </button>
        </p>
        <p>
            <button class=\"btn btn-primary btn-block\">Article récent </button>
        </p>
        <p>
           <button class=\"btn btn-primary btn-block\">Tous les articles <span class=\"badge\">15</span></button>
        </p>
        <p>
           <button class=\"btn btn-primary btn-block\">Vos Commentaires <span class=\"badge\">5</span></button>
        </p>
        <p>
            <button class=\"btn btn-primary btn-block\"> <span class=\"glyphicon glyphicon-wrench\"></span> Paramétres</button>
        </p>
        <p>
            <button class=\"btn btn-default btn-block btn-deconnexion\">  Deconnexion</button>
        </p>


    </div>
    <div class=\"col-md-8 dashboard-right\">
     <div class=\"row\">
      <div class=\"col-md-6\">
          <div class=\"panel panel-primary\">
              <div class=\"panel-heading\">Nouveau articles</div>
              <div class=\"panel-body\">
                  {{ form(formArticle) }}

              </div>
          </div>
      </div>
         <div class=\"col-md-5\">
             <div class=\"panel panel-primary\">
                 <div class=\"panel-heading\">Dernier article</div>
                 <div class=\"panel-body\"></div>
             </div>
         </div>
     </div>
        <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">Liste des articles</div>
                <div class=\"panel-body\"></div>
            </div>
        </div>
        </div>
    </div>
</div>

{% endblock %}", "@Dashboard/Default/dashboard.html.twig", "/home/cheikh/Bureau/Symfony/Blog/src/DashboardBundle/Resources/views/Default/dashboard.html.twig");
    }
}
