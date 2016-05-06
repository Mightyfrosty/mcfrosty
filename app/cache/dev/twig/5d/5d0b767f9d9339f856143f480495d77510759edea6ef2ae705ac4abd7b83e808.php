<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_39118b42a5025221d0541b0c6b2b3a986249a49f8ab6be86e540c01d990cec8d extends Twig_Template
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
        $__internal_d9a96cda3610d0838ba987c98e644a6cd6a62cb5e9d2a4f84a9f9747b0b9217e = $this->env->getExtension("native_profiler");
        $__internal_d9a96cda3610d0838ba987c98e644a6cd6a62cb5e9d2a4f84a9f9747b0b9217e->enter($__internal_d9a96cda3610d0838ba987c98e644a6cd6a62cb5e9d2a4f84a9f9747b0b9217e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d9a96cda3610d0838ba987c98e644a6cd6a62cb5e9d2a4f84a9f9747b0b9217e->leave($__internal_d9a96cda3610d0838ba987c98e644a6cd6a62cb5e9d2a4f84a9f9747b0b9217e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
