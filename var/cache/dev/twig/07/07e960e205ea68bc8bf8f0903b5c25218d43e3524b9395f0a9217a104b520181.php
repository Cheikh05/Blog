<?php

/* @Users/Default/register.html.twig */
class __TwigTemplate_8af756253d4381fea7b213b5291f78a395fa90f844af033cc00b98ce16e5c8d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("blog.template.html.twig", "@Users/Default/register.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Users/Default/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Users/Default/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 ";
        // line 6
        echo "<div class=\"content-users-register container\">

<div class=\"col-md-6\">
<h3 class=\"text-info\">Inscrivez vous</h3>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
</div>
    <div class=\"col-md-6 content-users-register-right\">
        ";
        // line 13
        if ((($context["modeAuth"] ?? $this->getContext($context, "modeAuth")) == true)) {
            // line 14
            echo "        <div>
            <h2 class=\"text-info\">Authentification</h2>
            ";
            // line 16
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formLogin"] ?? $this->getContext($context, "formLogin")), 'form');
            echo "
        </div>
         ";
        }
        // line 19
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_login");
        echo "\"><button class=\"btn btn-block\" onclick=\"modeAuth == true\">S'authentification</button></a>
        <div class=\"jumbotron\">

            <h3 class=\"text-center\">S'inscrire dans ce Blog vous permettrait d'éditer ,de publier des articles ains de faire des commentaires mais aussi  ça vous permettra de pouvoir publier un article vers les réseaux sociaux comme Linkedin.</h3>
        </div>

    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Users/Default/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  70 => 16,  66 => 14,  64 => 13,  58 => 10,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

 {# {{ parent() }} #}
<div class=\"content-users-register container\">

<div class=\"col-md-6\">
<h3 class=\"text-info\">Inscrivez vous</h3>
    {{ form(form) }}
</div>
    <div class=\"col-md-6 content-users-register-right\">
        {% if modeAuth == true %}
        <div>
            <h2 class=\"text-info\">Authentification</h2>
            {{ form(formLogin) }}
        </div>
         {% endif %}
        <a href=\"{{  path('users_login') }}\"><button class=\"btn btn-block\" onclick=\"modeAuth == true\">S'authentification</button></a>
        <div class=\"jumbotron\">

            <h3 class=\"text-center\">S'inscrire dans ce Blog vous permettrait d'éditer ,de publier des articles ains de faire des commentaires mais aussi  ça vous permettra de pouvoir publier un article vers les réseaux sociaux comme Linkedin.</h3>
        </div>

    </div>

</div>

{% endblock %}", "@Users/Default/register.html.twig", "/home/cheikh/Bureau/Symfony/Blog/src/UsersBundle/Resources/views/Default/register.html.twig");
    }
}
