<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5d16d1780bafdc0ee856171288c9a09e6a3cd167af439a7a133823e498e5f352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_b1097d64d5c7269bab5385c14bcde56e7fa6493aee34d0c38531a38837bf117d = $this->env->getExtension("native_profiler");
        $__internal_b1097d64d5c7269bab5385c14bcde56e7fa6493aee34d0c38531a38837bf117d->enter($__internal_b1097d64d5c7269bab5385c14bcde56e7fa6493aee34d0c38531a38837bf117d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1097d64d5c7269bab5385c14bcde56e7fa6493aee34d0c38531a38837bf117d->leave($__internal_b1097d64d5c7269bab5385c14bcde56e7fa6493aee34d0c38531a38837bf117d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cc766c1efef4a32cbaf08927eb7f0c29aea370364411db488871e955c5e8427 = $this->env->getExtension("native_profiler");
        $__internal_0cc766c1efef4a32cbaf08927eb7f0c29aea370364411db488871e955c5e8427->enter($__internal_0cc766c1efef4a32cbaf08927eb7f0c29aea370364411db488871e955c5e8427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_0cc766c1efef4a32cbaf08927eb7f0c29aea370364411db488871e955c5e8427->leave($__internal_0cc766c1efef4a32cbaf08927eb7f0c29aea370364411db488871e955c5e8427_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
