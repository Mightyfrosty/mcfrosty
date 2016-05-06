<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_02ad0958e66efdf37170dd12c3bdabb9ae4c8b78614f803362961a749361bc40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_15e7a158d58be87378321663988740a59f282de1c9a45a82b9ed142138565eaa = $this->env->getExtension("native_profiler");
        $__internal_15e7a158d58be87378321663988740a59f282de1c9a45a82b9ed142138565eaa->enter($__internal_15e7a158d58be87378321663988740a59f282de1c9a45a82b9ed142138565eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e7a158d58be87378321663988740a59f282de1c9a45a82b9ed142138565eaa->leave($__internal_15e7a158d58be87378321663988740a59f282de1c9a45a82b9ed142138565eaa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9f0f9a5963c9a16874ede0baaf94358863c6765715584009a5a18c9662ac9f1 = $this->env->getExtension("native_profiler");
        $__internal_d9f0f9a5963c9a16874ede0baaf94358863c6765715584009a5a18c9662ac9f1->enter($__internal_d9f0f9a5963c9a16874ede0baaf94358863c6765715584009a5a18c9662ac9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d9f0f9a5963c9a16874ede0baaf94358863c6765715584009a5a18c9662ac9f1->leave($__internal_d9f0f9a5963c9a16874ede0baaf94358863c6765715584009a5a18c9662ac9f1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
