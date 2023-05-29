/*
    Авторизация
 */

$('.login-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});

$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        password = $('input[name="password"]').val(),
        full_name = $('input[name="full_name"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirm"]').val();

    let formData = new FormData();
    formData.append('login', login);
    formData.append('password', password);
    formData.append('password_confirm', password_confirm);
    formData.append('full_name', full_name);
    formData.append('email', email);
    // formData.append('avatar', avatar);


    $.ajax({
        url: 'vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = '/index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});


/*
    Вопрос
 */


    $('.questionAdd-btn').click(function (e) {
        e.preventDefault();
    
        $(`input`).removeClass('error');
    
        let tema = $('input[name="tema"]').val(),
            telephone = $('input[name="telephone"]').val(),
            question = $('input[name="question"]').val(),
            name = $('input[name="name"]').val();
    
        $.ajax({
            url: 'vendor/questionAdd.php',
            type: 'POST',
            dataType: 'json',
            data: {
                tema: tema,
                telephone: telephone,
                question: question,
                name: name
            },
            success (data) {

                if (data.status) {
                    document.location.href = '/index.php';
                } else {
                    if (data.type === 1) {
                        data.fields.forEach(function (field) {
                            $(`input[tema="${field}"]`).addClass('error');
                        });
                    }
                    $('.msg').removeClass('none').text(data.message);
                }
            }
        });
    
    });