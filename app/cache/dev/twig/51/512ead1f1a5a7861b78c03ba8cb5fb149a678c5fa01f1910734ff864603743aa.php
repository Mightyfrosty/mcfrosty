<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_611a6595ea3165a57b9b98f971845a56e34c405457a40751faab90721b4b7227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_5f1bb1844b4107f2c92442d80fefba90a3562b4025e19617ceca1c333cd82d30 = $this->env->getExtension("native_profiler");
        $__internal_5f1bb1844b4107f2c92442d80fefba90a3562b4025e19617ceca1c333cd82d30->enter($__internal_5f1bb1844b4107f2c92442d80fefba90a3562b4025e19617ceca1c333cd82d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f1bb1844b4107f2c92442d80fefba90a3562b4025e19617ceca1c333cd82d30->leave($__internal_5f1bb1844b4107f2c92442d80fefba90a3562b4025e19617ceca1c333cd82d30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f12a9925bd38df734a09132ad81c7aaa63f820f0b7781982afe7a5ce85705cc0 = $this->env->getExtension("native_profiler");
        $__internal_f12a9925bd38df734a09132ad81c7aaa63f820f0b7781982afe7a5ce85705cc0->enter($__internal_f12a9925bd38df734a09132ad81c7aaa63f820f0b7781982afe7a5ce85705cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Sign Up Page ";
        
        $__internal_f12a9925bd38df734a09132ad81c7aaa63f820f0b7781982afe7a5ce85705cc0->leave($__internal_f12a9925bd38df734a09132ad81c7aaa63f820f0b7781982afe7a5ce85705cc0_prof);

    }

    // line 4
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_6d4d5f29bb372f9382cccc13d9810debe2def41d45c06ae518758d7821affb25 = $this->env->getExtension("native_profiler");
        $__internal_6d4d5f29bb372f9382cccc13d9810debe2def41d45c06ae518758d7821affb25->enter($__internal_6d4d5f29bb372f9382cccc13d9810debe2def41d45c06ae518758d7821affb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        echo " Sign Up ";
        
        $__internal_6d4d5f29bb372f9382cccc13d9810debe2def41d45c06ae518758d7821affb25->leave($__internal_6d4d5f29bb372f9382cccc13d9810debe2def41d45c06ae518758d7821affb25_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_527694769f476e62217be8e4b6798dc5fb226fef9bb6968e8e3167841a6b403e = $this->env->getExtension("native_profiler");
        $__internal_527694769f476e62217be8e4b6798dc5fb226fef9bb6968e8e3167841a6b403e->enter($__internal_527694769f476e62217be8e4b6798dc5fb226fef9bb6968e8e3167841a6b403e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 7)->display($context);
        
        $__internal_527694769f476e62217be8e4b6798dc5fb226fef9bb6968e8e3167841a6b403e->leave($__internal_527694769f476e62217be8e4b6798dc5fb226fef9bb6968e8e3167841a6b403e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
