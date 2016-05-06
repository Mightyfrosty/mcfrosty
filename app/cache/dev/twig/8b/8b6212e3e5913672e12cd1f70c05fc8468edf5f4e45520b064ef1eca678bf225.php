<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_8f9c67eddb7139c083cb0984851ef06c55366614bef4cae4ded2826e00cecdd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_d0a587fca87f17ed826012f7e5dcc7753c4739acd498f38de7ee59d30bbe28a3 = $this->env->getExtension("native_profiler");
        $__internal_d0a587fca87f17ed826012f7e5dcc7753c4739acd498f38de7ee59d30bbe28a3->enter($__internal_d0a587fca87f17ed826012f7e5dcc7753c4739acd498f38de7ee59d30bbe28a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0a587fca87f17ed826012f7e5dcc7753c4739acd498f38de7ee59d30bbe28a3->leave($__internal_d0a587fca87f17ed826012f7e5dcc7753c4739acd498f38de7ee59d30bbe28a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bd9c9c63247fb7c8d79ab2db53ddfc8c2dcc75774e92a57a196ec5edf89935f = $this->env->getExtension("native_profiler");
        $__internal_0bd9c9c63247fb7c8d79ab2db53ddfc8c2dcc75774e92a57a196ec5edf89935f->enter($__internal_0bd9c9c63247fb7c8d79ab2db53ddfc8c2dcc75774e92a57a196ec5edf89935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_0bd9c9c63247fb7c8d79ab2db53ddfc8c2dcc75774e92a57a196ec5edf89935f->leave($__internal_0bd9c9c63247fb7c8d79ab2db53ddfc8c2dcc75774e92a57a196ec5edf89935f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
