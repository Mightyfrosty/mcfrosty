<?php

/* @User/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_700115782de7334c3abbae6c8d4770338424ffe7d89bef9dc669d1c36cac9c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Resetting/passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca99c1d0fd0fdcf87b0c9333475a723c5f673c4622bcc745a0ed378629343399 = $this->env->getExtension("native_profiler");
        $__internal_ca99c1d0fd0fdcf87b0c9333475a723c5f673c4622bcc745a0ed378629343399->enter($__internal_ca99c1d0fd0fdcf87b0c9333475a723c5f673c4622bcc745a0ed378629343399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca99c1d0fd0fdcf87b0c9333475a723c5f673c4622bcc745a0ed378629343399->leave($__internal_ca99c1d0fd0fdcf87b0c9333475a723c5f673c4622bcc745a0ed378629343399_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4855e67efa829d49b5cfb6842224d0656180c2a24910fae04b1d2b17f35018b6 = $this->env->getExtension("native_profiler");
        $__internal_4855e67efa829d49b5cfb6842224d0656180c2a24910fae04b1d2b17f35018b6->enter($__internal_4855e67efa829d49b5cfb6842224d0656180c2a24910fae04b1d2b17f35018b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4855e67efa829d49b5cfb6842224d0656180c2a24910fae04b1d2b17f35018b6->leave($__internal_4855e67efa829d49b5cfb6842224d0656180c2a24910fae04b1d2b17f35018b6_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
