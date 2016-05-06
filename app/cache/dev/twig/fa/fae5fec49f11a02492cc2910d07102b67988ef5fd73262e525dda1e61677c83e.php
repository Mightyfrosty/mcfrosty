<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8aed50810524cbaa5fca1230feab22726d81aecda32a73600ebf269b9d535da8 extends Twig_Template
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
        $__internal_34dc4656b59f79f550b72e90ea4dc4cc394ed3c3317d3e46370c4e0d62be79c4 = $this->env->getExtension("native_profiler");
        $__internal_34dc4656b59f79f550b72e90ea4dc4cc394ed3c3317d3e46370c4e0d62be79c4->enter($__internal_34dc4656b59f79f550b72e90ea4dc4cc394ed3c3317d3e46370c4e0d62be79c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_34dc4656b59f79f550b72e90ea4dc4cc394ed3c3317d3e46370c4e0d62be79c4->leave($__internal_34dc4656b59f79f550b72e90ea4dc4cc394ed3c3317d3e46370c4e0d62be79c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
