let lastname = document.getElementById('lastname').value;
let firstname = document.getElementById('firstname').value;
let email = document.getElementById('email').value;
let confirm_email = document.getElementById('confirm_email').value;


function is_valid_lastname(lastname) {
        return /^[A-Za-z]{3,30}$/.test(lastname);
}

function is_valid_firstname(firstname) {
        return /^[A-Za-z]{3,30}$/.test(firstname);
}

function is_valid_email(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
}

function check_form() {

        if (!is_valid_lastname(lastname)) {
                alert('Nom invalide !');
                return false;
        }

        if (!is_valid_firstname(firstname)) {
                alert('Prénom invalide !');
                return false;
        }

        if (!is_valid_email(email)) {
                alert('Email non valide !');
                return false;
        }

        if (email != confirm_email) {
                alert('Les emails ne correspondent pas !');
                return false;
        }

        return true;
}