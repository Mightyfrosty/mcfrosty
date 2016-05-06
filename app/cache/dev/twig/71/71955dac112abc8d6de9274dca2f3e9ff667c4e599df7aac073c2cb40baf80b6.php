<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_49e945d1292cdd12971cc21eb76e8b1ee1e2ca5ceffcec4fe65e6b9deb4c6380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_722a5aa6a18b1f492c2822bf9bbf5e7f77d651ddf716e26795830fa4458be8cf = $this->env->getExtension("native_profiler");
        $__internal_722a5aa6a18b1f492c2822bf9bbf5e7f77d651ddf716e26795830fa4458be8cf->enter($__internal_722a5aa6a18b1f492c2822bf9bbf5e7f77d651ddf716e26795830fa4458be8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_722a5aa6a18b1f492c2822bf9bbf5e7f77d651ddf716e26795830fa4458be8cf->leave($__internal_722a5aa6a18b1f492c2822bf9bbf5e7f77d651ddf716e26795830fa4458be8cf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6d4fb41192abb75f8ea29531efd0aeebd6bb3faab0134f18cd2b03363c0b2dc = $this->env->getExtension("native_profiler");
        $__internal_f6d4fb41192abb75f8ea29531efd0aeebd6bb3faab0134f18cd2b03363c0b2dc->enter($__internal_f6d4fb41192abb75f8ea29531efd0aeebd6bb3faab0134f18cd2b03363c0b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Homepage ";
        
        $__internal_f6d4fb41192abb75f8ea29531efd0aeebd6bb3faab0134f18cd2b03363c0b2dc->leave($__internal_f6d4fb41192abb75f8ea29531efd0aeebd6bb3faab0134f18cd2b03363c0b2dc_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e72a6ca73132ac8781249ae97bdd426f2c80384db674b91c7d964a8521a6b11 = $this->env->getExtension("native_profiler");
        $__internal_0e72a6ca73132ac8781249ae97bdd426f2c80384db674b91c7d964a8521a6b11->enter($__internal_0e72a6ca73132ac8781249ae97bdd426f2c80384db674b91c7d964a8521a6b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
    <div class=\"center-block\">
    <div class=\"col-md-3 circle-box\">
            <a href=\"https://books.mcfrosty.com\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Main/img/Books.png"), "html", null, true);
        echo "\"/>
        </a>
    </div>

    <div class=\"col-md-3 circle-box\">
        <a href=\"https://media.mcfrosty.com\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Main/img/Media.png"), "html", null, true);
        echo "\"/>
        </a> 
   </div>

    <div class=\"col-md-3 circle-box\">
        <a href=\"https://music.mcfrosty.com\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Main/img/Music.png"), "html", null, true);
        echo "\"/>
        </a>
    </div>

    <div class=\"col-md-3 circle-box\">
        <a href=\"https://cloud.mcfrosty.com\">
            <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Main/img/Cloud.png"), "html", null, true);
        echo "\"/>
        </a>
    </div>
            <div>
";
        
        $__internal_0e72a6ca73132ac8781249ae97bdd426f2c80384db674b91c7d964a8521a6b11->leave($__internal_0e72a6ca73132ac8781249ae97bdd426f2c80384db674b91c7d964a8521a6b11_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  77 => 24,  68 => 18,  59 => 12,  53 => 8,  47 => 7,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "MainBundle::layout.html.twig" %}*/
/* {% block title %} Homepage {% endblock %}*/
/* */
/* */
/* */
/* {%block content %}*/
/* */
/*     <div class="center-block">*/
/*     <div class="col-md-3 circle-box">*/
/*             <a href="https://books.mcfrosty.com">*/
/*             <img src="{{asset("bundles/Main/img/Books.png")}}"/>*/
/*         </a>*/
/*     </div>*/
/* */
/*     <div class="col-md-3 circle-box">*/
/*         <a href="https://media.mcfrosty.com">*/
/*             <img src="{{asset("bundles/Main/img/Media.png")}}"/>*/
/*         </a> */
/*    </div>*/
/* */
/*     <div class="col-md-3 circle-box">*/
/*         <a href="https://music.mcfrosty.com">*/
/*             <img src="{{asset("bundles/Main/img/Music.png")}}"/>*/
/*         </a>*/
/*     </div>*/
/* */
/*     <div class="col-md-3 circle-box">*/
/*         <a href="https://cloud.mcfrosty.com">*/
/*             <img src="{{asset("bundles/Main/img/Cloud.png")}}"/>*/
/*         </a>*/
/*     </div>*/
/*             <div>*/
/* {%endblock%}*/
