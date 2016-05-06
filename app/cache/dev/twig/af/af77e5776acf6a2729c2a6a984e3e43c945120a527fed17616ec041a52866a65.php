<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5c79130deecde89a413649c9e4e39647dac42162f07d49601d471bbb4b35100d extends Twig_Template
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
        $__internal_58576a17d9d3a0e3acc666963230adc23616e9b7a6e5fc89c8009887371fe073 = $this->env->getExtension("native_profiler");
        $__internal_58576a17d9d3a0e3acc666963230adc23616e9b7a6e5fc89c8009887371fe073->enter($__internal_58576a17d9d3a0e3acc666963230adc23616e9b7a6e5fc89c8009887371fe073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_58576a17d9d3a0e3acc666963230adc23616e9b7a6e5fc89c8009887371fe073->leave($__internal_58576a17d9d3a0e3acc666963230adc23616e9b7a6e5fc89c8009887371fe073_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
