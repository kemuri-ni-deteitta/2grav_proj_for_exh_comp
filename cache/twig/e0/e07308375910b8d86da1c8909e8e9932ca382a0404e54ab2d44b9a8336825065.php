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

/* @Var:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title></title>
    <style>
        /* -------------------------------------
                GLOBAL
        ------------------------------------- * /
        * {
            margin: 0;
            padding: 0;
            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            font-size: 100%;
            line-height: 1.6;
        }
        img {
            max-width: 100%;
        }
        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%!important;
            height: 100%;
        }
        /* -------------------------------------
                ELEMENTS
        ------------------------------------- * /
        a {
            color: #348eda;
        }
        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #348eda;
            border: solid #348eda;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .btn-secondary {
            text-decoration: none;
            color: #FFF;
            background-color: #aaa;
            border: solid #aaa;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .last {
            margin-bottom: 0;
        }
        .first {
            margin-top: 0;
        }
        .padding {
            padding: 10px 0;
        }
        /* -------------------------------------
                BODY
        ------------------------------------- * /
        table.body-wrap {
            width: 100%;
            padding: 20px;
        }
        table.body-wrap .container {
            border-radius: 4px;
        }
        /* -------------------------------------
                FOOTER
        ------------------------------------- * /
        table.footer-wrap {
            width: 100%;
            clear: both!important;
        }
        .footer-wrap .container {
            font-size: 12px;
            color: #999;

        }
        table.footer-wrap a {
            color: #666;
        }
        /* -------------------------------------
                TYPOGRAPHY
        ------------------------------------- * /
        h1, h2, h3 {
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            color: #000;
            margin: 40px 0 10px;
            line-height: 1.2;
            font-weight: 200;
        }
        h1 {
            font-size: 36px;
        }
        h2 {
            font-size: 28px;
        }
        h3 {
            font-size: 22px;
        }
        p, ul, ol {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 14px;
        }
        ul li, ol li {
            margin-left: 5px;
            list-style-position: inside;
        }
        .word-break {
            overflow-wrap: break-word;
            word-wrap: break-word;

            -ms-word-break: break-all;
            /* This is the dangerous one in WebKit, as it breaks things wherever * /
            word-break: break-all;
            /* Instead use this non-standard one: * /
            word-break: break-word;

            /* Adds a hyphen where the word breaks, if supported (No Blink) * /
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }
        /* ---------------------------------------------------
                RESPONSIVENESS
                Nuke it from orbit. It's the only way to be sure.
        ------------------------------------------------------ * /
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something * /
        .container {
            display: block!important;
            max-width: 600px!important;
            margin: 0 auto!important; /* makes it centered * /
            clear: both!important;
        }
        /* Set the padding on the td rather than the div for Outlook compatibility * /
        .body-wrap .container {
            padding: 20px;
        }
        /* This should also be a block element, so that it will fill 100% of the .container * /
        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
        }
        /* Let's make sure tables in the content area are 100% wide * /
        .content table {
            width: 100%;
        }
    </style>
</head>

<body bgcolor="#f6f6f6">

<!-- body -->
<table class="body-wrap" bgcolor="#f6f6f6">
    <tr>
        <td></td>
        <td class="container" bgcolor="#FFFFFF">
            <div class="content">
                <table>
                    <tr>
                        <td>
                                                        <h1>Тестирование электронной почты</h1><p>Это тестовое письмо отправлено на основе следующей конфигурации:</p>  <p><pre>Grav\Common\Data\Data Object
(
    [gettersVariable:protected] => items
    [items:protected] => Array
        (
            [enabled] => 1
            [from] => diablo2545@yandex.ru
            [to] => krendel160575@gmail.com
            [mailer] => Array
                (
                    [engine] => smtp
                    [smtp] => Array
                        (
                            [server] => smtp.yandex.ru
                            [port] => 465
                            [encryption] => tls
                            [user] => diablo2545@yandex.ru
                            [password] => **************kd
                        )

                    [sendmail] => Array
                        (
                            [bin] => /usr/sbin/sendmail -t
                        )

                )

            [content_type] => text/plain
            [debug] => 
            [from_name] => Expo Land
            [to_name] => Expo Land
            [subject] => Новое сообщение с сайта
            [body] => {% include "forms/data.html.twig" %}
            [process_markdown] => 1
            [twig] => 1
            [queue] => Array
                (
                    [enabled] => 1
                    [flush_frequency] => * * * * *
                    [flush_msg_limit] => 10
                    [flush_time_limit] => 100
                )

            [charset] => utf-8
        )

    [blueprints:protected] => 
    [storage:protected] => 
    [missingValuesAsNull:Grav\Common\Data\Data:private] => 
    [keepEmptyValues:Grav\Common\Data\Data:private] => 1
    [nestedSeparator:protected] => .
)
</pre></p>
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /body -->

<!-- footer -->
<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">
            <div class="content">
                <table>
                    <tr>
                        <td align="center">
                                                        GetGrav.org
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /footer -->

</body>
</html>
 */
