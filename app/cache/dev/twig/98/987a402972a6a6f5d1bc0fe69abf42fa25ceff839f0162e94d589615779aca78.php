<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_2ca7f51f30f3308b06cc75f79d2b83b88b622e9754b54cbe6bb38b2a7b166980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "@User/Registration/register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title_form' => array($this, 'block_title_form'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2f50eb650cec28bc058ecb1206111f9fa82782694185c7f791708c60f260e6d = $this->env->getExtension("native_profiler");
        $__internal_e2f50eb650cec28bc058ecb1206111f9fa82782694185c7f791708c60f260e6d->enter($__internal_e2f50eb650cec28bc058ecb1206111f9fa82782694185c7f791708c60f260e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f50eb650cec28bc058ecb1206111f9fa82782694185c7f791708c60f260e6d->leave($__internal_e2f50eb650cec28bc058ecb1206111f9fa82782694185c7f791708c60f260e6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b26a28c299f0ab84ccf9e5a9c8232f458209da65dc7a47bd6aee4ccc96a9df1 = $this->env->getExtension("native_profiler");
        $__internal_0b26a28c299f0ab84ccf9e5a9c8232f458209da65dc7a47bd6aee4ccc96a9df1->enter($__internal_0b26a28c299f0ab84ccf9e5a9c8232f458209da65dc7a47bd6aee4ccc96a9df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up Page ";
        
        $__internal_0b26a28c299f0ab84ccf9e5a9c8232f458209da65dc7a47bd6aee4ccc96a9df1->leave($__internal_0b26a28c299f0ab84ccf9e5a9c8232f458209da65dc7a47bd6aee4ccc96a9df1_prof);

    }

    // line 4
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_80df07926838f0e6cb1055838ef494302ce00da1052414c05908ec104f60be58 = $this->env->getExtension("native_profiler");
        $__internal_80df07926838f0e6cb1055838ef494302ce00da1052414c05908ec104f60be58->enter($__internal_80df07926838f0e6cb1055838ef494302ce00da1052414c05908ec104f60be58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        echo " Sign Up ";
        
        $__internal_80df07926838f0e6cb1055838ef494302ce00da1052414c05908ec104f60be58->leave($__internal_80df07926838f0e6cb1055838ef494302ce00da1052414c05908ec104f60be58_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc63416eb19fe123bc53899f7d3710a4d5399c6c7e27eb89d7d033854df02345 = $this->env->getExtension("native_profiler");
        $__internal_cc63416eb19fe123bc53899f7d3710a4d5399c6c7e27eb89d7d033854df02345->enter($__internal_cc63416eb19fe123bc53899f7d3710a4d5399c6c7e27eb89d7d033854df02345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 7)->display($context);
        
        $__internal_cc63416eb19fe123bc53899f7d3710a4d5399c6c7e27eb89d7d033854df02345->leave($__internal_cc63416eb19fe123bc53899f7d3710a4d5399c6c7e27eb89d7d033854df02345_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "UserBundle::layout.html.twig" %}*/
/* */
/* {% block title %} Sign Up Page {% endblock %}*/
/* {% block title_form %} Sign Up {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
