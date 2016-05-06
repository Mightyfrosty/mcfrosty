<?php

/* @User/Registration/register_content.html.twig */
class __TwigTemplate_5d9b047858d0d784c95a30c3ac2bfba6c47c779a7400a35e790e6ce380d4119a extends Twig_Template
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
        $__internal_814406d34ef406b32650edefb5f964a639a8c772de3a672a0ac316860c19544f = $this->env->getExtension("native_profiler");
        $__internal_814406d34ef406b32650edefb5f964a639a8c772de3a672a0ac316860c19544f->enter($__internal_814406d34ef406b32650edefb5f964a639a8c772de3a672a0ac316860c19544f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <button type=\"submit\"  id=\"_submit\" name=\"_submit\" class=\"btn btn-red btn-sm\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_814406d34ef406b32650edefb5f964a639a8c772de3a672a0ac316860c19544f->leave($__internal_814406d34ef406b32650edefb5f964a639a8c772de3a672a0ac316860c19544f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register_content.html.twig";
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
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <button type="submit"  id="_submit" name="_submit" class="btn btn-red btn-sm">{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*     </div>*/
/* </form>*/
/* */
