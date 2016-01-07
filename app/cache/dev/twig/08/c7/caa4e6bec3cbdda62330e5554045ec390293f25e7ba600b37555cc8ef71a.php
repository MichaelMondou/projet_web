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
            'albums' => array($this, 'block_albums'),
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
   Test
   
   \t";
        // line 7
        $this->displayBlock('albums', $context, $blocks);
        // line 10
        echo "
";
    }

    // line 7
    public function block_albums($context, array $blocks = array())
    {
        // line 8
        echo "
\t";
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
        return array (  47 => 8,  44 => 7,  37 => 7,  42 => 8,  39 => 10,  32 => 4,  29 => 3,);
    }
}
