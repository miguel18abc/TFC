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
class __TwigTemplate_0f5b89f45cd663306bcee28566c8f4d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        if ((array_key_exists("form", $context) && (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "\t        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "            <script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
            <script src=\"/public/javascripts/sweetalert2.all.min.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  291 => 86,  281 => 85,  245 => 57,  235 => 56,  225 => 54,  215 => 53,  201 => 47,  196 => 45,  191 => 44,  183 => 40,  181 => 39,  169 => 29,  159 => 28,  138 => 14,  128 => 13,  109 => 6,  96 => 90,  94 => 85,  91 => 84,  89 => 56,  86 => 55,  84 => 53,  81 => 52,  79 => 28,  75 => 26,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"/public/svg/logoPlanesSinFondo.svg\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% if form is defined and form %}
\t        {% form_theme form 'bootstrap_5_layout.html.twig' %}
        {% endif %}

        {% block stylesheets %}
            <link href=\"/css/base.css\" rel=\"stylesheet\" type=\"text/css\">
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
        {% endblock %}
    </head>
    <body>
        {% block menu %}
            <nav class=\"navbar navbar-dark navbar-expand\">
                <div class=\"container-fluid\">
                    <a href=\"https://www.iesjoseplanes.es/\" target=\"_blank\">
                        <img id=\"icon\" src=\"/svg/logoPlanesSinFondo.svg\">
                    </a>
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav ms-auto\">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                                    Cerrar sesión
                                </a>
                            {% else %}
                                <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Iniciar sesión</a>
                                <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Registrar</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </nav>
        {% endblock %}

        {% block body %}
        {% endblock %}

        {% block footer %}
            <footer class=\"footer-distributed\">
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
        {% endblock %}

        {% block javascripts %}
            <script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
            <script src=\"/public/javascripts/sweetalert2.all.min.js\"></script>
        {% endblock %}
    </body>
</html>

", "base.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\base.html.twig");
    }
}
