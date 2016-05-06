<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_c456c115af0e629628231a10315c7cdff9251265c4d1246ca26aecc8ebc637bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_33a93ab9a48cb32bad14cf0c9760fd6d144e4867d93144ad32517b86917af77e = $this->env->getExtension("native_profiler");
        $__internal_33a93ab9a48cb32bad14cf0c9760fd6d144e4867d93144ad32517b86917af77e->enter($__internal_33a93ab9a48cb32bad14cf0c9760fd6d144e4867d93144ad32517b86917af77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a93ab9a48cb32bad14cf0c9760fd6d144e4867d93144ad32517b86917af77e->leave($__internal_33a93ab9a48cb32bad14cf0c9760fd6d144e4867d93144ad32517b86917af77e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95aeac1192f6bedc4d2b0e04791971af548b783c55efcd2bc378e086a39a5da9 = $this->env->getExtension("native_profiler");
        $__internal_95aeac1192f6bedc4d2b0e04791971af548b783c55efcd2bc378e086a39a5da9->enter($__internal_95aeac1192f6bedc4d2b0e04791971af548b783c55efcd2bc378e086a39a5da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_95aeac1192f6bedc4d2b0e04791971af548b783c55efcd2bc378e086a39a5da9->leave($__internal_95aeac1192f6bedc4d2b0e04791971af548b783c55efcd2bc378e086a39a5da9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
