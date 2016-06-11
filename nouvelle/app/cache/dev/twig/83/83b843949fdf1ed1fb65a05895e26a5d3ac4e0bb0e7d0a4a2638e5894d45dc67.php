<?php

/* @OCPlatform/Advert/view.html.twig */
class __TwigTemplate_376a36d82f3f5d90eb7f6506a077c0265267b9191ee41dcf475e3ae97e97bc83 extends Twig_Template
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
        $__internal_638dd5bfa79577b907a6575193228af52ababcc531faf4101dca8f52d2430737 = $this->env->getExtension("native_profiler");
        $__internal_638dd5bfa79577b907a6575193228af52ababcc531faf4101dca8f52d2430737->enter($__internal_638dd5bfa79577b907a6575193228af52ababcc531faf4101dca8f52d2430737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/view.html.twig"));

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
    <p>Tag éventuel : ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
        echo "</p>
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
        
        $__internal_638dd5bfa79577b907a6575193228af52ababcc531faf4101dca8f52d2430737->leave($__internal_638dd5bfa79577b907a6575193228af52ababcc531faf4101dca8f52d2430737_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  48 => 15,  43 => 14,  38 => 11,  34 => 10,  28 => 7,  22 => 3,);
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
/*     <p>Tag éventuel : {{ tag }}</p>*/
/*        <div>*/
/*       {# On affiche tous les messages flash dont le nom est « info » #}*/
/*       {% for message in app.session.flashbag.get('info') %}*/
/*         <p>Message flash : {{ message }}</p>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </body>*/
/* </html>*/
/* */
