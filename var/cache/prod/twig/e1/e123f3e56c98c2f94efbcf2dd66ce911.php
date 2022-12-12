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

/* base.html.twig */
class __TwigTemplate_403fbc3ab3a193a2b90c08ccaa0a11f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"/public/svg/logoPlanesSinFondo.svg\">
        ";
        // line 9
        echo "        ";
        if ((array_key_exists("form", $context) && ($context["form"] ?? null))) {
            // line 10
            echo "\t        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "bootstrap_5_layout.html.twig"], true);
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    </head>
    <body>
        ";
        // line 28
        $this->displayBlock('menu', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "
        ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "    </body>
</html>

";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            <link href=\"/css/base.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/calendar.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/calendario.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/cards.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/family.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/login.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css\" integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
            <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
        ";
    }

    // line 28
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <nav class=\"navbar navbar-dark navbar-expand\">
                <div class=\"container-fluid\">
                    <a href=\"https://www.iesjoseplanes.es/\" target=\"_blank\">
                        <img id=\"icon\" src=\"/svg/logoPlanesSinFondo.svg\">
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav ms-auto\">
                            ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "                                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                                    Cerrar sesión
                                </a>
                            ";
        } else {
            // line 44
            echo "                                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Iniciar sesión</a>
                                <a class=\"nav-link\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registrar</a>
                            ";
        }
        // line 47
        echo "                        </div>
                    </div>
                </div>
            </nav>
        ";
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        ";
    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "            <footer class=\"footer-distributed\">
                <div class=\"footer-left\">
                    <p class=\"footer-links\">
                        <a href=\"/\">Home</a>
                    </p>

                    <p class=\"footer-company-name\">© 2022 Eduonix Learning Solutions Pvt. Ltd.</p>
                </div>
                <div class=\"footer-center\">
                    <div>
                        <i class=\"fa fa-phone\"></i>
                        <p>+91 22-27782183</p>
                    </div>
                    <div>
                        <i class=\"fa fa-envelope\"></i>
                        <p><a href=\"https://mail.google.com/mail/?ui=2&view=cm&fs=1&tf=1&to=secretaria.iesjoseplanes@gmail.com&body=Pregunte%20su%20duda\">secretaria.iesjoseplanes@gmail.com</a></p>
                    </div>
                </div>
                <div class=\"footer-right\">
                    <div class=\"footer-icons\">
                        <a href=\"https://www.facebook.com/IesJosePlanes\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"https://twitter.com/iesjoseplanes\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"https://www.instagram.com/ies.joseplanes_oficial\"><i class=\"fa fa-instagram\"></i></a>
                    </div>
                </div>
            </footer>
        ";
    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "            <script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
            <script src=\"/public/javascripts/sweetalert2.all.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 86,  209 => 85,  179 => 57,  175 => 56,  171 => 54,  167 => 53,  159 => 47,  154 => 45,  149 => 44,  141 => 40,  139 => 39,  127 => 29,  123 => 28,  108 => 14,  104 => 13,  97 => 6,  90 => 90,  88 => 85,  85 => 84,  83 => 56,  80 => 55,  78 => 53,  75 => 52,  73 => 28,  69 => 26,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\base.html.twig");
    }
}
