<?php

/* PlatformBundle:Platform:index.html.twig */
class __TwigTemplate_5bec9084cd06a2099d0ef463b652ee45170939bf6e8838299c9cf4884f22067e extends Twig_Template
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
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_platform_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <h2>Liste des annonces</h2>

";
    }

    public function getTemplateName()
    {
        return "PlatformBundle:Platform:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
