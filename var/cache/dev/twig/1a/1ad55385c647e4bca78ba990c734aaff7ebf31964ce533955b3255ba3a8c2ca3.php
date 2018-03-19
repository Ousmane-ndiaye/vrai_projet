<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_bae8bba53707032fbb1859c8790b84e3549d670b87bf720c4b12b65a6e021962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae8bba53707032fbb1859c8790b84e3549d670b87bf720c4b12b65a6e021962->enter($__internal_bae8bba53707032fbb1859c8790b84e3549d670b87bf720c4b12b65a6e021962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_14ca40397364d458f75d865f31c8a2f728fbe55a4f624e3eb9cf9d9f71d2d9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ca40397364d458f75d865f31c8a2f728fbe55a4f624e3eb9cf9d9f71d2d9da->enter($__internal_14ca40397364d458f75d865f31c8a2f728fbe55a4f624e3eb9cf9d9f71d2d9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bae8bba53707032fbb1859c8790b84e3549d670b87bf720c4b12b65a6e021962->leave($__internal_bae8bba53707032fbb1859c8790b84e3549d670b87bf720c4b12b65a6e021962_prof);

        
        $__internal_14ca40397364d458f75d865f31c8a2f728fbe55a4f624e3eb9cf9d9f71d2d9da->leave($__internal_14ca40397364d458f75d865f31c8a2f728fbe55a4f624e3eb9cf9d9f71d2d9da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
