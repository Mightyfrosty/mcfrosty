<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_c22d8b77f6ef2fa9f54a6bbbb1c96cb6bdc9efee7b9ab58ab205f8421664f6e4 extends Twig_Template
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
        $__internal_7a6aaf723ebd1cfca1c7740ef28db6b2164746177964733812d55bf724a763a2 = $this->env->getExtension("native_profiler");
        $__internal_7a6aaf723ebd1cfca1c7740ef28db6b2164746177964733812d55bf724a763a2->enter($__internal_7a6aaf723ebd1cfca1c7740ef28db6b2164746177964733812d55bf724a763a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7a6aaf723ebd1cfca1c7740ef28db6b2164746177964733812d55bf724a763a2->leave($__internal_7a6aaf723ebd1cfca1c7740ef28db6b2164746177964733812d55bf724a763a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
