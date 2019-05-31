class FormValidator{
    constructor(form) {
        this._form = form;
        this._validElems = document.querySelectorAll(".validate");
        this._form.addEventListener('submit', this.checkSome.bind(this));
        this._err = [];

        //console.log(document.getElementsByName("login").nextElementSibling);
        //console.log(document.getElementsByName("someForm"));
    };
    addRules(rules){
        this._rules = rules.rules;
        this._messages = rules.messages;

        //console.log(form.firstChild);
    };

    checkSome(event) {
        event.preventDefault();

        for (let i = 0; i < this._validElems.length; i++){
            if (!this._rules[this._validElems[i].name].test(this._validElems[i].value)) {

                /*
                Сохранения числа ошибок, полученных при заполнении формы, в массив, с выводом в консоль
                */
                this._err.push([this._validElems[i].name]);
                console.log(this._err);
                console.log(this._validElems[i].name);

                /*
                Добавление на html сообщения о том, где и что введено неправильно
                */
                let input = document.getElementsByName(this._validElems[i].name);
                console.log(input[0].parentElement);

                let notification = document.createElement("blockquote");
                notification.innerHTML = this._messages[this._validElems[i].name];
                // input[0].parentElement.insertBefore(notification, input[0].nextElementSibling);
                input[0].parentElement.after(notification);
                //console.log(typeof input[0].parentElement);
                /*
                Спустя 4 секунды сообщение исчезает благодаря SetTimeout
                */

                setTimeout(function () {
                    notification.parentNode.removeChild(notification)
                }, 4000);
                document.getElementsByName(this._validElems[i].name)[0].focus();
            }
        }
    };

    isValid() {
        if (this._err.length > 0) {
            console.warn("Ошибок:", this._err.length);
            return false;
        } else {
            return true;
        }

    };
}
