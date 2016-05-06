<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d1823bdb63a186c08a74dc2444b783becb56a34c416ca0da9a584e4205f61a02 extends Twig_Template
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
        $__internal_5d729c338dfe954a6769dfe6d650ce9ddae5d6fe760ef47cb225d43f12013e8d = $this->env->getExtension("native_profiler");
        $__internal_5d729c338dfe954a6769dfe6d650ce9ddae5d6fe760ef47cb225d43f12013e8d->enter($__internal_5d729c338dfe954a6769dfe6d650ce9ddae5d6fe760ef47cb225d43f12013e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_5d729c338dfe954a6769dfe6d650ce9ddae5d6fe760ef47cb225d43f12013e8d->leave($__internal_5d729c338dfe954a6769dfe6d650ce9ddae5d6fe760ef47cb225d43f12013e8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
