<?php

/* MainBundle::layout.html.twig */
class __TwigTemplate_f6f3c69ff039c07f3669fb9c7551afc9bacc879b90e754c701f5e5100e1830a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_468410cba4ebf56d604f719fce65edc7c6f2ff3053ba989d89d0dfb9515d6f85 = $this->env->getExtension("native_profiler");
        $__internal_468410cba4ebf56d604f719fce65edc7c6f2ff3053ba989d89d0dfb9515d6f85->enter($__internal_468410cba4ebf56d604f719fce65edc7c6f2ff3053ba989d89d0dfb9515d6f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468410cba4ebf56d604f719fce65edc7c6f2ff3053ba989d89d0dfb9515d6f85->leave($__internal_468410cba4ebf56d604f719fce65edc7c6f2ff3053ba989d89d0dfb9515d6f85_prof);

    }

    // line 2
    public function block_meta($context, array $blocks = array())
    {
        $__internal_7c3757119be9490a6ca78c5d718fe47bb7dd05a1adada8976b84e05b1da0a3da = $this->env->getExtension("native_profiler");
        $__internal_7c3757119be9490a6ca78c5d718fe47bb7dd05a1adada8976b84e05b1da0a3da->enter($__internal_7c3757119be9490a6ca78c5d718fe47bb7dd05a1adada8976b84e05b1da0a3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 3
        echo "    <meta charset=\"utf-8\">

    <meta name=\"author\" content=\"htmlcoder.me\">

    <!-- Mobile Meta -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

";
        
        $__internal_7c3757119be9490a6ca78c5d718fe47bb7dd05a1adada8976b84e05b1da0a3da->leave($__internal_7c3757119be9490a6ca78c5d718fe47bb7dd05a1adada8976b84e05b1da0a3da_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7068a275d3b050197f591c65af2dd7ff9b5f0ec9053e6b7bbe0197d58095756b = $this->env->getExtension("native_profiler");
        $__internal_7068a275d3b050197f591c65af2dd7ff9b5f0ec9053e6b7bbe0197d58095756b->enter($__internal_7068a275d3b050197f591c65af2dd7ff9b5f0ec9053e6b7bbe0197d58095756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/Main/img/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

    ";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0cb8ffb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0cb8ffb_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0cb8ffb_bootstrap.min_1.css");
            // line 38
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "0cb8ffb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0cb8ffb_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0cb8ffb_myStyle_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "0cb8ffb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0cb8ffb_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0cb8ffb_font-awesome_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "0cb8ffb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0cb8ffb_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0cb8ffb_project-style_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "0cb8ffb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0cb8ffb") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/0cb8ffb.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 40
        echo "
    <!--End of stylesheets block-->
";
        
        $__internal_7068a275d3b050197f591c65af2dd7ff9b5f0ec9053e6b7bbe0197d58095756b->leave($__internal_7068a275d3b050197f591c65af2dd7ff9b5f0ec9053e6b7bbe0197d58095756b_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba7759397f080c81e64a0f36603c5e33983ea93c64899cc2faf85bf9a67e9cc2 = $this->env->getExtension("native_profiler");
        $__internal_ba7759397f080c81e64a0f36603c5e33983ea93c64899cc2faf85bf9a67e9cc2->enter($__internal_ba7759397f080c81e64a0f36603c5e33983ea93c64899cc2faf85bf9a67e9cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <!-- page wrapper start -->
    <!-- ================ -->
    <div class=\"wrapper\">

        <!-- header-container start -->
        <div class=\"header-container\">

            <!-- header-top start -->
            <!-- classes:  -->
            <!-- ================ -->
            <div class=\"header-top dark \">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-3 col-sm-6 col-md-9\">
                            <!-- header-top-first start -->
                            <!-- ================ -->
                            <div class=\"header-top-first clearfix\">
                                <ul class=\"social-links circle small clearfix hidden-xs\">
                                    <li class=\"twitter\"><a target=\"_blank\" href=\"http://www.twitter.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-skype\"></i></a></li>
                                    <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-linkedin\"></i></a></li>
                                    <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li class=\"youtube\"><a target=\"_blank\" href=\"http://www.youtube.com\"><i class=\"fa fa-youtube-play\"></i></a></li>
                                    <li class=\"flickr\"><a target=\"_blank\" href=\"http://www.flickr.com\"><i class=\"fa fa-flickr\"></i></a></li>
                                    <li class=\"facebook\"><a target=\"_blank\" href=\"http://www.facebook.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li class=\"pinterest\"><a target=\"_blank\" href=\"http://www.pinterest.com\"><i class=\"fa fa-pinterest\"></i></a></li>
                                </ul>
                                <div class=\"social-links hidden-lg hidden-md hidden-sm circle small\">
                                    <div class=\"btn-group dropdown\">
                                        <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-share-alt\"></i></button>
                                        <ul class=\"dropdown-menu dropdown-animation\">
                                            <li class=\"twitter\"><a target=\"_blank\" href=\"http://www.twitter.com\"><i class=\"fa fa-twitter\"></i></a></li>
                                            <li class=\"skype\"><a target=\"_blank\" href=\"http://www.skype.com\"><i class=\"fa fa-skype\"></i></a></li>
                                            <li class=\"linkedin\"><a target=\"_blank\" href=\"http://www.linkedin.com\"><i class=\"fa fa-linkedin\"></i></a></li>
                                            <li class=\"googleplus\"><a target=\"_blank\" href=\"http://plus.google.com\"><i class=\"fa fa-google-plus\"></i></a></li>
                                            <li class=\"youtube\"><a target=\"_blank\" href=\"http://www.youtube.com\"><i class=\"fa fa-youtube-play\"></i></a></li>
                                            <li class=\"flickr\"><a target=\"_blank\" href=\"http://www.flickr.com\"><i class=\"fa fa-flickr\"></i></a></li>
                                            <li class=\"facebook\"><a target=\"_blank\" href=\"http://www.facebook.com\"><i class=\"fa fa-facebook\"></i></a></li>
                                            <li class=\"pinterest\"><a target=\"_blank\" href=\"http://www.pinterest.com\"><i class=\"fa fa-pinterest\"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class=\"list-inline hidden-sm hidden-xs\">
                                    <li><i class=\"fa fa-map-marker pr-5 pl-10\"></i>One Infinity Loop Av, Tk 123456</li>
                                    <li><i class=\"fa fa-phone pr-5 pl-10\"></i>+12 123 123 123</li>
                                    <li><i class=\"fa fa-envelope-o pr-5 pl-10\"></i> admin@frosty.com</li>
                                </ul>
                            </div>
                            <!-- fin de la premiere partie-->
                        </div>

                        <div class=\"col-xs-9 col-sm-6 col-md-3\">

                            <!-- header-top-second start -->
                            <!-- ================ -->
                            <div id=\"header-top-second\"  class=\"clearfix \">

                                ";
        // line 110
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 111
            echo "                                    
                                    
                                    <div class=\"dropdown\">
  <button id=\"profile\" class=\" dropdown-toggle margin-top\" type=\"button\" data-toggle=\"dropdown\">Bonjour ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
  <span class=\"caret\"></span></button>
  <ul id=\"profile-menu\" class=\"dropdown-menu\">
    <li><a href=\"";
            // line 117
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"> Deconnexion </a></li>
    <li><a href=\"#\">CSS</a></li>
    <li><a href=\"#\">JavaScript</a></li>
  </ul>
</div>
                                    
                                    
                                    
                                ";
        } else {
            // line 126
            echo "                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 127
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-user pr-10\"></i> Sign Up</a>
                                    </div>
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 130
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-lock pr-10\"></i> Sign In</a>
                                    </div>
                                ";
        }
        // line 133
        echo "                                <!--  header top dropdowns end -->
                            </div>
                            <!-- header-top-second end -->
                        </div>



                    </div>

                </div>

            </div>

        </div>";
        // line 147
        echo "                                
        ";
        // line 149
        echo "        <div class=\"container\">
        <div class=\"center-block space-100\">
            <div id=\"title\" class=\"main-title\">
                <span>F</span>rosty
            </div>
            
        </div>
        </div>";
        // line 157
        echo "                                
        
        
        <div class=\"p-0 content\">
            <div class=\"container\">
                <div class=\"row\">
                ";
        // line 163
        $this->displayBlock('content', $context, $blocks);
        // line 165
        echo "            </div>
        </div>
    </div>
</div>

";
        
        $__internal_ba7759397f080c81e64a0f36603c5e33983ea93c64899cc2faf85bf9a67e9cc2->leave($__internal_ba7759397f080c81e64a0f36603c5e33983ea93c64899cc2faf85bf9a67e9cc2_prof);

    }

    // line 163
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a86bf6a680636e1ea859b7a5db61987a7aecc50d3af9f795129f9f30139cf7d = $this->env->getExtension("native_profiler");
        $__internal_5a86bf6a680636e1ea859b7a5db61987a7aecc50d3af9f795129f9f30139cf7d->enter($__internal_5a86bf6a680636e1ea859b7a5db61987a7aecc50d3af9f795129f9f30139cf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 164
        echo "                ";
        
        $__internal_5a86bf6a680636e1ea859b7a5db61987a7aecc50d3af9f795129f9f30139cf7d->leave($__internal_5a86bf6a680636e1ea859b7a5db61987a7aecc50d3af9f795129f9f30139cf7d_prof);

    }

    // line 178
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9fc9edaddd43a6e750d5c00c51e1398b5a7b3f8ba1fbf9fbc371be28f9638472 = $this->env->getExtension("native_profiler");
        $__internal_9fc9edaddd43a6e750d5c00c51e1398b5a7b3f8ba1fbf9fbc371be28f9638472->enter($__internal_9fc9edaddd43a6e750d5c00c51e1398b5a7b3f8ba1fbf9fbc371be28f9638472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "   


    ";
        // line 181
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c501d09_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c501d09_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c501d09_jquery-1.12.3_1.js");
            // line 185
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "c501d09_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c501d09_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c501d09_bootstrap_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "c501d09"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c501d09") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/c501d09.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_9fc9edaddd43a6e750d5c00c51e1398b5a7b3f8ba1fbf9fbc371be28f9638472->leave($__internal_9fc9edaddd43a6e750d5c00c51e1398b5a7b3f8ba1fbf9fbc371be28f9638472_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 185,  302 => 181,  292 => 178,  285 => 164,  279 => 163,  267 => 165,  265 => 163,  257 => 157,  248 => 149,  245 => 147,  230 => 133,  224 => 130,  218 => 127,  215 => 126,  203 => 117,  197 => 114,  192 => 111,  190 => 110,  131 => 53,  125 => 52,  116 => 40,  84 => 38,  80 => 30,  69 => 22,  64 => 19,  58 => 18,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig'%}*/
/* {% block meta %}*/
/*     <meta charset="utf-8">*/
/* */
/*     <meta name="author" content="htmlcoder.me">*/
/* */
/*     <!-- Mobile Meta -->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {#*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////*/
/* block stylesheets*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////*/
/* #}*/
/* {% block stylesheets %}*/
/* */
/* */
/*     <!-- Favicon -->*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/Main/img/favicon.ico') }}" type="image/x-icon">*/
/* */
/*     <!-- Web Fonts -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>*/
/* */
/*     {% stylesheets filter='cssrewrite'*/
/* */
/* 'bundles/Main/css/bootstrap.min.css'*/
/* 'bundles/Main/css/myStyle.css'*/
/* 'bundles/Main/fonts/font-awesome/css/font-awesome.css'*/
/* 'bundles/Main/css/project-style.css'*/
/* */
/*     %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     {% endstylesheets %}*/
/* */
/*     <!--End of stylesheets block-->*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {#*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////*/
/* block body*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////*/
/* #}*/
/* */
/* {% block body %}*/
/*     <!-- page wrapper start -->*/
/*     <!-- ================ -->*/
/*     <div class="wrapper">*/
/* */
/*         <!-- header-container start -->*/
/*         <div class="header-container">*/
/* */
/*             <!-- header-top start -->*/
/*             <!-- classes:  -->*/
/*             <!-- ================ -->*/
/*             <div class="header-top dark ">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-xs-3 col-sm-6 col-md-9">*/
/*                             <!-- header-top-first start -->*/
/*                             <!-- ================ -->*/
/*                             <div class="header-top-first clearfix">*/
/*                                 <ul class="social-links circle small clearfix hidden-xs">*/
/*                                     <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>*/
/*                                     <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>*/
/*                                     <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>*/
/*                                     <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>*/
/*                                     <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>*/
/*                                     <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>*/
/*                                     <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>*/
/*                                     <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>*/
/*                                 </ul>*/
/*                                 <div class="social-links hidden-lg hidden-md hidden-sm circle small">*/
/*                                     <div class="btn-group dropdown">*/
/*                                         <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>*/
/*                                         <ul class="dropdown-menu dropdown-animation">*/
/*                                             <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>*/
/*                                             <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>*/
/*                                             <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>*/
/*                                             <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>*/
/*                                             <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>*/
/*                                             <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>*/
/*                                             <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>*/
/*                                             <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <ul class="list-inline hidden-sm hidden-xs">*/
/*                                     <li><i class="fa fa-map-marker pr-5 pl-10"></i>One Infinity Loop Av, Tk 123456</li>*/
/*                                     <li><i class="fa fa-phone pr-5 pl-10"></i>+12 123 123 123</li>*/
/*                                     <li><i class="fa fa-envelope-o pr-5 pl-10"></i> admin@frosty.com</li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <!-- fin de la premiere partie-->*/
/*                         </div>*/
/* */
/*                         <div class="col-xs-9 col-sm-6 col-md-3">*/
/* */
/*                             <!-- header-top-second start -->*/
/*                             <!-- ================ -->*/
/*                             <div id="header-top-second"  class="clearfix ">*/
/* */
/*                                 {%if is_granted("IS_AUTHENTICATED_REMEMBERED")%}*/
/*                                     */
/*                                     */
/*                                     <div class="dropdown">*/
/*   <button id="profile" class=" dropdown-toggle margin-top" type="button" data-toggle="dropdown">Bonjour {{app.user.username}}*/
/*   <span class="caret"></span></button>*/
/*   <ul id="profile-menu" class="dropdown-menu">*/
/*     <li><a href="{{path("fos_user_security_logout")}}"> Deconnexion </a></li>*/
/*     <li><a href="#">CSS</a></li>*/
/*     <li><a href="#">JavaScript</a></li>*/
/*   </ul>*/
/* </div>*/
/*                                     */
/*                                     */
/*                                     */
/*                                 {% else %}*/
/*                                     <div class="btn-group">*/
/*                                         <a href="{{path('fos_user_registration_register')}}" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Sign Up</a>*/
/*                                     </div>*/
/*                                     <div class="btn-group">*/
/*                                         <a href="{{path('fos_user_security_login')}}" class="btn btn-default btn-sm"><i class="fa fa-lock pr-10"></i> Sign In</a>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 <!--  header top dropdowns end -->*/
/*                             </div>*/
/*                             <!-- header-top-second end -->*/
/*                         </div>*/
/* */
/* */
/* */
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>{# fin du header#}*/
/*                                 */
/*         {#title#}*/
/*         <div class="container">*/
/*         <div class="center-block space-100">*/
/*             <div id="title" class="main-title">*/
/*                 <span>F</span>rosty*/
/*             </div>*/
/*             */
/*         </div>*/
/*         </div>{#End title#}*/
/*                                 */
/*         */
/*         */
/*         <div class="p-0 content">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {#*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////*/
/* block javascript*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////*/
/* #}*/
/* {% block javascripts %}   */
/* */
/* */
/*     {% javascripts*/
/* 'bundles/Main/js/jquery-1.12.3.js'*/
/* 'bundles/Main/js/bootstrap.js' */
/*     %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
