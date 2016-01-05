<?php

/* PlatformBundle::layout.html.twig */
class __TwigTemplate_19fd274781edf93c3927b7be733263420ff58c2cd40e023e55559a388b9c4cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'platform_body' => array($this, 'block_platform_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    Choisissez un élément du menu.

    ";
        // line 6
        $this->displayBlock('platform_body', $context, $blocks);
        // line 8
        echo "
";
    }

    // line 6
    public function block_platform_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
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
        return array (  46 => 7,  43 => 6,  38 => 8,  36 => 6,  32 => 4,  29 => 3,);
    }
}
