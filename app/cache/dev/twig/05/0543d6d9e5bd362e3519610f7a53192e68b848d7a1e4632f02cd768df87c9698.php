<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_121d27b773a88f020f997c9b590b421092fc018f411d69268eaa6c46fba206e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_2dea631140e3d13e275d326a1deedfb266bf061cb376425c5024c90536ec9311 = $this->env->getExtension("native_profiler");
        $__internal_2dea631140e3d13e275d326a1deedfb266bf061cb376425c5024c90536ec9311->enter($__internal_2dea631140e3d13e275d326a1deedfb266bf061cb376425c5024c90536ec9311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dea631140e3d13e275d326a1deedfb266bf061cb376425c5024c90536ec9311->leave($__internal_2dea631140e3d13e275d326a1deedfb266bf061cb376425c5024c90536ec9311_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a6fafe959a9af619b0277b01055f1cfae9a97799a972e0d645365ace208160c = $this->env->getExtension("native_profiler");
        $__internal_9a6fafe959a9af619b0277b01055f1cfae9a97799a972e0d645365ace208160c->enter($__internal_9a6fafe959a9af619b0277b01055f1cfae9a97799a972e0d645365ace208160c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9a6fafe959a9af619b0277b01055f1cfae9a97799a972e0d645365ace208160c->leave($__internal_9a6fafe959a9af619b0277b01055f1cfae9a97799a972e0d645365ace208160c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
