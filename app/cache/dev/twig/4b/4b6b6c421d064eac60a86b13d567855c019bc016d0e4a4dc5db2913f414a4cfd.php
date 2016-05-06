<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2d87a7e10b4a7c5668ca17b8949d17fc5f359e43aca27011297d1e6ad4bcb8cd extends Twig_Template
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
        $__internal_0481393745da975a0fc9434b5c57ca90e45db06bd98ca004db39016016597607 = $this->env->getExtension("native_profiler");
        $__internal_0481393745da975a0fc9434b5c57ca90e45db06bd98ca004db39016016597607->enter($__internal_0481393745da975a0fc9434b5c57ca90e45db06bd98ca004db39016016597607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0481393745da975a0fc9434b5c57ca90e45db06bd98ca004db39016016597607->leave($__internal_0481393745da975a0fc9434b5c57ca90e45db06bd98ca004db39016016597607_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
