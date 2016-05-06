<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_13a96dec66af985781892e50db0340d8b2775c9d51e59804a019163c61ff64fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_041b1925a92145ee3e4f80dfcde7ba5713439f4f4ad48c4ec3849507088775e4 = $this->env->getExtension("native_profiler");
        $__internal_041b1925a92145ee3e4f80dfcde7ba5713439f4f4ad48c4ec3849507088775e4->enter($__internal_041b1925a92145ee3e4f80dfcde7ba5713439f4f4ad48c4ec3849507088775e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041b1925a92145ee3e4f80dfcde7ba5713439f4f4ad48c4ec3849507088775e4->leave($__internal_041b1925a92145ee3e4f80dfcde7ba5713439f4f4ad48c4ec3849507088775e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af8ed09b820f494b1586f230334def50d1fb389e4255fe5391ca575d12e7d02d = $this->env->getExtension("native_profiler");
        $__internal_af8ed09b820f494b1586f230334def50d1fb389e4255fe5391ca575d12e7d02d->enter($__internal_af8ed09b820f494b1586f230334def50d1fb389e4255fe5391ca575d12e7d02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_af8ed09b820f494b1586f230334def50d1fb389e4255fe5391ca575d12e7d02d->leave($__internal_af8ed09b820f494b1586f230334def50d1fb389e4255fe5391ca575d12e7d02d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
