<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_68bed0cbc6c1e34e65816e1d2c2e5bbaec283f121246fc9cd26edbf36a6f633c extends Twig_Template
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
        $__internal_f052602c1e7b4671d086b457ca82017831dfa031f67014b129a329e06e139c52 = $this->env->getExtension("native_profiler");
        $__internal_f052602c1e7b4671d086b457ca82017831dfa031f67014b129a329e06e139c52->enter($__internal_f052602c1e7b4671d086b457ca82017831dfa031f67014b129a329e06e139c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f052602c1e7b4671d086b457ca82017831dfa031f67014b129a329e06e139c52->leave($__internal_f052602c1e7b4671d086b457ca82017831dfa031f67014b129a329e06e139c52_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_176fbae285f28b1c9090892abf96fce8f0e50955a07ce2f7fc6fd6fce9d4297a = $this->env->getExtension("native_profiler");
        $__internal_176fbae285f28b1c9090892abf96fce8f0e50955a07ce2f7fc6fd6fce9d4297a->enter($__internal_176fbae285f28b1c9090892abf96fce8f0e50955a07ce2f7fc6fd6fce9d4297a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_176fbae285f28b1c9090892abf96fce8f0e50955a07ce2f7fc6fd6fce9d4297a->leave($__internal_176fbae285f28b1c9090892abf96fce8f0e50955a07ce2f7fc6fd6fce9d4297a_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d9099b22397004599c4bb83b2d2bc20971ca30ea84d71e9f28564e9aa4e0dc1f = $this->env->getExtension("native_profiler");
        $__internal_d9099b22397004599c4bb83b2d2bc20971ca30ea84d71e9f28564e9aa4e0dc1f->enter($__internal_d9099b22397004599c4bb83b2d2bc20971ca30ea84d71e9f28564e9aa4e0dc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d9099b22397004599c4bb83b2d2bc20971ca30ea84d71e9f28564e9aa4e0dc1f->leave($__internal_d9099b22397004599c4bb83b2d2bc20971ca30ea84d71e9f28564e9aa4e0dc1f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f08b334e79ebf243878b2bd32f7e9bb1ca78d17a352a76e04571da90e71fdf02 = $this->env->getExtension("native_profiler");
        $__internal_f08b334e79ebf243878b2bd32f7e9bb1ca78d17a352a76e04571da90e71fdf02->enter($__internal_f08b334e79ebf243878b2bd32f7e9bb1ca78d17a352a76e04571da90e71fdf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f08b334e79ebf243878b2bd32f7e9bb1ca78d17a352a76e04571da90e71fdf02->leave($__internal_f08b334e79ebf243878b2bd32f7e9bb1ca78d17a352a76e04571da90e71fdf02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
