<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_70fa1913d0b02c34563e711f3b43b42db1765e79cafa0d050224d05f5a9bbf93 extends Twig_Template
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
        $__internal_709399dfffacc35aba927811db8dd36ab89b1a7026ed8d15ee679fe41218a16c = $this->env->getExtension("native_profiler");
        $__internal_709399dfffacc35aba927811db8dd36ab89b1a7026ed8d15ee679fe41218a16c->enter($__internal_709399dfffacc35aba927811db8dd36ab89b1a7026ed8d15ee679fe41218a16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_709399dfffacc35aba927811db8dd36ab89b1a7026ed8d15ee679fe41218a16c->leave($__internal_709399dfffacc35aba927811db8dd36ab89b1a7026ed8d15ee679fe41218a16c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
