// Ajax 
let errors = {
    'lastname_invalid': 'Le nom de famille est invalide, il ne peut contenir que des lettres et des caractères accentués.',
    'lastname_empty': 'Le nom de famille est obligatoire.',
    'firstname_invalid': 'Le prénom est invalide, il ne peut contenir que des lettres et des caractères accentués.',
    'firstname_empty': 'Le prénom est obligatoire.',
    'email_empty': 'L\'email est obligatoire.',
    'email_invalid': 'L\'email est incorrect. ',
    'message_empty': 'Le message est obligatoire.',
    'message_invalid': 'Le message est incorrect. ',
};

let regex = {
    'lastname': /^([a-zA-ZÀ-ż\-\_\.\ ]){1,50}$/i,
    'firstname': /^([a-zA-ZÀ-ż\-\_\.\ ]){1,50}$/i,
    'email': /^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$/,
    'message' : /^[A-Za-zÀ-ż0-9\.\,\ \+\-\:\!\;\?\/\(\)\’\'\"\%]{1,650}$/
};

document.addEventListener('change', (e) => {
    let compare = (el, rgx) => {
        let error = '';
        if(el.value === '') {
            error = errors[el.id + '_empty'];
        } else {
            if (rgx.test(el.value) !== true) { 
                error = errors[el.id + '_invalid'];
            }
        }
        let id = el.id + '_error';
        if(document.getElementById(id)) {
            document.getElementById(id).remove();
        }
        if(error != '') {
            el.classList.remove('valid');
            el.classList.add('invalid');
            let p = document.createElement('p');
            p.classList.add('error');
            p.id = el.id + '_error';
            p.innerHTML = error;
            el.after(p);
        } else {
            el.classList.add('valid');
            el.classList.remove('invalid');
        }
    };
    if(e.target.id === 'lastname' || e.target.id === 'firstname' || e.target.id === 'email' || e.target.id === 'message') {
        compare(e.target, regex[e.target.id]);
    }
})

document.getElementById('messageFormBtn').addEventListener('click', (e) => {
    e.preventDefault();
    
    let formData = {
        'lastname': document.getElementById('lastname').value,
        'firstname': document.getElementById('firstname').value,
        'email': document.getElementById('email').value,
        'message': document.getElementById('message').value,
        'action': 'send'
    };
    sendComment(formData);
    async function sendComment(formData) {

        const response = await fetch('/index/sendMessage', {
            method : 'POST',
            body: JSON.stringify(formData)
        })
        .then((response) => {
            return responseJsonHandling(response);
        })
        .then((body) => {
            return bodyHandling(body);  
        }) // transforme l'objet reponse JSON en string JSON
        .catch((e) => {
            return catchHandling(e);
        });
    }
})

function responseJsonHandling(response) {
    if (!response.ok) {
        throw new Error("Problème - code d'état HTTP : " + response.status);
    }
    return response.json(); 
}

function bodyHandling(body) {
    if (body.success) {
        console.log('success');
        return alert('Message envoyé avec succès !');
    }
    if (body.message) {
        document.getElementById('ajaxMessage').innerHTML = body.message;
    } 
    if (body.formErrors) {
        // $formErrors
            document.getElementById('ajaxMessage').innerHTML = body.formErrors.content;
    }
}

function catchHandling(e) {
    console.log(e.toString());
    document.getElementById('ajaxMessage').innerHTML = "Un problème nous empêche de compléter le traitement demandé.";
}
