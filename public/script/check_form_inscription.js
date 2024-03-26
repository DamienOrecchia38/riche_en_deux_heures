let lastname = document.getElementById('lastname').value;
let firstname = document.getElementById('firstname').value;
let age = document.getElementById('age').value;
let sex = document.getElementById('sex').value;
let phone = document.getElementById('phone').value;
let email = document.getElementById('email').value;
let confirm_email = document.getElementById('confirm_email').value;


function is_valid_lastname(lastname) {
        return /^[A-Za-z]{3,30}$/.test(lastname);
}

function is_valid_firstname(firstname) {
        return /^[A-Za-z]{3,30}$/.test(firstname);
}

function is_valid_age(age) {
        return /^[18-45]{2}$/.test(age);
}

function is_valid_numtel(phone) {
        return /^[0-9]{10}$/.test(phone);
}

function is_valid_email(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
}

function is_valid_expression(expression) {
        return /^[A-Za-z]{30,500}$/.test(expression);
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

        if (!is_valid_age(age)) {
                alert('Age non valide !');
                return false;
        }

        if (sex == "") {
                alert('Sexe non renseigné !');
                return false;
        }

        if (!is_valid_numtel(phone)) {
                alert('Numéro de téléphone invalide !');
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