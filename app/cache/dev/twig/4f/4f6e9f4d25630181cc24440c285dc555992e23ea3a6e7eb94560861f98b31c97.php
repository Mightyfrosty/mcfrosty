<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d12f668455f15dd183562a666fd51ddb067c48f934a7c8661d7da1d2c3fb6d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_06d177eb71fbe39809cfbca8da5dc150464db1e49274b4113f84e9dcea0d8c85 = $this->env->getExtension("native_profiler");
        $__internal_06d177eb71fbe39809cfbca8da5dc150464db1e49274b4113f84e9dcea0d8c85->enter($__internal_06d177eb71fbe39809cfbca8da5dc150464db1e49274b4113f84e9dcea0d8c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06d177eb71fbe39809cfbca8da5dc150464db1e49274b4113f84e9dcea0d8c85->leave($__internal_06d177eb71fbe39809cfbca8da5dc150464db1e49274b4113f84e9dcea0d8c85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64b661a0d4406919d815559ffbe0b273965cbf9709cbca87d3a0df359549c5ff = $this->env->getExtension("native_profiler");
        $__internal_64b661a0d4406919d815559ffbe0b273965cbf9709cbca87d3a0df359549c5ff->enter($__internal_64b661a0d4406919d815559ffbe0b273965cbf9709cbca87d3a0df359549c5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_64b661a0d4406919d815559ffbe0b273965cbf9709cbca87d3a0df359549c5ff->leave($__internal_64b661a0d4406919d815559ffbe0b273965cbf9709cbca87d3a0df359549c5ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
