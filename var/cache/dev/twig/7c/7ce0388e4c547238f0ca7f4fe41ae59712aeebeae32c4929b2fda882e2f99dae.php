<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b2d01e4c6530e5f02e811e4cfcadf3de9b280b8fcffbc527ba11c8c8de15be07 extends Twig_Template
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
        $__internal_9f3825cf19274d8168edf70d4d3861d7ea50e6f6b67f0f8e8f53dc58a1a5fbad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3825cf19274d8168edf70d4d3861d7ea50e6f6b67f0f8e8f53dc58a1a5fbad->enter($__internal_9f3825cf19274d8168edf70d4d3861d7ea50e6f6b67f0f8e8f53dc58a1a5fbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3084c504199056a3c0e5c1785f61f2b8906260381835905e52a92b636a936a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3084c504199056a3c0e5c1785f61f2b8906260381835905e52a92b636a936a1f->enter($__internal_3084c504199056a3c0e5c1785f61f2b8906260381835905e52a92b636a936a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9f3825cf19274d8168edf70d4d3861d7ea50e6f6b67f0f8e8f53dc58a1a5fbad->leave($__internal_9f3825cf19274d8168edf70d4d3861d7ea50e6f6b67f0f8e8f53dc58a1a5fbad_prof);

        
        $__internal_3084c504199056a3c0e5c1785f61f2b8906260381835905e52a92b636a936a1f->leave($__internal_3084c504199056a3c0e5c1785f61f2b8906260381835905e52a92b636a936a1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
