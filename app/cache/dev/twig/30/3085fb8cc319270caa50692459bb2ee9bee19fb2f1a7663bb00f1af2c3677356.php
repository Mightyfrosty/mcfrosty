<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_b51c8b89adaff0f510de3ffd2f252713f1be2f218936bb8080e59150cd8e4dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_993c589d3bd11bca2b9b81708622efb49c7a31dbcb422a0b192303b9e1d5a8dc = $this->env->getExtension("native_profiler");
        $__internal_993c589d3bd11bca2b9b81708622efb49c7a31dbcb422a0b192303b9e1d5a8dc->enter($__internal_993c589d3bd11bca2b9b81708622efb49c7a31dbcb422a0b192303b9e1d5a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_993c589d3bd11bca2b9b81708622efb49c7a31dbcb422a0b192303b9e1d5a8dc->leave($__internal_993c589d3bd11bca2b9b81708622efb49c7a31dbcb422a0b192303b9e1d5a8dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc78fc20501285132f70a4c43f965b2662ed0f711401c74a053bf8b54d97c067 = $this->env->getExtension("native_profiler");
        $__internal_fc78fc20501285132f70a4c43f965b2662ed0f711401c74a053bf8b54d97c067->enter($__internal_fc78fc20501285132f70a4c43f965b2662ed0f711401c74a053bf8b54d97c067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_fc78fc20501285132f70a4c43f965b2662ed0f711401c74a053bf8b54d97c067->leave($__internal_fc78fc20501285132f70a4c43f965b2662ed0f711401c74a053bf8b54d97c067_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
