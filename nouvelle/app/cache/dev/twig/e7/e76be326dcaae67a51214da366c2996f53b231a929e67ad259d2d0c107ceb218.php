<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_bc521ba4a4b8c9d25bc452d5e89b5b569bf1c857a5a3a1b5a3bfaf82ca381251 extends Twig_Template
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
        $__internal_6f06034c64b83db93164fcd592568bb6b19a9fc9a56b839533404272871cab65 = $this->env->getExtension("native_profiler");
        $__internal_6f06034c64b83db93164fcd592568bb6b19a9fc9a56b839533404272871cab65->enter($__internal_6f06034c64b83db93164fcd592568bb6b19a9fc9a56b839533404272871cab65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6f06034c64b83db93164fcd592568bb6b19a9fc9a56b839533404272871cab65->leave($__internal_6f06034c64b83db93164fcd592568bb6b19a9fc9a56b839533404272871cab65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
