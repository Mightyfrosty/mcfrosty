<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f5208d1a32b06803b31e4198309cf1f4ba523a5558e57d270e73611310d1fc99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_1c2fb2428eee58b0a7cc7ac2a6f64c8be681b6390551779923462f1c46cf71d9 = $this->env->getExtension("native_profiler");
        $__internal_1c2fb2428eee58b0a7cc7ac2a6f64c8be681b6390551779923462f1c46cf71d9->enter($__internal_1c2fb2428eee58b0a7cc7ac2a6f64c8be681b6390551779923462f1c46cf71d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c2fb2428eee58b0a7cc7ac2a6f64c8be681b6390551779923462f1c46cf71d9->leave($__internal_1c2fb2428eee58b0a7cc7ac2a6f64c8be681b6390551779923462f1c46cf71d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99b90ea39ac356ba6b09c17f54b044bab9719bb6ff8764d8cbe728e405ead90a = $this->env->getExtension("native_profiler");
        $__internal_99b90ea39ac356ba6b09c17f54b044bab9719bb6ff8764d8cbe728e405ead90a->enter($__internal_99b90ea39ac356ba6b09c17f54b044bab9719bb6ff8764d8cbe728e405ead90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_99b90ea39ac356ba6b09c17f54b044bab9719bb6ff8764d8cbe728e405ead90a->leave($__internal_99b90ea39ac356ba6b09c17f54b044bab9719bb6ff8764d8cbe728e405ead90a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_54aad4fcd9b4c90105141be3fb4b9098b115ba0bda5f0d4813f1e1333eb1d20c = $this->env->getExtension("native_profiler");
        $__internal_54aad4fcd9b4c90105141be3fb4b9098b115ba0bda5f0d4813f1e1333eb1d20c->enter($__internal_54aad4fcd9b4c90105141be3fb4b9098b115ba0bda5f0d4813f1e1333eb1d20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54aad4fcd9b4c90105141be3fb4b9098b115ba0bda5f0d4813f1e1333eb1d20c->leave($__internal_54aad4fcd9b4c90105141be3fb4b9098b115ba0bda5f0d4813f1e1333eb1d20c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
