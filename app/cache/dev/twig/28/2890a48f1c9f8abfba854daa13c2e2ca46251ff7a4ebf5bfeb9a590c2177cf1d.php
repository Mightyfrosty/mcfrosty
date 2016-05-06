<?php

/* ::base.html.twig */
class __TwigTemplate_d77bf211468e18cf2f604c32797cde07014145d10d11d8b672fb455d16900917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ded974abde2c806914132b9be27edbcd320eb1b2f5ce3c2010f559abae0d9b9c = $this->env->getExtension("native_profiler");
        $__internal_ded974abde2c806914132b9be27edbcd320eb1b2f5ce3c2010f559abae0d9b9c->enter($__internal_ded974abde2c806914132b9be27edbcd320eb1b2f5ce3c2010f559abae0d9b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ded974abde2c806914132b9be27edbcd320eb1b2f5ce3c2010f559abae0d9b9c->leave($__internal_ded974abde2c806914132b9be27edbcd320eb1b2f5ce3c2010f559abae0d9b9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba8e84bd2bde03b74d0161bef20c52b585a72f8858d7b006fc2f4ebc22d1b63d = $this->env->getExtension("native_profiler");
        $__internal_ba8e84bd2bde03b74d0161bef20c52b585a72f8858d7b006fc2f4ebc22d1b63d->enter($__internal_ba8e84bd2bde03b74d0161bef20c52b585a72f8858d7b006fc2f4ebc22d1b63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ba8e84bd2bde03b74d0161bef20c52b585a72f8858d7b006fc2f4ebc22d1b63d->leave($__internal_ba8e84bd2bde03b74d0161bef20c52b585a72f8858d7b006fc2f4ebc22d1b63d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_52e4c36a062f4a110e23cac166739625b0779c73354f5608d6f19567b818ec2e = $this->env->getExtension("native_profiler");
        $__internal_52e4c36a062f4a110e23cac166739625b0779c73354f5608d6f19567b818ec2e->enter($__internal_52e4c36a062f4a110e23cac166739625b0779c73354f5608d6f19567b818ec2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_52e4c36a062f4a110e23cac166739625b0779c73354f5608d6f19567b818ec2e->leave($__internal_52e4c36a062f4a110e23cac166739625b0779c73354f5608d6f19567b818ec2e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a60d6954bd76681844ed283bf548bb46793ecbde45cbef33f9204a95d55fbd0 = $this->env->getExtension("native_profiler");
        $__internal_0a60d6954bd76681844ed283bf548bb46793ecbde45cbef33f9204a95d55fbd0->enter($__internal_0a60d6954bd76681844ed283bf548bb46793ecbde45cbef33f9204a95d55fbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0a60d6954bd76681844ed283bf548bb46793ecbde45cbef33f9204a95d55fbd0->leave($__internal_0a60d6954bd76681844ed283bf548bb46793ecbde45cbef33f9204a95d55fbd0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ccdd2b527f5ea3a2322ca1a6b063dbac334bba15f7e820e81414f436ea81b5a = $this->env->getExtension("native_profiler");
        $__internal_9ccdd2b527f5ea3a2322ca1a6b063dbac334bba15f7e820e81414f436ea81b5a->enter($__internal_9ccdd2b527f5ea3a2322ca1a6b063dbac334bba15f7e820e81414f436ea81b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ccdd2b527f5ea3a2322ca1a6b063dbac334bba15f7e820e81414f436ea81b5a->leave($__internal_9ccdd2b527f5ea3a2322ca1a6b063dbac334bba15f7e820e81414f436ea81b5a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
