<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_16809c1e92b2d1ec94f3c0c2b48ac6443262f2825a4c47e14ca766e102375192 extends Twig_Template
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
        $__internal_79a7cfa78de21fe08935135af119561d701d0298c890110fa21e9021c6ba0264 = $this->env->getExtension("native_profiler");
        $__internal_79a7cfa78de21fe08935135af119561d701d0298c890110fa21e9021c6ba0264->enter($__internal_79a7cfa78de21fe08935135af119561d701d0298c890110fa21e9021c6ba0264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_79a7cfa78de21fe08935135af119561d701d0298c890110fa21e9021c6ba0264->leave($__internal_79a7cfa78de21fe08935135af119561d701d0298c890110fa21e9021c6ba0264_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
