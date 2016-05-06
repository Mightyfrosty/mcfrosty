<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_b4de95b6ac6418e666236826b2eaba29036af5af60f0dbb22cd9df0a6798c23e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_7d1e0a3a3d35e2607e9f81ec00f3f7bb627aa286e7169ffa963cf3202cf9e608 = $this->env->getExtension("native_profiler");
        $__internal_7d1e0a3a3d35e2607e9f81ec00f3f7bb627aa286e7169ffa963cf3202cf9e608->enter($__internal_7d1e0a3a3d35e2607e9f81ec00f3f7bb627aa286e7169ffa963cf3202cf9e608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1e0a3a3d35e2607e9f81ec00f3f7bb627aa286e7169ffa963cf3202cf9e608->leave($__internal_7d1e0a3a3d35e2607e9f81ec00f3f7bb627aa286e7169ffa963cf3202cf9e608_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87c49076b0873c8ef4f034c23b1178cf43f1e7c77297e2c9668252da44e7ef94 = $this->env->getExtension("native_profiler");
        $__internal_87c49076b0873c8ef4f034c23b1178cf43f1e7c77297e2c9668252da44e7ef94->enter($__internal_87c49076b0873c8ef4f034c23b1178cf43f1e7c77297e2c9668252da44e7ef94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_87c49076b0873c8ef4f034c23b1178cf43f1e7c77297e2c9668252da44e7ef94->leave($__internal_87c49076b0873c8ef4f034c23b1178cf43f1e7c77297e2c9668252da44e7ef94_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
