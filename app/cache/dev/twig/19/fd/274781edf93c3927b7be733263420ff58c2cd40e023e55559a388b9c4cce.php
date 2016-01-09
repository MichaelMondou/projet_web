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
        return array (  51 => 14,  48 => 13,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  281 => 124,  273 => 121,  265 => 119,  257 => 117,  255 => 116,  248 => 115,  244 => 114,  240 => 112,  229 => 107,  225 => 106,  221 => 105,  217 => 104,  213 => 102,  207 => 100,  205 => 99,  201 => 97,  197 => 96,  183 => 85,  176 => 81,  169 => 77,  162 => 73,  153 => 67,  147 => 64,  141 => 61,  135 => 58,  116 => 42,  112 => 40,  109 => 39,  104 => 36,  101 => 35,  91 => 27,  88 => 26,  85 => 25,  77 => 20,  73 => 19,  67 => 16,  62 => 14,  58 => 13,  53 => 11,  49 => 10,  45 => 8,  42 => 7,  35 => 4,  32 => 3,);
    }
}
