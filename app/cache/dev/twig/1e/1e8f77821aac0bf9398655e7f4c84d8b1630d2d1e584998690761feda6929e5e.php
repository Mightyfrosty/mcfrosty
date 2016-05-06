<?php

/* @User/Registration/checkEmail.html.twig */
class __TwigTemplate_72f7eccd80296a56541fc1ed283a5ab57e604f83e9df8f562d7f0d7d296f5948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/checkEmail.html.twig", 1);
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
        $__internal_49abf8df5dcd7613cf7e27a6afdb20099c727c11027755aeec71b453d3074bea = $this->env->getExtension("native_profiler");
        $__internal_49abf8df5dcd7613cf7e27a6afdb20099c727c11027755aeec71b453d3074bea->enter($__internal_49abf8df5dcd7613cf7e27a6afdb20099c727c11027755aeec71b453d3074bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49abf8df5dcd7613cf7e27a6afdb20099c727c11027755aeec71b453d3074bea->leave($__internal_49abf8df5dcd7613cf7e27a6afdb20099c727c11027755aeec71b453d3074bea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bc093ec26bbdf31ee7c5577cbb7501c7fcd356ccc00c6454917fc2dd443ff49 = $this->env->getExtension("native_profiler");
        $__internal_5bc093ec26bbdf31ee7c5577cbb7501c7fcd356ccc00c6454917fc2dd443ff49->enter($__internal_5bc093ec26bbdf31ee7c5577cbb7501c7fcd356ccc00c6454917fc2dd443ff49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5bc093ec26bbdf31ee7c5577cbb7501c7fcd356ccc00c6454917fc2dd443ff49->leave($__internal_5bc093ec26bbdf31ee7c5577cbb7501c7fcd356ccc00c6454917fc2dd443ff49_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/checkEmail.html.twig";
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
