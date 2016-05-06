<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c8c021c02fe3c098daddc91461dfadcedae03888859ddd200639448fc03e66b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title_form' => array($this, 'block_title_form'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a9a2ca4f8c2d30fe02fcc5b7e9857a032c6bbf3f85e3098070b89cdcf9aee2d = $this->env->getExtension("native_profiler");
        $__internal_8a9a2ca4f8c2d30fe02fcc5b7e9857a032c6bbf3f85e3098070b89cdcf9aee2d->enter($__internal_8a9a2ca4f8c2d30fe02fcc5b7e9857a032c6bbf3f85e3098070b89cdcf9aee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9a2ca4f8c2d30fe02fcc5b7e9857a032c6bbf3f85e3098070b89cdcf9aee2d->leave($__internal_8a9a2ca4f8c2d30fe02fcc5b7e9857a032c6bbf3f85e3098070b89cdcf9aee2d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3747a5b32f1b2ff70e350dd991b2092a0b28626bf969123ac9f6656dafd6c69f = $this->env->getExtension("native_profiler");
        $__internal_3747a5b32f1b2ff70e350dd991b2092a0b28626bf969123ac9f6656dafd6c69f->enter($__internal_3747a5b32f1b2ff70e350dd991b2092a0b28626bf969123ac9f6656dafd6c69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.title", array(), "FOSUserBundle"), "html", null, true);
        
        $__internal_3747a5b32f1b2ff70e350dd991b2092a0b28626bf969123ac9f6656dafd6c69f->leave($__internal_3747a5b32f1b2ff70e350dd991b2092a0b28626bf969123ac9f6656dafd6c69f_prof);

    }

    // line 3
    public function block_title_form($context, array $blocks = array())
    {
        $__internal_fb1620db2214bf05340cc61e99dbdef32e579af904599068501458fba6532296 = $this->env->getExtension("native_profiler");
        $__internal_fb1620db2214bf05340cc61e99dbdef32e579af904599068501458fba6532296->enter($__internal_fb1620db2214bf05340cc61e99dbdef32e579af904599068501458fba6532296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_form"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        
        $__internal_fb1620db2214bf05340cc61e99dbdef32e579af904599068501458fba6532296->leave($__internal_fb1620db2214bf05340cc61e99dbdef32e579af904599068501458fba6532296_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c1c7a918efa048e72bc5f0f42ff051afda33641c0d5d6bb7b9bcd57c187385a = $this->env->getExtension("native_profiler");
        $__internal_3c1c7a918efa048e72bc5f0f42ff051afda33641c0d5d6bb7b9bcd57c187385a->enter($__internal_3c1c7a918efa048e72bc5f0f42ff051afda33641c0d5d6bb7b9bcd57c187385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "    
    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "                <div class=\"alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 11
        echo "            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login-form margin-clear\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"form-group has-feedback\">
                    <label class=\"control-label\" for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" type=\"text\" class=\"form-control\" placeholder=\"\">
                    <i class=\"fa fa-user form-control-feedback\"></i>
                    
                </div>
                <div class=\"form-group has-feedback\">
                    <label class=\"control-label\" for=\"password\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"\">
                    <i class=\"fa fa-lock form-control-feedback\"></i>
                </div>

                <div class=\"form-group has-feedback\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                    <label class=\"control-label\" for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>                

                    <div><button type=\"submit\"  id=\"_submit\" name=\"_submit\" class=\"btn btn-red btn-sm\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button></div>
                

               
                <div><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Brain fart?</a></div>
               
            </form>
  ";
        
        $__internal_3c1c7a918efa048e72bc5f0f42ff051afda33641c0d5d6bb7b9bcd57c187385a->leave($__internal_3c1c7a918efa048e72bc5f0f42ff051afda33641c0d5d6bb7b9bcd57c187385a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  116 => 30,  110 => 27,  100 => 20,  92 => 15,  88 => 14,  83 => 12,  78 => 11,  72 => 9,  70 => 8,  67 => 7,  61 => 6,  49 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "UserBundle::layout.html.twig" %}*/
/* {% block title %} {{ 'security.login.title'|trans({},'FOSUserBundle') }}{% endblock %}*/
/* {% block title_form %}{{ 'security.login.submit'|trans({},'FOSUserBundle') }}{% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/*     */
/*     {% if error %}*/
/*                 <div class="alert-warning">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*             {% endif %}*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post" class="login-form margin-clear">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                 <div class="form-group has-feedback">*/
/*                     <label class="control-label" for="username">{{ 'security.login.username'|trans({},'FOSUserBundle') }}</label>*/
/*                     <input id="username" name="_username" value="{{ last_username }}" required="required" type="text" class="form-control" placeholder="">*/
/*                     <i class="fa fa-user form-control-feedback"></i>*/
/*                     */
/*                 </div>*/
/*                 <div class="form-group has-feedback">*/
/*                     <label class="control-label" for="password">{{ 'security.login.password'|trans({},'FOSUserBundle') }}</label>*/
/*                     <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="">*/
/*                     <i class="fa fa-lock form-control-feedback"></i>*/
/*                 </div>*/
/* */
/*                 <div class="form-group has-feedback">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                     <label class="control-label" for="remember_me">{{ 'security.login.remember_me'|trans({},'FOSUserBundle') }}</label>*/
/*                 </div>                */
/* */
/*                     <div><button type="submit"  id="_submit" name="_submit" class="btn btn-red btn-sm">{{ 'security.login.submit'|trans({},'FOSUserBundle') }}</button></div>*/
/*                 */
/* */
/*                */
/*                 <div><a href="{{path("fos_user_resetting_request")}}">Brain fart?</a></div>*/
/*                */
/*             </form>*/
/*   {% endblock fos_user_content %}*/
/*             */
/* */
