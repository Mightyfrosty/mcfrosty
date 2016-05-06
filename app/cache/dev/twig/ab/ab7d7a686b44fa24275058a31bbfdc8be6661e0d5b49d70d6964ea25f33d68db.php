<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_718daabd89f340e0260b428d44538b8b5c452f65921295beaa5feffe16726dcd extends Twig_Template
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
        $__internal_c28f1ecb0a07e54490ffeb9ab3ac4d1e1f5bcb649f622e94bdd007ed74fe3680 = $this->env->getExtension("native_profiler");
        $__internal_c28f1ecb0a07e54490ffeb9ab3ac4d1e1f5bcb649f622e94bdd007ed74fe3680->enter($__internal_c28f1ecb0a07e54490ffeb9ab3ac4d1e1f5bcb649f622e94bdd007ed74fe3680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_c28f1ecb0a07e54490ffeb9ab3ac4d1e1f5bcb649f622e94bdd007ed74fe3680->leave($__internal_c28f1ecb0a07e54490ffeb9ab3ac4d1e1f5bcb649f622e94bdd007ed74fe3680_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_group_new') }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_new">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
