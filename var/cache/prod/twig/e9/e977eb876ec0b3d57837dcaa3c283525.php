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

/* familia/menu.html.twig */
class __TwigTemplate_5f7df75a67b5d1a98c7c60434a9d20c4 extends Template
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
        // line 1
        echo "    <br>
    <a class=\"btn btn-primary\" href=\"/familia/";
        // line 2
        echo twig_escape_filter($this->env, ($context["trabajador"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "\">Volver a ";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "</a> ";
    }

    public function getTemplateName()
    {
        return "familia/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "familia/menu.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\menu.html.twig");
    }
}
