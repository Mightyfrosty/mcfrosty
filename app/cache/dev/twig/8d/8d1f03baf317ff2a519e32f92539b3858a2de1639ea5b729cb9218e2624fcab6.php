<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c0aff9701531b2e688396f1545a0f39d324d596677a91ecbf87da6d6c4cb5143 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_54f7b9b203f46ab01e94d0acba35e5be8e036c7970c407b4c6d794a652abc993 = $this->env->getExtension("native_profiler");
        $__internal_54f7b9b203f46ab01e94d0acba35e5be8e036c7970c407b4c6d794a652abc993->enter($__internal_54f7b9b203f46ab01e94d0acba35e5be8e036c7970c407b4c6d794a652abc993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54f7b9b203f46ab01e94d0acba35e5be8e036c7970c407b4c6d794a652abc993->leave($__internal_54f7b9b203f46ab01e94d0acba35e5be8e036c7970c407b4c6d794a652abc993_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e80743b478e32922aa9b42b1afe02d467d9e56b64d3546acdb56593c079ac075 = $this->env->getExtension("native_profiler");
        $__internal_e80743b478e32922aa9b42b1afe02d467d9e56b64d3546acdb56593c079ac075->enter($__internal_e80743b478e32922aa9b42b1afe02d467d9e56b64d3546acdb56593c079ac075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_e80743b478e32922aa9b42b1afe02d467d9e56b64d3546acdb56593c079ac075->leave($__internal_e80743b478e32922aa9b42b1afe02d467d9e56b64d3546acdb56593c079ac075_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
