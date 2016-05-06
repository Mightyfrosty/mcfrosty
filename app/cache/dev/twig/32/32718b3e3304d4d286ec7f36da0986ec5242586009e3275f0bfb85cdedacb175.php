<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ebcaa0812815db4f07cfcc42e11d7c725b0559ec8684badd6f493b22b8a5b079 extends Twig_Template
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
        $__internal_ccc5b1857461291a34c396494190ecf81eba2d4fab82e93d8d9e8f9102fad3a4 = $this->env->getExtension("native_profiler");
        $__internal_ccc5b1857461291a34c396494190ecf81eba2d4fab82e93d8d9e8f9102fad3a4->enter($__internal_ccc5b1857461291a34c396494190ecf81eba2d4fab82e93d8d9e8f9102fad3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ccc5b1857461291a34c396494190ecf81eba2d4fab82e93d8d9e8f9102fad3a4->leave($__internal_ccc5b1857461291a34c396494190ecf81eba2d4fab82e93d8d9e8f9102fad3a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
