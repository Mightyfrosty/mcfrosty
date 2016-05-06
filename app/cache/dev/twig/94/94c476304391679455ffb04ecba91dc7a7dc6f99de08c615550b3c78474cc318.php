<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2f239ac9e85264a1f50261e50965f77cf455fac9985bb1a534cc4da2ec43797c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a195f4cf3c0ccbd4673ef8d65cb1f928d9ba97cd461ebdb6e822e65adc2ebedd = $this->env->getExtension("native_profiler");
        $__internal_a195f4cf3c0ccbd4673ef8d65cb1f928d9ba97cd461ebdb6e822e65adc2ebedd->enter($__internal_a195f4cf3c0ccbd4673ef8d65cb1f928d9ba97cd461ebdb6e822e65adc2ebedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a195f4cf3c0ccbd4673ef8d65cb1f928d9ba97cd461ebdb6e822e65adc2ebedd->leave($__internal_a195f4cf3c0ccbd4673ef8d65cb1f928d9ba97cd461ebdb6e822e65adc2ebedd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dbc468877dec3f9366e1d40eff26190fec098c7488047c8fc359912a4fb6aa09 = $this->env->getExtension("native_profiler");
        $__internal_dbc468877dec3f9366e1d40eff26190fec098c7488047c8fc359912a4fb6aa09->enter($__internal_dbc468877dec3f9366e1d40eff26190fec098c7488047c8fc359912a4fb6aa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dbc468877dec3f9366e1d40eff26190fec098c7488047c8fc359912a4fb6aa09->leave($__internal_dbc468877dec3f9366e1d40eff26190fec098c7488047c8fc359912a4fb6aa09_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee26be995f7597bb4c1cc5af9a711b4adb7c7b35197e4efc28f219a4cc8f4cb7 = $this->env->getExtension("native_profiler");
        $__internal_ee26be995f7597bb4c1cc5af9a711b4adb7c7b35197e4efc28f219a4cc8f4cb7->enter($__internal_ee26be995f7597bb4c1cc5af9a711b4adb7c7b35197e4efc28f219a4cc8f4cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee26be995f7597bb4c1cc5af9a711b4adb7c7b35197e4efc28f219a4cc8f4cb7->leave($__internal_ee26be995f7597bb4c1cc5af9a711b4adb7c7b35197e4efc28f219a4cc8f4cb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_35a023e667c5cccda01488bc4edafe91d3283459aabdb9a54f66978d0434fd16 = $this->env->getExtension("native_profiler");
        $__internal_35a023e667c5cccda01488bc4edafe91d3283459aabdb9a54f66978d0434fd16->enter($__internal_35a023e667c5cccda01488bc4edafe91d3283459aabdb9a54f66978d0434fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_35a023e667c5cccda01488bc4edafe91d3283459aabdb9a54f66978d0434fd16->leave($__internal_35a023e667c5cccda01488bc4edafe91d3283459aabdb9a54f66978d0434fd16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
