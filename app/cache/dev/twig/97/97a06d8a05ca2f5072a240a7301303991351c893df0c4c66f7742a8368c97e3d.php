<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d6007e0a110d9153db47cfd0f7c2ef61b3756f9b8c35dc2925d1165b92e9ee38 extends Twig_Template
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
        $__internal_70a04f671f606e63cacff8b050bc172821cc55958855f0ff9ee688383533c952 = $this->env->getExtension("native_profiler");
        $__internal_70a04f671f606e63cacff8b050bc172821cc55958855f0ff9ee688383533c952->enter($__internal_70a04f671f606e63cacff8b050bc172821cc55958855f0ff9ee688383533c952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_70a04f671f606e63cacff8b050bc172821cc55958855f0ff9ee688383533c952->leave($__internal_70a04f671f606e63cacff8b050bc172821cc55958855f0ff9ee688383533c952_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
