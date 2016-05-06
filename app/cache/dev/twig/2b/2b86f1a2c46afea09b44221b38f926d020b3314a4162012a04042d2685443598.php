<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e2951496b60051f25c766e620e15051e86aff4ddd736bae8fd21aa4addc2b34c extends Twig_Template
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
        $__internal_88988e3d06a4bb67f2f5030b60a3f811d0e92e329c5235e5f21a2fe8aed266e4 = $this->env->getExtension("native_profiler");
        $__internal_88988e3d06a4bb67f2f5030b60a3f811d0e92e329c5235e5f21a2fe8aed266e4->enter($__internal_88988e3d06a4bb67f2f5030b60a3f811d0e92e329c5235e5f21a2fe8aed266e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_88988e3d06a4bb67f2f5030b60a3f811d0e92e329c5235e5f21a2fe8aed266e4->leave($__internal_88988e3d06a4bb67f2f5030b60a3f811d0e92e329c5235e5f21a2fe8aed266e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
