<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_6de57470afefd15762d9eceb520cdf3ce7179bb1b938d8e97917e565b16c37c8 extends Twig_Template
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
        $__internal_40cd4439b2980e9704817140aeaaf2675e9a17d84ee7810d4c084a762e4e3322 = $this->env->getExtension("native_profiler");
        $__internal_40cd4439b2980e9704817140aeaaf2675e9a17d84ee7810d4c084a762e4e3322->enter($__internal_40cd4439b2980e9704817140aeaaf2675e9a17d84ee7810d4c084a762e4e3322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_40cd4439b2980e9704817140aeaaf2675e9a17d84ee7810d4c084a762e4e3322->leave($__internal_40cd4439b2980e9704817140aeaaf2675e9a17d84ee7810d4c084a762e4e3322_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