class __TwigTemplate_b1545e2beb691d3dba262e31c7f406cc9f2dbfaf8419e1aa103e5b3f5551570a extends \Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title></title>
    <style>
        /* -------------------------------------
                GLOBAL
        ------------------------------------- */
        * {
            margin: 0;
            padding: 0;
            font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, sans-serif;
            font-size: 100%;
            line-height: 1.6;
        }
        img {
            max-width: 100%;
        }
        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%!important;
            height: 100%;
        }
        /* -------------------------------------
                ELEMENTS
        ------------------------------------- */
        a {
            color: #348eda;
        }
        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #348eda;
            border: solid #348eda;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .btn-secondary {
            text-decoration: none;
            color: #FFF;
            background-color: #aaa;
            border: solid #aaa;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .last {
            margin-bottom: 0;
        }
        .first {
            margin-top: 0;
        }
        .padding {
            padding: 10px 0;
        }
        /* -------------------------------------
                BODY
        ------------------------------------- */
        table.body-wrap {
            width: 100%;
            padding: 20px;
        }
        table.body-wrap .container {
            border-radius: 4px;
        }
        /* -------------------------------------
                FOOTER
        ------------------------------------- */
        table.footer-wrap {
            width: 100%;
            clear: both!important;
        }
        .footer-wrap .container {
            font-size: 12px;
            color: #999;

        }
        table.footer-wrap a {
            color: #666;
        }
        /* -------------------------------------
                TYPOGRAPHY
        ------------------------------------- */
        h1, h2, h3 {
            font-family: \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif;
            color: #000;
            margin: 40px 0 10px;
            line-height: 1.2;
            font-weight: 200;
        }
        h1 {
            font-size: 36px;
        }
        h2 {
            font-size: 28px;
        }
        h3 {
            font-size: 22px;
        }
        p, ul, ol {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 14px;
        }
        ul li, ol li {
            margin-left: 5px;
            list-style-position: inside;
        }
        .word-break {
            overflow-wrap: break-word;
            word-wrap: break-word;

            -ms-word-break: break-all;
            /* This is the dangerous one in WebKit, as it breaks things wherever */
            word-break: break-all;
            /* Instead use this non-standard one: */
            word-break: break-word;

            /* Adds a hyphen where the word breaks, if supported (No Blink) */
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }
        /* ---------------------------------------------------
                RESPONSIVENESS
                Nuke it from orbit. It's the only way to be sure.
        ------------------------------------------------------ */
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block!important;
            max-width: 600px!important;
            margin: 0 auto!important; /* makes it centered */
            clear: both!important;
        }
        /* Set the padding on the td rather than the div for Outlook compatibility */
        .body-wrap .container {
            padding: 20px;
        }
        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
        }
        /* Let's make sure tables in the content area are 100% wide */
        .content table {
            width: 100%;
        }
    </style>
</head>

<body bgcolor=\"#f6f6f6\">

<!-- body -->
<table class=\"body-wrap\" bgcolor=\"#f6f6f6\">
    <tr>
        <td></td>
        <td class=\"container\" bgcolor=\"#FFFFFF\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td>
                                                        <h1>Тестирование электронной почты</h1><p>Это тестовое письмо отправлено на основе следующей конфигурации:</p>  <p><pre>Grav\\Common\\Data\\Data Object
