<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_62a7a4ea684de73afbe344822d4526718cfb0a5087e076ce6d4db741c4828b18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbda6a3ac152ed4ab5e4914de3ac12ad442a6a701822bb2ef1405ca03491ac0f = $this->env->getExtension("native_profiler");
        $__internal_fbda6a3ac152ed4ab5e4914de3ac12ad442a6a701822bb2ef1405ca03491ac0f->enter($__internal_fbda6a3ac152ed4ab5e4914de3ac12ad442a6a701822bb2ef1405ca03491ac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fbda6a3ac152ed4ab5e4914de3ac12ad442a6a701822bb2ef1405ca03491ac0f->leave($__internal_fbda6a3ac152ed4ab5e4914de3ac12ad442a6a701822bb2ef1405ca03491ac0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
