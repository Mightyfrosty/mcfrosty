<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6275536a14aafc112e132479165d5b06d11ab99cc5aafe457054eed613d87740 extends Twig_Template
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
        $__internal_27fb7bd317ccd0ac21e46509fb47c7a53608c79010f556ab5fd9f1c04b610319 = $this->env->getExtension("native_profiler");
        $__internal_27fb7bd317ccd0ac21e46509fb47c7a53608c79010f556ab5fd9f1c04b610319->enter($__internal_27fb7bd317ccd0ac21e46509fb47c7a53608c79010f556ab5fd9f1c04b610319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_27fb7bd317ccd0ac21e46509fb47c7a53608c79010f556ab5fd9f1c04b610319->leave($__internal_27fb7bd317ccd0ac21e46509fb47c7a53608c79010f556ab5fd9f1c04b610319_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
