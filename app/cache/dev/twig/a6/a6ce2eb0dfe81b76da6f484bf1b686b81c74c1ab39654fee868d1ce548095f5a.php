<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_29a00d8ce92e7010065cc2dfaad7874457ebfec836182bad59b643b8edd40e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f139bc6fc2c9d1f9d38d94383f120b5bae38e75a57dff3e6cc3c9671016f1aa2 = $this->env->getExtension("native_profiler");
        $__internal_f139bc6fc2c9d1f9d38d94383f120b5bae38e75a57dff3e6cc3c9671016f1aa2->enter($__internal_f139bc6fc2c9d1f9d38d94383f120b5bae38e75a57dff3e6cc3c9671016f1aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f139bc6fc2c9d1f9d38d94383f120b5bae38e75a57dff3e6cc3c9671016f1aa2->leave($__internal_f139bc6fc2c9d1f9d38d94383f120b5bae38e75a57dff3e6cc3c9671016f1aa2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
