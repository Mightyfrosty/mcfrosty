<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_729d02bddc7eca57936cfc5643c0d7d051c535557d9ff0b3e9bd7ff6c41ae7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title_form' => array($this, 'block_title_form'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3764e8518bfeffaf310ef8b1c259c66cb46d39a80aa59f9b98b24969d0e12ef4 = $this->env->getExtension("native_profiler");
        $__internal_3764e8518bfeffaf310ef8b1c259c66cb46d39a80aa59f9b98b24969d0e12ef4->enter($__internal_3764e8518bfeffaf310ef8b1c259c66cb46d39a80aa59f9b98b24969d0e12ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3764e8518bfeffaf310ef8b1c259c66cb46d39a80aa59f9b98b24969d0e12ef4->leave($__internal_3764e8518bfeffaf310ef8b1c259c66cb46d39a80aa59f9b98b24969d0e12ef4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc8a89759ccff5da9a4b1b04e41b3dddfcb73437d21a2928dddaecebb8b530fd = $this->env->getExtension("native_profiler");
        $__internal_cc8a89759ccff5da9a4b1b04e41b3dddfcb73437d21a2928dddaecebb8b530fd->enter($__internal_cc8a89759ccff5da9a4b1b04e41b3dddfcb73437d21a2928dddaecebb8b530fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " ";
        
        $__internal_cc8a89759ccff5da9a4b1b04e41b3dddfcb73437d21a2928dddaecebb8b530fd->leave($__internal_cc8a89759ccff5da9a4b1b04e41b3dddfcb73437d21a2928dddaecebb8b530fd_prof);

    }

    // line 4
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_60c3bd3b9be4af5670750a9cee3c19e907c7bf52d796ef6898958dcf2d7c419a = $this->env->getExtension("native_profiler");
        $__internal_60c3bd3b9be4af5670750a9cee3c19e907c7bf52d796ef6898958dcf2d7c419a->enter($__internal_60c3bd3b9be4af5670750a9cee3c19e907c7bf52d796ef6898958dcf2d7c419a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " ";
        
        $__internal_60c3bd3b9be4af5670750a9cee3c19e907c7bf52d796ef6898958dcf2d7c419a->leave($__internal_60c3bd3b9be4af5670750a9cee3c19e907c7bf52d796ef6898958dcf2d7c419a_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_091c37d317fa2b4937c88aecc93b4f80a6d2185374d863ef8b7c5326eb9466e5 = $this->env->getExtension("native_profiler");
        $__internal_091c37d317fa2b4937c88aecc93b4f80a6d2185374d863ef8b7c5326eb9466e5->enter($__internal_091c37d317fa2b4937c88aecc93b4f80a6d2185374d863ef8b7c5326eb9466e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 7)->display($context);
        
        $__internal_091c37d317fa2b4937c88aecc93b4f80a6d2185374d863ef8b7c5326eb9466e5->leave($__internal_091c37d317fa2b4937c88aecc93b4f80a6d2185374d863ef8b7c5326eb9466e5_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 7,  63 => 6,  49 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }} {% endblock %}*/
/* {% block title_form %} {{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }} {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
