<?php

/* security/registration.html.twig */
class __TwigTemplate_4dac466e7145860e133ac7a5f66615205e168c213d7107e7c9f8858d3378fee3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

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

        echo "Inscription";
        
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
        echo "
    
    <div class=\"container pad\">
        <h1>Inscription</h1>
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 10, $this->source); })()), 'form_start');
        echo "

                <div class=\"row form-group\">
                    <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                     ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 15, $this->source); })()), "Username", array()), 'row', array("attr" => array("placeholder" => "Username")));
        echo "
                    </div>
                    <i class=\"fas fa-at fa-2x\"></i>
                    </div>
                </div>
                
                <div class=\"row form-group\">
                <div class=\"input-group-text col-12\">
                <div class=\"col-11\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 23, $this->source); })()), "email", array()), 'row', array("attr" => array("placeholder" => "Email")));
        echo "</div>
                <i class=\"fas fa-envelope fa-2x\"></i></div>
                </div>

                <div class=\"row form-group\">
                <div class=\"input-group-text col-12\">
                <div class=\"col-11\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 29, $this->source); })()), "password", array()), 'row', array("attr" => array("placeholder" => "Password")));
        echo "</div>
                <i class=\"fas fa-key fa-2x\"></i></div>
                </div>

                <div class=\"row form-group\">
                <div class=\"input-group-text col-12 \">
                <div class=\"col-11\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 35, $this->source); })()), "confirm_password", array()), 'row', array("attr" => array("placeholder" => "Password")));
        echo "</div>
                <i class=\"fas fa-key fa-2x\"></i></div>
                </div>

                <div class=\"row form-group\"> 
                <button type=\"submit\" class=\"btn btn-info\">Inscription</button>
                </div>
                
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new Twig_Error_Runtime('Variable "formUser" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  115 => 35,  106 => 29,  97 => 23,  86 => 15,  78 => 10,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}

    
    <div class=\"container pad\">
        <h1>Inscription</h1>
            {{ form_start(formUser) }}

                <div class=\"row form-group\">
                    <div class=\"input-group-text col-12\">
                    <div class=\"col-11\">
                     {{ form_row(formUser.Username, {'attr': {'placeholder' : 'Username'}}) }}
                    </div>
                    <i class=\"fas fa-at fa-2x\"></i>
                    </div>
                </div>
                
                <div class=\"row form-group\">
                <div class=\"input-group-text col-12\">
                <div class=\"col-11\">{{ form_row(formUser.email, {'attr': {'placeholder' : 'Email'}}) }}</div>
                <i class=\"fas fa-envelope fa-2x\"></i></div>
                </div>

                <div class=\"row form-group\">
                <div class=\"input-group-text col-12\">
                <div class=\"col-11\">{{ form_row(formUser.password, {'attr': {'placeholder' : 'Password'}}) }}</div>
                <i class=\"fas fa-key fa-2x\"></i></div>
                </div>

                <div class=\"row form-group\">
                <div class=\"input-group-text col-12 \">
                <div class=\"col-11\">{{ form_row(formUser.confirm_password, {'attr': {'placeholder' : 'Password'}}) }}</div>
                <i class=\"fas fa-key fa-2x\"></i></div>
                </div>

                <div class=\"row form-group\"> 
                <button type=\"submit\" class=\"btn btn-info\">Inscription</button>
                </div>
                
            {{ form_end(formUser) }}
    </div>

{% endblock %}
", "security/registration.html.twig", "/var/www/symfony/templates/security/registration.html.twig");
    }
}
