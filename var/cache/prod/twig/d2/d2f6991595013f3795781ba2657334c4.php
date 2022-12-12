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
class __TwigTemplate_145edae8771f698a4d9f24bb8c14d42f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/plantilla.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Plantilla";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  115 => 46,  106 => 40,  95 => 32,  86 => 26,  75 => 18,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/plantilla.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\main\\plantilla.html.twig");
    }
}
