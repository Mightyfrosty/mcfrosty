<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c1f289a2f9e032fd5b65447620cad46971f8f49115e8084ed334d711ffcb1818 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
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
        $__internal_d05b5baf15f938a4ea4b4cb965480903bbf9acd5e759e4f36325d07fc1bb3713 = $this->env->getExtension("native_profiler");
        $__internal_d05b5baf15f938a4ea4b4cb965480903bbf9acd5e759e4f36325d07fc1bb3713->enter($__internal_d05b5baf15f938a4ea4b4cb965480903bbf9acd5e759e4f36325d07fc1bb3713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d05b5baf15f938a4ea4b4cb965480903bbf9acd5e759e4f36325d07fc1bb3713->leave($__internal_d05b5baf15f938a4ea4b4cb965480903bbf9acd5e759e4f36325d07fc1bb3713_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0608b8593eb4d9c1cf1fe979877fbfab443ca8b09710d8d55af3a2529bc88f7 = $this->env->getExtension("native_profiler");
        $__internal_d0608b8593eb4d9c1cf1fe979877fbfab443ca8b09710d8d55af3a2529bc88f7->enter($__internal_d0608b8593eb4d9c1cf1fe979877fbfab443ca8b09710d8d55af3a2529bc88f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d0608b8593eb4d9c1cf1fe979877fbfab443ca8b09710d8d55af3a2529bc88f7->leave($__internal_d0608b8593eb4d9c1cf1fe979877fbfab443ca8b09710d8d55af3a2529bc88f7_prof);

    }

    // line 9
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_b82dd61ae63eb62a410941828132f551eba5fdf71a8fa1bf22009afd27b41a02 = $this->env->getExtension("native_profiler");
        $__internal_b82dd61ae63eb62a410941828132f551eba5fdf71a8fa1bf22009afd27b41a02->enter($__internal_b82dd61ae63eb62a410941828132f551eba5fdf71a8fa1bf22009afd27b41a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        
        $__internal_b82dd61ae63eb62a410941828132f551eba5fdf71a8fa1bf22009afd27b41a02->leave($__internal_b82dd61ae63eb62a410941828132f551eba5fdf71a8fa1bf22009afd27b41a02_prof);

    }

    // line 21
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b26a617ae12fd7e0f94944baa3422bd5dd3d4648588ccdb98019cad87eb9731b = $this->env->getExtension("native_profiler");
        $__internal_b26a617ae12fd7e0f94944baa3422bd5dd3d4648588ccdb98019cad87eb9731b->enter($__internal_b26a617ae12fd7e0f94944baa3422bd5dd3d4648588ccdb98019cad87eb9731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 22
        echo "  ";
        
        $__internal_b26a617ae12fd7e0f94944baa3422bd5dd3d4648588ccdb98019cad87eb9731b->leave($__internal_b26a617ae12fd7e0f94944baa3422bd5dd3d4648588ccdb98019cad87eb9731b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
