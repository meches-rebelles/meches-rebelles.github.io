window.addEventListener('load', e => {
    e.preventDefault();
    const critere = document.querySelector('body').getAttribute('id');
    const main = document.querySelector('main');
    const linkSection = document.createElement('section');

    const links = [
        { href: "?action=meches&critere=user", textContent: "Espace utilisateur" },
        { href: "?action=meches&critere=entreprise", textContent: "Espace entreprise" },
        { href: "?action=meches&critere=hebergeur", textContent: "Espace hébergeur" }
    ];

    links.forEach(linkData => {
        const link = document.createElement('a');
        link.href = linkData.href;
        link.textContent = linkData.textContent;
        linkSection.appendChild(link);
    });

    const sectionData = {
        'user': {
            titre: "Utilisateurs :",
            champs: ['nom', 'prenom', 'tel', 'mail', 'fonction']
        },
        'entreprise': {
            titre: "Entreprise :",
            champs: ['nom', 'forme_jur', 'capital', 'adresse', 'siret', 'tel', 'mail']
        },
        'hebergeur': {
            titre: "Hebergeur :",
            champs: ['nom', 'tel', 'mail', 'adresse']
        }
    };

    if (sectionData.hasOwnProperty(critere)) {
        const data = sectionData[critere];
        const h2 = document.createElement('h2');
        h2.textContent = data.titre;

        const form = document.createElement('form');
        form.method = 'POST';
        form.action = location.href.split('/').pop();

        data.champs.forEach(cle => {
            const label = document.createElement('label');
            label.htmlFor = cle;
            const labelText = {
                'nom': 'Nom',
                'prenom': 'Prénom',
                'tel': 'Téléphone',
                'mail': 'Mail',
                'fonction': 'Fonction',
                'forme_jur': 'Forme juridique',
                'capital': 'Capital',
                'adresse': 'Adresse',
                'siret': 'SIRET'
            };
            label.textContent = labelText[cle];

            const input = document.createElement('input');
            const inputType = {
                'nom': 'text',
                'prenom': 'text',
                'tel': 'tel',
                'mail': 'email',
                'fonction': 'text',
                'forme_jur': 'text',
                'capital': 'number',
                'adresse': 'text',
                'siret': 'text'
            };
            input.type = inputType[cle];
            input.id = cle;
            input.name = cle;

            form.appendChild(label);
            form.appendChild(input);
        });

        const submit = document.createElement('input');
        submit.type = 'submit';
        submit.value = 'Confirmer';
        form.appendChild(submit);

        const section = document.createElement('section');
        section.appendChild(h2);
        section.appendChild(form);

        main.appendChild(linkSection);
        main.appendChild(section);
    }
});