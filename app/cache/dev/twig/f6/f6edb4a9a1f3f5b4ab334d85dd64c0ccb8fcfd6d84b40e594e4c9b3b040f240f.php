<?php

/* @Main/Default/index.html.twig */
class __TwigTemplate_77745b9e8aa4b9a0aa77981ddd82a9fc370bf9d1db0f105ec2cf4f52f99d0f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "@Main/Default/index.html.twig", 2);
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
        $__internal_7016fa02de909b0b05109698f9375d10f11a277e9ea93c50e16676789b5f20de = $this->env->getExtension("native_profiler");
        $__internal_7016fa02de909b0b05109698f9375d10f11a277e9ea93c50e16676789b5f20de->enter($__internal_7016fa02de909b0b05109698f9375d10f11a277e9ea93c50e16676789b5f20de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Main/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7016fa02de909b0b05109698f9375d10f11a277e9ea93c50e16676789b5f20de->leave($__internal_7016fa02de909b0b05109698f9375d10f11a277e9ea93c50e16676789b5f20de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac58253d7512745a7bd4c8fa70d8618d5473a9b9cf4771de5e8fab86f5a3c7fe = $this->env->getExtension("native_profiler");
        $__internal_ac58253d7512745a7bd4c8fa70d8618d5473a9b9cf4771de5e8fab86f5a3c7fe->enter($__internal_ac58253d7512745a7bd4c8fa70d8618d5473a9b9cf4771de5e8fab86f5a3c7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Homepage ";
        
        $__internal_ac58253d7512745a7bd4c8fa70d8618d5473a9b9cf4771de5e8fab86f5a3c7fe->leave($__internal_ac58253d7512745a7bd4c8fa70d8618d5473a9b9cf4771de5e8fab86f5a3c7fe_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_eecbc9757be72ba84f2bbaec037739e013c1c5e0fc699f84ad34bfaad5cac35a = $this->env->getExtension("native_profiler");
        $__internal_eecbc9757be72ba84f2bbaec037739e013c1c5e0fc699f84ad34bfaad5cac35a->enter($__internal_eecbc9757be72ba84f2bbaec037739e013c1c5e0fc699f84ad34bfaad5cac35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_eecbc9757be72ba84f2bbaec037739e013c1c5e0fc699f84ad34bfaad5cac35a->leave($__internal_eecbc9757be72ba84f2bbaec037739e013c1c5e0fc699f84ad34bfaad5cac35a_prof);

    }

    public function getTemplateName()
    {
        return "@Main/Default/index.html.twig";
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
