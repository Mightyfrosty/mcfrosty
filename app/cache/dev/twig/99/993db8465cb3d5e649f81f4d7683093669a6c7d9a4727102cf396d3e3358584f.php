<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5c136e056ff3d5208e2e3726720b789bbc895e9d949bed57cd5a9183c99a233b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_250aca8ea09801d85b543c1ba84624cc612dc1b3586348c46fb53e1a08a6087a = $this->env->getExtension("native_profiler");
        $__internal_250aca8ea09801d85b543c1ba84624cc612dc1b3586348c46fb53e1a08a6087a->enter($__internal_250aca8ea09801d85b543c1ba84624cc612dc1b3586348c46fb53e1a08a6087a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250aca8ea09801d85b543c1ba84624cc612dc1b3586348c46fb53e1a08a6087a->leave($__internal_250aca8ea09801d85b543c1ba84624cc612dc1b3586348c46fb53e1a08a6087a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95e4e0914d1e8e3c0a00538600b9162220031aafe88cc8587cfc351269798bcd = $this->env->getExtension("native_profiler");
        $__internal_95e4e0914d1e8e3c0a00538600b9162220031aafe88cc8587cfc351269798bcd->enter($__internal_95e4e0914d1e8e3c0a00538600b9162220031aafe88cc8587cfc351269798bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " ";
        
        $__internal_95e4e0914d1e8e3c0a00538600b9162220031aafe88cc8587cfc351269798bcd->leave($__internal_95e4e0914d1e8e3c0a00538600b9162220031aafe88cc8587cfc351269798bcd_prof);

    }

    // line 4
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_25569c839172b05508683cc53f5ca9e2e8bee1400493b64eec4c63a4e81a2871 = $this->env->getExtension("native_profiler");
        $__internal_25569c839172b05508683cc53f5ca9e2e8bee1400493b64eec4c63a4e81a2871->enter($__internal_25569c839172b05508683cc53f5ca9e2e8bee1400493b64eec4c63a4e81a2871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " ";
        
        $__internal_25569c839172b05508683cc53f5ca9e2e8bee1400493b64eec4c63a4e81a2871->leave($__internal_25569c839172b05508683cc53f5ca9e2e8bee1400493b64eec4c63a4e81a2871_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e3601d9bf09325db9a94c61b3156996f16f2f35ad91737b465a1eff161d040b = $this->env->getExtension("native_profiler");
        $__internal_8e3601d9bf09325db9a94c61b3156996f16f2f35ad91737b465a1eff161d040b->enter($__internal_8e3601d9bf09325db9a94c61b3156996f16f2f35ad91737b465a1eff161d040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 7)->display($context);
        
        $__internal_8e3601d9bf09325db9a94c61b3156996f16f2f35ad91737b465a1eff161d040b->leave($__internal_8e3601d9bf09325db9a94c61b3156996f16f2f35ad91737b465a1eff161d040b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 7,  63 => 6,  49 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }} {% endblock %}*/
/* {% block title_form %} {{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }} {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
