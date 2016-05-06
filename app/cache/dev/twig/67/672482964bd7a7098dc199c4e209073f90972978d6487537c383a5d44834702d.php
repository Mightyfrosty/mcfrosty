<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_d6c85828a6a96795544b0ad9710560058e60f67ecd778a9d08413262aa2cc9b3 extends Twig_Template
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
        $__internal_252380348d114c5f593a864ab6cccb5605dd1a41f60e1769e21f99225ececd39 = $this->env->getExtension("native_profiler");
        $__internal_252380348d114c5f593a864ab6cccb5605dd1a41f60e1769e21f99225ececd39->enter($__internal_252380348d114c5f593a864ab6cccb5605dd1a41f60e1769e21f99225ececd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_252380348d114c5f593a864ab6cccb5605dd1a41f60e1769e21f99225ececd39->leave($__internal_252380348d114c5f593a864ab6cccb5605dd1a41f60e1769e21f99225ececd39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
