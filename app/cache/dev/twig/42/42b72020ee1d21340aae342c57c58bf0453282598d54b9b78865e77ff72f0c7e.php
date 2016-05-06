<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ead08efd41a794d86bba77b35436bec2cf64d57f3f9719f904783c30d3ba1ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0237ce8c1d7ebf87588e4c13140088ff58ecf1b6cb5d98bdd2af9e9ea7ac8215 = $this->env->getExtension("native_profiler");
        $__internal_0237ce8c1d7ebf87588e4c13140088ff58ecf1b6cb5d98bdd2af9e9ea7ac8215->enter($__internal_0237ce8c1d7ebf87588e4c13140088ff58ecf1b6cb5d98bdd2af9e9ea7ac8215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0237ce8c1d7ebf87588e4c13140088ff58ecf1b6cb5d98bdd2af9e9ea7ac8215->leave($__internal_0237ce8c1d7ebf87588e4c13140088ff58ecf1b6cb5d98bdd2af9e9ea7ac8215_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f98df3c36eaefdab2b5f4045c1e533058d2ce762fdc301e64c6abfb4e0db8c2e = $this->env->getExtension("native_profiler");
        $__internal_f98df3c36eaefdab2b5f4045c1e533058d2ce762fdc301e64c6abfb4e0db8c2e->enter($__internal_f98df3c36eaefdab2b5f4045c1e533058d2ce762fdc301e64c6abfb4e0db8c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f98df3c36eaefdab2b5f4045c1e533058d2ce762fdc301e64c6abfb4e0db8c2e->leave($__internal_f98df3c36eaefdab2b5f4045c1e533058d2ce762fdc301e64c6abfb4e0db8c2e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4f718a754291aa581eefd9d9bd2328992c22556bebfc3db6936029b900806450 = $this->env->getExtension("native_profiler");
        $__internal_4f718a754291aa581eefd9d9bd2328992c22556bebfc3db6936029b900806450->enter($__internal_4f718a754291aa581eefd9d9bd2328992c22556bebfc3db6936029b900806450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4f718a754291aa581eefd9d9bd2328992c22556bebfc3db6936029b900806450->leave($__internal_4f718a754291aa581eefd9d9bd2328992c22556bebfc3db6936029b900806450_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01f06a822fe84f8ad4207258dfd7aefc3423d478bbbafc3bdd6b78a5a2a0601d = $this->env->getExtension("native_profiler");
        $__internal_01f06a822fe84f8ad4207258dfd7aefc3423d478bbbafc3bdd6b78a5a2a0601d->enter($__internal_01f06a822fe84f8ad4207258dfd7aefc3423d478bbbafc3bdd6b78a5a2a0601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01f06a822fe84f8ad4207258dfd7aefc3423d478bbbafc3bdd6b78a5a2a0601d->leave($__internal_01f06a822fe84f8ad4207258dfd7aefc3423d478bbbafc3bdd6b78a5a2a0601d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
