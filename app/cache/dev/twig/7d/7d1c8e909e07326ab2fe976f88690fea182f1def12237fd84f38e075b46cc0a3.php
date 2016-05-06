<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_620d7248c49092e80daec295df598b05d929fdfc04f975666f16e5b94babe5dc extends Twig_Template
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
        $__internal_733eb3552c56898d332e94adc14c357fbeae8476f9d1fe3dbaeec7ef5d89cac2 = $this->env->getExtension("native_profiler");
        $__internal_733eb3552c56898d332e94adc14c357fbeae8476f9d1fe3dbaeec7ef5d89cac2->enter($__internal_733eb3552c56898d332e94adc14c357fbeae8476f9d1fe3dbaeec7ef5d89cac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_733eb3552c56898d332e94adc14c357fbeae8476f9d1fe3dbaeec7ef5d89cac2->leave($__internal_733eb3552c56898d332e94adc14c357fbeae8476f9d1fe3dbaeec7ef5d89cac2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
