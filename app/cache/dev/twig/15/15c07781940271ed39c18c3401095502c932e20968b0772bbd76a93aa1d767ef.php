<?php

/* MainBundle:Default:translation.html.twig */
class __TwigTemplate_206b3c2d546ebe2d2e414d82cab2e784ffa88be69e03d325900c5bd9755a2a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Default:translation.html.twig", 2);
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
        $__internal_f0ad21486ce41907527a8b5532a1aabd6210941f8c64cfa2c099b93284715e86 = $this->env->getExtension("native_profiler");
        $__internal_f0ad21486ce41907527a8b5532a1aabd6210941f8c64cfa2c099b93284715e86->enter($__internal_f0ad21486ce41907527a8b5532a1aabd6210941f8c64cfa2c099b93284715e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:translation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0ad21486ce41907527a8b5532a1aabd6210941f8c64cfa2c099b93284715e86->leave($__internal_f0ad21486ce41907527a8b5532a1aabd6210941f8c64cfa2c099b93284715e86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b257046199ff72b45a52043fdcf11238a278bdac45dcbd01bdb0d014ade07b40 = $this->env->getExtension("native_profiler");
        $__internal_b257046199ff72b45a52043fdcf11238a278bdac45dcbd01bdb0d014ade07b40->enter($__internal_b257046199ff72b45a52043fdcf11238a278bdac45dcbd01bdb0d014ade07b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Homepage ";
        
        $__internal_b257046199ff72b45a52043fdcf11238a278bdac45dcbd01bdb0d014ade07b40->leave($__internal_b257046199ff72b45a52043fdcf11238a278bdac45dcbd01bdb0d014ade07b40_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf221306569f5e8a9459cde8600ac58d0139c20d2b5cb0dfaf192e04bf876518 = $this->env->getExtension("native_profiler");
        $__internal_bf221306569f5e8a9459cde8600ac58d0139c20d2b5cb0dfaf192e04bf876518->enter($__internal_bf221306569f5e8a9459cde8600ac58d0139c20d2b5cb0dfaf192e04bf876518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bf221306569f5e8a9459cde8600ac58d0139c20d2b5cb0dfaf192e04bf876518->leave($__internal_bf221306569f5e8a9459cde8600ac58d0139c20d2b5cb0dfaf192e04bf876518_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:translation.html.twig";
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
