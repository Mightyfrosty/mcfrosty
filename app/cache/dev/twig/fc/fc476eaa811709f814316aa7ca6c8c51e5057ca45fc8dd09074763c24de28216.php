<?php

/* @User/Registration/email.txt.twig */
class __TwigTemplate_e47e241b19077a71acce39441511640e053fc16603ecd92beaf588303a98d467 extends Twig_Template
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
        $__internal_8905ef80d74adf751b35fdcffbf2019168a68263835f309f5183cba78af15215 = $this->env->getExtension("native_profiler");
        $__internal_8905ef80d74adf751b35fdcffbf2019168a68263835f309f5183cba78af15215->enter($__internal_8905ef80d74adf751b35fdcffbf2019168a68263835f309f5183cba78af15215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8905ef80d74adf751b35fdcffbf2019168a68263835f309f5183cba78af15215->leave($__internal_8905ef80d74adf751b35fdcffbf2019168a68263835f309f5183cba78af15215_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8d6ff5cb511d115574f68d94870a8182dbcdc20ceeb5bbf77bac959d9e0d473e = $this->env->getExtension("native_profiler");
        $__internal_8d6ff5cb511d115574f68d94870a8182dbcdc20ceeb5bbf77bac959d9e0d473e->enter($__internal_8d6ff5cb511d115574f68d94870a8182dbcdc20ceeb5bbf77bac959d9e0d473e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8d6ff5cb511d115574f68d94870a8182dbcdc20ceeb5bbf77bac959d9e0d473e->leave($__internal_8d6ff5cb511d115574f68d94870a8182dbcdc20ceeb5bbf77bac959d9e0d473e_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e5bf84cc6b811ac7131719ad1270d9f589675cb781cc4a65671d3bcb5b95e609 = $this->env->getExtension("native_profiler");
        $__internal_e5bf84cc6b811ac7131719ad1270d9f589675cb781cc4a65671d3bcb5b95e609->enter($__internal_e5bf84cc6b811ac7131719ad1270d9f589675cb781cc4a65671d3bcb5b95e609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e5bf84cc6b811ac7131719ad1270d9f589675cb781cc4a65671d3bcb5b95e609->leave($__internal_e5bf84cc6b811ac7131719ad1270d9f589675cb781cc4a65671d3bcb5b95e609_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7f7186ec24295b3bd7d96499fd238c01fb3ace05b24457cc5bba7aaa780ba2f1 = $this->env->getExtension("native_profiler");
        $__internal_7f7186ec24295b3bd7d96499fd238c01fb3ace05b24457cc5bba7aaa780ba2f1->enter($__internal_7f7186ec24295b3bd7d96499fd238c01fb3ace05b24457cc5bba7aaa780ba2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7f7186ec24295b3bd7d96499fd238c01fb3ace05b24457cc5bba7aaa780ba2f1->leave($__internal_7f7186ec24295b3bd7d96499fd238c01fb3ace05b24457cc5bba7aaa780ba2f1_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/email.txt.twig";
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
