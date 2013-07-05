$(document).ready(function() {
            $('#learning').orbit()
});


$(function(){  
    $("ul#navi_containTab > li").click(function(event){  
            var menuIndex=$(this).index();  
            $("ul#detail_containTab > li:visible").hide();             
            $("ul#detail_containTab > li").eq(menuIndex).show();  
    });  
});  







 // register radiobox
$(document).ready(function() {
    $("input[type='radio']").change(function(){
        if($(this).val()=="member2")
        {
            $("#panit").show();
        }
        else
        {
            $("#panit").hide(); 
        }
    })
});



// fancybox login
$(document).ready(function() {
    $('.loginbtn').fancybox({
        padding:0,
        height :200,
        width :600
    });

    $('.createaccountbtn').fancybox({

    });

});



// Slider
// $(document).ready(function() {
//     $('#slides').slidesjs({
//         width: 750,
//         height: 300,
//         navigation: {
//             effect: "fade"
//         },
//         pagination: {
//             effect: "fade"
//         },
//         play: {
//             active: true,
//             // [boolean] Generate the play and stop buttons.
//             // You cannot use your own buttons. Sorry.
//             effect: "slide",
//             // [string] Can be either "slide" or "fade".
//             interval: 5000,
//             // [number] Time spent on each slide in milliseconds.
//             auto: true,
//             // [boolean] Start playing the slideshow on load.
//             swap: true,
//             // [boolean] show/hide stop and play buttons
//             pauseOnHover: false,
//             // [boolean] pause a playing slideshow on hover
//             restartDelay: 2500
//         // [number] restart delay on inactive slideshow
//         },
//         effect: {
//             fade: {
//                 speed: 400
//             }
//         }
                    
                    
//     });
// });



// Fancy Box
  


// Facebook Change Img Style
$.fn.editFaceBook = function(options) {
    var opts = jQuery.extend({}, jQuery.fn.editFaceBook.defaults, options);
    return this.each(function() {
        //here is the div/image as 1 element
        $currentdivorimage = jQuery(this);
        $currentdivorimage.width(opts.width);
        $currentdivorimage.css('position', 'relative');
        $divouter = $('<div></div>').appendTo($currentdivorimage);
        $divouter.bind('mouseout', opts.hideedit);
        $divouter.bind('mouseover', opts.showedit);
        var $link = $('<a></a>').appendTo($divouter)
        .attr('href', opts.linkurl);
        $('<img/>').addClass('profileimage')
        .width(opts.width)
        .height(opts.height)
        .attr('src', opts.imgurl)
        .appendTo($link);
     
        var $secondlink = $('<a class="edit_profilepicture hidden" title="Change Picture" href="#">Change Picture</a>')
        .insertAfter($link)
        .bind('mouseover', opts.showeditpencil)
        .bind('mouseout', opts.hideeditpencil)
        .attr('href', opts.linkediturl)
        .bind('click', opts.editlinkclick)
        ;
           
            
     
        $('<span></span>').appendTo($secondlink)
        .addClass('edit_profilepicture_icon')
        .html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
            
    //<span class="edit_profilepicture_icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    });
};
     
jQuery.fn.editFaceBook.defaults = {
    linkurl: '#', // click img
    linkediturl : 'http://www.aaa.com', // click pencil
    width: 300,
    height: 327,
    imgurl: 'img/smart.png',
    editlinkclick:function(){
    },
    showedit: function() {
        $currentelement = jQuery(this);
        $currentelement.find('.edit_profilepicture').removeClass('hidden');
    },
    hideedit: function() {
        $currentelement = jQuery(this);
        $currentelement.find('.edit_profilepicture').addClass('hidden');
    },
    showeditpencil: function() {
        $currentelement = jQuery(this);
        $currentelement.find('.edit_profilepicture_icon').css('background-position', 'right bottom').css('border', '0px')
    },
    hideeditpencil: function() {
        $currentelement = jQuery(this);
        $currentelement.find('.edit_profilepicture_icon').css('background-position', 'right top');
    }
};






// Full Calendar
$(document).ready(function() {
    
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
        
    $('#calendar').fullCalendar({
        header: {
            left: 'title',
            center: '',
            right: 'month,basicWeek,basicDay prev,next today'
        //                                right: 'month,basicWeek,basicDay prev,next today'
        },
        editable: true,
        events: [
        {
            title: 'All Day Event',
            start: new Date(y, m, 1)
        },
        {
            title: 'Long Event',
            start: new Date(y, m, d-5),
            end: new Date(y, m, d-2)
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: new Date(y, m, d-3, 16, 0),
            allDay: false
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: new Date(y, m, d+4, 16, 0),
            allDay: false
        },
        {
            title: 'Meeting',
            start: new Date(y, m, d, 10, 30),
            allDay: false
        },
        {
            title: 'Lunch',
            start: new Date(y, m, d, 12, 0),
            end: new Date(y, m, d, 14, 0),
            allDay: false
        },
        {
            title: 'Birthday Party',
            start: new Date(y, m, d+1, 19, 0),
            end: new Date(y, m, d+1, 22, 30),
            allDay: false
        },
        {
            title: 'Click for Google',
            start: new Date(y, m, 28),
            end: new Date(y, m, 29),
            url: 'http://google.com/'
        }
        ]
    });
        
});