(
    [gettersVariable:protected] => items
    [items:protected] => Array
        (
            [enabled] => 1
            [from] => diablo2545@yandex.ru
            [to] => krendel160575@gmail.com
            [mailer] => Array
                (
                    [engine] => smtp
                    [smtp] => Array
                        (
                            [server] => smtp.yandex.ru
                            [port] => 465
                            [encryption] => tls
                            [user] => diablo2545@yandex.ru
                            [password] => **************kd
                        )

                    [sendmail] => Array
                        (
                            [bin] => /usr/sbin/sendmail -t
                        )

                )

            [content_type] => text/plain
            [debug] => 
            [from_name] => Expo Land
            [to_name] => Expo Land
            [subject] => Новое сообщение с сайта
            [body] => ";
        // line 210
        $this->loadTemplate("forms/data.html.twig", "@Var:<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title></title>
    <style>
        /* -------------------------------------
                GLOBAL
        ------------------------------------- */
        * {
            margin: 0;
            padding: 0;
            font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, sans-serif;
            font-size: 100%;
            line-height: 1.6;
        }
        img {
            max-width: 100%;
        }
        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%!important;
            height: 100%;
        }
        /* -------------------------------------
                ELEMENTS
        ------------------------------------- */
        a {
            color: #348eda;
        }
        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #348eda;
            border: solid #348eda;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .btn-secondary {
            text-decoration: none;
            color: #FFF;
            background-color: #aaa;
            border: solid #aaa;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .last {
            margin-bottom: 0;
        }
        .first {
            margin-top: 0;
        }
        .padding {
            padding: 10px 0;
        }
        /* -------------------------------------
                BODY
        ------------------------------------- */
        table.body-wrap {
            width: 100%;
            padding: 20px;
        }
        table.body-wrap .container {
            border-radius: 4px;
        }
        /* -------------------------------------
                FOOTER
        ------------------------------------- */
        table.footer-wrap {
            width: 100%;
            clear: both!important;
        }
        .footer-wrap .container {
            font-size: 12px;
            color: #999;

        }
        table.footer-wrap a {
            color: #666;
        }
        /* -------------------------------------
                TYPOGRAPHY
        ------------------------------------- */
        h1, h2, h3 {
            font-family: \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif;
            color: #000;
            margin: 40px 0 10px;
            line-height: 1.2;
            font-weight: 200;
        }
        h1 {
            font-size: 36px;
        }
        h2 {
            font-size: 28px;
        }
        h3 {
            font-size: 22px;
        }
        p, ul, ol {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 14px;
        }
        ul li, ol li {
            margin-left: 5px;
            list-style-position: inside;
        }
        .word-break {
            overflow-wrap: break-word;
            word-wrap: break-word;

            -ms-word-break: break-all;
            /* This is the dangerous one in WebKit, as it breaks things wherever */
            word-break: break-all;
            /* Instead use this non-standard one: */
            word-break: break-word;

            /* Adds a hyphen where the word breaks, if supported (No Blink) */
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }
        /* ---------------------------------------------------
                RESPONSIVENESS
                Nuke it from orbit. It's the only way to be sure.
        ------------------------------------------------------ */
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block!important;
            max-width: 600px!important;
            margin: 0 auto!important; /* makes it centered */
            clear: both!important;
        }
        /* Set the padding on the td rather than the div for Outlook compatibility */
        .body-wrap .container {
            padding: 20px;
        }
        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
        }
        /* Let's make sure tables in the content area are 100% wide */
        .content table {
            width: 100%;
        }
    </style>
</head>

<body bgcolor=\"#f6f6f6\">

<!-- body -->
<table class=\"body-wrap\" bgcolor=\"#f6f6f6\">
    <tr>
        <td></td>
        <td class=\"container\" bgcolor=\"#FFFFFF\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td>
                                                        <h1>Тестирование электронной почты</h1><p>Это тестовое письмо отправлено на основе следующей конфигурации:</p>  <p><pre>Grav\\Common\\Data\\Data Object
