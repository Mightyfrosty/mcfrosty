<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a5e8c8c22a29fd6d9e32646e9e363418852f1f155524bc53430b3ee87563a7d1 extends Twig_Template
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
        $__internal_6786270db3ee3aa3624cf6412ebbcb6d211848718b0191846fcca56a4cdb4aac = $this->env->getExtension("native_profiler");
        $__internal_6786270db3ee3aa3624cf6412ebbcb6d211848718b0191846fcca56a4cdb4aac->enter($__internal_6786270db3ee3aa3624cf6412ebbcb6d211848718b0191846fcca56a4cdb4aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6786270db3ee3aa3624cf6412ebbcb6d211848718b0191846fcca56a4cdb4aac->leave($__internal_6786270db3ee3aa3624cf6412ebbcb6d211848718b0191846fcca56a4cdb4aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
