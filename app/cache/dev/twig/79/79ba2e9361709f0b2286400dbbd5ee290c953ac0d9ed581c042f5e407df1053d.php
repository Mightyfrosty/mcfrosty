<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d3dd921bb0f927a391bcdb1823561a5e98196110e88169d87c3c778f985e9792 extends Twig_Template
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
        $__internal_d75d5236abaa13de747dcdc54daaee2bdd45b9227097f4a127116afb6ad2fe30 = $this->env->getExtension("native_profiler");
        $__internal_d75d5236abaa13de747dcdc54daaee2bdd45b9227097f4a127116afb6ad2fe30->enter($__internal_d75d5236abaa13de747dcdc54daaee2bdd45b9227097f4a127116afb6ad2fe30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d75d5236abaa13de747dcdc54daaee2bdd45b9227097f4a127116afb6ad2fe30->leave($__internal_d75d5236abaa13de747dcdc54daaee2bdd45b9227097f4a127116afb6ad2fe30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
