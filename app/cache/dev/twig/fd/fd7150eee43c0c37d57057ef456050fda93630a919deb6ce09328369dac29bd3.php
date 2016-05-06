<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_f73d4e3ceaf50833226bae099b6840701ac54f99f8d03db4f3b99bbe1104a2d0 extends Twig_Template
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
        $__internal_1c6619dfd9a9896ffc0a1b91bca7aeffd69492793f69178ad88cc0b04db1529d = $this->env->getExtension("native_profiler");
        $__internal_1c6619dfd9a9896ffc0a1b91bca7aeffd69492793f69178ad88cc0b04db1529d->enter($__internal_1c6619dfd9a9896ffc0a1b91bca7aeffd69492793f69178ad88cc0b04db1529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1c6619dfd9a9896ffc0a1b91bca7aeffd69492793f69178ad88cc0b04db1529d->leave($__internal_1c6619dfd9a9896ffc0a1b91bca7aeffd69492793f69178ad88cc0b04db1529d_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc222fc8214a0a4666f6490a77f6c3da3854b4da1f75cfd10a79238e748a8475 = $this->env->getExtension("native_profiler");
        $__internal_dc222fc8214a0a4666f6490a77f6c3da3854b4da1f75cfd10a79238e748a8475->enter($__internal_dc222fc8214a0a4666f6490a77f6c3da3854b4da1f75cfd10a79238e748a8475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dc222fc8214a0a4666f6490a77f6c3da3854b4da1f75cfd10a79238e748a8475->leave($__internal_dc222fc8214a0a4666f6490a77f6c3da3854b4da1f75cfd10a79238e748a8475_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d34cfc52ae905ddb217d802e2a9bb0f5fc84dcce61805f7e09d6a71343521ea4 = $this->env->getExtension("native_profiler");
        $__internal_d34cfc52ae905ddb217d802e2a9bb0f5fc84dcce61805f7e09d6a71343521ea4->enter($__internal_d34cfc52ae905ddb217d802e2a9bb0f5fc84dcce61805f7e09d6a71343521ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d34cfc52ae905ddb217d802e2a9bb0f5fc84dcce61805f7e09d6a71343521ea4->leave($__internal_d34cfc52ae905ddb217d802e2a9bb0f5fc84dcce61805f7e09d6a71343521ea4_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_db76b9ee60043a65a34b7a0f5d988b9d877fe0f4f73454e80ebd9fdee75d8a0f = $this->env->getExtension("native_profiler");
        $__internal_db76b9ee60043a65a34b7a0f5d988b9d877fe0f4f73454e80ebd9fdee75d8a0f->enter($__internal_db76b9ee60043a65a34b7a0f5d988b9d877fe0f4f73454e80ebd9fdee75d8a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_db76b9ee60043a65a34b7a0f5d988b9d877fe0f4f73454e80ebd9fdee75d8a0f->leave($__internal_db76b9ee60043a65a34b7a0f5d988b9d877fe0f4f73454e80ebd9fdee75d8a0f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
