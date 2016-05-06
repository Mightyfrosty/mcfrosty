<?php

/* @User/layout.html.twig */
class __TwigTemplate_cbbf569560f799baf88973f6f8052b7df373f1b5e12639314de9fb5599068bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "@User/layout.html.twig", 4);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title_form' => array($this, 'block_title_form'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f2a9f603f73946fc53b2c64e9e1c2e939af7646127dafc2f45f84f65fd7d7d6 = $this->env->getExtension("native_profiler");
        $__internal_9f2a9f603f73946fc53b2c64e9e1c2e939af7646127dafc2f45f84f65fd7d7d6->enter($__internal_9f2a9f603f73946fc53b2c64e9e1c2e939af7646127dafc2f45f84f65fd7d7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2a9f603f73946fc53b2c64e9e1c2e939af7646127dafc2f45f84f65fd7d7d6->leave($__internal_9f2a9f603f73946fc53b2c64e9e1c2e939af7646127dafc2f45f84f65fd7d7d6_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d51291225aae6101a92cfd30ac4dc2af57220230e9726064c2d94b3c6dec5557 = $this->env->getExtension("native_profiler");
        $__internal_d51291225aae6101a92cfd30ac4dc2af57220230e9726064c2d94b3c6dec5557->enter($__internal_d51291225aae6101a92cfd30ac4dc2af57220230e9726064c2d94b3c6dec5557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"form-block center-block p-30 light-gray-bg border-clear transparent-bg\">
    <h2 class=\"title\"> ";
        // line 9
        $this->displayBlock('title_form', $context, $blocks);
        echo " </h2>
            
  ";
        // line 12
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
  ";
        // line 21
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "</div>
";
        
        $__internal_d51291225aae6101a92cfd30ac4dc2af57220230e9726064c2d94b3c6dec5557->leave($__internal_d51291225aae6101a92cfd30ac4dc2af57220230e9726064c2d94b3c6dec5557_prof);

    }

    // line 9
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_9cd6cf80f365e903b1bfe1ce99aa6a07b47b62318e3a0f04d17e34ce8964cd45 = $this->env->getExtension("native_profiler");
        $__internal_9cd6cf80f365e903b1bfe1ce99aa6a07b47b62318e3a0f04d17e34ce8964cd45->enter($__internal_9cd6cf80f365e903b1bfe1ce99aa6a07b47b62318e3a0f04d17e34ce8964cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        
        $__internal_9cd6cf80f365e903b1bfe1ce99aa6a07b47b62318e3a0f04d17e34ce8964cd45->leave($__internal_9cd6cf80f365e903b1bfe1ce99aa6a07b47b62318e3a0f04d17e34ce8964cd45_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e3de537291ffb704501db400d032b49d9e013337696dcc2500bf62708aedcc0 = $this->env->getExtension("native_profiler");
        $__internal_3e3de537291ffb704501db400d032b49d9e013337696dcc2500bf62708aedcc0->enter($__internal_3e3de537291ffb704501db400d032b49d9e013337696dcc2500bf62708aedcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "  ";
        
        $__internal_3e3de537291ffb704501db400d032b49d9e013337696dcc2500bf62708aedcc0->leave($__internal_3e3de537291ffb704501db400d032b49d9e013337696dcc2500bf62708aedcc0_prof);

    }

    public function getTemplateName()
    {
        return "@User/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 22,  105 => 21,  94 => 9,  86 => 23,  83 => 21,  80 => 19,  74 => 18,  65 => 15,  60 => 14,  55 => 13,  50 => 12,  45 => 9,  42 => 8,  36 => 7,  11 => 4,);
    }
}
/* {# src/UserBundle/Resources/views/layout.html.twig #}*/
/* */
/* {# On étend notre layout #}*/
/* {% extends "MainBundle::layout.html.twig" %}*/
/* */
/* {# Dans notre layout, il faut définir le block content #}*/
/* {% block content %}*/
/* <div class="form-block center-block p-30 light-gray-bg border-clear transparent-bg">*/
/*     <h2 class="title"> {% block title_form %}{% endblock %} </h2>*/
/*             */
/*   {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*   {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*   {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*   {% block fos_user_content %}*/
/*   {% endblock fos_user_content %}*/
/* </div>*/
/* {% endblock %}*/
