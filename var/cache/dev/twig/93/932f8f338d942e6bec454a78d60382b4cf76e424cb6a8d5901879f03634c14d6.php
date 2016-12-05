<?php

/* base.html.twig */
class __TwigTemplate_387fa231046d704ee2d740ceecf2d7fb15ff4af5c5db966c590de299b122bda4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c58d3bd77e33dea5a83b59020708a9b045a32ddc1e6b803e9c93d5c88ccea4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58d3bd77e33dea5a83b59020708a9b045a32ddc1e6b803e9c93d5c88ccea4a1->enter($__internal_c58d3bd77e33dea5a83b59020708a9b045a32ddc1e6b803e9c93d5c88ccea4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c58d3bd77e33dea5a83b59020708a9b045a32ddc1e6b803e9c93d5c88ccea4a1->leave($__internal_c58d3bd77e33dea5a83b59020708a9b045a32ddc1e6b803e9c93d5c88ccea4a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bf2e998a9f55b332947c017ab6105648183fb8f410670c14203d869d01537f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf2e998a9f55b332947c017ab6105648183fb8f410670c14203d869d01537f7->enter($__internal_2bf2e998a9f55b332947c017ab6105648183fb8f410670c14203d869d01537f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2bf2e998a9f55b332947c017ab6105648183fb8f410670c14203d869d01537f7->leave($__internal_2bf2e998a9f55b332947c017ab6105648183fb8f410670c14203d869d01537f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da46934c78f8ae82340dc67d7d2d884efc34b3d801ba740396b42b17c65a8171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da46934c78f8ae82340dc67d7d2d884efc34b3d801ba740396b42b17c65a8171->enter($__internal_da46934c78f8ae82340dc67d7d2d884efc34b3d801ba740396b42b17c65a8171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_da46934c78f8ae82340dc67d7d2d884efc34b3d801ba740396b42b17c65a8171->leave($__internal_da46934c78f8ae82340dc67d7d2d884efc34b3d801ba740396b42b17c65a8171_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7145598959976a3b5250088334047ad0a73e66ac6f8f28a0a0c7e4c094bd1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7145598959976a3b5250088334047ad0a73e66ac6f8f28a0a0c7e4c094bd1af->enter($__internal_f7145598959976a3b5250088334047ad0a73e66ac6f8f28a0a0c7e4c094bd1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f7145598959976a3b5250088334047ad0a73e66ac6f8f28a0a0c7e4c094bd1af->leave($__internal_f7145598959976a3b5250088334047ad0a73e66ac6f8f28a0a0c7e4c094bd1af_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4af76297b8a59b79fd751c176c1a478cd6b7b238ee742d6570c2707134d41107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af76297b8a59b79fd751c176c1a478cd6b7b238ee742d6570c2707134d41107->enter($__internal_4af76297b8a59b79fd751c176c1a478cd6b7b238ee742d6570c2707134d41107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4af76297b8a59b79fd751c176c1a478cd6b7b238ee742d6570c2707134d41107->leave($__internal_4af76297b8a59b79fd751c176c1a478cd6b7b238ee742d6570c2707134d41107_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/anna/NetBeansProjects/PhpProject1/tap4parking/app/Resources/views/base.html.twig");
    }
}
