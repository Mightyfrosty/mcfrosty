<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_283794a74b159e2ab4f5e58c5defd6cc6c0db571adde096131da7d3172bc2e9f extends Twig_Template
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
        $__internal_cf5e789569f0a6ca0e8e9a6b70b276e9c0b0b3fcc5b879bf2ead7c053363b322 = $this->env->getExtension("native_profiler");
        $__internal_cf5e789569f0a6ca0e8e9a6b70b276e9c0b0b3fcc5b879bf2ead7c053363b322->enter($__internal_cf5e789569f0a6ca0e8e9a6b70b276e9c0b0b3fcc5b879bf2ead7c053363b322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cf5e789569f0a6ca0e8e9a6b70b276e9c0b0b3fcc5b879bf2ead7c053363b322->leave($__internal_cf5e789569f0a6ca0e8e9a6b70b276e9c0b0b3fcc5b879bf2ead7c053363b322_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
