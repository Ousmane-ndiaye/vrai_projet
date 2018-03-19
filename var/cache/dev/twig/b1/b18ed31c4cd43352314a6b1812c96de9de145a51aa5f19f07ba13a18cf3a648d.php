<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_fee92f5661770c9cdfdbc4b0a39c9b2377c898aeaf704d34738b89251c44f5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee92f5661770c9cdfdbc4b0a39c9b2377c898aeaf704d34738b89251c44f5d4->enter($__internal_fee92f5661770c9cdfdbc4b0a39c9b2377c898aeaf704d34738b89251c44f5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e2f553deb7988883cfe94c23cef90ca14041b6629064fa69e0a60636f9f746a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f553deb7988883cfe94c23cef90ca14041b6629064fa69e0a60636f9f746a0->enter($__internal_e2f553deb7988883cfe94c23cef90ca14041b6629064fa69e0a60636f9f746a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fee92f5661770c9cdfdbc4b0a39c9b2377c898aeaf704d34738b89251c44f5d4->leave($__internal_fee92f5661770c9cdfdbc4b0a39c9b2377c898aeaf704d34738b89251c44f5d4_prof);

        
        $__internal_e2f553deb7988883cfe94c23cef90ca14041b6629064fa69e0a60636f9f746a0->leave($__internal_e2f553deb7988883cfe94c23cef90ca14041b6629064fa69e0a60636f9f746a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
