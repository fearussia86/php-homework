let form = document.forms.someForm;
//console.log(form);
let formValidator = new FormValidator(form);
//console.log(formValidator);

//form.addEventListener('submit', formHandler);

function formHandler(event) {
    event.preventDefault();
    let validate_fields = document.querySelectorAll('.validate');
    if (!formValid(validate_fields)){
        document.getElementById("errors").innerHTML =
            'не все поля заполнены';
        return;
    }
    this.submit(); //this - Это наша форма, submit - метод формы, отправка.
    //Т.е. если условие выполнится, форма с данными будет отправлена на сервер.
}


function formValid(fields) {
    for (let i = 0; i < fields.length; i++) {
        if (fields[i].value.length < 3) {
            return false;
        }
    }
    return true;
}



form.addEventListener('submit', ajaxHandler);
function ajaxHandler(event) {
    event.preventDefault();
    let validate_fields = document.querySelectorAll('.validate');
    if (!formValid(validate_fields)){
        document.getElementById("errors").innerHTML =
            'не все поля заполнены';
        return;
    }
    let form_data = new FormData(this);
    //FormData - это встроенный в язык JS объект.
    console.log(form_data.get("login"));

    let xhr = new XMLHttpRequest(); // объкт запроса
    console.log(xhr);
    // запрос будет отправлем методом POST на обработчик формы
    // в данной случае - "form_handler.php"
    xhr.open("POST", this.action, true);
    xhr.send(form_data);

    xhr.onload = function (event) {
        // функция будет вызвана, когда придет ответ от сервера
        if (xhr.status == 200) {
            responseHandler(xhr.responseText);
        }
    }
}

function responseHandler(text) {
    console.log("ответ сервера: " + text);
}



formValidator.addRules({
    rules: {
        login: /^[a-zA-Z0-9]+$/,
        password: /^[a-zA-Z0-9]+$/
    },
    messages: {
        login: "Логин должен представлять из себя набор букв и цифр, но можно использовать только латиницу!",
        password: "Пароль должен представлять из себя набор латинских букв и цифр!"
    }
});

form.addEventListener("submit", noErorrs);

function noErorrs() {
    if (formValidator.isValid()) {
        console.info("Validation has no errors!");

    }
}
//console.log(formValidator._err);
