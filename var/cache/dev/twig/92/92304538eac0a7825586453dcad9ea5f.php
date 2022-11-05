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

/* familia/msg.html.twig */
class __TwigTemplate_0fb1f741c726c63e0ee10bc27398dc02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "familia/msg.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "familia/msg.html.twig"));

        // line 1
        echo "<h1>Información</h1>

";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "

<br>
<a class=\"btn btn-primary\" href=\"/familia/";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">Volver a ";
        echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</a> 
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "familia/msg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Información</h1>

{{ msg}}

<br>
<a class=\"btn btn-primary\" href=\"/familia/{{servicio}}\">Volver a {{servicio}}</a> 
", "familia/msg.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\msg.html.twig");
    }
}
