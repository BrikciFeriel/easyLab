//*** Ready Function
jQuery(document).ready(function($) {

	   'use strict';
     
    //*** Function Counter
    jQuery('.word-counter').countUp({
      delay: 190,
      time: 3000,
    });

    //*** Function FancyBox
    jQuery(".fancybox").fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',
    });

    //*** Function Masonery
    jQuery('.grid').isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        fitWidth: false
      },
    });

    //*** Function Progressbar
    jQuery('.jobsearch_progressbar1').progressBar({
        percentage : false,
        backgroundColor : "#dbdbdb",
        barColor : "#13b5ea",
        animation : true,
        height : "6",
    });
    jQuery('.careerfy_progressbar_two').progressBar({
        percentage : true,
        backgroundColor : "#e4e8e9",
        barColor : "#00b3eb",
        animation : true,
        height : "40",
    });
    jQuery('.careerfy_progressbar_three').progressBar({
        percentage : true,
        backgroundColor : "#e4e8e9",
        barColor : "#ef5b48",
        animation : true,
        height : "40",
    });
    jQuery('.careerfy_progressbar_four').progressBar({
        percentage : true,
        backgroundColor : "#e4e8e9",
        barColor : "#49bc7a",
        animation : true,
        height : "40",
    });
    jQuery('.careerfy_progressbar_five').progressBar({
        percentage : true,
        backgroundColor : "#e4e8e9",
        barColor : "#edc26a",
        animation : true,
        height : "40",
    });

    jQuery('.careerfy_progressbar_six').progressBar({
        percentage : true,
        backgroundColor : "#e4e8e9",
        barColor : "#00b3eb",
        animation : true,
        height : "24",
    });
    jQuery('.careerfy_progressbar_seven').progressBar({
        percentage : true,
        backgroundColor : "#e4e8e9",
        barColor : "#ef5b48",
        animation : true,
        height : "24",
    });
    jQuery('.careerfy_progressbar_eight').progressBar({
        percentage : true,
        backgroundColor : "#e4e8e9",
        barColor : "#49bc7a",
        animation : true,
        height : "24",
    });
    jQuery('.careerfy_progressbar_nine').progressBar({
        percentage : true,
        backgroundColor : "#e4e8e9",
        barColor : "#edc26a",
        animation : true,
        height : "24",
    });
      

});


//*** Function SearchToggle
jQuery( ".careerfy-click-btn" ).on('click', function (e) {
  jQuery( this ).parents('.careerfy-search-filter-toggle').find('.careerfy-checkbox-toggle').slideToggle( "slow", function() {});
  jQuery( this ).parents('.careerfy-search-filter-toggle').toggleClass( "careerfy-remove-padding", function() {});
   return false;
});

//*** Function AddToggle
jQuery( ".careerfy-resume-addbtn" ).on('click', function (e) {
  jQuery( this ).parents('.careerfy-candidate-resume-wrap').find('.careerfy-add-popup').slideToggle( "slow", function() {});
   return false;
});

//*** Function Popup
function jobsearch_modal_popup_open(target) {
    jQuery('#' + target).removeClass('fade').addClass('fade-in');
    jQuery('body').addClass('careerfy-modal-active');
}

jQuery(document).on('click', '.careerfy-modal .modal-close', function () {
    jQuery('.careerfy-modal').removeClass('fade-in').addClass('fade');
    jQuery('body').removeClass('careerfy-modal-active');
});

jQuery('.modal-content-area').on('click', function (e) {
    //
    if(e.target !== e.currentTarget) return;
    
    jQuery('.careerfy-modal').removeClass('fade-in').addClass('fade');
    jQuery('body').removeClass('careerfy-modal-active');
});

//for login popup
jQuery(document).on('click', '.careerfy-open-signin-tab', function () {
    jobsearch_modal_popup_open('JobSearchModalLogin');
});
//for login popup
jQuery(document).on('click', '.careerfy-open-signup-tab', function () {
    jobsearch_modal_popup_open('JobSearchModalSignup');
});

//*** Function Upload Button
if (jQuery('#careerfy-uploadbtn').length > 0) {
  document.getElementById("careerfy-uploadbtn").onchange = function () {
    document.getElementById("careerfy-uploadfile").value = this.value;
  };
}

