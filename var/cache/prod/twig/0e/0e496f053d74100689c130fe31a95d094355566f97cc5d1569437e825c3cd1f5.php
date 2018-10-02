<?php

/* blog.template.html.twig */
class __TwigTemplate_66df5e80899fc20df3b422a03c8ea6f376dfb4e0760bd925ae312b48b28ed84c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "        
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "

        ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Blog de Ahmed ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        // line 14
        echo "         <!--  <ul class=\"navbar navbar-primary\">
               <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_homepage");
        echo "\" class=\"nav-navbarnav\"><li>Home</li></a>
               <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_homepage");
        echo "\" class=\"nav-navbarnav\"><li>Articlee</li></a>
           </ul>
         -->
         <div class=\"container-fluid header\">
          <div class=\"container\">
            <div class=\"col-md-1 img-profile\">
              <img src=\"img/img.jpeg\" width=\"80px\" height=\"80px\" class=\"img-circle\">
            </div>
           <div class=\"col-md-4 header-left\">
             <h1 class=\"name-blog\">BLOG DE AHMED</h1>
             <p class=\"text-info\">Ingénieur en Sécurité informatique</p>
           </div>
           <div class=\"col-md-7 col-sm-4 header-right\">
             <ul class=\"\">
              <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_homepage");
        echo "\"> <li>Home</li></a>
               <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_homepage");
        echo "\"><li>Articlee</li></a>
               <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_homepage");
        echo "\"><li>Users</li></a>
             </ul>
           </div>
           </div>
         </div>

        ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "
            <h1 class=\"text-danger text-center\">Contenu de la page</h1>
        ";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "            <p>Footer</p>
        ";
    }

    public function getTemplateName()
    {
        return "blog.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  131 => 46,  125 => 41,  122 => 40,  111 => 32,  107 => 31,  103 => 30,  86 => 16,  82 => 15,  79 => 14,  76 => 13,  71 => 7,  65 => 6,  59 => 49,  57 => 46,  53 => 44,  51 => 40,  48 => 39,  46 => 13,  37 => 8,  35 => 7,  31 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "blog.template.html.twig", "/home/cheikh/Bureau/Symfony/Blog/app/Resources/views/blog.template.html.twig");
    }
}
