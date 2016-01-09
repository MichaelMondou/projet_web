<?php

/* PlatformBundle:Platform:albums.html.twig */
class __TwigTemplate_3cddf56d41beb72a62023cf46b299069080b1afda3343b7ef7aaec975a547425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PlatformBundle::layout.html.twig");

        $this->blocks = array(
            'titre_onglet' => array($this, 'block_titre_onglet'),
            'navbar_form' => array($this, 'block_navbar_form'),
            'path' => array($this, 'block_path'),
            'titre_page' => array($this, 'block_titre_page'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre_onglet($context, array $blocks = array())
    {
        // line 4
        echo "    Albums - ";
        $this->displayParentBlock("titre_onglet", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_navbar_form($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
  \t<div class=\"col-lg-4\">
\t\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t    <div class=\"input-group\">
\t\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search"), 'label', array("label" => " "));
        echo "
\t\t   \t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Albums ou compositeurs")));
        echo "
\t\t      \t<span class=\"input-group-btn\">
\t\t    \t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget', array("label" => "Go", "attr" => array("class" => "btn btn-default")));
        echo "
\t\t      \t</span>
\t\t    </div>
    \t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  \t\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  \t</div>
</div>
";
    }

    // line 25
    public function block_path($context, array $blocks = array())
    {
        // line 26
        echo "    <li>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("platform_homepage");
        echo "\">Accueil</a> <span class=\"divider\">/</span>
    </li>
    <li class='active'>
        Albums
    </li>
";
    }

    // line 35
    public function block_titre_page($context, array $blocks = array())
    {
        // line 36
        echo "\t<p>Albums</p>
";
    }

    // line 39
    public function block_contenu($context, array $blocks = array())
    {
        // line 40
        echo "
<p>Voici la liste de notre catalogue</p>
<p>Il y a ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nbAlbums"]) ? $context["nbAlbums"] : $this->getContext($context, "nbAlbums")), "html", null, true);
        echo " albums dans la sélection.</p>

<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"btn-group\">
\t\t\t 
\t\t\t<button class=\"btn btn-default\">
\t\t\t\tTrier par
\t\t\t</button> 
\t\t\t<button data-toggle=\"dropdown\" class=\"btn btn-default dropdown-toggle\">
\t\t\t\t<span class=\"caret\"></span>
\t\t\t</button>
\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t<li class=\"dropdown-header\">Ascendant</li>
\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_albums", array("sort" => "alpha_asc", "choice" => (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))), "html", null, true);
        echo "\">Ordre alphabétique</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_albums", array("sort" => "year_asc", "choice" => (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))), "html", null, true);
        echo "\">Année</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_albums", array("sort" => "editor_asc", "choice" => (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))), "html", null, true);
        echo "\">Editeur</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_albums", array("sort" => "style_asc", "choice" => (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))), "html", null, true);
        echo "\">Genre</a>
\t\t\t\t</li>
\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t<li class=\"dropdown-header\">Descendant</li>
\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_albums", array("sort" => "alpha_desc", "choice" => (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))), "html", null, true);
        echo "\">Ordre alphabétique</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_albums", array("sort" => "year_desc", "choice" => (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))), "html", null, true);
        echo "\">Année</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_albums", array("sort" => "editor_desc", "choice" => (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))), "html", null, true);
        echo "\">Editeur</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_albums", array("sort" => "style_desc", "choice" => (isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")))), "html", null, true);
        echo "\">Genre</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</div>

<div class=\"col-md-12\">
\t<div class=\"well\">
\t\t<ul class=\"media-list\" id=\"search-list\">

\t\t\t";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAlbums"]) ? $context["listAlbums"] : $this->getContext($context, "listAlbums")));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 97
            echo "\t\t\t\t<li class=\"media\">
\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t";
            // line 99
            if (($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "getImage") != null)) {
                // line 100
                echo "\t\t\t\t\t\t<img class=\"media-object img-thumbnail petite-photo\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("demo_photo", array("code" => $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "codeAlbum"), "classe" => "Album")), "html", null, true);
                echo "\">
\t\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<h4 class=\"media-heading\"> <a href=\"#\"> ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "titreAlbum"), "html", null, true);
            echo " </a> </h4>
\t\t\t\t\t\t<p>Année : ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "anneeAlbum"), "html", null, true);
            echo " </p>
\t\t\t\t\t\t<p>Editeur : ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "editeur"), "nomEditeur"), "html", null, true);
            echo " </p>
\t\t\t\t\t\t<p>Genre : ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "genre"), "libelleAbrege"), "html", null, true);
            echo " </p>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
  \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "\t\t</ul>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PlatformBundle:Platform:albums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 112,  229 => 107,  225 => 106,  221 => 105,  217 => 104,  213 => 102,  207 => 100,  205 => 99,  201 => 97,  197 => 96,  183 => 85,  176 => 81,  169 => 77,  162 => 73,  153 => 67,  147 => 64,  141 => 61,  135 => 58,  116 => 42,  112 => 40,  109 => 39,  104 => 36,  101 => 35,  91 => 27,  88 => 26,  85 => 25,  77 => 20,  73 => 19,  67 => 16,  62 => 14,  58 => 13,  53 => 11,  49 => 10,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