(
    [gettersVariable:protected] => items
    [items:protected] => Array
        (
            [enabled] => 1
            [from] => diablo2545@yandex.ru
            [to] => krendel160575@gmail.com
            [mailer] => Array
                (
                    [engine] => smtp
                    [smtp] => Array
                        (
                            [server] => smtp.yandex.ru
                            [port] => 465
                            [encryption] => tls
                            [user] => diablo2545@yandex.ru
                            [password] => **************kd
                        )

                    [sendmail] => Array
                        (
                            [bin] => /usr/sbin/sendmail -t
                        )

                )

            [content_type] => text/plain
            [debug] => 
            [from_name] => Expo Land
            [to_name] => Expo Land
            [subject] => Новое сообщение с сайта
            [body] => {% include \"forms/data.html.twig\" %}
            [process_markdown] => 1
            [twig] => 1
            [queue] => Array
                (
                    [enabled] => 1
                    [flush_frequency] => * * * * *
                    [flush_msg_limit] => 10
                    [flush_time_limit] => 100
                )

            [charset] => utf-8
        )

    [blueprints:protected] => 
    [storage:protected] => 
    [missingValuesAsNull:Grav\\Common\\Data\\Data:private] => 
    [keepEmptyValues:Grav\\Common\\Data\\Data:private] => 1
    [nestedSeparator:protected] => .
)
</pre></p>
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /body -->

<!-- footer -->
<table class=\"footer-wrap\">
    <tr>
        <td></td>
        <td class=\"container\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td align=\"center\">
                                                        GetGrav.org
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /footer -->

</body>
</html>
", 210)->display($context);
        // line 211
        echo "            [process_markdown] => 1
            [twig] => 1
            [queue] => Array
                (
                    [enabled] => 1
                    [flush_frequency] => * * * * *
                    [flush_msg_limit] => 10
                    [flush_time_limit] => 100
                )

            [charset] => utf-8
        )

    [blueprints:protected] => 
    [storage:protected] => 
    [missingValuesAsNull:Grav\\Common\\Data\\Data:private] => 
    [keepEmptyValues:Grav\\Common\\Data\\Data:private] => 1
    [nestedSeparator:protected] => .
)
</pre></p>
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /body -->

<!-- footer -->
<table class=\"footer-wrap\">
    <tr>
        <td></td>
        <td class=\"container\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td align=\"center\">
                                                        GetGrav.org
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /footer -->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Var:<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title></title>
    <style>
        /* -------------------------------------
                GLOBAL
        ------------------------------------- */
        * {
            margin: 0;
            padding: 0;
            font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, sans-serif;
            font-size: 100%;
            line-height: 1.6;
        }
        img {
            max-width: 100%;
        }
        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%!important;
            height: 100%;
        }
        /* -------------------------------------
                ELEMENTS
        ------------------------------------- */
        a {
            color: #348eda;
        }
        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #348eda;
            border: solid #348eda;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .btn-secondary {
            text-decoration: none;
            color: #FFF;
            background-color: #aaa;
            border: solid #aaa;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .last {
            margin-bottom: 0;
        }
        .first {
            margin-top: 0;
        }
        .padding {
            padding: 10px 0;
        }
        /* -------------------------------------
                BODY
        ------------------------------------- */
        table.body-wrap {
            width: 100%;
            padding: 20px;
        }
        table.body-wrap .container {
            border-radius: 4px;
        }
        /* -------------------------------------
                FOOTER
        ------------------------------------- */
        table.footer-wrap {
            width: 100%;
            clear: both!important;
        }
        .footer-wrap .container {
            font-size: 12px;
            color: #999;

        }
        table.footer-wrap a {
            color: #666;
        }
        /* -------------------------------------
                TYPOGRAPHY
        ------------------------------------- */
        h1, h2, h3 {
            font-family: \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif;
            color: #000;
            margin: 40px 0 10px;
            line-height: 1.2;
            font-weight: 200;
        }
        h1 {
            font-size: 36px;
        }
        h2 {
            font-size: 28px;
        }
        h3 {
            font-size: 22px;
        }
        p, ul, ol {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 14px;
        }
        ul li, ol li {
            margin-left: 5px;
            list-style-position: inside;
        }
        .word-break {
            overflow-wrap: break-word;
            word-wrap: break-word;

            -ms-word-break: break-all;
            /* This is the dangerous one in WebKit, as it breaks things wherever */
            word-break: break-all;
            /* Instead use this non-standard one: */
            word-break: break-word;

            /* Adds a hyphen where the word breaks, if supported (No Blink) */
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }
        /* ---------------------------------------------------
                RESPONSIVENESS
                Nuke it from orbit. It's the only way to be sure.
        ------------------------------------------------------ */
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block!important;
            max-width: 600px!important;
            margin: 0 auto!important; /* makes it centered */
            clear: both!important;
        }
        /* Set the padding on the td rather than the div for Outlook compatibility */
        .body-wrap .container {
            padding: 20px;
        }
        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
        }
        /* Let's make sure tables in the content area are 100% wide */
        .content table {
            width: 100%;
        }
    </style>
