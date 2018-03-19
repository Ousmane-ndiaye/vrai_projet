<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52c014fc3cd0c4635ced7b994c29f11953e244a0aa7f52e7a871d0d09cbbeebf extends Twig_Template
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
        $__internal_de24fc6f288ab7cc054342a8a8e9b20829e82b57cfb848b9216c23d04d450876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de24fc6f288ab7cc054342a8a8e9b20829e82b57cfb848b9216c23d04d450876->enter($__internal_de24fc6f288ab7cc054342a8a8e9b20829e82b57cfb848b9216c23d04d450876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_07f09af58abea5d6d21b55e195abd29615461300811473e469f874fb296d57b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f09af58abea5d6d21b55e195abd29615461300811473e469f874fb296d57b3->enter($__internal_07f09af58abea5d6d21b55e195abd29615461300811473e469f874fb296d57b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_de24fc6f288ab7cc054342a8a8e9b20829e82b57cfb848b9216c23d04d450876->leave($__internal_de24fc6f288ab7cc054342a8a8e9b20829e82b57cfb848b9216c23d04d450876_prof);

        
        $__internal_07f09af58abea5d6d21b55e195abd29615461300811473e469f874fb296d57b3->leave($__internal_07f09af58abea5d6d21b55e195abd29615461300811473e469f874fb296d57b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
