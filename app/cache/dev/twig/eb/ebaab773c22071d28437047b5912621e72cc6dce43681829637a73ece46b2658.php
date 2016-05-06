<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b725802c21c760ac7d723e5da3c1d54a27abc807ddfddfad92b37ad20625a807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c51d08313210628703f3e2322f604aa2581028846be6598ed369a83f6c1bbac = $this->env->getExtension("native_profiler");
        $__internal_1c51d08313210628703f3e2322f604aa2581028846be6598ed369a83f6c1bbac->enter($__internal_1c51d08313210628703f3e2322f604aa2581028846be6598ed369a83f6c1bbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1c51d08313210628703f3e2322f604aa2581028846be6598ed369a83f6c1bbac->leave($__internal_1c51d08313210628703f3e2322f604aa2581028846be6598ed369a83f6c1bbac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d90920e223d8c41302cf49b99643cdd161bc9aabb7c2637c2b39226b6d4900c5 = $this->env->getExtension("native_profiler");
        $__internal_d90920e223d8c41302cf49b99643cdd161bc9aabb7c2637c2b39226b6d4900c5->enter($__internal_d90920e223d8c41302cf49b99643cdd161bc9aabb7c2637c2b39226b6d4900c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d90920e223d8c41302cf49b99643cdd161bc9aabb7c2637c2b39226b6d4900c5->leave($__internal_d90920e223d8c41302cf49b99643cdd161bc9aabb7c2637c2b39226b6d4900c5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
