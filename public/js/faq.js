$('.faq-list li .faq-block .question').click(function() {
    if ($(this).parent().hasClass('opened')) {
        $('.faq-list li .faq-block.opened .answer').slideUp();
        $(this).parent().removeClass('opened');
    } else {
        $('.faq-list li .faq-block.opened .answer').slideUp();
        $('.faq-list li .opened').removeClass('opened');
        $(this).parent().addClass('opened');
        $(this).parent().find('.answer').slideDown();
    }
});
$('.show-more').click(function() {
    if ($(this).hasClass('showed')) {
        $('.faq-list.next').slideUp();
        $(this).removeClass('showed').text('Show more');
    } else {
        $('.faq-list.next').slideDown();
        $(this).addClass('showed').text('Show less');
    }
});