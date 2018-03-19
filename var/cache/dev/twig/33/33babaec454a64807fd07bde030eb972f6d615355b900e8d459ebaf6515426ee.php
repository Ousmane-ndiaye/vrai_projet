<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_233790c0a6367e8b1c136189d4e0d11d3967be0f16b009c31d2506a37c99a443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233790c0a6367e8b1c136189d4e0d11d3967be0f16b009c31d2506a37c99a443->enter($__internal_233790c0a6367e8b1c136189d4e0d11d3967be0f16b009c31d2506a37c99a443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_311b689e077e5dca91726c07445dcaae9e04ad6d701016fd3ea1390f61a4e225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311b689e077e5dca91726c07445dcaae9e04ad6d701016fd3ea1390f61a4e225->enter($__internal_311b689e077e5dca91726c07445dcaae9e04ad6d701016fd3ea1390f61a4e225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_233790c0a6367e8b1c136189d4e0d11d3967be0f16b009c31d2506a37c99a443->leave($__internal_233790c0a6367e8b1c136189d4e0d11d3967be0f16b009c31d2506a37c99a443_prof);

        
        $__internal_311b689e077e5dca91726c07445dcaae9e04ad6d701016fd3ea1390f61a4e225->leave($__internal_311b689e077e5dca91726c07445dcaae9e04ad6d701016fd3ea1390f61a4e225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