</head>

<body bgcolor=\"#f6f6f6\">

<!-- body -->
<table class=\"body-wrap\" bgcolor=\"#f6f6f6\">
    <tr>
        <td></td>
        <td class=\"container\" bgcolor=\"#FFFFFF\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td>
                                                        <h1>Тестирование электронной почты</h1><p>Это тестовое письмо отправлено на основе следующей конфигурации:</p>  <p><pre>Grav\\Common\\Data\\Data Object
(
    [gettersVariable:protected] => items
    [items:protected] => Array
        (
            [enabled] => 1
            [from] => diablo2545@yandex.ru
            [to] => krendel160575@gmail.com
            [mailer] => Array
                (
                    [engine] => smtp
                    [smtp] => Array
                        (
                            [server] => smtp.yandex.ru
                            [port] => 465
                            [encryption] => tls
                            [user] => diablo2545@yandex.ru
                            [password] => **************kd
                        )

                    [sendmail] => Array
                        (
                            [bin] => /usr/sbin/sendmail -t
                        )

                )

            [content_type] => text/plain
            [debug] => 
            [from_name] => Expo Land
            [to_name] => Expo Land
            [subject] => Новое сообщение с сайта
            [body] => {% include \"forms/data.html.twig\" %}
            [process_markdown] => 1
            [twig] => 1
            [queue] => Array
                (
                    [enabled] => 1
                    [flush_frequency] => * * * * *
                    [flush_msg_limit] => 10
                    [flush_time_limit] => 100
                )

            [charset] => utf-8
        )

    [blueprints:protected] => 
    [storage:protected] => 
    [missingValuesAsNull:Grav\\Common\\Data\\Data:private] => 
    [keepEmptyValues:Grav\\Common\\Data\\Data:private] => 1
    [nestedSeparator:protected] => .
)
</pre></p>
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /body -->

<!-- footer -->
<table class=\"footer-wrap\">
    <tr>
        <td></td>
        <td class=\"container\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td align=\"center\">
                                                        GetGrav.org
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /footer -->

</body>
</html>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 211,  503 => 210,  292 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title></title>
    <style>
        /* -------------------------------------
                GLOBAL
        ------------------------------------- */
        * {
            margin: 0;
            padding: 0;
            font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, sans-serif;
            font-size: 100%;
            line-height: 1.6;
        }
        img {
            max-width: 100%;
        }
        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%!important;
            height: 100%;
        }
        /* -------------------------------------
                ELEMENTS
        ------------------------------------- */
        a {
            color: #348eda;
        }
        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #348eda;
            border: solid #348eda;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .btn-secondary {
            text-decoration: none;
            color: #FFF;
            background-color: #aaa;
            border: solid #aaa;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .last {
            margin-bottom: 0;
        }
        .first {
            margin-top: 0;
        }
        .padding {
            padding: 10px 0;
        }
        /* -------------------------------------
                BODY
        ------------------------------------- */
        table.body-wrap {
            width: 100%;
            padding: 20px;
        }
        table.body-wrap .container {
            border-radius: 4px;
        }
        /* -------------------------------------
                FOOTER
        ------------------------------------- */
        table.footer-wrap {
            width: 100%;
            clear: both!important;
        }
        .footer-wrap .container {
            font-size: 12px;
            color: #999;

        }
        table.footer-wrap a {
            color: #666;
        }
        /* -------------------------------------
                TYPOGRAPHY
        ------------------------------------- */
        h1, h2, h3 {
            font-family: \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif;
            color: #000;
            margin: 40px 0 10px;
            line-height: 1.2;
            font-weight: 200;
        }
        h1 {
            font-size: 36px;
        }
        h2 {
            font-size: 28px;
        }
        h3 {
            font-size: 22px;
        }
        p, ul, ol {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 14px;
        }
        ul li, ol li {
            margin-left: 5px;
            list-style-position: inside;
        }
        .word-break {
            overflow-wrap: break-word;
            word-wrap: break-word;

            -ms-word-break: break-all;
            /* This is the dangerous one in WebKit, as it breaks things wherever */
            word-break: break-all;
            /* Instead use this non-standard one: */
            word-break: break-word;

            /* Adds a hyphen where the word breaks, if supported (No Blink) */
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }
        /* ---------------------------------------------------
                RESPONSIVENESS
                Nuke it from orbit. It's the only way to be sure.
        ------------------------------------------------------ */
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block!important;
            max-width: 600px!important;
            margin: 0 auto!important; /* makes it centered */
            clear: both!important;
        }
        /* Set the padding on the td rather than the div for Outlook compatibility */
        .body-wrap .container {
            padding: 20px;
        }
        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
        }
        /* Let's make sure tables in the content area are 100% wide */
        .content table {
            width: 100%;
        }
    </style>
