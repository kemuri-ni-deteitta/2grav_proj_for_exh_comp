---
title: Отправить заявку
menu: Заявка
template: form
visible: true
form:
    name: inquiry_form
    fields:
        - name: name
          label: Ваше имя
          placeholder: Введите ваше имя
          type: text
          validate:
            required: true
        - name: company
          label: Компания
          placeholder: Название компании
          type: text
        - name: phone
          label: Телефон
          placeholder: +7 (xxx) xxx-xx-xx
          type: tel
          validate:
            required: true
        - name: email
          label: Email
          placeholder: your@email.com
          type: email
          validate:
            required: true
        - name: service
          type: select
          size: long
          label: 'Услуга'
          help: 'Выберите тип услуги, который вас интересует. Это поможет нам подготовить персонализированное предложение'
          options:
            '': 'Выберите услугу'
            'development': 'Разработка и строительство выставочных стендов'
            'design': 'Дизайн выставочных стендов'
            'full_service': 'Полный выставочный сервис'
          validate:
            required: true
        - name: budget
          label: Бюджет проекта
          placeholder: Укажите бюджет в рублях
          type: text
          validate:
            required: true
        - name: message
          label: Описание проекта
          placeholder: Расскажите о вашем проекте, требованиях и пожеланиях
          type: textarea
          validate:
            required: true
        - name: file
          label: Прикрепить файл
          type: file
          accept:
            - .pdf
            - .doc
            - .docx
            - .jpg
            - .jpeg
            - .png
        - name: agreement
          label: Согласие на обработку персональных данных
          type: checkbox
          validate:
            required: true
    buttons:
        - type: submit
          value: Отправить заявку
          classes: btn btn-primary
        - type: reset
          value: Очистить
          classes: btn btn-secondary
    process:
        - email:
            from: '{{ config.plugins.email.from }}'
            to: ['info@expo-land.ru']
            subject: '[Заявка] Новая заявка с сайта'
            body: '{% include "forms/data.html.twig" %}'
        - save:
            fileprefix: inquiry-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include "forms/data.txt.twig" %}'
        - message: Спасибо за заявку! Мы свяжемся с вами в ближайшее время.
        - display: thankyou
---

# Отправить заявку

Заполните форму ниже, и мы свяжемся с вами для обсуждения вашего проекта. Наши специалисты готовы ответить на все вопросы и предложить оптимальное решение.

## Почему стоит обратиться к нам?

- **Бесплатная консультация** - обсудим ваш проект без обязательств
- **Быстрый отклик** - ответим в течение 1 часа в рабочее время
- **Индивидуальный подход** - учтём все ваши пожелания
- **Прозрачное ценообразование** - подробная смета без скрытых платежей

## Как мы работаем

1. **Заявка** - вы заполняете форму или звоните нам
2. **Консультация** - обсуждаем детали проекта
3. **Предложение** - готовим техническое задание и смету
4. **Договор** - фиксируем все условия
5. **Реализация** - создаём ваш проект
6. **Сдача** - принимаем работу и предоставляем гарантию

## Форма заявки

Заполните все обязательные поля формы: 