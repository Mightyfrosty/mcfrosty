<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_18d13b7ece04aee8a34bdbe31137f6fae7082575a89adc057634aa65bfdc1f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ebaec27d9ce71f624737ee3623bffdec5b68d9186ed0577931677c9c5e94555 = $this->env->getExtension("native_profiler");
        $__internal_0ebaec27d9ce71f624737ee3623bffdec5b68d9186ed0577931677c9c5e94555->enter($__internal_0ebaec27d9ce71f624737ee3623bffdec5b68d9186ed0577931677c9c5e94555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0ebaec27d9ce71f624737ee3623bffdec5b68d9186ed0577931677c9c5e94555->leave($__internal_0ebaec27d9ce71f624737ee3623bffdec5b68d9186ed0577931677c9c5e94555_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5a6ce0d5e5efaaace4f3f69895c063c11d922d182985ce8e3974c0191f526839 = $this->env->getExtension("native_profiler");
        $__internal_5a6ce0d5e5efaaace4f3f69895c063c11d922d182985ce8e3974c0191f526839->enter($__internal_5a6ce0d5e5efaaace4f3f69895c063c11d922d182985ce8e3974c0191f526839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5a6ce0d5e5efaaace4f3f69895c063c11d922d182985ce8e3974c0191f526839->leave($__internal_5a6ce0d5e5efaaace4f3f69895c063c11d922d182985ce8e3974c0191f526839_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c82bc68f10c505de8fc228559e61d14924ce7d154bb8914ad278fd3e75cd9a7a = $this->env->getExtension("native_profiler");
        $__internal_c82bc68f10c505de8fc228559e61d14924ce7d154bb8914ad278fd3e75cd9a7a->enter($__internal_c82bc68f10c505de8fc228559e61d14924ce7d154bb8914ad278fd3e75cd9a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c82bc68f10c505de8fc228559e61d14924ce7d154bb8914ad278fd3e75cd9a7a->leave($__internal_c82bc68f10c505de8fc228559e61d14924ce7d154bb8914ad278fd3e75cd9a7a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1444d09848f2dc059843f86656b9a01c136b3fec094810b1ad3e3640a2f050eb = $this->env->getExtension("native_profiler");
        $__internal_1444d09848f2dc059843f86656b9a01c136b3fec094810b1ad3e3640a2f050eb->enter($__internal_1444d09848f2dc059843f86656b9a01c136b3fec094810b1ad3e3640a2f050eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1444d09848f2dc059843f86656b9a01c136b3fec094810b1ad3e3640a2f050eb->leave($__internal_1444d09848f2dc059843f86656b9a01c136b3fec094810b1ad3e3640a2f050eb_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
