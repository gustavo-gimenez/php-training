<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_1998acf06437fb9bf7c75a592d8452c24b123fe24c2f443a685743f7e777938c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::informatorioBase.html.twig");

        $this->blocks = array(
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

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
