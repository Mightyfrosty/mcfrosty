<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_b258fe8914ac4b905ee8208cf3bef0777e929c3dbfdba0eab57389a074bcd675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a847e4437b0e44e0f8d36a8730e60512f8c15581d2c58cdc4c8a1cccb080ec2 = $this->env->getExtension("native_profiler");
        $__internal_2a847e4437b0e44e0f8d36a8730e60512f8c15581d2c58cdc4c8a1cccb080ec2->enter($__internal_2a847e4437b0e44e0f8d36a8730e60512f8c15581d2c58cdc4c8a1cccb080ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2a847e4437b0e44e0f8d36a8730e60512f8c15581d2c58cdc4c8a1cccb080ec2->leave($__internal_2a847e4437b0e44e0f8d36a8730e60512f8c15581d2c58cdc4c8a1cccb080ec2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
