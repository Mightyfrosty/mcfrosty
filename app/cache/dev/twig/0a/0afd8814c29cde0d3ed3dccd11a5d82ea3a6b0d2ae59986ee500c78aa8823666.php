<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_167dd1c5e1a025d1c9116d3dc4a567a0f5d3faa768c1b9519c0be7c3dfd37b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_487316d3c923091a3fa77098d7df1836d82aa8e10489630e32b27f49409c0700 = $this->env->getExtension("native_profiler");
        $__internal_487316d3c923091a3fa77098d7df1836d82aa8e10489630e32b27f49409c0700->enter($__internal_487316d3c923091a3fa77098d7df1836d82aa8e10489630e32b27f49409c0700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_487316d3c923091a3fa77098d7df1836d82aa8e10489630e32b27f49409c0700->leave($__internal_487316d3c923091a3fa77098d7df1836d82aa8e10489630e32b27f49409c0700_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a41323dded8b7012807dc86f68bc0308614a87291afbb2d1c5b57a0b4f6545f4 = $this->env->getExtension("native_profiler");
        $__internal_a41323dded8b7012807dc86f68bc0308614a87291afbb2d1c5b57a0b4f6545f4->enter($__internal_a41323dded8b7012807dc86f68bc0308614a87291afbb2d1c5b57a0b4f6545f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a41323dded8b7012807dc86f68bc0308614a87291afbb2d1c5b57a0b4f6545f4->leave($__internal_a41323dded8b7012807dc86f68bc0308614a87291afbb2d1c5b57a0b4f6545f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
