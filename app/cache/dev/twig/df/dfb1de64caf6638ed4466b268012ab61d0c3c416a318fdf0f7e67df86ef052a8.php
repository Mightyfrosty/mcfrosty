<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_68e59361de819e366e8ab8cd22171c9513bf94ea491f39cc318e1dcc5cb1c9cd extends Twig_Template
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
        $__internal_e513afba2f189b3ec324a4f2c889bc11dca5c6bd8faa6ccf2f37dea288163d9e = $this->env->getExtension("native_profiler");
        $__internal_e513afba2f189b3ec324a4f2c889bc11dca5c6bd8faa6ccf2f37dea288163d9e->enter($__internal_e513afba2f189b3ec324a4f2c889bc11dca5c6bd8faa6ccf2f37dea288163d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e513afba2f189b3ec324a4f2c889bc11dca5c6bd8faa6ccf2f37dea288163d9e->leave($__internal_e513afba2f189b3ec324a4f2c889bc11dca5c6bd8faa6ccf2f37dea288163d9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
