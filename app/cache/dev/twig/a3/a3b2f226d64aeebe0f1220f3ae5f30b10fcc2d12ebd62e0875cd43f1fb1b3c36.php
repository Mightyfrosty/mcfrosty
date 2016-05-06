<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6e5fd2330822deaa885388cd371bf13c07488749e861d3d23af6bd1787822eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_e5b8d5187f1f304e43fc6ee00fe89ed67acc4458cb759532fb5bc7602bd73ea3 = $this->env->getExtension("native_profiler");
        $__internal_e5b8d5187f1f304e43fc6ee00fe89ed67acc4458cb759532fb5bc7602bd73ea3->enter($__internal_e5b8d5187f1f304e43fc6ee00fe89ed67acc4458cb759532fb5bc7602bd73ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5b8d5187f1f304e43fc6ee00fe89ed67acc4458cb759532fb5bc7602bd73ea3->leave($__internal_e5b8d5187f1f304e43fc6ee00fe89ed67acc4458cb759532fb5bc7602bd73ea3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d62aa1bf4e68425a88fcd7f510e09cab34ec809618eb1de3d9fc3381264cf6f5 = $this->env->getExtension("native_profiler");
        $__internal_d62aa1bf4e68425a88fcd7f510e09cab34ec809618eb1de3d9fc3381264cf6f5->enter($__internal_d62aa1bf4e68425a88fcd7f510e09cab34ec809618eb1de3d9fc3381264cf6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d62aa1bf4e68425a88fcd7f510e09cab34ec809618eb1de3d9fc3381264cf6f5->leave($__internal_d62aa1bf4e68425a88fcd7f510e09cab34ec809618eb1de3d9fc3381264cf6f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
