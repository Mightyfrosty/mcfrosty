<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f7121d953ef42d432fe30fa555f6b67d044e70fb6db87a8a7d67d61abae92009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_5c0bec4abf7973a0bbece6931f0dd3d755e6997933f13652809448490fa554ef = $this->env->getExtension("native_profiler");
        $__internal_5c0bec4abf7973a0bbece6931f0dd3d755e6997933f13652809448490fa554ef->enter($__internal_5c0bec4abf7973a0bbece6931f0dd3d755e6997933f13652809448490fa554ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c0bec4abf7973a0bbece6931f0dd3d755e6997933f13652809448490fa554ef->leave($__internal_5c0bec4abf7973a0bbece6931f0dd3d755e6997933f13652809448490fa554ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8069e5dd0ff1c65a389dec7f6a1638f2d8dd812211c27267df77a8e2c16c14d5 = $this->env->getExtension("native_profiler");
        $__internal_8069e5dd0ff1c65a389dec7f6a1638f2d8dd812211c27267df77a8e2c16c14d5->enter($__internal_8069e5dd0ff1c65a389dec7f6a1638f2d8dd812211c27267df77a8e2c16c14d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8069e5dd0ff1c65a389dec7f6a1638f2d8dd812211c27267df77a8e2c16c14d5->leave($__internal_8069e5dd0ff1c65a389dec7f6a1638f2d8dd812211c27267df77a8e2c16c14d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
