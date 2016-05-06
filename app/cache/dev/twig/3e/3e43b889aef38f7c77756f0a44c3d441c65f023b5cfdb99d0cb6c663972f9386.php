<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81ce151743f969c495b0899fdf86c79d6b9ba4b60ebdeef092ef4602d8eb4f30 extends Twig_Template
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
        $__internal_546f09a101258caf15e1ea02fa9335740b2483acbba1275f3a0956012b0eb91b = $this->env->getExtension("native_profiler");
        $__internal_546f09a101258caf15e1ea02fa9335740b2483acbba1275f3a0956012b0eb91b->enter($__internal_546f09a101258caf15e1ea02fa9335740b2483acbba1275f3a0956012b0eb91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_546f09a101258caf15e1ea02fa9335740b2483acbba1275f3a0956012b0eb91b->leave($__internal_546f09a101258caf15e1ea02fa9335740b2483acbba1275f3a0956012b0eb91b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
