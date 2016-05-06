<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4c191ef4d309b9a020372fb6b07f789a3f341525b0ad03ff32b2b4a968dfe9f5 extends Twig_Template
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
        $__internal_881af4f79eda1448e443de873c696234fbb79d4ab569072d5933ed43704e091d = $this->env->getExtension("native_profiler");
        $__internal_881af4f79eda1448e443de873c696234fbb79d4ab569072d5933ed43704e091d->enter($__internal_881af4f79eda1448e443de873c696234fbb79d4ab569072d5933ed43704e091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_881af4f79eda1448e443de873c696234fbb79d4ab569072d5933ed43704e091d->leave($__internal_881af4f79eda1448e443de873c696234fbb79d4ab569072d5933ed43704e091d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
