<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_337445cc3cc20ff615facf59e13d5a9b37462255b5780284083f5ca783977843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_1f9099c8c972fe62a7f729a5734d21844bdee06bff0b95be05df10e4d6d04953 = $this->env->getExtension("native_profiler");
        $__internal_1f9099c8c972fe62a7f729a5734d21844bdee06bff0b95be05df10e4d6d04953->enter($__internal_1f9099c8c972fe62a7f729a5734d21844bdee06bff0b95be05df10e4d6d04953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9099c8c972fe62a7f729a5734d21844bdee06bff0b95be05df10e4d6d04953->leave($__internal_1f9099c8c972fe62a7f729a5734d21844bdee06bff0b95be05df10e4d6d04953_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b11dd1d690f52e8b39665e01a500b0e919f5370a31b66954bf791e244f42a564 = $this->env->getExtension("native_profiler");
        $__internal_b11dd1d690f52e8b39665e01a500b0e919f5370a31b66954bf791e244f42a564->enter($__internal_b11dd1d690f52e8b39665e01a500b0e919f5370a31b66954bf791e244f42a564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b11dd1d690f52e8b39665e01a500b0e919f5370a31b66954bf791e244f42a564->leave($__internal_b11dd1d690f52e8b39665e01a500b0e919f5370a31b66954bf791e244f42a564_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
