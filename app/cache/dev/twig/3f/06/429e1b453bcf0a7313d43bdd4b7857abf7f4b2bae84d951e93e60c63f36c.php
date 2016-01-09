<?php

/* ::layout.html.twig */
class __TwigTemplate_3f06429e1b453bcf0a7313d43bdd4b7857abf7f4b2bae84d951e93e60c63f36c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre_onglet' => array($this, 'block_titre_onglet'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar_form' => array($this, 'block_navbar_form'),
            'path' => array($this, 'block_path'),
            'titre_page' => array($this, 'block_titre_page'),
            'contenu' => array($this, 'block_contenu'),
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
        $this->displayBlock('titre_onglet', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
<div class=\"container\">

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
        // line 28
        echo $this->env->getExtension('routing')->getPath("platform_homepage");
        echo "\">Projet Web</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 34
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
                ";
        // line 46
        $this->displayBlock('navbar_form', $context, $blocks);
        // line 49
        echo "            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"page-header\">
            <h1>
                Projet web <span>Site de e-commerce</span>
            </h1>
        </div>
        

    <div class=\"col-md-12\">
        <ul class=\"breadcrumb\">
            ";
        // line 63
        $this->displayBlock('path', $context, $blocks);
        // line 66
        echo "        </ul>
    </div>



    <h2>";
        // line 71
        $this->displayBlock('titre_page', $context, $blocks);
        echo "</h2>

    ";
        // line 73
        $this->displayBlock('contenu', $context, $blocks);
        // line 76
        echo "
    </div>
</div>

    <footer>
    </footer>
</div>

";
        // line 84
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "
</body>
</html>
";
    }

    // line 7
    public function block_titre_onglet($context, array $blocks = array())
    {
        echo "Projet Web";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
    }

    // line 46
    public function block_navbar_form($context, array $blocks = array())
    {
        // line 47
        echo "
                ";
    }

    // line 63
    public function block_path($context, array $blocks = array())
    {
        // line 64
        echo "            
            ";
    }

    // line 71
    public function block_titre_page($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 73
    public function block_contenu($context, array $blocks = array())
    {
        // line 74
        echo "
    ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        // line 86
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
        return array (  186 => 86,  184 => 85,  181 => 84,  176 => 74,  173 => 73,  167 => 71,  162 => 64,  159 => 63,  151 => 46,  146 => 11,  144 => 10,  141 => 9,  135 => 7,  128 => 89,  126 => 84,  116 => 76,  114 => 73,  109 => 71,  102 => 66,  82 => 46,  67 => 34,  58 => 28,  41 => 13,  34 => 7,  26 => 1,  39 => 9,  29 => 3,  212 => 94,  202 => 90,  198 => 89,  194 => 88,  190 => 87,  183 => 82,  179 => 81,  166 => 71,  160 => 68,  154 => 47,  148 => 62,  142 => 59,  136 => 56,  130 => 53,  124 => 50,  108 => 36,  105 => 35,  100 => 63,  97 => 31,  87 => 23,  84 => 49,  81 => 21,  74 => 17,  70 => 16,  66 => 15,  61 => 13,  57 => 12,  52 => 10,  48 => 9,  45 => 8,  42 => 10,  35 => 4,  32 => 4,);
    }
}
