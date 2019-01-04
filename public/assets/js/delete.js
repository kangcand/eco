$(document).ready(function () {
    $(document.body).on('click', '.js-submit-confirm', function (event) {
        event.preventDefault()
        var $form = $(this).closest('form')
        var $el = $(this)
        var text = $el.data('confirm-message') ? $el.data('confirm-message') : 'This data will be deleted and will not be back!'
        swal({
                title: 'Are You Sure?',
                text: text,
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel',
                closeOnConfirm: true,
            },
            function () {
                $form.submit()
            })
    })
})
