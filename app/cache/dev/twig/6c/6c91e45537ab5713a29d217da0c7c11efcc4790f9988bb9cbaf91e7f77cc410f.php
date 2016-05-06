<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f2cb963988d8ff3c1dc7439b477ab16903b26fa206983b4aad2705287e7bd482 extends Twig_Template
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
        $__internal_4602a6e412d02b625f928411bb4726c0aaa91e242b22f788869a8fd17e0d64dc = $this->env->getExtension("native_profiler");
        $__internal_4602a6e412d02b625f928411bb4726c0aaa91e242b22f788869a8fd17e0d64dc->enter($__internal_4602a6e412d02b625f928411bb4726c0aaa91e242b22f788869a8fd17e0d64dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4602a6e412d02b625f928411bb4726c0aaa91e242b22f788869a8fd17e0d64dc->leave($__internal_4602a6e412d02b625f928411bb4726c0aaa91e242b22f788869a8fd17e0d64dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
