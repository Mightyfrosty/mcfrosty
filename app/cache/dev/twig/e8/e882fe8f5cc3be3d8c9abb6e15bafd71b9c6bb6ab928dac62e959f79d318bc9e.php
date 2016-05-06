<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_f06d972ab3f058c97f761aa4210c9b581dc305ce55c5e9ec960fbad122907b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_041131124243bf0cfc64c35abd038a06f2491a19cee3a956049ff100453e844e = $this->env->getExtension("native_profiler");
        $__internal_041131124243bf0cfc64c35abd038a06f2491a19cee3a956049ff100453e844e->enter($__internal_041131124243bf0cfc64c35abd038a06f2491a19cee3a956049ff100453e844e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_041131124243bf0cfc64c35abd038a06f2491a19cee3a956049ff100453e844e->leave($__internal_041131124243bf0cfc64c35abd038a06f2491a19cee3a956049ff100453e844e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_280a73371bf071d126ed1c214d373cea323b2df4bf6153fba1626294e9a53a88 = $this->env->getExtension("native_profiler");
        $__internal_280a73371bf071d126ed1c214d373cea323b2df4bf6153fba1626294e9a53a88->enter($__internal_280a73371bf071d126ed1c214d373cea323b2df4bf6153fba1626294e9a53a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_280a73371bf071d126ed1c214d373cea323b2df4bf6153fba1626294e9a53a88->leave($__internal_280a73371bf071d126ed1c214d373cea323b2df4bf6153fba1626294e9a53a88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
