$('#general').validate({
    rules: {
        name: {
            maxlength: 30,
            //minlength: 2
        },
        secondName: {
            maxlength: 35,
            //minlength: 2
        }
    },
    messages: {
        name: {
            //minlength: "Длина имени должна составлять более одного символа.",
            maxlength: "Длина имени должна составлять менее 30 символов."
        },
        secondName: {
            //minlength: "Длина фамилии должна составлять более одного символа.",
            maxlength: "Длина фамилии должна составлять менее 35 символов."
        }
    },
    errorClass: "form_item_error"
});

$('#change_psw').validate({
    rules: {
        password: {
            required: true
        },
        newpassword: {
            required: true,
            minlength: 6
        },
        reppassword: {
            required: true,
            equalTo: "#newpassword"
        }
    },
    messages: {
        password: {
            required: "Это обязательное поле."
        },
        newpassword: {
            required: "Это обязательное поле.",
            minlength: "Длинна пароля должна быть более 6 символов."
        },
        reppassword: {
            required: "Это обязательное поле.",
            equalTo: "Пароли не совпадают."
        }
    },
    errorClass: "form_item_error"
});
