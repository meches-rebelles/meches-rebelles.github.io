/*
 * Gestion des formulaires
*/
const forms = document.querySelectorAll('form');
forms.forEach(form => {
    console.log('ici');
    form.addEventListener('submit', e => {
        e.preventDefault();
        data = new FormData(form);
        console.log(data);
        fetch(`?action=meches&critere=${critere}`, {
            method: 'POST',
            body: data
        })
            .then(res => {
                console.log(res);
                // location.reload();
            })
    });
})