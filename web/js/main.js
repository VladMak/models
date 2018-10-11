$(window).on('load', function(event) {
    event.preventDefault();
    maxH = 0;
    $('.reviews-slick-content-info').each(function(index, el) { if (maxH < $(this).height()) maxH = $(this).height() })
    $('.reviews-slick-content-info').height(maxH)
});
jQuery(document).ready(function($) {
    if (window.location.href == "http://happykidsmodels.ru/category/modeli/%D0%BE%D1%81%D0%BD%D0%BE%D0%B2%D0%BD%D0%BE%D0%B9-%D1%81%D0%BE%D1%81%D1%82%D0%B0%D0%B2/") { $('.main-cast-choise a').addClass('active_') }

    function showModal(modalName) { $('.overlay').fadeIn(500, function() { var ModalLeft = ($(window).width() - $(modalName).width()) / 2; var ModalTop = (window.innerHeight - $(modalName).height()) / 2;
            setTimeout(function() { $(modalName).css('display', 'block').animate({ opacity: 1, left: ModalLeft + 'px', top: ModalTop + 'px' }, 300); }, 50) }); }

    function closeModal(modalName) { $(modalName).animate({ opacity: 0 }, 200, function() { $(this).css({ 'display': 'none', 'top': '100%', 'left': '50%' }); }); }

    function getSliderSettings() { return { slidesToShow: 1, slidesToScroll: 1, arrows: false, fade: true, asNavFor: '.modal-models-slick-nav', } }

    function getSliderSettings2() { return { slidesToShow: 8, asNavFor: '.modal-models-slick-for', arrows: false, vertical: true, focusOnSelect: true, verticalSwiping: true, } } $('.modal-models-slick-for').slick(getSliderSettings());
    $('.modal-models-slick-nav').slick(getSliderSettings2());

    function getSliderSettings3() { return { slidesToShow: 1, slidesToScroll: 1, arrows: false, fade: true, asNavFor: '.modal-projects-slick-nav', } }

    function getSliderSettings4() { return { slidesToShow: 8, asNavFor: '.modal-projects-slick-for', arrows: false, focusOnSelect: true, vertical: false, } } $('.modal-projects-slick-for').slick(getSliderSettings3());
    $('.modal-projects-slick-nav').slick(getSliderSettings4());
    $('.js_alModal').click(function(event) { event.preventDefault(); var modalClass = '.' + $(this).attr('data-modal'); if ($(this).hasClass('js_alModal_inner')) { closeModal('.alModal_new'); } showModal(modalClass); });
    $('.js_alModalModels').click(function(event) { event.preventDefault(); var city = $(this).parents('.page-models-content-inner-item').find('.page-models-content-inner-item-info-address').html().trim(); var name = $(this).parents('.page-models-content-inner-item').find('.page-models-content-inner-item-name').html().trim(); var age = $(this).parents('.page-models-content-inner-item').find('.js_model_age').html().trim(); var height = $(this).parents('.page-models-content-inner-item').find('.js_model_height').html().trim(); var imgs = $(this).parents('.page-models-content-inner-item').find('.js_model_slider_info').html().trim();
        $('.alModal_model .modal-product-city span').html(city);
        $('.alModal_model .modal-product-name').html(name);
        $('.alModal_model .modal-product-age span').html(age);
        $('.alModal_model .modal-product-height span').html(height); var modalName = '.' + $(this).attr('data-modal');
        $('.overlay').fadeIn(500, function() { var ModalLeft = ($(window).width() - $(modalName).width()) / 2; var ModalTop = (window.innerHeight - $(modalName).height()) / 2;
            setTimeout(function() { $(modalName).css('display', 'block').animate({ opacity: 1, left: ModalLeft + 'px', top: ModalTop + 'px' }, 300, function() { $('.modal-models-slick-for').slick('unslick');
                    $('.modal-models-slick-for').html(imgs);
                    $('.modal-models-slick-for').slick(getSliderSettings());
                    $('.modal-models-slick-nav').slick('unslick');
                    $('.modal-models-slick-nav').html(imgs);
                    $('.modal-models-slick-nav').slick(getSliderSettings2());
                    $(window).resize(); }); }, 50) }); })
    $('.js_alModalProjects').click(function(event) { event.preventDefault(); var text = $(this).parents('.js_page-rojects-photo-content-inner-item').find('.js_project_text').html().trim(); var imgs = $(this).parents('.js_page-rojects-photo-content-inner-item').find('.js_project_slider_info').html().trim();
        $('.single-gallery-content .modal-projects-info').html(text); var modalName = '.' + $(this).attr('data-modal');
        $('.overlay').fadeIn(500, function() { var ModalLeft = ($(window).width() - $(modalName).width()) / 2; var ModalTop = (window.innerHeight - $(modalName).height()) / 2;
            setTimeout(function() { $(modalName).css('display', 'block').animate({ opacity: 1, left: ModalLeft + 'px', top: ModalTop + 'px' }, 300, function() { $('.modal-projects-slick-for').slick('unslick');
                    $('.modal-projects-slick-for').html(imgs);
                    $('.modal-projects-slick-for').slick(getSliderSettings3());
                    $('.modal-projects-slick-nav').slick('unslick');
                    $('.modal-projects-slick-nav').html(imgs);
                    $('.modal-projects-slick-nav').slick(getSliderSettings4());
                    $(window).resize(); }); }, 50) }); })
    $(window).resize(function(event) { if ($('.alModal').is(':visible')) showModal('.alModal:visible'); });
    $('.js_alModalClose, .overlay').click(function() { $('.alModal').animate({ opacity: 0 }, 200, function() { $(this).css({ 'display': 'none', 'top': '100%', 'left': '50%' });
            $('.overlay').fadeOut(400); }); });
    $('#alxModalForm1').submit(function() { if (document.forms.alxModalForm1.checkValidity()) { form = $('#alxModalForm1').serialize();
            $.ajax({ type: "POST", url: "<? echo get_template_directory_uri(); ?>/obr.php", data: form, success: function(msg) { console.log(msg);
                    showModal('.alModalThank');
                    $('.js_modal-1').css({ 'display': 'none' }) } }); } });
    $('#alxModalForm2').submit(function() { if (document.forms.alxModalForm2.checkValidity()) { form = $('#alxModalForm2').serialize();
            $.ajax({ type: "POST", url: "<? echo get_template_directory_uri(); ?>/obr.php", data: form, success: function(msg) { console.log(msg);
                    showModal('.alModalThank');
                    $('.js_modal-1').css({ 'display': 'none' }) } }); } });
    $('#alxModalForm3').submit(function() { if (document.forms.alxModalForm3.checkValidity()) { form = $('#alxModalForm3').serialize();
            $.ajax({ type: "POST", url: "<? echo get_template_directory_uri(); ?>/obr.php", data: form, success: function(msg) { console.log(msg);
                    showModal('.alModalThank');
                    $('.js_modal-2').css({ 'display': 'none' }) } }); } });
    // $('.main-slick').slick({ slidesToShow: 1, slidesToScroll: 1, autoplay: false, autoplaySpeed: 3000, arrows: false, swipeToSlide: true, });
    $('.reviews-slick').slick({ slidesToShow: 4, slidesToScroll: 1, autoplay: false, autoplaySpeed: 3000, arrows: false, swipeToSlide: true, variableWidth: true, responsive: [{ breakpoint: 840, settings: { variableWidth: false, slidesToShow: 2, } }, { breakpoint: 720, settings: { variableWidth: false, slidesToShow: 1, arrows: false, dots: true, } }] });
    $('.js_hamburger').click(function() { $('.main-header-menu-container').slideToggle();
        $('.js_hamburger').toggleClass('active'); });
    $(window).resize(function() { if ($(window).outerWidth() > 540) { $('.main-header-menu-container').slideDown(0);
            $('.btn-hamburger').addClass('active'); } });
    $('.page-projects-content-button').click(function(event) {
        event.preventDefault();
        var btn_this = $(this)
        if (!($(this).hasClass('active'))) {
            $('.page-projects-content-buttons .page-projects-content-button').removeClass('active')
            $(this).addClass('active');
            if (btn_this.hasClass('photoes-button')) { $('.page-projetcs-video-content').fadeOut(600, function() { $('.page-rojects-photo-content').fadeIn(600) }) } else { $('.page-rojects-photo-content').fadeOut(600, function() { $('.page-projetcs-video-content').fadeIn(600) }) }
        }
    });
    if (window.location.hash) { if (window.location.hash == '#video') { window.location.hash = '';
            $('.page-projects-content-button.videos-button').click(); } };
});
(function($) {
    function new_map($el) { var $markers = $el.find('.marker'); var args = { zoom: 4, center: new google.maps.LatLng(55.755826, 37.6173), mapTypeId: google.maps.MapTypeId.ROADMAP, scrollwheel: false, }; var map = new google.maps.Map($el[0], args);
        map.markers = [];
        $markers.each(function() { add_marker($(this), map); }); return map; }

    function add_marker($marker, map) { var latlng = new google.maps.LatLng($marker.attr('data-lat'), $marker.attr('data-lng')); var marker = new google.maps.Marker({ position: latlng, map: map, });
        map.markers.push(marker); if ($marker.html()) { var infowindow = new google.maps.InfoWindow({ content: $marker.html() });
            google.maps.event.addListener(marker, 'click', function() { infowindow.open(map, marker); }); } } var map = null;
    $(document).ready(function() { $('.page-contacts-maps').each(function() { map = new_map($(this)); }); }); })(jQuery);