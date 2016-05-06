<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fb5d8554e00a093ed885e276edf020cf83b62c594a95e7bbc3b4c35c7696d357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_037714de13edd5613c4597cf921e5941f9c438c24dcba696d4a4e08838824a7a = $this->env->getExtension("native_profiler");
        $__internal_037714de13edd5613c4597cf921e5941f9c438c24dcba696d4a4e08838824a7a->enter($__internal_037714de13edd5613c4597cf921e5941f9c438c24dcba696d4a4e08838824a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_037714de13edd5613c4597cf921e5941f9c438c24dcba696d4a4e08838824a7a->leave($__internal_037714de13edd5613c4597cf921e5941f9c438c24dcba696d4a4e08838824a7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d3d4d11ab3f213060e8e60d2052c5127f02c113b6a1803a8f5c4714cbe3faab = $this->env->getExtension("native_profiler");
        $__internal_6d3d4d11ab3f213060e8e60d2052c5127f02c113b6a1803a8f5c4714cbe3faab->enter($__internal_6d3d4d11ab3f213060e8e60d2052c5127f02c113b6a1803a8f5c4714cbe3faab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_6d3d4d11ab3f213060e8e60d2052c5127f02c113b6a1803a8f5c4714cbe3faab->leave($__internal_6d3d4d11ab3f213060e8e60d2052c5127f02c113b6a1803a8f5c4714cbe3faab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
