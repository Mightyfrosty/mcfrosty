<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c05f3bc1dd854f258076f3f53e3ebbcee9d52e9a3f572676a12b7a4efd43875e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_9a871c7eb725f93d09beb29ab684f8a4643e3d31b43918f010125e025ba97169 = $this->env->getExtension("native_profiler");
        $__internal_9a871c7eb725f93d09beb29ab684f8a4643e3d31b43918f010125e025ba97169->enter($__internal_9a871c7eb725f93d09beb29ab684f8a4643e3d31b43918f010125e025ba97169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a871c7eb725f93d09beb29ab684f8a4643e3d31b43918f010125e025ba97169->leave($__internal_9a871c7eb725f93d09beb29ab684f8a4643e3d31b43918f010125e025ba97169_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2e7370fd56c5b0a978f6cc9a799457c0a1cdc5497f892c483a121d795c22ea9 = $this->env->getExtension("native_profiler");
        $__internal_d2e7370fd56c5b0a978f6cc9a799457c0a1cdc5497f892c483a121d795c22ea9->enter($__internal_d2e7370fd56c5b0a978f6cc9a799457c0a1cdc5497f892c483a121d795c22ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d2e7370fd56c5b0a978f6cc9a799457c0a1cdc5497f892c483a121d795c22ea9->leave($__internal_d2e7370fd56c5b0a978f6cc9a799457c0a1cdc5497f892c483a121d795c22ea9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e159585ee5c4db422080a1880b6411fa79534e674133ed4a511fe2f8bc48515 = $this->env->getExtension("native_profiler");
        $__internal_0e159585ee5c4db422080a1880b6411fa79534e674133ed4a511fe2f8bc48515->enter($__internal_0e159585ee5c4db422080a1880b6411fa79534e674133ed4a511fe2f8bc48515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0e159585ee5c4db422080a1880b6411fa79534e674133ed4a511fe2f8bc48515->leave($__internal_0e159585ee5c4db422080a1880b6411fa79534e674133ed4a511fe2f8bc48515_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
