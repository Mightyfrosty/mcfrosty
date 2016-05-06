<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7b8798f5962bad7851aefa6b703d5553035999783223d50ad55cf105c0afd7ee extends Twig_Template
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
        $__internal_9bd43bc1c08a742a020bd3a4e51d010fa8aa4c4c10993da1ba05c195aa4ec74e = $this->env->getExtension("native_profiler");
        $__internal_9bd43bc1c08a742a020bd3a4e51d010fa8aa4c4c10993da1ba05c195aa4ec74e->enter($__internal_9bd43bc1c08a742a020bd3a4e51d010fa8aa4c4c10993da1ba05c195aa4ec74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9bd43bc1c08a742a020bd3a4e51d010fa8aa4c4c10993da1ba05c195aa4ec74e->leave($__internal_9bd43bc1c08a742a020bd3a4e51d010fa8aa4c4c10993da1ba05c195aa4ec74e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
