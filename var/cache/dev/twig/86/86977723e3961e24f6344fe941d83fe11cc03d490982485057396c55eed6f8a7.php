<?php

/* base.html.twig */
class __TwigTemplate_3054a4d2f1edb51d976862c5bba8c3be5e1a8c9db263c7ddb0ffa4d74f1f42a8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>

    <body>
        <header class=\"banniere\">
        </header>

        <nav class=\"navbar navbar-expand-lg navbar-light bg-secondary\">       
                <a class=\"navbar-brand text-dark\"  href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Les Maisons D'Asmaoui</a> 
                 <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
              <div class=\"collapse navbar-collapse\" id=\"navbarNav\">   
                <a class=\"col-2 text-light\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact<span class=\"sr-only\">(current)</span></a>
                <a class=\"col-2 text-light\"  href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\">Inscription<span class=\"sr-only\">(current)</span></a>
            
            ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "user", array())) {
            // line 28
            echo "                
                <a class=\"col-2 text-light\"  href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion<span class=\"sr-only\">(current)</span></a>
            
            ";
        } else {
            // line 32
            echo "                <a class=\"col-2 text-light\"  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form");
            echo "\">Ajouter un bien<span class=\"sr-only\">(current)</span></a>
                <a class=\"col-2 text-light\"  href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Admin<span class=\"sr-only\">(current)</span></a>
                <a class=\"col-2 text-light\"  href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion<span class=\"sr-only\">(current)</span></a>
            
                <h4 class=\"col-2 text-center text-dark\"> Bonjour : ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 36, $this->source); })()), "user", array()), "Username", array()), "html", null, true);
            echo " !</h4><!--https://symfony.com/doc/current/templating/app_variable.html-->
            </div>    
                ";
        }
        // line 38
        echo "              
        </nav>

        ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "
        <footer>
        </footer>

            ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Les maisons d'Asmaoui!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("library/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("library/fontawesome/css/all.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "            <script src=\"/library/bootstrap/js/bootstrap.bundle.js\"></script> 
            <script src=\"js/jQuery.js\"></script>
            <script src=\"js/script.js\"></script>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 47,  195 => 46,  178 => 41,  166 => 10,  162 => 9,  157 => 8,  148 => 7,  130 => 6,  118 => 51,  116 => 46,  110 => 42,  108 => 41,  103 => 38,  97 => 36,  92 => 34,  88 => 33,  83 => 32,  77 => 29,  74 => 28,  72 => 27,  67 => 25,  63 => 24,  55 => 19,  46 => 12,  44 => 7,  40 => 6,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Les maisons d'Asmaoui!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('library/bootstrap/css/bootstrap.css')}}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('library/fontawesome/css/all.css')}}\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('style.css')}}\" />
        {% endblock %}
    </head>

    <body>
        <header class=\"banniere\">
        </header>

        <nav class=\"navbar navbar-expand-lg navbar-light bg-secondary\">       
                <a class=\"navbar-brand text-dark\"  href=\"{{path(\"index\")}}\">Les Maisons D'Asmaoui</a> 
                 <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>
              <div class=\"collapse navbar-collapse\" id=\"navbarNav\">   
                <a class=\"col-2 text-light\" href=\"{{path(\"contact\")}}\">Contact<span class=\"sr-only\">(current)</span></a>
                <a class=\"col-2 text-light\"  href=\"{{path(\"registration\")}}\">Inscription<span class=\"sr-only\">(current)</span></a>
            
            {% if not app.user%}
                
                <a class=\"col-2 text-light\"  href=\"{{path(\"login\")}}\">Connexion<span class=\"sr-only\">(current)</span></a>
            
            {% else %}
                <a class=\"col-2 text-light\"  href=\"{{path(\"form\")}}\">Ajouter un bien<span class=\"sr-only\">(current)</span></a>
                <a class=\"col-2 text-light\"  href=\"{{path(\"admin\")}}\">Admin<span class=\"sr-only\">(current)</span></a>
                <a class=\"col-2 text-light\"  href=\"{{path(\"logout\")}}\">Deconnexion<span class=\"sr-only\">(current)</span></a>
            
                <h4 class=\"col-2 text-center text-dark\"> Bonjour : {{app.user.Username}} !</h4><!--https://symfony.com/doc/current/templating/app_variable.html-->
            </div>    
                {% endif %}              
        </nav>

        {% block body %}{% endblock %}

        <footer>
        </footer>

            {% block javascripts %}
            <script src=\"/library/bootstrap/js/bootstrap.bundle.js\"></script> 
            <script src=\"js/jQuery.js\"></script>
            <script src=\"js/script.js\"></script>
            {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony/templates/base.html.twig");
    }
}
