<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a643f2c72a5a281319975fdaff74117df91d21a5b39cf61bfaf72d49fea45bb1 extends Twig_Template
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
        $__internal_f93a9ef5a59e1fb4a7352663bdd87ccb2a408fb22a755ba995d442b2723260e1 = $this->env->getExtension("native_profiler");
        $__internal_f93a9ef5a59e1fb4a7352663bdd87ccb2a408fb22a755ba995d442b2723260e1->enter($__internal_f93a9ef5a59e1fb4a7352663bdd87ccb2a408fb22a755ba995d442b2723260e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f93a9ef5a59e1fb4a7352663bdd87ccb2a408fb22a755ba995d442b2723260e1->leave($__internal_f93a9ef5a59e1fb4a7352663bdd87ccb2a408fb22a755ba995d442b2723260e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
