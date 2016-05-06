<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_566a4e70231d30b426a0b682fd6213c48d9219622b5e76791e99169bdef97550 extends Twig_Template
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
        $__internal_ebd7e5f88d7fbf662df346228bd38a6e617104d9eff1c02cb07a999bf9d64575 = $this->env->getExtension("native_profiler");
        $__internal_ebd7e5f88d7fbf662df346228bd38a6e617104d9eff1c02cb07a999bf9d64575->enter($__internal_ebd7e5f88d7fbf662df346228bd38a6e617104d9eff1c02cb07a999bf9d64575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ebd7e5f88d7fbf662df346228bd38a6e617104d9eff1c02cb07a999bf9d64575->leave($__internal_ebd7e5f88d7fbf662df346228bd38a6e617104d9eff1c02cb07a999bf9d64575_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
