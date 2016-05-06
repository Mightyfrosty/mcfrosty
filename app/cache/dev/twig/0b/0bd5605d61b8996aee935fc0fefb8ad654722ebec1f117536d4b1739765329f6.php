<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_d539b4fa173cadd6e1414c017fb9d3a73fcafebad672c0134b7310c722f95586 extends Twig_Template
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
        $__internal_525eb055ba8444fd467213654a468959f5e1d2a481e2c8d1f8196abd00bd3446 = $this->env->getExtension("native_profiler");
        $__internal_525eb055ba8444fd467213654a468959f5e1d2a481e2c8d1f8196abd00bd3446->enter($__internal_525eb055ba8444fd467213654a468959f5e1d2a481e2c8d1f8196abd00bd3446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_525eb055ba8444fd467213654a468959f5e1d2a481e2c8d1f8196abd00bd3446->leave($__internal_525eb055ba8444fd467213654a468959f5e1d2a481e2c8d1f8196abd00bd3446_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
