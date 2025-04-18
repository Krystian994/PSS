$(document).ready(function() {

    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        loadProducts(url);
    });

    $(document).on('submit', '#search-form', function(event) {
        event.preventDefault();
        var url = $(this).attr('action') + '?' + $(this).serialize();
        loadProducts(url);
    });

    $(document).on('click', 'a.btn-dark, a.btn-primary, a.btn-success', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        loadProducts(url);
    });

    function loadProducts(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                $('#produkty-wrapper').html(data);
                window.history.pushState({}, '', url);
            },
            error: function() {
                alert('Wystąpił błąd podczas ładowania produktów.');
            }
        });
    }

});
