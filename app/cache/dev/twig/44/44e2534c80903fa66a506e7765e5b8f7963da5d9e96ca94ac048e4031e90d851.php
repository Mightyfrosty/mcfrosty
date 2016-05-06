<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bb2e9a59584fffdbc9927abbb939accd50f2b6bac1b54db70ffe2a7f016a2c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_81c12de215e2faaa96202ff5384733393abc0e6697fbaa23ad0c33eff93209a4 = $this->env->getExtension("native_profiler");
        $__internal_81c12de215e2faaa96202ff5384733393abc0e6697fbaa23ad0c33eff93209a4->enter($__internal_81c12de215e2faaa96202ff5384733393abc0e6697fbaa23ad0c33eff93209a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81c12de215e2faaa96202ff5384733393abc0e6697fbaa23ad0c33eff93209a4->leave($__internal_81c12de215e2faaa96202ff5384733393abc0e6697fbaa23ad0c33eff93209a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78018c7674e02b16448ee1577734678e864ea138bffee7954844fabb9a235ec9 = $this->env->getExtension("native_profiler");
        $__internal_78018c7674e02b16448ee1577734678e864ea138bffee7954844fabb9a235ec9->enter($__internal_78018c7674e02b16448ee1577734678e864ea138bffee7954844fabb9a235ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78018c7674e02b16448ee1577734678e864ea138bffee7954844fabb9a235ec9->leave($__internal_78018c7674e02b16448ee1577734678e864ea138bffee7954844fabb9a235ec9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf38f3518b58058e7725dbb035a957a860a1d5dff5fc75b186655e60e3896ee1 = $this->env->getExtension("native_profiler");
        $__internal_bf38f3518b58058e7725dbb035a957a860a1d5dff5fc75b186655e60e3896ee1->enter($__internal_bf38f3518b58058e7725dbb035a957a860a1d5dff5fc75b186655e60e3896ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bf38f3518b58058e7725dbb035a957a860a1d5dff5fc75b186655e60e3896ee1->leave($__internal_bf38f3518b58058e7725dbb035a957a860a1d5dff5fc75b186655e60e3896ee1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6012774958204b476edabbbc4230ce6dd4a347b62bfd2d88e955d11d6e6ed0db = $this->env->getExtension("native_profiler");
        $__internal_6012774958204b476edabbbc4230ce6dd4a347b62bfd2d88e955d11d6e6ed0db->enter($__internal_6012774958204b476edabbbc4230ce6dd4a347b62bfd2d88e955d11d6e6ed0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6012774958204b476edabbbc4230ce6dd4a347b62bfd2d88e955d11d6e6ed0db->leave($__internal_6012774958204b476edabbbc4230ce6dd4a347b62bfd2d88e955d11d6e6ed0db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
