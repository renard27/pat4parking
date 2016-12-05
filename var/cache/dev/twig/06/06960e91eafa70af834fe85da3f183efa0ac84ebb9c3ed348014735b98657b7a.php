<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_209326a6472cf20b0679e3f116fdb5c0b7d49d26720b20120e5504005e6fc7e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd047f67427ef7d9d907e784ca1c3effbfb8ad8cfede1c112302e79d2c491d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd047f67427ef7d9d907e784ca1c3effbfb8ad8cfede1c112302e79d2c491d8d->enter($__internal_dd047f67427ef7d9d907e784ca1c3effbfb8ad8cfede1c112302e79d2c491d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd047f67427ef7d9d907e784ca1c3effbfb8ad8cfede1c112302e79d2c491d8d->leave($__internal_dd047f67427ef7d9d907e784ca1c3effbfb8ad8cfede1c112302e79d2c491d8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_76c72eed6b7b7f79736e7ee37ddbf4448d2640c76edea07839b78abdc71f1f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c72eed6b7b7f79736e7ee37ddbf4448d2640c76edea07839b78abdc71f1f20->enter($__internal_76c72eed6b7b7f79736e7ee37ddbf4448d2640c76edea07839b78abdc71f1f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_76c72eed6b7b7f79736e7ee37ddbf4448d2640c76edea07839b78abdc71f1f20->leave($__internal_76c72eed6b7b7f79736e7ee37ddbf4448d2640c76edea07839b78abdc71f1f20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9cb6a5e3c668ce359d994824826b568b3532e0633c503d52d4be1e69ac0168fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb6a5e3c668ce359d994824826b568b3532e0633c503d52d4be1e69ac0168fc->enter($__internal_9cb6a5e3c668ce359d994824826b568b3532e0633c503d52d4be1e69ac0168fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9cb6a5e3c668ce359d994824826b568b3532e0633c503d52d4be1e69ac0168fc->leave($__internal_9cb6a5e3c668ce359d994824826b568b3532e0633c503d52d4be1e69ac0168fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b834e68e8156f7b4fbdf336a691bdc3ef03c3d9ee4666153a78cb1fb8a4ea13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b834e68e8156f7b4fbdf336a691bdc3ef03c3d9ee4666153a78cb1fb8a4ea13->enter($__internal_5b834e68e8156f7b4fbdf336a691bdc3ef03c3d9ee4666153a78cb1fb8a4ea13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b834e68e8156f7b4fbdf336a691bdc3ef03c3d9ee4666153a78cb1fb8a4ea13->leave($__internal_5b834e68e8156f7b4fbdf336a691bdc3ef03c3d9ee4666153a78cb1fb8a4ea13_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/anna/NetBeansProjects/PhpProject1/tap4parking/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
