<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_786b25f9b88c166b20b65b0238431c766da56ca6767cde8460c787307b5fa83d extends Twig_Template
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
        $__internal_fe433a3fc9dd6f32233d732d5a1e2b09af9464fab5fe17b0032045be64764c6c = $this->env->getExtension("native_profiler");
        $__internal_fe433a3fc9dd6f32233d732d5a1e2b09af9464fab5fe17b0032045be64764c6c->enter($__internal_fe433a3fc9dd6f32233d732d5a1e2b09af9464fab5fe17b0032045be64764c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fe433a3fc9dd6f32233d732d5a1e2b09af9464fab5fe17b0032045be64764c6c->leave($__internal_fe433a3fc9dd6f32233d732d5a1e2b09af9464fab5fe17b0032045be64764c6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
