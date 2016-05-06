<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_2e1254b03309beaff35e336878ada4c8d394133be6d6e9c068e4ec87b9571667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_322a85f90870caed373fd7fccb79f1aad50a6239fbcf58ecfa2b9c8e88d33f5a = $this->env->getExtension("native_profiler");
        $__internal_322a85f90870caed373fd7fccb79f1aad50a6239fbcf58ecfa2b9c8e88d33f5a->enter($__internal_322a85f90870caed373fd7fccb79f1aad50a6239fbcf58ecfa2b9c8e88d33f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322a85f90870caed373fd7fccb79f1aad50a6239fbcf58ecfa2b9c8e88d33f5a->leave($__internal_322a85f90870caed373fd7fccb79f1aad50a6239fbcf58ecfa2b9c8e88d33f5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7965d7a5cdfe42dcdbf79dda1d844caeee781bdab6234678febedec428c903b = $this->env->getExtension("native_profiler");
        $__internal_a7965d7a5cdfe42dcdbf79dda1d844caeee781bdab6234678febedec428c903b->enter($__internal_a7965d7a5cdfe42dcdbf79dda1d844caeee781bdab6234678febedec428c903b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a7965d7a5cdfe42dcdbf79dda1d844caeee781bdab6234678febedec428c903b->leave($__internal_a7965d7a5cdfe42dcdbf79dda1d844caeee781bdab6234678febedec428c903b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
