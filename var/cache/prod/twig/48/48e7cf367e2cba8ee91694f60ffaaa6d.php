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

/* confirmacion/tutoria.html.twig */
class __TwigTemplate_cf682e3ae5a2c05c3d0ee673b5c77223 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "confirmacion/tutoria.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Tutoría";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    La cita ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo " se ha reservado para ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "start", [], "any", false, false, false, 6), "m/d/Y"), "html", null, true);
        echo " a las ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "start", [], "any", false, false, false, 6), "H:i:s"), "html", null, true);
        echo " hasta ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "end", [], "any", false, false, false, 6), "m/d/Y"), "html", null, true);
        echo " a las ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "end", [], "any", false, false, false, 6), "H:i:s"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "confirmacion/tutoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "confirmacion/tutoria.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\confirmacion\\tutoria.html.twig");
    }
}
