<?php

/* contact/emails.html.twig */
class __TwigTemplate_99a54010d2523ae164084dcb38278b5898f40ba1546313ffb342c62c2c46168e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/emails.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/emails.html.twig"));

        // line 2
        echo "<h3>Les Maisons d'Asmaoui</h3>

<div class=\"container\">
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewEmail"]) || array_key_exists("viewEmail", $context) ? $context["viewEmail"] : (function () { throw new Twig_Error_Runtime('Variable "viewEmail" does not exist.', 5, $this->source); })()), "firstname", array()), "html", null, true);
        echo " s'est connecté sur votre site <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
        echo "\">Les Maisons d'Asmaoui</a>
    Pour répondre à la demande voici les coordonnées du client:

    <div> Nom : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewEmail"]) || array_key_exists("viewEmail", $context) ? $context["viewEmail"] : (function () { throw new Twig_Error_Runtime('Variable "viewEmail" does not exist.', 8, $this->source); })()), "name", array()), "html", null, true);
        echo " </div>
    <div> Prénom : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewEmail"]) || array_key_exists("viewEmail", $context) ? $context["viewEmail"] : (function () { throw new Twig_Error_Runtime('Variable "viewEmail" does not exist.', 9, $this->source); })()), "firstname", array()), "html", null, true);
        echo " </div>
    <div> Email : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewEmail"]) || array_key_exists("viewEmail", $context) ? $context["viewEmail"] : (function () { throw new Twig_Error_Runtime('Variable "viewEmail" does not exist.', 10, $this->source); })()), "email", array()), "html", null, true);
        echo " <div>
    <div> Commentaires : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewEmail"]) || array_key_exists("viewEmail", $context) ? $context["viewEmail"] : (function () { throw new Twig_Error_Runtime('Variable "viewEmail" does not exist.', 11, $this->source); })()), "commentaire", array()), "html", null, true);
        echo " </div>
</div>
";
        // line 14
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/maison.gif")), "html", null, true);
        echo "\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/emails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  34 => 5,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# contacts/emails.html.twig #}
<h3>Les Maisons d'Asmaoui</h3>

<div class=\"container\">
    {{viewEmail.firstname}} s'est connecté sur votre site <a href=\"{{ url('login') }}\">Les Maisons d'Asmaoui</a>
    Pour répondre à la demande voici les coordonnées du client:

    <div> Nom : {{viewEmail.name}} </div>
    <div> Prénom : {{viewEmail.firstname}} </div>
    <div> Email : {{viewEmail.email}} <div>
    <div> Commentaires : {{viewEmail.commentaire}} </div>
</div>
{# Makes an absolute URL to the /images/logo.png file #}
<img src=\"{{ absolute_url(asset('img/maison.gif')) }}\">", "contact/emails.html.twig", "/var/www/symfony/templates/contact/emails.html.twig");
    }
}
