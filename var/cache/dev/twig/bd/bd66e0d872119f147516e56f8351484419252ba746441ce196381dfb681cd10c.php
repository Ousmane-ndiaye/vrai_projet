<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_e0f920da56e26c5192bab2e0dc7b3bb96f06526e622b563da34f4fff2b401ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f920da56e26c5192bab2e0dc7b3bb96f06526e622b563da34f4fff2b401ac4->enter($__internal_e0f920da56e26c5192bab2e0dc7b3bb96f06526e622b563da34f4fff2b401ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_05fdfcca0b65d3ee4b41dc3a6e7fd4540e33ea118d5cc10f2e0113e1961692b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fdfcca0b65d3ee4b41dc3a6e7fd4540e33ea118d5cc10f2e0113e1961692b4->enter($__internal_05fdfcca0b65d3ee4b41dc3a6e7fd4540e33ea118d5cc10f2e0113e1961692b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e0f920da56e26c5192bab2e0dc7b3bb96f06526e622b563da34f4fff2b401ac4->leave($__internal_e0f920da56e26c5192bab2e0dc7b3bb96f06526e622b563da34f4fff2b401ac4_prof);

        
        $__internal_05fdfcca0b65d3ee4b41dc3a6e7fd4540e33ea118d5cc10f2e0113e1961692b4->leave($__internal_05fdfcca0b65d3ee4b41dc3a6e7fd4540e33ea118d5cc10f2e0113e1961692b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
