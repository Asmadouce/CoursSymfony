<?php

/* contact/index.html.twig */
class __TwigTemplate_26da3d0495f5516741c63364ea9918a2fcf9de5eb766eb67e9dd2c5f59045f00 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

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

        
    <h2> Contact: </h2>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
            <div class=\"row form-group\">

                <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 16, $this->source); })()), "name", array()), 'row', array("label" => "Nom", "attr" => array("placeholder" => "Nom...")));
        echo "
                    </div>
                </div>

                <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 22, $this->source); })()), "firstname", array()), 'row', array("attr" => array("placeholder" => "Prénom")));
        echo "
                    </div>
                </div>

                <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 28, $this->source); })()), "email", array()), 'row', array("attr" => array("placeholder" => "Email")));
        echo "
                    </div>
                </div>           
                
                <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 34, $this->source); })()), "commentaire", array()), 'row', array("attr" => array("placeholder" => "Commentaire")));
        echo "
                    </div>
                </div>


                <button type=\"submit\" class=\"btn btn-info\"> 
                    Envoyer!
                </button>

            </div>
        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContact"]) || array_key_exists("formContact", $context) ? $context["formContact"] : (function () { throw new Twig_Error_Runtime('Variable "formContact" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
      
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 44,  113 => 34,  104 => 28,  95 => 22,  86 => 16,  78 => 11,  72 => 7,  63 => 6,  45 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block title %}Les maisons d'Asmaoui!{% endblock %}

{% block body %}
    <div class=\"container pad\">

        
    <h2> Contact: </h2>
        {{ form_start(formContact) }}
            <div class=\"row form-group\">

                <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                        {{ form_row(formContact.name, {'label':'Nom','attr': {'placeholder' : 'Nom...'}}) }}
                    </div>
                </div>

                <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                        {{ form_row(formContact.firstname, {'attr': {'placeholder' : 'Prénom'}}) }}
                    </div>
                </div>

                <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                        {{ form_row(formContact.email, {'attr': {'placeholder' : 'Email'}}) }}
                    </div>
                </div>           
                
                <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                {{ form_row(formContact.commentaire, {'attr': {'placeholder' : 'Commentaire'}}) }}
                    </div>
                </div>


                <button type=\"submit\" class=\"btn btn-info\"> 
                    Envoyer!
                </button>

            </div>
        {{ form_end(formContact) }}
      
    </div>
{% endblock %}
", "contact/index.html.twig", "/var/www/symfony/templates/contact/index.html.twig");
    }
}
