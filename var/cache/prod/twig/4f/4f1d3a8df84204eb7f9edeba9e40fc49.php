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

/* registration/register.html.twig */
class __TwigTemplate_d092930a7bb109ba9ad0a95fe8f13ca2 extends Template
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
            'form' => [$this, 'block_form'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Register";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<style>
\t\tinput[type=text],
\t\tinput[type=password],
\t\ttextarea {
\t\t\tdisplay: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: .25rem;
            transition: border-color .15s
\t\t}
\t\t.cb label{
\t\t\tpadding-left: 10px;
\t\t}

\t\t.cb input{
\t\t\tfloat: left;
\t\t\twidth: 1em;
            height: 1em;
            margin-top: .28em;
            vertical-align: top;
            background-color: #fff;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            border: 1px solid rgba(0,0,0,.25);
\t\t\tborder-radius: .25em;
\t\t}

\t</style>

    ";
        // line 56
        echo "
    <div class=\"container\">
\t\t<h1>Regístrate</h1>
\t\t";
        // line 59
        $this->displayBlock('form', $context, $blocks);
        // line 75
        echo "\t</div>
";
    }

    // line 59
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "\t\t\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "
\t\t\t<div class=\"form-group col-sm-3\">
\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "username", [], "any", false, false, false, 62), 'row');
        echo "
\t\t\t</div><br>
\t\t\t<div class=\"form-group col-sm-3\">
\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 65), 'row', ["label" => "Password"]);
        // line 67
        echo "
\t\t\t</div><br>
\t\t\t<div class=\"cb\">
\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 70), 'row');
        echo "</div><br>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Regístrate</button>
\t\t\t";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 73,  137 => 70,  132 => 67,  130 => 65,  124 => 62,  118 => 60,  114 => 59,  109 => 75,  107 => 59,  102 => 56,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/register.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\registration\\register.html.twig");
    }
}
