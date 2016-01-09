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
        return array (  186 => 86,  184 => 85,  181 => 84,  167 => 71,  146 => 11,  126 => 84,  114 => 73,  100 => 63,  84 => 49,  58 => 28,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 89,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 63,  143 => 56,  135 => 7,  119 => 42,  102 => 66,  71 => 19,  67 => 34,  63 => 15,  59 => 14,  38 => 7,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 46,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 13,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 74,  173 => 73,  168 => 72,  164 => 59,  162 => 64,  154 => 47,  149 => 51,  147 => 58,  144 => 10,  141 => 9,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 76,  112 => 42,  109 => 71,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 46,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
