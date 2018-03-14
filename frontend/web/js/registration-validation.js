$('.registration-form').validate({
    rules: {
        name: {
            required: true,
            maxlength: 50,
            minlength: 3,
            remote: {
                url: "username-unique",
                type: "post"
            }
        },
        email: {
            required: true,
            maxlength: 50,
            email: true,
            remote: {
                url: "email-unique",
                type: "post"
            }
        },
        password: {
            required: true,
            minlength: 6
        },
        password_second: {
            required: true,
            equalTo: "#password"
        },
        captcha_input: {
            required: true
        }
    },
    messages: {
        name: {
            required: "Это поле обязательно.",
            minlength: "Длина имени пользователя должна составлять более двух символа.",
            maxlength: "Длина имени пользователя должна составлять менее 50 символов.",
            remote: "Это имя уже занято."
        },
        email: {
            required: "Это поле обязательно.",
            maxlength: "Максимальная длина email\'а составляет 50 символов.",
            email: "Введите корректный email-адрес.",
            remote: "Эта почта уже занята."
        },
        password: {
            required: "Это поле обязательно.",
            minlength: "Минимальная длина пароля должна составлять 6 символов."
        },
        password_second: {
            required: "Это поле обязательно.",
            equalTo: "Пароли не совпадают."
        },
        captcha_input: {
            required: "Это поле обязательно."
        }
    },
    errorClass: "form_item_error"
});