</head>

<body bgcolor=\"#f6f6f6\">

<!-- body -->
<table class=\"body-wrap\" bgcolor=\"#f6f6f6\">
    <tr>
        <td></td>
        <td class=\"container\" bgcolor=\"#FFFFFF\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td>
                                                        <h1>Тестирование электронной почты</h1><p>Это тестовое письмо отправлено на основе следующей конфигурации:</p>  <p><pre>Grav\\Common\\Data\\Data Object
(
    [gettersVariable:protected] => items
    [items:protected] => Array
        (
            [enabled] => 1
            [from] => diablo2545@yandex.ru
            [to] => krendel160575@gmail.com
            [mailer] => Array
                (
                    [engine] => smtp
                    [smtp] => Array
                        (
                            [server] => smtp.yandex.ru
                            [port] => 465
                            [encryption] => tls
                            [user] => diablo2545@yandex.ru
                            [password] => **************kd
                        )

                    [sendmail] => Array
                        (
                            [bin] => /usr/sbin/sendmail -t
                        )

                )

            [content_type] => text/plain
            [debug] => 
            [from_name] => Expo Land
            [to_name] => Expo Land
            [subject] => Новое сообщение с сайта
            [body] => {% include \"forms/data.html.twig\" %}
            [process_markdown] => 1
            [twig] => 1
            [queue] => Array
                (
                    [enabled] => 1
                    [flush_frequency] => * * * * *
                    [flush_msg_limit] => 10
                    [flush_time_limit] => 100
                )

            [charset] => utf-8
        )

    [blueprints:protected] => 
    [storage:protected] => 
    [missingValuesAsNull:Grav\\Common\\Data\\Data:private] => 
    [keepEmptyValues:Grav\\Common\\Data\\Data:private] => 1
    [nestedSeparator:protected] => .
)
</pre></p>
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /body -->

<!-- footer -->
<table class=\"footer-wrap\">
    <tr>
        <td></td>
        <td class=\"container\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td align=\"center\">
                                                        GetGrav.org
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /footer -->

</body>
</html>
", "@Var:<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <title></title>
    <style>
        /* -------------------------------------
                GLOBAL
        ------------------------------------- */
        * {
            margin: 0;
            padding: 0;
            font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, sans-serif;
            font-size: 100%;
            line-height: 1.6;
        }
        img {
            max-width: 100%;
        }
        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100%!important;
            height: 100%;
        }
        /* -------------------------------------
                ELEMENTS
        ------------------------------------- */
        a {
            color: #348eda;
        }
        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #348eda;
            border: solid #348eda;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .btn-secondary {
            text-decoration: none;
            color: #FFF;
            background-color: #aaa;
            border: solid #aaa;
            border-width: 10px 20px;
            line-height: 2;
            font-weight: bold;
            margin-right: 10px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 25px;
        }
        .last {
            margin-bottom: 0;
        }
        .first {
            margin-top: 0;
        }
        .padding {
            padding: 10px 0;
        }
        /* -------------------------------------
                BODY
        ------------------------------------- */
        table.body-wrap {
            width: 100%;
            padding: 20px;
        }
        table.body-wrap .container {
            border-radius: 4px;
        }
        /* -------------------------------------
                FOOTER
        ------------------------------------- */
        table.footer-wrap {
            width: 100%;
            clear: both!important;
        }
        .footer-wrap .container {
            font-size: 12px;
            color: #999;

        }
        table.footer-wrap a {
            color: #666;
        }
        /* -------------------------------------
                TYPOGRAPHY
        ------------------------------------- */
        h1, h2, h3 {
            font-family: \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif;
            color: #000;
            margin: 40px 0 10px;
            line-height: 1.2;
            font-weight: 200;
        }
        h1 {
            font-size: 36px;
        }
        h2 {
            font-size: 28px;
        }
        h3 {
            font-size: 22px;
        }
        p, ul, ol {
            margin-bottom: 10px;
            font-weight: normal;
            font-size: 14px;
        }
        ul li, ol li {
            margin-left: 5px;
            list-style-position: inside;
        }
        .word-break {
            overflow-wrap: break-word;
            word-wrap: break-word;

            -ms-word-break: break-all;
            /* This is the dangerous one in WebKit, as it breaks things wherever */
            word-break: break-all;
            /* Instead use this non-standard one: */
            word-break: break-word;

            /* Adds a hyphen where the word breaks, if supported (No Blink) */
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }
        /* ---------------------------------------------------
                RESPONSIVENESS
                Nuke it from orbit. It's the only way to be sure.
        ------------------------------------------------------ */
        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block!important;
            max-width: 600px!important;
            margin: 0 auto!important; /* makes it centered */
            clear: both!important;
        }
        /* Set the padding on the td rather than the div for Outlook compatibility */
        .body-wrap .container {
            padding: 20px;
        }
        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
        }
        /* Let's make sure tables in the content area are 100% wide */
        .content table {
            width: 100%;
        }
    </style>
