<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1dffd750d19c4c54bd1d809c73aa0199cb32906b9f1f050d3dc8bdb2df2d7f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d61462d3f9d68769ea5200d4dda3b00fa68e3e33059df0f9cc8d7e70915a3e9 = $this->env->getExtension("native_profiler");
        $__internal_7d61462d3f9d68769ea5200d4dda3b00fa68e3e33059df0f9cc8d7e70915a3e9->enter($__internal_7d61462d3f9d68769ea5200d4dda3b00fa68e3e33059df0f9cc8d7e70915a3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d61462d3f9d68769ea5200d4dda3b00fa68e3e33059df0f9cc8d7e70915a3e9->leave($__internal_7d61462d3f9d68769ea5200d4dda3b00fa68e3e33059df0f9cc8d7e70915a3e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_45d9018966d5f6e024200a89538fdf880aebfdf5bcadbc7e903137e0dac0ec5f = $this->env->getExtension("native_profiler");
        $__internal_45d9018966d5f6e024200a89538fdf880aebfdf5bcadbc7e903137e0dac0ec5f->enter($__internal_45d9018966d5f6e024200a89538fdf880aebfdf5bcadbc7e903137e0dac0ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45d9018966d5f6e024200a89538fdf880aebfdf5bcadbc7e903137e0dac0ec5f->leave($__internal_45d9018966d5f6e024200a89538fdf880aebfdf5bcadbc7e903137e0dac0ec5f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f30902cc820a40dc23294c710f53a980ae72e78f0de2d7a13bc93aa24ad6651 = $this->env->getExtension("native_profiler");
        $__internal_7f30902cc820a40dc23294c710f53a980ae72e78f0de2d7a13bc93aa24ad6651->enter($__internal_7f30902cc820a40dc23294c710f53a980ae72e78f0de2d7a13bc93aa24ad6651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f30902cc820a40dc23294c710f53a980ae72e78f0de2d7a13bc93aa24ad6651->leave($__internal_7f30902cc820a40dc23294c710f53a980ae72e78f0de2d7a13bc93aa24ad6651_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49ea8aeff605ec2323684dc2ec1e00b6a951649af443549215cdb6fed4a76f5f = $this->env->getExtension("native_profiler");
        $__internal_49ea8aeff605ec2323684dc2ec1e00b6a951649af443549215cdb6fed4a76f5f->enter($__internal_49ea8aeff605ec2323684dc2ec1e00b6a951649af443549215cdb6fed4a76f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_49ea8aeff605ec2323684dc2ec1e00b6a951649af443549215cdb6fed4a76f5f->leave($__internal_49ea8aeff605ec2323684dc2ec1e00b6a951649af443549215cdb6fed4a76f5f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
