<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_8a1d4d79481bf769f40f415918e07a157dc98103858d1ad3106159597d2d0db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_0d423361b3f015fb4703289c62d1af8f33f324c1de18ea1c798a7f9204e8bc5b = $this->env->getExtension("native_profiler");
        $__internal_0d423361b3f015fb4703289c62d1af8f33f324c1de18ea1c798a7f9204e8bc5b->enter($__internal_0d423361b3f015fb4703289c62d1af8f33f324c1de18ea1c798a7f9204e8bc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d423361b3f015fb4703289c62d1af8f33f324c1de18ea1c798a7f9204e8bc5b->leave($__internal_0d423361b3f015fb4703289c62d1af8f33f324c1de18ea1c798a7f9204e8bc5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e271a69779ec812a19509c39d25e8f0fe167a03a074240000864ad5e58e7521 = $this->env->getExtension("native_profiler");
        $__internal_1e271a69779ec812a19509c39d25e8f0fe167a03a074240000864ad5e58e7521->enter($__internal_1e271a69779ec812a19509c39d25e8f0fe167a03a074240000864ad5e58e7521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_1e271a69779ec812a19509c39d25e8f0fe167a03a074240000864ad5e58e7521->leave($__internal_1e271a69779ec812a19509c39d25e8f0fe167a03a074240000864ad5e58e7521_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
