<?php

/* PlatformBundle:Platform:albums.html.twig */
class __TwigTemplate_efea304d7e5e51479a9e864b8635f2738b15e24dda8c801e8d9b50e103f81d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PlatformBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'albums' => array($this, 'block_albums'),
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
    public function block_albums($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAlbums"]) ? $context["listAlbums"] : $this->getContext($context, "listAlbums")));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 9
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "annéeAlbum"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  47 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
