<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_0600b14b5cb8c90db096738b95cd0a357a102a8b645bb9e10234dcb8572baaa2 extends Twig_Template
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
        $__internal_69c9ebca9d820bb2d3dc7d868ddab9be5957e6b557f23649b56bfc0d1fa963f0 = $this->env->getExtension("native_profiler");
        $__internal_69c9ebca9d820bb2d3dc7d868ddab9be5957e6b557f23649b56bfc0d1fa963f0->enter($__internal_69c9ebca9d820bb2d3dc7d868ddab9be5957e6b557f23649b56bfc0d1fa963f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_69c9ebca9d820bb2d3dc7d868ddab9be5957e6b557f23649b56bfc0d1fa963f0->leave($__internal_69c9ebca9d820bb2d3dc7d868ddab9be5957e6b557f23649b56bfc0d1fa963f0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
