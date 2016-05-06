<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0957386ba61d90994e88f8bcc7fb50b263c21fdd77f9e07399476b366dc8e013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_33222c797fcf5a3628eae9aaef7602eefac2ac1c6a671326efba28710a004122 = $this->env->getExtension("native_profiler");
        $__internal_33222c797fcf5a3628eae9aaef7602eefac2ac1c6a671326efba28710a004122->enter($__internal_33222c797fcf5a3628eae9aaef7602eefac2ac1c6a671326efba28710a004122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33222c797fcf5a3628eae9aaef7602eefac2ac1c6a671326efba28710a004122->leave($__internal_33222c797fcf5a3628eae9aaef7602eefac2ac1c6a671326efba28710a004122_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f95a9010c532d6f1351e0e4cf6074d6ce33cdc786ccf6e478bb661d67ef9c7b2 = $this->env->getExtension("native_profiler");
        $__internal_f95a9010c532d6f1351e0e4cf6074d6ce33cdc786ccf6e478bb661d67ef9c7b2->enter($__internal_f95a9010c532d6f1351e0e4cf6074d6ce33cdc786ccf6e478bb661d67ef9c7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Retrieve Account ";
        
        $__internal_f95a9010c532d6f1351e0e4cf6074d6ce33cdc786ccf6e478bb661d67ef9c7b2->leave($__internal_f95a9010c532d6f1351e0e4cf6074d6ce33cdc786ccf6e478bb661d67ef9c7b2_prof);

    }

    // line 4
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_85958e43b3c766cb3d35d340f41fd81656dab5dfad7ecd2a3b4b0aad47cf3b8e = $this->env->getExtension("native_profiler");
        $__internal_85958e43b3c766cb3d35d340f41fd81656dab5dfad7ecd2a3b4b0aad47cf3b8e->enter($__internal_85958e43b3c766cb3d35d340f41fd81656dab5dfad7ecd2a3b4b0aad47cf3b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        echo " Account Recovery ";
        
        $__internal_85958e43b3c766cb3d35d340f41fd81656dab5dfad7ecd2a3b4b0aad47cf3b8e->leave($__internal_85958e43b3c766cb3d35d340f41fd81656dab5dfad7ecd2a3b4b0aad47cf3b8e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df2fc035acb09437cb93fae8b7720eb87a63eb8f5169d0cc3066439649b7bdcc = $this->env->getExtension("native_profiler");
        $__internal_df2fc035acb09437cb93fae8b7720eb87a63eb8f5169d0cc3066439649b7bdcc->enter($__internal_df2fc035acb09437cb93fae8b7720eb87a63eb8f5169d0cc3066439649b7bdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 7)->display($context);
        
        $__internal_df2fc035acb09437cb93fae8b7720eb87a63eb8f5169d0cc3066439649b7bdcc->leave($__internal_df2fc035acb09437cb93fae8b7720eb87a63eb8f5169d0cc3066439649b7bdcc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %} Retrieve Account {% endblock %}*/
/* {% block title_form %} Account Recovery {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
