<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3df687824a1ea7cf7f563a3380771d7ae613f0a9a6ea2b64f172033321247b0d extends Twig_Template
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
        $__internal_9094c3bb08b8b071ec5ef81dc44902aea280608a3628283bac04d65cffbf16fd = $this->env->getExtension("native_profiler");
        $__internal_9094c3bb08b8b071ec5ef81dc44902aea280608a3628283bac04d65cffbf16fd->enter($__internal_9094c3bb08b8b071ec5ef81dc44902aea280608a3628283bac04d65cffbf16fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9094c3bb08b8b071ec5ef81dc44902aea280608a3628283bac04d65cffbf16fd->leave($__internal_9094c3bb08b8b071ec5ef81dc44902aea280608a3628283bac04d65cffbf16fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
