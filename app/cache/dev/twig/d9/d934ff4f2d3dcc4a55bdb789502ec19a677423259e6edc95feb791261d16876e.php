<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8670dd2817ebf0d34e65806143cc637d999b25bf9b1962ea0eaad29b1d217b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_2a98b20168bd094825ddf1e67436dfdff9e7132d7448d3847695ad822031aff5 = $this->env->getExtension("native_profiler");
        $__internal_2a98b20168bd094825ddf1e67436dfdff9e7132d7448d3847695ad822031aff5->enter($__internal_2a98b20168bd094825ddf1e67436dfdff9e7132d7448d3847695ad822031aff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a98b20168bd094825ddf1e67436dfdff9e7132d7448d3847695ad822031aff5->leave($__internal_2a98b20168bd094825ddf1e67436dfdff9e7132d7448d3847695ad822031aff5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b1bae2a99f09bf574e6544c135d9ad8f82cc389042045a96e6392163e4ea888 = $this->env->getExtension("native_profiler");
        $__internal_0b1bae2a99f09bf574e6544c135d9ad8f82cc389042045a96e6392163e4ea888->enter($__internal_0b1bae2a99f09bf574e6544c135d9ad8f82cc389042045a96e6392163e4ea888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0b1bae2a99f09bf574e6544c135d9ad8f82cc389042045a96e6392163e4ea888->leave($__internal_0b1bae2a99f09bf574e6544c135d9ad8f82cc389042045a96e6392163e4ea888_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
