<?php

/* PlatformBundle::layout.html.twig */
class __TwigTemplate_19fd274781edf93c3927b7be733263420ff58c2cd40e023e55559a388b9c4cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'navbar_form' => array($this, 'block_navbar_form'),
            'path' => array($this, 'block_path'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar_form($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_path($context, array $blocks = array())
    {
        // line 8
        echo "    <li class=\"active\">
        Accueil
    </li>
";
    }

    // line 13
    public function block_contenu($context, array $blocks = array())
    {
        // line 14
        echo "
    <p>Sélectionnez une rubrique ci-dessus.</p>

";
    }

    public function getTemplateName()
    {
        return "PlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
