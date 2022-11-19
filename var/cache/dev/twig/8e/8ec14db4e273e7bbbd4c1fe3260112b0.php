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

/* navbar.css */
class __TwigTemplate_34869e01c131f2e20a1319f217e80c21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.css"));

        // line 1
        echo ".navbar{
    background-color: #37a8ec;
}
.disabled{
    cursor: not-allowed;
    pointer-events: none;
}
#navbar {
    width: 100%;
}
#navbar ul {
    justify-content: flex-end;
    display: flex;
}
#navbar ul li {
    list-style-type: none;
    text-align: left;
}
#navbar ul li:first-child {
    flex: 1;
}
#navbar ul li a {
    padding: 10px;
}
#logo{
    float:left;
}
body{
    background-color: red;
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "navbar.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".navbar{
    background-color: #37a8ec;
}
.disabled{
    cursor: not-allowed;
    pointer-events: none;
}
#navbar {
    width: 100%;
}
#navbar ul {
    justify-content: flex-end;
    display: flex;
}
#navbar ul li {
    list-style-type: none;
    text-align: left;
}
#navbar ul li:first-child {
    flex: 1;
}
#navbar ul li a {
    padding: 10px;
}
#logo{
    float:left;
}
body{
    background-color: red;
}", "navbar.css", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\navbar.css");
    }
}
