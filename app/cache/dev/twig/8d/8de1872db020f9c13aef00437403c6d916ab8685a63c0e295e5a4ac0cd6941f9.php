<?php

/* @User/Resetting/reset_content.html.twig */
class __TwigTemplate_ea10b1c2f097a1e97b23eecc2de27be27f4ab0a5cfd652a49268aff3381c9460 extends Twig_Template
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
        $__internal_7fbbf8dee2a252a4ee194f87f2ac052e32a1e3565e4f76137052c2c99bcfb30a = $this->env->getExtension("native_profiler");
        $__internal_7fbbf8dee2a252a4ee194f87f2ac052e32a1e3565e4f76137052c2c99bcfb30a->enter($__internal_7fbbf8dee2a252a4ee194f87f2ac052e32a1e3565e4f76137052c2c99bcfb30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    
    <div>
        <button type=\"submit\"  id=\"_submit\" name=\"_submit\" class=\"btn btn-red btn-sm\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_7fbbf8dee2a252a4ee194f87f2ac052e32a1e3565e4f76137052c2c99bcfb30a->leave($__internal_7fbbf8dee2a252a4ee194f87f2ac052e32a1e3565e4f76137052c2c99bcfb30a_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_resetting_reset">*/
/*     {{ form_widget(form) }}*/
/*     */
/*     <div>*/
/*         <button type="submit"  id="_submit" name="_submit" class="btn btn-red btn-sm">{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*     </div>*/
/* </form>*/
/* */
