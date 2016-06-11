<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_03d68a8a40acf8c42943383a032aa1315c991ce5c9f18e469696a621db76fe54 extends Twig_Template
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
        $__internal_1055dba25df43e4d4dd027a5914857c6fb732d36bb7b236b6b1117ca2f2504da = $this->env->getExtension("native_profiler");
        $__internal_1055dba25df43e4d4dd027a5914857c6fb732d36bb7b236b6b1117ca2f2504da->enter($__internal_1055dba25df43e4d4dd027a5914857c6fb732d36bb7b236b6b1117ca2f2504da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        // line 3
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Affichage de l'annonce ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
  </head>
  <body>
    <h1>Hello Annonce n°";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " !</h1>
   
       <div>
      ";
        // line 14
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
  </body>
</html>
";
        
        $__internal_1055dba25df43e4d4dd027a5914857c6fb732d36bb7b236b6b1117ca2f2504da->leave($__internal_1055dba25df43e4d4dd027a5914857c6fb732d36bb7b236b6b1117ca2f2504da_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  45 => 15,  40 => 14,  34 => 10,  28 => 7,  22 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <title>Affichage de l'annonce {{ id }}</title>*/
/*   </head>*/
/*   <body>*/
/*     <h1>Hello Annonce n°{{ id }} !</h1>*/
/*    */
/*        <div>*/
/*       {# On affiche tous les messages flash dont le nom est « info » #}*/
/*       {% for message in app.session.flashbag.get('info') %}*/
/*         <p>Message flash : {{ message }}</p>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </body>*/
/* </html>*/
/* */
