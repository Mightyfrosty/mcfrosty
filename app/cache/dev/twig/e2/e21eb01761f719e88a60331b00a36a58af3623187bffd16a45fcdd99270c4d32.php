<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_12a315c24ba4313bb2e050121724f94bf15d1a5477fe8a141bb033b87658d004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_134c7495a8c6c2b9919377355c7d3e09f7f08391d1ceaa0b32d70b02f131dba1 = $this->env->getExtension("native_profiler");
        $__internal_134c7495a8c6c2b9919377355c7d3e09f7f08391d1ceaa0b32d70b02f131dba1->enter($__internal_134c7495a8c6c2b9919377355c7d3e09f7f08391d1ceaa0b32d70b02f131dba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_134c7495a8c6c2b9919377355c7d3e09f7f08391d1ceaa0b32d70b02f131dba1->leave($__internal_134c7495a8c6c2b9919377355c7d3e09f7f08391d1ceaa0b32d70b02f131dba1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69b5571f7596722cbdc7e072e1741fbcc276b88c9242576bc46f6e331d8eff51 = $this->env->getExtension("native_profiler");
        $__internal_69b5571f7596722cbdc7e072e1741fbcc276b88c9242576bc46f6e331d8eff51->enter($__internal_69b5571f7596722cbdc7e072e1741fbcc276b88c9242576bc46f6e331d8eff51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_69b5571f7596722cbdc7e072e1741fbcc276b88c9242576bc46f6e331d8eff51->leave($__internal_69b5571f7596722cbdc7e072e1741fbcc276b88c9242576bc46f6e331d8eff51_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
