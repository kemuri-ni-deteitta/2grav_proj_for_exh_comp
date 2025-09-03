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
class __TwigTemplate_b289698b8d696c95878faf0b2cba1c37fa0d87149091bc8bbbc32a10eac7ee89 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Новая заявка с сайта</title>
</head>
<body style=\"font-family: Arial, sans-serif; font-size: 16px; line-height: 1.6; color: #333; margin: 0; padding: 20px; background-color: #f9f9f9;\">
    <div style=\"max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);\">
        <h2 style=\"color: #2c3e50; margin: 0 0 25px 0; font-size: 24px; text-align: center;\">Новая заявка с сайта</h2>
        
        <div style=\"background-color: #f8f9fa; padding: 20px; border-radius: 5px; border-left: 4px solid #007bff;\">
            <p style=\"margin: 0 0 15px 0; font-size: 18px; font-weight: bold; color: #2c3e50;\">Ваше имя:</p>
            <p style=\"margin: 0 0 20px 0; font-size: 16px; color: #555;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "name", []));
        echo "</p>
            
            <p style=\"margin: 0 0 15px 0; font-size: 18px; font-weight: bold; color: #2c3e50;\">Телефон:</p>
            <p style=\"margin: 0 0 20px 0; font-size: 16px; color: #555;\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "phone", []));
        echo "</p>
            
            <p style=\"margin: 0 0 15px 0; font-size: 18px; font-weight: bold; color: #2c3e50;\">Email:</p>
            <p style=\"margin: 0 0 20px 0; font-size: 16px; color: #555;\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "email", []));
        echo "</p>
            
            <p style=\"margin: 0 0 15px 0; font-size: 18px; font-weight: bold; color: #2c3e50;\">Услуга:</p>
            <p style=\"margin: 0 0 20px 0; font-size: 16px; color: #555;\">
                ";
        // line 24
        if (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "service", []) == "development")) {
            echo "Разработка и строительство выставочных стендов
                ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 25
($context["form"] ?? null), "value", []), "service", []) == "design")) {
            echo "Дизайн выставочных стендов
                ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 26
($context["form"] ?? null), "value", []), "service", []) == "full_service")) {
            echo "Полный выставочный сервис
                ";
        } else {
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "service", []));
            echo "
                ";
        }
        // line 29
        echo "            </p>
            
            <p style=\"margin: 0 0 15px 0; font-size: 18px; font-weight: bold; color: #2c3e50;\">Бюджет проекта:</p>
            <p style=\"margin: 0 0 20px 0; font-size: 16px; color: #555;\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "budget", []));
        echo "</p>
            
            <p style=\"margin: 0 0 15px 0; font-size: 18px; font-weight: bold; color: #2c3e50;\">Описание проекта:</p>
            <p style=\"margin: 0 0 20px 0; font-size: 16px; color: #555; white-space: pre-wrap;\">";
        // line 35
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", []), "message", []), "html", null, true));
        echo "</p>
            
            ";
        // line 37
        $context["files"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => "files"], "method");
        // line 38
        echo "            ";
        if (($context["files"] ?? null)) {
            // line 39
            echo "            <p style=\"margin: 0 0 15px 0; font-size: 18px; font-weight: bold; color: #2c3e50;\">Прикрепленные файлы:</p>
            <p style=\"margin: 0 0 20px 0; font-size: 16px; color: #555;\">";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["files"] ?? null)), "html", null, true);
            echo " файл(ов)</p>
            ";
        }
        // line 42
        echo "        </div>
        
        <div style=\"margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; text-align: center; color: #666; font-size: 14px;\">
            <p>Это сообщение отправлено автоматически с сайта ExpoLand</p>
        </div>
    </div>
</body>
</html>";
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
        return array (  111 => 42,  106 => 40,  103 => 39,  100 => 38,  98 => 37,  93 => 35,  87 => 32,  82 => 29,  77 => 27,  72 => 26,  68 => 25,  64 => 24,  57 => 20,  51 => 17,  45 => 14,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/inquiry.html.twig", "/home/ivan/grav-admin/user/themes/quark/templates/forms/inquiry.html.twig");
    }
}
