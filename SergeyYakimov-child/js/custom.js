jQuery(function ($) {
    $('#button').text('Отправить');

    $('#button').click(function () {
        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'POST',
            data: 'action=new_click',
            beforeSend: function (xhr) {
                $('#button').text('Загрузка...');
            },
            success: function (data) {
                $('#button').text('Отправить');
                alert(data);
            }
        });
    });
});