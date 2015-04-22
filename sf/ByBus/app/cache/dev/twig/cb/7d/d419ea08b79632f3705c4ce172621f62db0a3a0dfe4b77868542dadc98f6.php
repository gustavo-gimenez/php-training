<?php

/* AcmeDemoBundle:Demo:informatorio.html.twig */
class __TwigTemplate_cb7dd419ea08b79632f3705c4ce172621f62db0a3a0dfe4b77868542dadc98f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::informatorioBase.html.twig");

        $this->blocks = array(
            'informatorio' => array($this, 'block_informatorio'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::informatorioBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_informatorio($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("informatorio", $context, $blocks);
        echo "
   Hello ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:informatorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  31 => 3,  28 => 2,);
    }
}
