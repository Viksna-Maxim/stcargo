$("#form_btn").click(function() {

    var user_name = document.getElementById('user_name_val').value;
    var user_phone = document.getElementById('user_phone_val').value;
    if (user_name.length > 0) {
        $.ajax({
            type: 'POST',
            url: '../php/mail.php',
            data: 'user_name=' + user_name + '&user_phone=' + user_phone,
            success: function(data) {
                if (data == 'success') {
                    document.getElementById('footer_forma').classList.add('animate_close_form');
                    setTimeout(function() {
                        document.getElementById('footer_forma').classList.remove('w-70');
                        document.getElementById('footer_forma').classList.remove('animate_close_form');
                        document.getElementById('footer_forma').style.display = 'none';

                        document.getElementById('change_forma').style.display = 'block';
                        document.getElementById('change_forma').classList.add('animate_success_text_form');
                        setTimeout(function() {
                            document.getElementById('change_forma').style.opacity = '1';
                            document.getElementById('footer_forma').classList.remove('animate_success_text_form');
                        }, 600);
                    }, 600);

                } else {

                }
            }
        });
    }
});
