<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_df05bfc91ac076a288f9f427453eb6cbdb34d20b092975bdfe42dfff796d5fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df05bfc91ac076a288f9f427453eb6cbdb34d20b092975bdfe42dfff796d5fdb->enter($__internal_df05bfc91ac076a288f9f427453eb6cbdb34d20b092975bdfe42dfff796d5fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_672cf261c336f21ccc63eb2357b49e16d4bd55d2f2052569e2ed4000bafbeaa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672cf261c336f21ccc63eb2357b49e16d4bd55d2f2052569e2ed4000bafbeaa6->enter($__internal_672cf261c336f21ccc63eb2357b49e16d4bd55d2f2052569e2ed4000bafbeaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df05bfc91ac076a288f9f427453eb6cbdb34d20b092975bdfe42dfff796d5fdb->leave($__internal_df05bfc91ac076a288f9f427453eb6cbdb34d20b092975bdfe42dfff796d5fdb_prof);

        
        $__internal_672cf261c336f21ccc63eb2357b49e16d4bd55d2f2052569e2ed4000bafbeaa6->leave($__internal_672cf261c336f21ccc63eb2357b49e16d4bd55d2f2052569e2ed4000bafbeaa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
