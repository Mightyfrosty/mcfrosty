<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_28ac3effe5307b78758c0e1fa56274e1fb48c9953d7dcec48984862077f2c173 extends Twig_Template
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
        $__internal_2f62cbaf05cd60ea10707e6b613f5b4b1c6a7683f2d8eccd394eec7579ef7b57 = $this->env->getExtension("native_profiler");
        $__internal_2f62cbaf05cd60ea10707e6b613f5b4b1c6a7683f2d8eccd394eec7579ef7b57->enter($__internal_2f62cbaf05cd60ea10707e6b613f5b4b1c6a7683f2d8eccd394eec7579ef7b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2f62cbaf05cd60ea10707e6b613f5b4b1c6a7683f2d8eccd394eec7579ef7b57->leave($__internal_2f62cbaf05cd60ea10707e6b613f5b4b1c6a7683f2d8eccd394eec7579ef7b57_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5ff1f15f69613d5dfc861e9b1f5b6983c054eea4f7be8d629c1ed432855e1d19 = $this->env->getExtension("native_profiler");
        $__internal_5ff1f15f69613d5dfc861e9b1f5b6983c054eea4f7be8d629c1ed432855e1d19->enter($__internal_5ff1f15f69613d5dfc861e9b1f5b6983c054eea4f7be8d629c1ed432855e1d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5ff1f15f69613d5dfc861e9b1f5b6983c054eea4f7be8d629c1ed432855e1d19->leave($__internal_5ff1f15f69613d5dfc861e9b1f5b6983c054eea4f7be8d629c1ed432855e1d19_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a9b87cf4d9565eb9917e4d71121fdb23b694fd373ae2485ddc4f3e7b44efcf6a = $this->env->getExtension("native_profiler");
        $__internal_a9b87cf4d9565eb9917e4d71121fdb23b694fd373ae2485ddc4f3e7b44efcf6a->enter($__internal_a9b87cf4d9565eb9917e4d71121fdb23b694fd373ae2485ddc4f3e7b44efcf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a9b87cf4d9565eb9917e4d71121fdb23b694fd373ae2485ddc4f3e7b44efcf6a->leave($__internal_a9b87cf4d9565eb9917e4d71121fdb23b694fd373ae2485ddc4f3e7b44efcf6a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b7a0b8f3b2a4aa1383c0732e7bf1cf28503b60f1644a9e06c6daec3bde7afac4 = $this->env->getExtension("native_profiler");
        $__internal_b7a0b8f3b2a4aa1383c0732e7bf1cf28503b60f1644a9e06c6daec3bde7afac4->enter($__internal_b7a0b8f3b2a4aa1383c0732e7bf1cf28503b60f1644a9e06c6daec3bde7afac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b7a0b8f3b2a4aa1383c0732e7bf1cf28503b60f1644a9e06c6daec3bde7afac4->leave($__internal_b7a0b8f3b2a4aa1383c0732e7bf1cf28503b60f1644a9e06c6daec3bde7afac4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
