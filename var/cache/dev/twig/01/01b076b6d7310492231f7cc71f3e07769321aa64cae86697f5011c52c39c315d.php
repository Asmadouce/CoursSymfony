<?php

/* admin/admin.html.twig */
class __TwigTemplate_b369d095f4c616b724633a1c207e866ce1265307d9624d03e2ec8544249e1ea4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Les Maisons d'Asmaoui!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container pad\">
        <div class=\"row\">

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            <div class=\"flash-notice text-center col-12\">
                ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        
            <table class=\"table table-hover table-light\">
                <thead>
                    <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Titre du bien</th>
                    <th scope=\"col\">Surface </th>
                    <th scope=\"col\">Prix </th>
                    <th scope=\"col\">Editer</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 27
            echo "                    <div class=\"card col-12\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", array()), "html", null, true);
            echo "</th>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "title", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "surface", array()), "html", null, true);
            echo " m²</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "price", array()), 0, ",", " "), "html", null, true);
            echo " €</td>  
                                <td><a href=\"admin/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", array()), "html", null, true);
            echo "/edit\" class=\"btn btn-success\"><i class=\"far fa-edit\"></i></a></td>
                                <td><a href=\"admin/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", array()), "html", null, true);
            echo "/remove\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></a></td>                         
                            </tr>
                        </tbody>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </table>
            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form");
        echo "\" class=\"btn btn-secondary\"><i class=\"fas fa-plus fa-6x\"></i></a>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 41,  147 => 40,  136 => 35,  132 => 34,  128 => 33,  124 => 32,  120 => 31,  116 => 30,  111 => 27,  107 => 26,  93 => 14,  84 => 11,  81 => 10,  77 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Les Maisons d'Asmaoui!{% endblock %}

{% block body %}
    <div class=\"container pad\">
        <div class=\"row\">

        {% for message in app.flashes('notice') %}
            <div class=\"flash-notice text-center col-12\">
                {{ message }}
            </div>
        {% endfor %}
        
            <table class=\"table table-hover table-light\">
                <thead>
                    <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Titre du bien</th>
                    <th scope=\"col\">Surface </th>
                    <th scope=\"col\">Prix </th>
                    <th scope=\"col\">Editer</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
                {% for bien in biens %}
                    <div class=\"card col-12\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">{{bien.id}}</th>
                                <td>{{bien.title}}</td>
                                <td>{{bien.surface}} m²</td>
                                <td>{{bien.price|number_format(0,',',' ')}} €</td>  
                                <td><a href=\"admin/{{bien.id}}/edit\" class=\"btn btn-success\"><i class=\"far fa-edit\"></i></a></td>
                                <td><a href=\"admin/{{bien.id}}/remove\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></a></td>                         
                            </tr>
                        </tbody>
                    </div>
                {% endfor  %}
            </table>
            <a href=\"{{path(\"form\")}}\" class=\"btn btn-secondary\"><i class=\"fas fa-plus fa-6x\"></i></a>

        </div>
    </div>
{% endblock %}
", "admin/admin.html.twig", "/var/www/symfony/templates/admin/admin.html.twig");
    }
}
