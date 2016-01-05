<?php

/* PlatformBundle::layout.html.twig */
class __TwigTemplate_08c7caa4e6bec3cbdda62330e5554045ec390293f25e7ba600b37555cc8ef71a extends Twig_Template
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
        echo "
    ";
        // line 6
        echo "    <h1>Annonces</h1>
    Blablabla

    ";
        // line 10
        echo "    ";
        $this->displayBlock('platform_body', $context, $blocks);
        // line 12
        echo "
";
    }

    // line 10
    public function block_platform_body($context, array $blocks = array())
    {
        // line 11
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
        return array (  51 => 11,  48 => 10,  43 => 12,  40 => 10,  35 => 6,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
