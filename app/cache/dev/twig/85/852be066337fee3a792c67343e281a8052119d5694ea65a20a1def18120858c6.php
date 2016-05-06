<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_884215a5a7806de8818a3a673195a49c433202408cdd3c507387076b727e3590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f29aaf441ebc8a24550c0f121447aa5d5ce23e791a87288faf077884ca1cb60c = $this->env->getExtension("native_profiler");
        $__internal_f29aaf441ebc8a24550c0f121447aa5d5ce23e791a87288faf077884ca1cb60c->enter($__internal_f29aaf441ebc8a24550c0f121447aa5d5ce23e791a87288faf077884ca1cb60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f29aaf441ebc8a24550c0f121447aa5d5ce23e791a87288faf077884ca1cb60c->leave($__internal_f29aaf441ebc8a24550c0f121447aa5d5ce23e791a87288faf077884ca1cb60c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77a67e854c8a0584143a4f559e2d5ce59f22436ac1539690cb6707c274231f9e = $this->env->getExtension("native_profiler");
        $__internal_77a67e854c8a0584143a4f559e2d5ce59f22436ac1539690cb6707c274231f9e->enter($__internal_77a67e854c8a0584143a4f559e2d5ce59f22436ac1539690cb6707c274231f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_77a67e854c8a0584143a4f559e2d5ce59f22436ac1539690cb6707c274231f9e->leave($__internal_77a67e854c8a0584143a4f559e2d5ce59f22436ac1539690cb6707c274231f9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
