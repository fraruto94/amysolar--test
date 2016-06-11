<?php

/* ::layout.html.twig */
class __TwigTemplate_97e35c4ee044367ad21d82658581f498475b817fe57dcde9ea23ba8f8098e9db extends Twig_Template
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
        $__internal_808c37a19d72d114ecb2f7c6c4325c37daa1b7577ce48461ddcc373f6d153998 = $this->env->getExtension("native_profiler");
        $__internal_808c37a19d72d114ecb2f7c6c4325c37daa1b7577ce48461ddcc373f6d153998->enter($__internal_808c37a19d72d114ecb2f7c6c4325c37daa1b7577ce48461ddcc373f6d153998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "

<!DOCTYPE html>
<html>
    <!  layout principal d amysolar>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>AMYSOLAR LE BATISSEUR DU FUTUR</h1>
     
      <p>
     
      </div>
          
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les interfaces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h2>Infos</h2>
        ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

  </div>

  ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "  
    <footer>
        <p><center>Amysolar © ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</center></p>
    </footer>

</body>
</html>
";
        
        $__internal_808c37a19d72d114ecb2f7c6c4325c37daa1b7577ce48461ddcc373f6d153998->leave($__internal_808c37a19d72d114ecb2f7c6c4325c37daa1b7577ce48461ddcc373f6d153998_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d1b0df58cd48e64701cf2de6f5d5f14e2e9c36878ef7225e59853ef327abce2 = $this->env->getExtension("native_profiler");
        $__internal_4d1b0df58cd48e64701cf2de6f5d5f14e2e9c36878ef7225e59853ef327abce2->enter($__internal_4d1b0df58cd48e64701cf2de6f5d5f14e2e9c36878ef7225e59853ef327abce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_4d1b0df58cd48e64701cf2de6f5d5f14e2e9c36878ef7225e59853ef327abce2->leave($__internal_4d1b0df58cd48e64701cf2de6f5d5f14e2e9c36878ef7225e59853ef327abce2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0afe3c13d4820fc5fd45816e008c266c58b8dbf1e635980a1e71984d003ab7e = $this->env->getExtension("native_profiler");
        $__internal_c0afe3c13d4820fc5fd45816e008c266c58b8dbf1e635980a1e71984d003ab7e->enter($__internal_c0afe3c13d4820fc5fd45816e008c266c58b8dbf1e635980a1e71984d003ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "    ";
        // line 15
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_c0afe3c13d4820fc5fd45816e008c266c58b8dbf1e635980a1e71984d003ab7e->leave($__internal_c0afe3c13d4820fc5fd45816e008c266c58b8dbf1e635980a1e71984d003ab7e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_65147079e83727b4095304e3315149f07c771103e801511dadaf3cfe5a239b34 = $this->env->getExtension("native_profiler");
        $__internal_65147079e83727b4095304e3315149f07c771103e801511dadaf3cfe5a239b34->enter($__internal_65147079e83727b4095304e3315149f07c771103e801511dadaf3cfe5a239b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_65147079e83727b4095304e3315149f07c771103e801511dadaf3cfe5a239b34->leave($__internal_65147079e83727b4095304e3315149f07c771103e801511dadaf3cfe5a239b34_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b173664f7669f1cdc1fba36a475088f19d79a9969d61bb45d2732dc75a95054 = $this->env->getExtension("native_profiler");
        $__internal_7b173664f7669f1cdc1fba36a475088f19d79a9969d61bb45d2732dc75a95054->enter($__internal_7b173664f7669f1cdc1fba36a475088f19d79a9969d61bb45d2732dc75a95054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        // line 54
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_7b173664f7669f1cdc1fba36a475088f19d79a9969d61bb45d2732dc75a95054->leave($__internal_7b173664f7669f1cdc1fba36a475088f19d79a9969d61bb45d2732dc75a95054_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  158 => 53,  152 => 52,  145 => 44,  139 => 43,  131 => 15,  129 => 14,  123 => 13,  111 => 11,  98 => 59,  94 => 57,  92 => 52,  83 => 45,  81 => 43,  75 => 40,  68 => 36,  64 => 35,  44 => 17,  42 => 13,  37 => 11,  26 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*     <!  layout principal d amysolar>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>AMYSOLAR LE BATISSEUR DU FUTUR</h1>*/
/*      */
/*       <p>*/
/*      */
/*       </div>*/
/*           */
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les interfaces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h2>Infos</h2>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/*   */
/*     <footer>*/
/*         <p><center>Amysolar © {{ 'now'|date('Y') }}</center></p>*/
/*     </footer>*/
/* */
/* </body>*/
/* </html>*/
/* */