</head>

<body bgcolor=\"#f6f6f6\">

<!-- body -->
<table class=\"body-wrap\" bgcolor=\"#f6f6f6\">
    <tr>
        <td></td>
        <td class=\"container\" bgcolor=\"#FFFFFF\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td>
                                                        <h1>Тестирование электронной почты</h1><p>Это тестовое письмо отправлено на основе следующей конфигурации:</p>  <p><pre>Grav\\Common\\Data\\Data Object
(
    [gettersVariable:protected] => items
    [items:protected] => Array
        (
            [enabled] => 1
            [from] => diablo2545@yandex.ru
            [to] => krendel160575@gmail.com
            [mailer] => Array
                (
                    [engine] => smtp
                    [smtp] => Array
                        (
                            [server] => smtp.yandex.ru
                            [port] => 465
                            [encryption] => tls
                            [user] => diablo2545@yandex.ru
                            [password] => **************kd
                        )

                    [sendmail] => Array
                        (
                            [bin] => /usr/sbin/sendmail -t
                        )

                )

            [content_type] => text/plain
            [debug] => 
            [from_name] => Expo Land
            [to_name] => Expo Land
            [subject] => Новое сообщение с сайта
            [body] => {% include \"forms/data.html.twig\" %}
            [process_markdown] => 1
            [twig] => 1
            [queue] => Array
                (
                    [enabled] => 1
                    [flush_frequency] => * * * * *
                    [flush_msg_limit] => 10
                    [flush_time_limit] => 100
                )

            [charset] => utf-8
        )

    [blueprints:protected] => 
    [storage:protected] => 
    [missingValuesAsNull:Grav\\Common\\Data\\Data:private] => 
    [keepEmptyValues:Grav\\Common\\Data\\Data:private] => 1
    [nestedSeparator:protected] => .
)
</pre></p>
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /body -->

<!-- footer -->
<table class=\"footer-wrap\">
    <tr>
        <td></td>
        <td class=\"container\">
            <div class=\"content\">
                <table>
                    <tr>
                        <td align=\"center\">
                                                        GetGrav.org
                                                    </td>
                    </tr>
                </table>
            </div>
        </td>
        <td></td>
    </tr>
</table>
<!-- /footer -->

</body>
</html>
", "");
    }
}
