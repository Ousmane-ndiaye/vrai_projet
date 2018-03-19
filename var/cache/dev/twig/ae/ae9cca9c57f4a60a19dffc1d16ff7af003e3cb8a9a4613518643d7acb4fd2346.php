<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39d13f52bb74d9a563132d45959dfb5a0efea162b2f4e27a7685cf393039a688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d13f52bb74d9a563132d45959dfb5a0efea162b2f4e27a7685cf393039a688->enter($__internal_39d13f52bb74d9a563132d45959dfb5a0efea162b2f4e27a7685cf393039a688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a9e00124e9f5d4130095ab34b0333a455ab9ccdfb23dc296a4dd4b02082e321b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e00124e9f5d4130095ab34b0333a455ab9ccdfb23dc296a4dd4b02082e321b->enter($__internal_a9e00124e9f5d4130095ab34b0333a455ab9ccdfb23dc296a4dd4b02082e321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d13f52bb74d9a563132d45959dfb5a0efea162b2f4e27a7685cf393039a688->leave($__internal_39d13f52bb74d9a563132d45959dfb5a0efea162b2f4e27a7685cf393039a688_prof);

        
        $__internal_a9e00124e9f5d4130095ab34b0333a455ab9ccdfb23dc296a4dd4b02082e321b->leave($__internal_a9e00124e9f5d4130095ab34b0333a455ab9ccdfb23dc296a4dd4b02082e321b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d44fa54e50be8ef5383075d530470e1e27635cdbf1ab60c841fe6a9a98cf6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d44fa54e50be8ef5383075d530470e1e27635cdbf1ab60c841fe6a9a98cf6b3->enter($__internal_2d44fa54e50be8ef5383075d530470e1e27635cdbf1ab60c841fe6a9a98cf6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a3a9a16243c5e6e9a1424c6993b203e71048eab9785e370890fe5f2220c264d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3a9a16243c5e6e9a1424c6993b203e71048eab9785e370890fe5f2220c264d->enter($__internal_6a3a9a16243c5e6e9a1424c6993b203e71048eab9785e370890fe5f2220c264d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6a3a9a16243c5e6e9a1424c6993b203e71048eab9785e370890fe5f2220c264d->leave($__internal_6a3a9a16243c5e6e9a1424c6993b203e71048eab9785e370890fe5f2220c264d_prof);

        
        $__internal_2d44fa54e50be8ef5383075d530470e1e27635cdbf1ab60c841fe6a9a98cf6b3->leave($__internal_2d44fa54e50be8ef5383075d530470e1e27635cdbf1ab60c841fe6a9a98cf6b3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad010d96a86c687dff05c5ad7ada4a485c6a513bd397e44af7c66d0bdddedecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad010d96a86c687dff05c5ad7ada4a485c6a513bd397e44af7c66d0bdddedecb->enter($__internal_ad010d96a86c687dff05c5ad7ada4a485c6a513bd397e44af7c66d0bdddedecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a155276d60bf3adf751e76e508f9b3af947f5ac7a0398d270ca435ddaef1f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a155276d60bf3adf751e76e508f9b3af947f5ac7a0398d270ca435ddaef1f42->enter($__internal_7a155276d60bf3adf751e76e508f9b3af947f5ac7a0398d270ca435ddaef1f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a155276d60bf3adf751e76e508f9b3af947f5ac7a0398d270ca435ddaef1f42->leave($__internal_7a155276d60bf3adf751e76e508f9b3af947f5ac7a0398d270ca435ddaef1f42_prof);

        
        $__internal_ad010d96a86c687dff05c5ad7ada4a485c6a513bd397e44af7c66d0bdddedecb->leave($__internal_ad010d96a86c687dff05c5ad7ada4a485c6a513bd397e44af7c66d0bdddedecb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a53d3126b3d9396e5c6e327b9a6c0d9b9bc7cb2bb1bc7a757d0795d60b81040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a53d3126b3d9396e5c6e327b9a6c0d9b9bc7cb2bb1bc7a757d0795d60b81040->enter($__internal_7a53d3126b3d9396e5c6e327b9a6c0d9b9bc7cb2bb1bc7a757d0795d60b81040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_104f3e612c676cb1c30b9e9f49bd982e54c987e2385aa2f1fb0c998d415c6198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104f3e612c676cb1c30b9e9f49bd982e54c987e2385aa2f1fb0c998d415c6198->enter($__internal_104f3e612c676cb1c30b9e9f49bd982e54c987e2385aa2f1fb0c998d415c6198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_104f3e612c676cb1c30b9e9f49bd982e54c987e2385aa2f1fb0c998d415c6198->leave($__internal_104f3e612c676cb1c30b9e9f49bd982e54c987e2385aa2f1fb0c998d415c6198_prof);

        
        $__internal_7a53d3126b3d9396e5c6e327b9a6c0d9b9bc7cb2bb1bc7a757d0795d60b81040->leave($__internal_7a53d3126b3d9396e5c6e327b9a6c0d9b9bc7cb2bb1bc7a757d0795d60b81040_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
