$('#btn_wanna_be_part').on('click', function (e) {
    e.preventDefault();
    $(this).attr('target', '_blank');
    $(this).attr('href', 'https://mambo.breezy.hr/')
});