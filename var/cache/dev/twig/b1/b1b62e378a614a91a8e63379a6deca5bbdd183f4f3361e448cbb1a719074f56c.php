<?php

/* admin/form.html.twig */
class __TwigTemplate_250cd6a55cb4f070f8c44ba396ed7ac62021483424ad7b15edd82eb9ee999c26 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/form.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/form.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formBiens"]) || array_key_exists("formBiens", $context) ? $context["formBiens"] : (function () { throw new Twig_Error_Runtime('Variable "formBiens" does not exist.', 2, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container pad\">
    <h2> Enregistrer un nouveau bien : </h2>
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBiens"]) || array_key_exists("formBiens", $context) ? $context["formBiens"] : (function () { throw new Twig_Error_Runtime('Variable "formBiens" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBiens"]) || array_key_exists("formBiens", $context) ? $context["formBiens"] : (function () { throw new Twig_Error_Runtime('Variable "formBiens" does not exist.', 10, $this->source); })()), "title", array()), 'row', array("attr" => array("placeholder" => "Titre du bien")));
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBiens"]) || array_key_exists("formBiens", $context) ? $context["formBiens"] : (function () { throw new Twig_Error_Runtime('Variable "formBiens" does not exist.', 11, $this->source); })()), "surface", array()), 'row', array("attr" => array("placeholder" => "Surface du bien")));
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBiens"]) || array_key_exists("formBiens", $context) ? $context["formBiens"] : (function () { throw new Twig_Error_Runtime('Variable "formBiens" does not exist.', 12, $this->source); })()), "picture", array()), 'row', array("attr" => array("placeholder" => "Photo du bien")));
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formBiens"]) || array_key_exists("formBiens", $context) ? $context["formBiens"] : (function () { throw new Twig_Error_Runtime('Variable "formBiens" does not exist.', 13, $this->source); })()), "price", array()), 'row', array("attr" => array("placeholder" => "Prix du bien")));
        echo "
            <button type=\"submit\" class=\"btn btn-succes\"> 
                ";
        // line 15
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new Twig_Error_Runtime('Variable "editMode" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                Modifier le bien 
                ";
        } else {
            // line 18
            echo "                Ajouter le bien
                ";
        }
        // line 20
        echo "            </button>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formBiens"]) || array_key_exists("formBiens", $context) ? $context["formBiens"] : (function () { throw new Twig_Error_Runtime('Variable "formBiens" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
      
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 21,  110 => 20,  106 => 18,  102 => 16,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 7,  66 => 6,  48 => 4,  38 => 1,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% form_theme formBiens 'bootstrap_4_layout.html.twig' %}

{% block title %}Les maisons d'Asmaoui!{% endblock %}

{% block body %}
    <div class=\"container pad\">
    <h2> Enregistrer un nouveau bien : </h2>
        {{ form_start(formBiens) }}
            {{ form_row(formBiens.title, {'attr': {'placeholder' : 'Titre du bien'}}) }}
            {{ form_row(formBiens.surface, {'attr': {'placeholder' : 'Surface du bien'}}) }}
            {{ form_row(formBiens.picture, {'attr': {'placeholder' : 'Photo du bien'}}) }}
            {{ form_row(formBiens.price, {'attr': {'placeholder' : 'Prix du bien'}}) }}
            <button type=\"submit\" class=\"btn btn-succes\"> 
                {% if editMode %}
                Modifier le bien 
                {% else %}
                Ajouter le bien
                {% endif %}
            </button>
        {{ form_end(formBiens) }}
      
    </div>
{% endblock %}
", "admin/form.html.twig", "/var/www/symfony/templates/admin/form.html.twig");
    }
}
