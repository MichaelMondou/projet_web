<?php

/* ::layout.html.twig */
class __TwigTemplate_3f06429e1b453bcf0a7313d43bdd4b7857abf7f4b2bae84d951e93e60c63f36c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Bienvenue sur le site du projet de Web</h1>
        <p>
            Ce projet est propulsé par Symfony3.
        </p>
    </div>

    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("platform_homepage");
        echo "\">Projet Web</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("platform_albums");
        echo "\">Albums</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Musiciens<span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"\">Instruments</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Interprètes</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Compositeurs</a></li>
                        </ul>
                    </li>
                </ul>
                <form class=\"navbar-form navbar-left\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Compositeur ou album\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>

    ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
    <footer>
        <p>The sky's the limit © ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "
</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Projet Web MMJBTL";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        // line 62
        echo "    ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        // line 71
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 71,  141 => 70,  138 => 69,  134 => 62,  131 => 61,  126 => 10,  123 => 9,  117 => 7,  110 => 74,  108 => 69,  101 => 65,  97 => 63,  95 => 61,  70 => 39,  61 => 33,  38 => 12,  36 => 9,  31 => 7,  23 => 1,  65 => 18,  54 => 13,  51 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
