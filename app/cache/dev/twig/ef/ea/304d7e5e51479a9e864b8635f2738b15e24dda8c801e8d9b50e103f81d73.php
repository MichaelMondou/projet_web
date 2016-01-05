<?php

/* PlatformBundle:Platform:albums.html.twig */
class __TwigTemplate_efea304d7e5e51479a9e864b8635f2738b15e24dda8c801e8d9b50e103f81d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAlbums"]) ? $context["listAlbums"] : $this->getContext($context, "listAlbums")));
        foreach ($context['_seq'] as $context["_key"] => $context["album"]) {
            // line 2
            echo "    <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "titreAlbum"), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['album'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
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
        return array (  32 => 4,  23 => 2,  19 => 1,);
    }
}
