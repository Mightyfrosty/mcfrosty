<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_ebee499942df7dcef23ef295d7088feba9a895e8bbd235af348d8970dae50173 extends Twig_Template
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
        $__internal_59bc5965b11b891c0e41d7f59c78fad400f5cb00d475f9111c86c87f7ae580a4 = $this->env->getExtension("native_profiler");
        $__internal_59bc5965b11b891c0e41d7f59c78fad400f5cb00d475f9111c86c87f7ae580a4->enter($__internal_59bc5965b11b891c0e41d7f59c78fad400f5cb00d475f9111c86c87f7ae580a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_59bc5965b11b891c0e41d7f59c78fad400f5cb00d475f9111c86c87f7ae580a4->leave($__internal_59bc5965b11b891c0e41d7f59c78fad400f5cb00d475f9111c86c87f7ae580a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
