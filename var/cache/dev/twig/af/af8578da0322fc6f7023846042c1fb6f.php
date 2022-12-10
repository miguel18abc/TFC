<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/plantilla.html.twig */
class __TwigTemplate_fa976ff1d4101d851df535fc26b09f7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/plantilla.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/plantilla.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/plantilla.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Plantilla";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div id=\"familyBody\">
    <div id=\"containerCards\" class=\"container\">
        <div id=\"cardfamily1\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aniadir_citas");
        echo "\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aniadir_citas");
        echo "\" class=\"content\">
                    <h3>Añadir una cita</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily2\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("misCitas");
        echo "\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("misCitas");
        echo "\" class=\"content\">
                    <h3>Mis citas</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily3\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser");
        echo "\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addUser");
        echo "\" class=\"content\">
                    <h3>Añadir un usuario admin</h3>
                </a>
            </div>
        </div>
    </div>
    <a href=\"/\"><lottie-player id=\"buttonReturn\" class=\"btn btn-primary\" src=\"https://assets9.lottiefiles.com/packages/lf20_tuwojxyr.json\"  background=\"transparent\" speed=\"1\" style=\"width: 70px; height: 40px;\"  loop  autoplay></lottie-player></a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/plantilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 46,  136 => 40,  125 => 32,  116 => 26,  105 => 18,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plantilla{% endblock %}

{% block body %}

<div id=\"familyBody\">
    <div id=\"containerCards\" class=\"container\">
        <div id=\"cardfamily1\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"{{path('aniadir_citas')}}\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"{{path('aniadir_citas')}}\" class=\"content\">
                    <h3>Añadir una cita</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily2\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"{{path('misCitas')}}\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"{{path('misCitas')}}\" class=\"content\">
                    <h3>Mis citas</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily3\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"{{path('addUser')}}\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"{{path('addUser')}}\" class=\"content\">
                    <h3>Añadir un usuario admin</h3>
                </a>
            </div>
        </div>
    </div>
    <a href=\"/\"><lottie-player id=\"buttonReturn\" class=\"btn btn-primary\" src=\"https://assets9.lottiefiles.com/packages/lf20_tuwojxyr.json\"  background=\"transparent\" speed=\"1\" style=\"width: 70px; height: 40px;\"  loop  autoplay></lottie-player></a>
</div>
{% endblock %}", "main/plantilla.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\main\\plantilla.html.twig");
    }
}
