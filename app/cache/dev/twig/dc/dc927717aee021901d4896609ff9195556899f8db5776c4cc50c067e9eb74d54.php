<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_39cff404aad207218fe933a350339d34eb0442fd1e74e2b5b43f110fc225ef58 extends Twig_Template
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
        $__internal_5f635f77f2c0e933c5494759c86df7e51edcf23752a7bc450975bd400bb59543 = $this->env->getExtension("native_profiler");
        $__internal_5f635f77f2c0e933c5494759c86df7e51edcf23752a7bc450975bd400bb59543->enter($__internal_5f635f77f2c0e933c5494759c86df7e51edcf23752a7bc450975bd400bb59543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5f635f77f2c0e933c5494759c86df7e51edcf23752a7bc450975bd400bb59543->leave($__internal_5f635f77f2c0e933c5494759c86df7e51edcf23752a7bc450975bd400bb59543_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
