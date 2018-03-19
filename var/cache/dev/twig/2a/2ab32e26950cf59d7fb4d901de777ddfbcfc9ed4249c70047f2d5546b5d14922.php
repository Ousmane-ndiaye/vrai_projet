<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_56f1a41ee72437ec871d0b7e9b40d88f9aa1a5c8ee8cfe7fbc7b8134074a892a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f1a41ee72437ec871d0b7e9b40d88f9aa1a5c8ee8cfe7fbc7b8134074a892a->enter($__internal_56f1a41ee72437ec871d0b7e9b40d88f9aa1a5c8ee8cfe7fbc7b8134074a892a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3463daee0e94cfe61679a81d9ae0a1b39532aaf901f726c21a2fab5a564345ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3463daee0e94cfe61679a81d9ae0a1b39532aaf901f726c21a2fab5a564345ae->enter($__internal_3463daee0e94cfe61679a81d9ae0a1b39532aaf901f726c21a2fab5a564345ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_56f1a41ee72437ec871d0b7e9b40d88f9aa1a5c8ee8cfe7fbc7b8134074a892a->leave($__internal_56f1a41ee72437ec871d0b7e9b40d88f9aa1a5c8ee8cfe7fbc7b8134074a892a_prof);

        
        $__internal_3463daee0e94cfe61679a81d9ae0a1b39532aaf901f726c21a2fab5a564345ae->leave($__internal_3463daee0e94cfe61679a81d9ae0a1b39532aaf901f726c21a2fab5a564345ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
