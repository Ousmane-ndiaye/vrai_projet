<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_c467d8ee9a5d7e85207994a60b46d5400ee32613f1903b7bce9cee219a2a0c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c467d8ee9a5d7e85207994a60b46d5400ee32613f1903b7bce9cee219a2a0c97->enter($__internal_c467d8ee9a5d7e85207994a60b46d5400ee32613f1903b7bce9cee219a2a0c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_24411941520b9c1b12539139e7892f52418126cbd7540277f57b861d2b89d607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24411941520b9c1b12539139e7892f52418126cbd7540277f57b861d2b89d607->enter($__internal_24411941520b9c1b12539139e7892f52418126cbd7540277f57b861d2b89d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c467d8ee9a5d7e85207994a60b46d5400ee32613f1903b7bce9cee219a2a0c97->leave($__internal_c467d8ee9a5d7e85207994a60b46d5400ee32613f1903b7bce9cee219a2a0c97_prof);

        
        $__internal_24411941520b9c1b12539139e7892f52418126cbd7540277f57b861d2b89d607->leave($__internal_24411941520b9c1b12539139e7892f52418126cbd7540277f57b861d2b89d607_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
