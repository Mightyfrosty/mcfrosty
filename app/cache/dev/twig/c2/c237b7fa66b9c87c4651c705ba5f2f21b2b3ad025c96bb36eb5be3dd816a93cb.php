<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6c40f80db1b304df90bb43c924a72859d03276a59bd4ea6e315ead1722b05bc6 extends Twig_Template
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
        $__internal_786931068c1ac51ef8261993dfeb0ad9087400d40212d42298b535880512bfce = $this->env->getExtension("native_profiler");
        $__internal_786931068c1ac51ef8261993dfeb0ad9087400d40212d42298b535880512bfce->enter($__internal_786931068c1ac51ef8261993dfeb0ad9087400d40212d42298b535880512bfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_786931068c1ac51ef8261993dfeb0ad9087400d40212d42298b535880512bfce->leave($__internal_786931068c1ac51ef8261993dfeb0ad9087400d40212d42298b535880512bfce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
