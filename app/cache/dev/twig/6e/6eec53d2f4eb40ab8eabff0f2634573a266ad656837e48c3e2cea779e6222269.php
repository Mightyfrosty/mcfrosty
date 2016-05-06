<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_91ef8d24a1b5da4e9c3249b6ccacdef02ab7c7a067d3213c0c6a1cc840a3de12 extends Twig_Template
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
        $__internal_930f62724c10db963c1cae624c9e065e66004c1055752e9017899b8e36137795 = $this->env->getExtension("native_profiler");
        $__internal_930f62724c10db963c1cae624c9e065e66004c1055752e9017899b8e36137795->enter($__internal_930f62724c10db963c1cae624c9e065e66004c1055752e9017899b8e36137795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_930f62724c10db963c1cae624c9e065e66004c1055752e9017899b8e36137795->leave($__internal_930f62724c10db963c1cae624c9e065e66004c1055752e9017899b8e36137795_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
