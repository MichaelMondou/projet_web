<?php

/* PlatformBundle:Platform:albums.html.twig */
class __TwigTemplate_3cddf56d41beb72a62023cf46b299069080b1afda3343b7ef7aaec975a547425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PlatformBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'platform_body' => array($this, 'block_platform_body'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Albums - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        // line 8
        echo "

    <div class=\"list-group\">
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAlbums"]) ? $context["listAlbums"] : $this->getContext($context, "listAlbums")));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 12
            echo "            <a href=\"#\">
                <li class=\"list-group-item\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "titreAlbum"), "html", null, true);
            echo "</li>
            </a>
            <button type=\"button\" class=\"list-group-item\">Cras justo odio</button>
            <p class=\"list-group-item\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "annéeAlbum"), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>

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
        return array (  68 => 18,  60 => 16,  54 => 13,  51 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
