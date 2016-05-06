<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e4abeffa7033d3c0a8190c874650ae4d2056f917fda6e99f65d4b7ef7d326018 extends Twig_Template
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
        $__internal_069b84eaf9a483267b852791f5d0a0f2f50c52a4cc841e46d52e714928225898 = $this->env->getExtension("native_profiler");
        $__internal_069b84eaf9a483267b852791f5d0a0f2f50c52a4cc841e46d52e714928225898->enter($__internal_069b84eaf9a483267b852791f5d0a0f2f50c52a4cc841e46d52e714928225898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_069b84eaf9a483267b852791f5d0a0f2f50c52a4cc841e46d52e714928225898->leave($__internal_069b84eaf9a483267b852791f5d0a0f2f50c52a4cc841e46d52e714928225898_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
