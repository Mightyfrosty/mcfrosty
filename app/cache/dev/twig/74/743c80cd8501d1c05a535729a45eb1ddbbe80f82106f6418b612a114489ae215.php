<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1116af01773f637d51ec588f8a684886ef837f645a01bda6a7c18e06f21d073c extends Twig_Template
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
        $__internal_41641461e216f7c2babf8586594875e7880a6de009fa5c21201d062431534e90 = $this->env->getExtension("native_profiler");
        $__internal_41641461e216f7c2babf8586594875e7880a6de009fa5c21201d062431534e90->enter($__internal_41641461e216f7c2babf8586594875e7880a6de009fa5c21201d062431534e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_41641461e216f7c2babf8586594875e7880a6de009fa5c21201d062431534e90->leave($__internal_41641461e216f7c2babf8586594875e7880a6de009fa5c21201d062431534e90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
