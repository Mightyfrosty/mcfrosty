<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b49f3971d21c547a1bafa7bf9a77be09df3efadc3bd1b386ec7892788114cae4 extends Twig_Template
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
        $__internal_38587e67d17079f64675b04879ccfdd84542fcd31ae25f3ffd36a2d849b3a8a6 = $this->env->getExtension("native_profiler");
        $__internal_38587e67d17079f64675b04879ccfdd84542fcd31ae25f3ffd36a2d849b3a8a6->enter($__internal_38587e67d17079f64675b04879ccfdd84542fcd31ae25f3ffd36a2d849b3a8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_38587e67d17079f64675b04879ccfdd84542fcd31ae25f3ffd36a2d849b3a8a6->leave($__internal_38587e67d17079f64675b04879ccfdd84542fcd31ae25f3ffd36a2d849b3a8a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
