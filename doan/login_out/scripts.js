function build(mode) {
    $('#Authentication-Form').load('log.php?mode=' + mode);
}

$('#btn-mode').on('click', function (event) {
    event.preventDefault();
    var mode = $(this).data('mode');
    if (mode == 'sign-up') {
        build('sign-up');
        $(this).data('mode', 'sign-in');
        $('#lbl-mode').html('Nhập');
    }
    else {
        build('sign-in');
        $(this).data('mode', 'sign-up');
        $('#lbl-mode').html('Ký');
    }
});

$(document).ready(function () {
    $('#Authentication-Form').submit(function (event) {
        event.preventDefault();

        var form = $(this);
        var data = form.serialize();
        var mode = $('#btn-mode').data('mode');

        $.ajax({
            data: data + '&mode=' + mode,
            url: 'handle.php',
            type: 'POST',
            success: function (response) {
                alert(response);
            }
        });
    });
});