<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_679c5da6ed9b56abde3aa6e2505fb28932481b543bfd8fd63dcbfd407ba83f8e extends Twig_Template
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
        $__internal_3e8a9c7b9a0b6eccb2aa6e4b82cd001220501a3f72c7b4341eef23d93979155b = $this->env->getExtension("native_profiler");
        $__internal_3e8a9c7b9a0b6eccb2aa6e4b82cd001220501a3f72c7b4341eef23d93979155b->enter($__internal_3e8a9c7b9a0b6eccb2aa6e4b82cd001220501a3f72c7b4341eef23d93979155b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3e8a9c7b9a0b6eccb2aa6e4b82cd001220501a3f72c7b4341eef23d93979155b->leave($__internal_3e8a9c7b9a0b6eccb2aa6e4b82cd001220501a3f72c7b4341eef23d93979155b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
