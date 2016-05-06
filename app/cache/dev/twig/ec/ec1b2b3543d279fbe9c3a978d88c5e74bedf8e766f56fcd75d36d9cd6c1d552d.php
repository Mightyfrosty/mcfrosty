<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6c256955bcfa72a1db9abc8398bfd937601ae4f260fcbd442b966304bcb84124 extends Twig_Template
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
        $__internal_fa4731a36f0d7ffd34a7f8a9919e95c622f934284fa6e4683baf3f89cf11df9c = $this->env->getExtension("native_profiler");
        $__internal_fa4731a36f0d7ffd34a7f8a9919e95c622f934284fa6e4683baf3f89cf11df9c->enter($__internal_fa4731a36f0d7ffd34a7f8a9919e95c622f934284fa6e4683baf3f89cf11df9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fa4731a36f0d7ffd34a7f8a9919e95c622f934284fa6e4683baf3f89cf11df9c->leave($__internal_fa4731a36f0d7ffd34a7f8a9919e95c622f934284fa6e4683baf3f89cf11df9c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
