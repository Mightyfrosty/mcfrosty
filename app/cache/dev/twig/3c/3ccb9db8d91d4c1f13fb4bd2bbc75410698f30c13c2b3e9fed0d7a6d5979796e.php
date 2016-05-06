<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_74db1ce06bf606ee2d497fdac4d9380248c0e0792f87b3735b35bcb235592cc7 extends Twig_Template
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
        $__internal_5a0919dda1009b478d53159e3c8f02f9ccff72ed879151e563d5519dd3e67a0f = $this->env->getExtension("native_profiler");
        $__internal_5a0919dda1009b478d53159e3c8f02f9ccff72ed879151e563d5519dd3e67a0f->enter($__internal_5a0919dda1009b478d53159e3c8f02f9ccff72ed879151e563d5519dd3e67a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5a0919dda1009b478d53159e3c8f02f9ccff72ed879151e563d5519dd3e67a0f->leave($__internal_5a0919dda1009b478d53159e3c8f02f9ccff72ed879151e563d5519dd3e67a0f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4cd9403ed9275e3aa61f741ca6739fb083fbc2de8e41b0a39c4bf40952f4e463 = $this->env->getExtension("native_profiler");
        $__internal_4cd9403ed9275e3aa61f741ca6739fb083fbc2de8e41b0a39c4bf40952f4e463->enter($__internal_4cd9403ed9275e3aa61f741ca6739fb083fbc2de8e41b0a39c4bf40952f4e463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4cd9403ed9275e3aa61f741ca6739fb083fbc2de8e41b0a39c4bf40952f4e463->leave($__internal_4cd9403ed9275e3aa61f741ca6739fb083fbc2de8e41b0a39c4bf40952f4e463_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_23089a8bbbb90c44dccaea6ce68dc1b5ebb940b32ff35f6c6ad9840fdda70932 = $this->env->getExtension("native_profiler");
        $__internal_23089a8bbbb90c44dccaea6ce68dc1b5ebb940b32ff35f6c6ad9840fdda70932->enter($__internal_23089a8bbbb90c44dccaea6ce68dc1b5ebb940b32ff35f6c6ad9840fdda70932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_23089a8bbbb90c44dccaea6ce68dc1b5ebb940b32ff35f6c6ad9840fdda70932->leave($__internal_23089a8bbbb90c44dccaea6ce68dc1b5ebb940b32ff35f6c6ad9840fdda70932_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1d044f46bc8ee1d28077df398c4afd4fe3f4e467e52ec6eafc0e30cdf3426cc1 = $this->env->getExtension("native_profiler");
        $__internal_1d044f46bc8ee1d28077df398c4afd4fe3f4e467e52ec6eafc0e30cdf3426cc1->enter($__internal_1d044f46bc8ee1d28077df398c4afd4fe3f4e467e52ec6eafc0e30cdf3426cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1d044f46bc8ee1d28077df398c4afd4fe3f4e467e52ec6eafc0e30cdf3426cc1->leave($__internal_1d044f46bc8ee1d28077df398c4afd4fe3f4e467e52ec6eafc0e30cdf3426cc1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
