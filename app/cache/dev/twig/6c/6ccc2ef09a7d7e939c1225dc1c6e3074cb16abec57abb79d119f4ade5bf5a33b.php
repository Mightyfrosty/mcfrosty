<?php

/* @User/Resetting/request_content.html.twig */
class __TwigTemplate_0b96991f86ba038b4c1437b63dc9c56a7986739712ac905fb71ac5feb9d270a0 extends Twig_Template
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
        $__internal_4769a79472c2536250437640f10c8dd7d4caec644cf4a96491206bab314f540d = $this->env->getExtension("native_profiler");
        $__internal_4769a79472c2536250437640f10c8dd7d4caec644cf4a96491206bab314f540d->enter($__internal_4769a79472c2536250437640f10c8dd7d4caec644cf4a96491206bab314f540d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <label for=\"username\" class=\"control-label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" class=\"form-control\" />
    </div>
    <div>
        <button type=\"submit\"  id=\"_submit\" name=\"_submit\" class=\"btn btn-red btn-sm\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_4769a79472c2536250437640f10c8dd7d4caec644cf4a96491206bab314f540d->leave($__internal_4769a79472c2536250437640f10c8dd7d4caec644cf4a96491206bab314f540d_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  36 => 6,  30 => 4,  28 => 3,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>*/
/*         {% endif %}*/
/*         <label for="username" class="control-label">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*         <input type="text" id="username" name="username" required="required" class="form-control" />*/
/*     </div>*/
/*     <div>*/
/*         <button type="submit"  id="_submit" name="_submit" class="btn btn-red btn-sm">{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/*     </div>*/
/* </form>*/
/* */
