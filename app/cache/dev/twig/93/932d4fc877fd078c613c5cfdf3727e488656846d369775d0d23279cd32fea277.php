<?php

/* :Form:fields.html.twig */
class __TwigTemplate_56f425af8e04baa244fe8b72bf672b86977970940b39d59238067a120ab34120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'date_widget' => array($this, 'block_date_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c0c8a79522a104e4158e653fe0dc22d457b43bcac1b369c162f0eb34c523332 = $this->env->getExtension("native_profiler");
        $__internal_9c0c8a79522a104e4158e653fe0dc22d457b43bcac1b369c162f0eb34c523332->enter($__internal_9c0c8a79522a104e4158e653fe0dc22d457b43bcac1b369c162f0eb34c523332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fields.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        // line 11
        echo "


";
        // line 18
        $this->displayBlock('form_label', $context, $blocks);
        // line 46
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 54
        $this->displayBlock('date_widget', $context, $blocks);
        
        $__internal_9c0c8a79522a104e4158e653fe0dc22d457b43bcac1b369c162f0eb34c523332->leave($__internal_9c0c8a79522a104e4158e653fe0dc22d457b43bcac1b369c162f0eb34c523332_prof);

    }

    // line 2
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6e42a6cae830ec4f4dba73533bffd19f1c397890eb13189dd919d3988458b9f7 = $this->env->getExtension("native_profiler");
        $__internal_6e42a6cae830ec4f4dba73533bffd19f1c397890eb13189dd919d3988458b9f7->enter($__internal_6e42a6cae830ec4f4dba73533bffd19f1c397890eb13189dd919d3988458b9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        <div class=\"form-group has-feedback\">
            ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e42a6cae830ec4f4dba73533bffd19f1c397890eb13189dd919d3988458b9f7->leave($__internal_6e42a6cae830ec4f4dba73533bffd19f1c397890eb13189dd919d3988458b9f7_prof);

    }

    // line 18
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_70c06b5054577cf499636f60cd2584f7b2d108c4b5b8c9ca48ed95b4e3cbc161 = $this->env->getExtension("native_profiler");
        $__internal_70c06b5054577cf499636f60cd2584f7b2d108c4b5b8c9ca48ed95b4e3cbc161->enter($__internal_70c06b5054577cf499636f60cd2584f7b2d108c4b5b8c9ca48ed95b4e3cbc161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 19
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 20
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 21
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 23
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 24
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label required"))));
            }
            // line 26
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 27
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 28
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 29
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 30
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 33
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 37
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_70c06b5054577cf499636f60cd2584f7b2d108c4b5b8c9ca48ed95b4e3cbc161->leave($__internal_70c06b5054577cf499636f60cd2584f7b2d108c4b5b8c9ca48ed95b4e3cbc161_prof);

    }

    // line 46
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5602fb072d785ce97567ff860d09bbacdf5cabdf824cc1a7b8e812e5559401eb = $this->env->getExtension("native_profiler");
        $__internal_5602fb072d785ce97567ff860d09bbacdf5cabdf824cc1a7b8e812e5559401eb->enter($__internal_5602fb072d785ce97567ff860d09bbacdf5cabdf824cc1a7b8e812e5559401eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 47
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 48
        echo "<input class=\"form-control\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_5602fb072d785ce97567ff860d09bbacdf5cabdf824cc1a7b8e812e5559401eb->leave($__internal_5602fb072d785ce97567ff860d09bbacdf5cabdf824cc1a7b8e812e5559401eb_prof);

    }

    // line 54
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b4b4d5274acfc28fa5e9482119699798efd34d435217e539d567c8118963aa98 = $this->env->getExtension("native_profiler");
        $__internal_b4b4d5274acfc28fa5e9482119699798efd34d435217e539d567c8118963aa98->enter($__internal_b4b4d5274acfc28fa5e9482119699798efd34d435217e539d567c8118963aa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 55
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 56
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 58
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 59
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 60
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 61
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 62
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 64
            echo "</div>";
        }
        
        $__internal_b4b4d5274acfc28fa5e9482119699798efd34d435217e539d567c8118963aa98->leave($__internal_b4b4d5274acfc28fa5e9482119699798efd34d435217e539d567c8118963aa98_prof);

    }

    public function getTemplateName()
    {
        return ":Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 64,  175 => 62,  174 => 61,  173 => 60,  172 => 59,  168 => 58,  165 => 56,  163 => 55,  157 => 54,  140 => 48,  138 => 47,  132 => 46,  109 => 37,  105 => 33,  102 => 30,  101 => 29,  100 => 28,  98 => 27,  96 => 26,  93 => 24,  91 => 23,  88 => 21,  86 => 20,  84 => 19,  78 => 18,  67 => 7,  63 => 6,  59 => 5,  56 => 4,  53 => 3,  47 => 2,  40 => 54,  38 => 46,  36 => 18,  31 => 11,  29 => 2,  26 => 1,);
    }
}
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group has-feedback">*/
/*             {{ form_label(form) }}*/
/*             {{ form_errors(form) }}*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* */
/* */
/* {#33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333#}*/
/* */
/* */
/* */
/* {%- block form_label -%}*/
/* {% if label is not same as(false) -%}*/
/*     {% if not compound -%}*/
/*         {% set label_attr = label_attr|merge({'for': id}) %}*/
/*     {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' control-label required')|trim}) %}*/
/*         {%- endif -%}*/
/*             {% if label is empty -%}*/
/*                 {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*                     {%- else -%}*/
/*                     {% set label = name|humanize %}*/
/*                     {%- endif -%}*/
/*                 {%- endif -%}*/
/* */
/*                 <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/* {%- endif -%}*/
/*                 {%- endblock form_label -%}*/
/* */
/* */
/* */
/*                 {#33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333#}*/
/* */
/* */
/*                 {%- block form_widget_simple -%}*/
/*                 {%- set type = type|default('text') -%}*/
/*                     <input class="form-control" type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*                 */
/*                 {%- endblock form_widget_simple -%}*/
/* */
/*                 {#33333333333333333333333333333333333333333333333333333333333333333333333333333333333333333#}*/
/* */
/*                 {%- block date_widget -%}*/
/*                 {%- if widget == 'single_text' -%}*/
/*                 {{ block('form_widget_simple') }}*/
/*                 {%- else -%}*/
/*                 <div {{ block('widget_container_attributes') }}>*/
/*                     {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*                 </div>*/
/*                 {%- endif -%}*/
/*                 {%- endblock date_widget -%}*/
/* */
/* */
/* */
