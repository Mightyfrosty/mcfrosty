<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_af3c5e33c0be614a0cf7aff357ea987dffa52f820c4eda50f89ca26245e2eddc extends Twig_Template
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
        $__internal_c8fb38c3f7fbe6f34a633ac8f83fac1da0b902773db9dc80df6cf2ee5413483a = $this->env->getExtension("native_profiler");
        $__internal_c8fb38c3f7fbe6f34a633ac8f83fac1da0b902773db9dc80df6cf2ee5413483a->enter($__internal_c8fb38c3f7fbe6f34a633ac8f83fac1da0b902773db9dc80df6cf2ee5413483a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c8fb38c3f7fbe6f34a633ac8f83fac1da0b902773db9dc80df6cf2ee5413483a->leave($__internal_c8fb38c3f7fbe6f34a633ac8f83fac1da0b902773db9dc80df6cf2ee5413483a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
