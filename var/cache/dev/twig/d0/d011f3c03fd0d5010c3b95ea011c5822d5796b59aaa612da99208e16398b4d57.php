<?php

/* index/index.html.twig */
class __TwigTemplate_c161b27d441de7459c51b2f8d14a8623848ec6e7ea3096539e652ec2efa8360d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

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

        echo "Hello IndexController!";
        
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filtre"]) || array_key_exists("filtre", $context) ? $context["filtre"] : (function () { throw new Twig_Error_Runtime('Variable "filtre" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"col-12\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filtre"]) || array_key_exists("filtre", $context) ? $context["filtre"] : (function () { throw new Twig_Error_Runtime('Variable "filtre" does not exist.', 11, $this->source); })()), "minSurface", array()), 'row');
        echo " 
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"col-12\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filtre"]) || array_key_exists("filtre", $context) ? $context["filtre"] : (function () { throw new Twig_Error_Runtime('Variable "filtre" does not exist.', 17, $this->source); })()), "maxPrice", array()), 'row');
        echo " 
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"col-12\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
            </div>
        </div>
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filtre"]) || array_key_exists("filtre", $context) ? $context["filtre"] : (function () { throw new Twig_Error_Runtime('Variable "filtre" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
    </div>
</div>

    <div class=\"container pad\">
        <div class=\"row\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 33
            echo "                <div class=\"card col-5 mar\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "title", array()), "html", null, true);
            echo "</h4>
                        <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "picture", array()), "html", null, true);
            echo "\" class=\"card-img-top\">
                        <div class=\"card-text\">";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "price", array()), 0, ",", " "), "html", null, true);
            echo " €</div>
                        <div class=\"card-text\">Surface : ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "surface", array()), "html", null, true);
            echo " m²</div>
                        <a href=\"http://localhost:8000/fiche/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Détails</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 43,  136 => 39,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 33,  112 => 32,  103 => 26,  91 => 17,  82 => 11,  76 => 8,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello IndexController!{% endblock %}

{% block body %}
<div class=\"jumbotron\">
    <div class=\"container\">
    {{ form_start(filtre) }}
        <div class=\"form-row\">
            <div class=\"col-12\">
                {{form_row(filtre.minSurface)}} 
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"col-12\">
                {{form_row(filtre.maxPrice)}} 
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"col-12\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
            </div>
        </div>
    {{ form_end(filtre) }}
    </div>
</div>

    <div class=\"container pad\">
        <div class=\"row\">
            {% for bien in biens %}
                <div class=\"card col-5 mar\">
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">{{bien.title}}</h4>
                        <img src=\"{{bien.picture}}\" class=\"card-img-top\">
                        <div class=\"card-text\">{{bien.price|number_format(0,',',' ')}} €</div>
                        <div class=\"card-text\">Surface : {{bien.surface}} m²</div>
                        <a href=\"http://localhost:8000/fiche/{{bien.id}}\" class=\"btn btn-secondary\">Détails</a>
                    </div>
                </div>
            {% endfor  %}
            </div>
    </div>
{% endblock %}
", "index/index.html.twig", "/var/www/symfony/templates/index/index.html.twig");
    }
}
