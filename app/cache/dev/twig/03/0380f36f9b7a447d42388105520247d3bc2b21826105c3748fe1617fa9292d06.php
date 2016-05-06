<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5f14bbe044d1ae8a5b6a660e8233826b3d492edf4ff0ff094901ba3673e106e9 extends Twig_Template
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
        $__internal_f578a20b57533cf149ea60755734f702a5f09a366ad37179b36c5d02890492d2 = $this->env->getExtension("native_profiler");
        $__internal_f578a20b57533cf149ea60755734f702a5f09a366ad37179b36c5d02890492d2->enter($__internal_f578a20b57533cf149ea60755734f702a5f09a366ad37179b36c5d02890492d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f578a20b57533cf149ea60755734f702a5f09a366ad37179b36c5d02890492d2->leave($__internal_f578a20b57533cf149ea60755734f702a5f09a366ad37179b36c5d02890492d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
