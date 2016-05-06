<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_46d4d6031cd4d47f8aca4cb1cacd7929b8f95aed51330ae3a147a87848aabc09 extends Twig_Template
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
        $__internal_0051f2539e3083d387eeab8b7c6fac657448b42946043c82a73ad6965fdaae80 = $this->env->getExtension("native_profiler");
        $__internal_0051f2539e3083d387eeab8b7c6fac657448b42946043c82a73ad6965fdaae80->enter($__internal_0051f2539e3083d387eeab8b7c6fac657448b42946043c82a73ad6965fdaae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0051f2539e3083d387eeab8b7c6fac657448b42946043c82a73ad6965fdaae80->leave($__internal_0051f2539e3083d387eeab8b7c6fac657448b42946043c82a73ad6965fdaae80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
