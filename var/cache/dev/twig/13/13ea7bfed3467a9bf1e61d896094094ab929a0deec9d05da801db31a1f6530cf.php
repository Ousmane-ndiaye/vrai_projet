<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ec03dc96dbfb1a26d7fd588348b8dd0968ae4e0891b641a19b68775ff46a340e extends Twig_Template
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
        $__internal_acc066d746c6b619e33aa91668a8bba2235f786987196c7cb6fdd0692ea0f93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc066d746c6b619e33aa91668a8bba2235f786987196c7cb6fdd0692ea0f93d->enter($__internal_acc066d746c6b619e33aa91668a8bba2235f786987196c7cb6fdd0692ea0f93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7a91a5d917c1f1e5c3873d56d9608c3a399c73d049270fe03c7a614b51a6ef79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a91a5d917c1f1e5c3873d56d9608c3a399c73d049270fe03c7a614b51a6ef79->enter($__internal_7a91a5d917c1f1e5c3873d56d9608c3a399c73d049270fe03c7a614b51a6ef79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_acc066d746c6b619e33aa91668a8bba2235f786987196c7cb6fdd0692ea0f93d->leave($__internal_acc066d746c6b619e33aa91668a8bba2235f786987196c7cb6fdd0692ea0f93d_prof);

        
        $__internal_7a91a5d917c1f1e5c3873d56d9608c3a399c73d049270fe03c7a614b51a6ef79->leave($__internal_7a91a5d917c1f1e5c3873d56d9608c3a399c73d049270fe03c7a614b51a6ef79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
