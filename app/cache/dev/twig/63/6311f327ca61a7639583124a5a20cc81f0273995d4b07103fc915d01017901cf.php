<?php

/* @User/Resetting/request.html.twig */
class __TwigTemplate_1db46d437d9ca60856b8ac1bc2c5024185f6f7e2a9e70bae64f1f83653b167d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/request.html.twig", 1);
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
        $__internal_96851eb5c9276e20ce26bf0ce846b45879324dac5d79549b71c96eaaf7cb99ab = $this->env->getExtension("native_profiler");
        $__internal_96851eb5c9276e20ce26bf0ce846b45879324dac5d79549b71c96eaaf7cb99ab->enter($__internal_96851eb5c9276e20ce26bf0ce846b45879324dac5d79549b71c96eaaf7cb99ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96851eb5c9276e20ce26bf0ce846b45879324dac5d79549b71c96eaaf7cb99ab->leave($__internal_96851eb5c9276e20ce26bf0ce846b45879324dac5d79549b71c96eaaf7cb99ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2e989a70eea1f67c5d9b7fc1d64f12e90b11f6c7a4bad8a118892696388288d = $this->env->getExtension("native_profiler");
        $__internal_d2e989a70eea1f67c5d9b7fc1d64f12e90b11f6c7a4bad8a118892696388288d->enter($__internal_d2e989a70eea1f67c5d9b7fc1d64f12e90b11f6c7a4bad8a118892696388288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Retrieve Account ";
        
        $__internal_d2e989a70eea1f67c5d9b7fc1d64f12e90b11f6c7a4bad8a118892696388288d->leave($__internal_d2e989a70eea1f67c5d9b7fc1d64f12e90b11f6c7a4bad8a118892696388288d_prof);

    }

    // line 4
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_8660303e87ed7002ef6c2ca748c6f2a3ee1b111d758b91743437aa6bde75b9bc = $this->env->getExtension("native_profiler");
        $__internal_8660303e87ed7002ef6c2ca748c6f2a3ee1b111d758b91743437aa6bde75b9bc->enter($__internal_8660303e87ed7002ef6c2ca748c6f2a3ee1b111d758b91743437aa6bde75b9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        echo " Account Recovery ";
        
        $__internal_8660303e87ed7002ef6c2ca748c6f2a3ee1b111d758b91743437aa6bde75b9bc->leave($__internal_8660303e87ed7002ef6c2ca748c6f2a3ee1b111d758b91743437aa6bde75b9bc_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61180cc32f85e6fb7212b7ab6333acc6e0a49b60edbdc6817b4321c011b170e2 = $this->env->getExtension("native_profiler");
        $__internal_61180cc32f85e6fb7212b7ab6333acc6e0a49b60edbdc6817b4321c011b170e2->enter($__internal_61180cc32f85e6fb7212b7ab6333acc6e0a49b60edbdc6817b4321c011b170e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 7)->display($context);
        
        $__internal_61180cc32f85e6fb7212b7ab6333acc6e0a49b60edbdc6817b4321c011b170e2->leave($__internal_61180cc32f85e6fb7212b7ab6333acc6e0a49b60edbdc6817b4321c011b170e2_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request.html.twig";
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
