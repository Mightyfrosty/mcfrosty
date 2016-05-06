<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_26a87b89b1f7aca20b1046e9cb8eb82a72dedbeb33587f434517cfa48cb70174 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_5ba01db1b6ec112481ecc63e392ae4eb0a42acfb110842f77c185833ffea880c = $this->env->getExtension("native_profiler");
        $__internal_5ba01db1b6ec112481ecc63e392ae4eb0a42acfb110842f77c185833ffea880c->enter($__internal_5ba01db1b6ec112481ecc63e392ae4eb0a42acfb110842f77c185833ffea880c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ba01db1b6ec112481ecc63e392ae4eb0a42acfb110842f77c185833ffea880c->leave($__internal_5ba01db1b6ec112481ecc63e392ae4eb0a42acfb110842f77c185833ffea880c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08a324d39582236e62005bc3f41cec0fc5a4342e65213580f279f49dfe1a6824 = $this->env->getExtension("native_profiler");
        $__internal_08a324d39582236e62005bc3f41cec0fc5a4342e65213580f279f49dfe1a6824->enter($__internal_08a324d39582236e62005bc3f41cec0fc5a4342e65213580f279f49dfe1a6824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_08a324d39582236e62005bc3f41cec0fc5a4342e65213580f279f49dfe1a6824->leave($__internal_08a324d39582236e62005bc3f41cec0fc5a4342e65213580f279f49dfe1a6824_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
