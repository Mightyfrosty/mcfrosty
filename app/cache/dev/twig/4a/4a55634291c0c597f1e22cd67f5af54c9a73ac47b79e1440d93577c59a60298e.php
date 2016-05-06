<?php

/* base.html.twig */
class __TwigTemplate_dd987da7cba8a5c5eddf49997e12c0a33a242e5a4e4f4c16be8e98d10833f516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96f5a07c086822825a385be860e6b36b6c6c4fb8218100afd798acf64d2e1b2c = $this->env->getExtension("native_profiler");
        $__internal_96f5a07c086822825a385be860e6b36b6c6c4fb8218100afd798acf64d2e1b2c->enter($__internal_96f5a07c086822825a385be860e6b36b6c6c4fb8218100afd798acf64d2e1b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_96f5a07c086822825a385be860e6b36b6c6c4fb8218100afd798acf64d2e1b2c->leave($__internal_96f5a07c086822825a385be860e6b36b6c6c4fb8218100afd798acf64d2e1b2c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_78718b13b261c8fea1517753999070f69e6151493dff4068a51e5cdf220ec929 = $this->env->getExtension("native_profiler");
        $__internal_78718b13b261c8fea1517753999070f69e6151493dff4068a51e5cdf220ec929->enter($__internal_78718b13b261c8fea1517753999070f69e6151493dff4068a51e5cdf220ec929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_78718b13b261c8fea1517753999070f69e6151493dff4068a51e5cdf220ec929->leave($__internal_78718b13b261c8fea1517753999070f69e6151493dff4068a51e5cdf220ec929_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98301a47bd8fc3983a122657a05cdf53294e0b68ca6b7109d07198bc2fdf88a4 = $this->env->getExtension("native_profiler");
        $__internal_98301a47bd8fc3983a122657a05cdf53294e0b68ca6b7109d07198bc2fdf88a4->enter($__internal_98301a47bd8fc3983a122657a05cdf53294e0b68ca6b7109d07198bc2fdf88a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98301a47bd8fc3983a122657a05cdf53294e0b68ca6b7109d07198bc2fdf88a4->leave($__internal_98301a47bd8fc3983a122657a05cdf53294e0b68ca6b7109d07198bc2fdf88a4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb21e825cff390e03bc1295c0baebf3fbd87a077cc09ff4c7aef238a5a948d24 = $this->env->getExtension("native_profiler");
        $__internal_bb21e825cff390e03bc1295c0baebf3fbd87a077cc09ff4c7aef238a5a948d24->enter($__internal_bb21e825cff390e03bc1295c0baebf3fbd87a077cc09ff4c7aef238a5a948d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb21e825cff390e03bc1295c0baebf3fbd87a077cc09ff4c7aef238a5a948d24->leave($__internal_bb21e825cff390e03bc1295c0baebf3fbd87a077cc09ff4c7aef238a5a948d24_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79f755329722bfabd75ae608f82816e9f9865611c3503ae3df30078639ccccc7 = $this->env->getExtension("native_profiler");
        $__internal_79f755329722bfabd75ae608f82816e9f9865611c3503ae3df30078639ccccc7->enter($__internal_79f755329722bfabd75ae608f82816e9f9865611c3503ae3df30078639ccccc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_79f755329722bfabd75ae608f82816e9f9865611c3503ae3df30078639ccccc7->leave($__internal_79f755329722bfabd75ae608f82816e9f9865611c3503ae3df30078639ccccc7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
