---
title: 'Menu du côté'
menu_texte1: 'Contactez nous'
menu_url1: '#contact-modal'
menu_texte2: 'Zone de téléchargement'
menu_url2: page4
menu_texte3: Secteurs
menu_url3: 'page1#services-1'
cache_enable: false
content:
    items: '@self.modular'
form:
    action: /page2
    id: contactmodal-form
    name: contactmodalpage2-form
    fields:
        -
            name: first_name
            placeholder: 'Prenom *'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            classes: 'col-sm-12 col-md-6 norightborder'
            validate:
                required: true
                message: 'Vous n''avez pas saisi votre prénom.'
        -
            name: last_name
            placeholder: 'Nom *'
            type: text
            classes: 'col-sm-12 col-md-6'
            validate:
                required: true
                message: 'Vous n''avez pas saisi votre nom.'
        -
            name: tel
            placeholder: 'Téléphone *'
            type: text
            classes: 'col-sm-12 col-md-6 norightborder'
            validate:
                required: true
                message: 'Vous n''avez pas saisi votre numéro de téléphone.'
        -
            name: email
            placeholder: 'Adresse email *'
            type: email
            classes: 'col-sm-12 col-md-6'
            validate:
                required: true
                message: 'Vous n''avez pas saisi votre email.'
        -
            name: Sexe
            type: radio
            outerclasses: 'col-sm-12 col-md-12 gender'
            default: option1
            options:
                option1: Homme
                option2: Femme
        -
            name: message
            placeholder: 'Message *'
            type: textarea
            classes: 'col-sm-12 col-md-12'
            validate:
                required: true
                message: 'Vous n''avez pas saisi votre message.'
    buttons:
        -
            type: submit
            value: Envoyer
            id: submitmodalpage2
            classes: 'contact submit btn btn-primary btn-xl'
    process:
        -
            email:
                from: '{{ form.value.email }}'
                to: ['{{ config.plugins.email.to }}', '{{ form.value.email }}']
                subject: '[La Franchise Dalalu] {{ form.value.last_name }} {{ form.value.first_name }} - {{ form.value.tel }}'
                body: '{{ form.value.message }} '
        -
            message: 'Votre message a bien été envoyé. Merci.'
---
