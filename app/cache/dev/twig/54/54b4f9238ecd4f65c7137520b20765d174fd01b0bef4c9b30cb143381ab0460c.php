<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ee9c72c96274482f905b276a44357d89aeabf03dd665f938bf825901fc8b7e45 extends Twig_Template
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
        $__internal_b822bea0fd9d1f81e53c597e2fede94956cf2b777ffd9c81767c59a5c8fa09ed = $this->env->getExtension("native_profiler");
        $__internal_b822bea0fd9d1f81e53c597e2fede94956cf2b777ffd9c81767c59a5c8fa09ed->enter($__internal_b822bea0fd9d1f81e53c597e2fede94956cf2b777ffd9c81767c59a5c8fa09ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b822bea0fd9d1f81e53c597e2fede94956cf2b777ffd9c81767c59a5c8fa09ed->leave($__internal_b822bea0fd9d1f81e53c597e2fede94956cf2b777ffd9c81767c59a5c8fa09ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
