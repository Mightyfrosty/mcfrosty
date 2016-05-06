<?php

/* @User/Resetting/checkEmail.html.twig */
class __TwigTemplate_8e6addc178504dc33ce58d082baea6f1a7444d71055a787a087eac7bb34a96b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/checkEmail.html.twig", 1);
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
        $__internal_c018ef8ba423db82537fef5f5cd4daf4e14eac75186207cbc02d6cde0b1a92b4 = $this->env->getExtension("native_profiler");
        $__internal_c018ef8ba423db82537fef5f5cd4daf4e14eac75186207cbc02d6cde0b1a92b4->enter($__internal_c018ef8ba423db82537fef5f5cd4daf4e14eac75186207cbc02d6cde0b1a92b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c018ef8ba423db82537fef5f5cd4daf4e14eac75186207cbc02d6cde0b1a92b4->leave($__internal_c018ef8ba423db82537fef5f5cd4daf4e14eac75186207cbc02d6cde0b1a92b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d1198fb666aadd5523b011266dba6c7b4cb01d60b77f45ab08807abab8d6c61 = $this->env->getExtension("native_profiler");
        $__internal_9d1198fb666aadd5523b011266dba6c7b4cb01d60b77f45ab08807abab8d6c61->enter($__internal_9d1198fb666aadd5523b011266dba6c7b4cb01d60b77f45ab08807abab8d6c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_9d1198fb666aadd5523b011266dba6c7b4cb01d60b77f45ab08807abab8d6c61->leave($__internal_9d1198fb666aadd5523b011266dba6c7b4cb01d60b77f45ab08807abab8d6c61_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/checkEmail.html.twig";
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
