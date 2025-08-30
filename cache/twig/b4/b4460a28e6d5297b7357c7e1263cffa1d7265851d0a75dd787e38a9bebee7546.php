<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/inquiry.html.twig */
class __TwigTemplate_a7d99741f7abb1f6d849eb5a350fec35e50b00e71b32d42ea142343ec2e5be88 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h2 style=\"margin:0 0 12px 0;\">Новая заявка с сайта</h2>
<table cellpadding=\"6\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse;width:100%;max-width:700px;\">
  <tbody>
    <tr>
      <td style=\"background:#f7f7f7;width:220px;\">Ваше имя</td>
      <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "name", []));
        echo "</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Компания</td>
      <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "company", []));
        echo "</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Телефон</td>
      <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "phone", []));
        echo "</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Email</td>
      <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "email", []));
        echo "</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Услуга</td>
      <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "service", []));
        echo "</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Бюджет проекта</td>
      <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "budget", []));
        echo "</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Описание проекта</td>
      <td>";
        // line 30
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "message", []), "html", null, true));
        echo "</td>
    </tr>
    ";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "files", [])) {
            // line 33
            echo "    <tr>
      <td style=\"background:#f7f7f7;\">Файлы</td>
      <td>
        <ul>
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "files", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 38
                echo "            ";
                $context["item"] = (((twig_test_iterable($context["file"]) &&  !twig_test_empty(twig_get_array_keys_filter($context["file"])))) ? (twig_first($this->env, $context["file"])) : ($context["file"]));
                // line 39
                echo "            <li>";
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["item"] ?? null), "name", [], "any", true, true) &&  !(null === $this->getAttribute(($context["item"] ?? null), "name", [])))) ? ($this->getAttribute(($context["item"] ?? null), "name", [])) : (($context["item"] ?? null))));
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </ul>
      </td>
    </tr>
    ";
        }
        // line 45
        echo "    <tr>
      <td style=\"background:#f7f7f7;\">Согласие на обработку персональных данных</td>
      <td>";
        // line 47
        echo (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "agreement", [])) ? ("Да") : ("Нет"));
        echo "</td>
    </tr>
  </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "forms/inquiry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  114 => 45,  108 => 41,  99 => 39,  96 => 38,  92 => 37,  86 => 33,  84 => 32,  79 => 30,  72 => 26,  65 => 22,  58 => 18,  51 => 14,  44 => 10,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2 style=\"margin:0 0 12px 0;\">Новая заявка с сайта</h2>
<table cellpadding=\"6\" cellspacing=\"0\" border=\"0\" style=\"border-collapse:collapse;width:100%;max-width:700px;\">
  <tbody>
    <tr>
      <td style=\"background:#f7f7f7;width:220px;\">Ваше имя</td>
      <td>{{ form.value.name|e }}</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Компания</td>
      <td>{{ form.value.company|e }}</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Телефон</td>
      <td>{{ form.value.phone|e }}</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Email</td>
      <td>{{ form.value.email|e }}</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Услуга</td>
      <td>{{ form.value.service|e }}</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Бюджет проекта</td>
      <td>{{ form.value.budget|e }}</td>
    </tr>
    <tr>
      <td style=\"background:#f7f7f7;\">Описание проекта</td>
      <td>{{ form.value.message|nl2br }}</td>
    </tr>
    {% if form.value.files %}
    <tr>
      <td style=\"background:#f7f7f7;\">Файлы</td>
      <td>
        <ul>
          {% for file in form.value.files %}
            {% set item = (file is iterable and file|keys is not empty) ? (file|first) : file %}
            <li>{{ (item.name ?? item)|e }}</li>
          {% endfor %}
        </ul>
      </td>
    </tr>
    {% endif %}
    <tr>
      <td style=\"background:#f7f7f7;\">Согласие на обработку персональных данных</td>
      <td>{{ form.value.agreement ? 'Да' : 'Нет' }}</td>
    </tr>
  </tbody>
  </table>

", "forms/inquiry.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/forms/inquiry.html.twig");
    }
}
