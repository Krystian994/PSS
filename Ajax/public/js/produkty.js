$(document).ready(function() {

    // Kliknięcia w linki paginacji
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        loadProducts(url);
    });

    // Kliknięcie przycisków kategorii
    $(document).on('click', '.btn-primary, .btn-dark, .btn-success', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        loadProducts(url);
    });

    // Wysyłanie formularza wyszukiwania
    $('form').on('submit', function(event) {
        event.preventDefault();
        var url = $(this).attr('action') + '?' + $(this).serialize();
        loadProducts(url);
    });

    // Funkcja AJAX do ładowania produktów
    function loadProducts(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                $('#produkty-wrapper').html(data);
                window.history.pushState({}, '', url); // zmiana adresu URL bez przeładowania strony
            },
            error: function() {
                alert('Wystąpił błąd podczas ładowania produktów.');
            }
        });
    }

});
