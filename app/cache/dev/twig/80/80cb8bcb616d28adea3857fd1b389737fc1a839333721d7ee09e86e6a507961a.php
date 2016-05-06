<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_36dda513074349a7695edd39d31e1f4153450062dd0526b1b8b56a3ec09aecf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_413816931fbb68863a3a36e920968246ed68e4225c430938db6d519caa1cd606 = $this->env->getExtension("native_profiler");
        $__internal_413816931fbb68863a3a36e920968246ed68e4225c430938db6d519caa1cd606->enter($__internal_413816931fbb68863a3a36e920968246ed68e4225c430938db6d519caa1cd606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413816931fbb68863a3a36e920968246ed68e4225c430938db6d519caa1cd606->leave($__internal_413816931fbb68863a3a36e920968246ed68e4225c430938db6d519caa1cd606_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5ba2db31738ea356b306d6a3aff4e76e9287c3b3107dd89c9bb5915a5ee32b9 = $this->env->getExtension("native_profiler");
        $__internal_d5ba2db31738ea356b306d6a3aff4e76e9287c3b3107dd89c9bb5915a5ee32b9->enter($__internal_d5ba2db31738ea356b306d6a3aff4e76e9287c3b3107dd89c9bb5915a5ee32b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d5ba2db31738ea356b306d6a3aff4e76e9287c3b3107dd89c9bb5915a5ee32b9->leave($__internal_d5ba2db31738ea356b306d6a3aff4e76e9287c3b3107dd89c9bb5915a5ee32b9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
