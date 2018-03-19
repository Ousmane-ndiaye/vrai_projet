<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_9d820fdcba66b777a611f0089b66586eadcbd107e0ed17f2989e78c8b080d14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d820fdcba66b777a611f0089b66586eadcbd107e0ed17f2989e78c8b080d14c->enter($__internal_9d820fdcba66b777a611f0089b66586eadcbd107e0ed17f2989e78c8b080d14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1bd9c5f75c3be8b0f23ff0f42aacbb850bd9b6a4614ea497b0ba0cd3db9ed558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd9c5f75c3be8b0f23ff0f42aacbb850bd9b6a4614ea497b0ba0cd3db9ed558->enter($__internal_1bd9c5f75c3be8b0f23ff0f42aacbb850bd9b6a4614ea497b0ba0cd3db9ed558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9d820fdcba66b777a611f0089b66586eadcbd107e0ed17f2989e78c8b080d14c->leave($__internal_9d820fdcba66b777a611f0089b66586eadcbd107e0ed17f2989e78c8b080d14c_prof);

        
        $__internal_1bd9c5f75c3be8b0f23ff0f42aacbb850bd9b6a4614ea497b0ba0cd3db9ed558->leave($__internal_1bd9c5f75c3be8b0f23ff0f42aacbb850bd9b6a4614ea497b0ba0cd3db9ed558_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
