<?php

/* @Main/Default/translation.html.twig */
class __TwigTemplate_ea3af4e06528b670e626108f22ccc36f12d702bad191b0538a124e34341aadd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "@Main/Default/translation.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7df6027c9ac55ba9592e6b3672aaff55de3e3c3ed4136de2fecfee823f54e4b = $this->env->getExtension("native_profiler");
        $__internal_c7df6027c9ac55ba9592e6b3672aaff55de3e3c3ed4136de2fecfee823f54e4b->enter($__internal_c7df6027c9ac55ba9592e6b3672aaff55de3e3c3ed4136de2fecfee823f54e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Default/translation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7df6027c9ac55ba9592e6b3672aaff55de3e3c3ed4136de2fecfee823f54e4b->leave($__internal_c7df6027c9ac55ba9592e6b3672aaff55de3e3c3ed4136de2fecfee823f54e4b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1645ff98e2f642d90b9bdea31014099f5bfa7f919096b1c26d81241eea8ae266 = $this->env->getExtension("native_profiler");
        $__internal_1645ff98e2f642d90b9bdea31014099f5bfa7f919096b1c26d81241eea8ae266->enter($__internal_1645ff98e2f642d90b9bdea31014099f5bfa7f919096b1c26d81241eea8ae266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Homepage ";
        
        $__internal_1645ff98e2f642d90b9bdea31014099f5bfa7f919096b1c26d81241eea8ae266->leave($__internal_1645ff98e2f642d90b9bdea31014099f5bfa7f919096b1c26d81241eea8ae266_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_c3fc06953951e6e9a1c6ee34bc2aefda23023c54862a7a52ff314753202b4138 = $this->env->getExtension("native_profiler");
        $__internal_c3fc06953951e6e9a1c6ee34bc2aefda23023c54862a7a52ff314753202b4138->enter($__internal_c3fc06953951e6e9a1c6ee34bc2aefda23023c54862a7a52ff314753202b4138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "\t\t\t\t

    <div>
        <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
        echo "</p>
        <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("cancel"), "html", null, true);
        echo "</button>
        <button>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("validate"), "html", null, true);
        echo "</button>
    </div>

";
        
        $__internal_c3fc06953951e6e9a1c6ee34bc2aefda23023c54862a7a52ff314753202b4138->leave($__internal_c3fc06953951e6e9a1c6ee34bc2aefda23023c54862a7a52ff314753202b4138_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Default/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  61 => 11,  57 => 10,  47 => 7,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "MainBundle::layout.html.twig" %}*/
/* {% block title %} Homepage {% endblock %}*/
/* */
/* */
/* */
/* {%block content %}				*/
/* */
/*     <div>*/
/*         <p>{{ message|trans }}</p>*/
/*         <button>{{ 'cancel'|trans }}</button>*/
/*         <button>{{ 'validate'|trans }}</button>*/
/*     </div>*/
/* */
/* {%endblock%}*/
