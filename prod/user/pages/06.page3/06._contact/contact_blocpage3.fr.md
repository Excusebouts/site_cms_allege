---
title: Contact
titre_contact: 'Nous contacter'
texte_contact: 'Vous souhaitez entreprendre avec DAL''ALU ? Un projet de création ou de diversification de vos offres ? Appelez-nous ou envoyez-nous un courriel et nous vous répondrons dans les meilleurs délais !'
cache_enable: false
content:
    items: '@self.modular'
form:
    action: /page3
    id: contact-form
    name: contact-formpage3
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
            id: submitpage3
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
