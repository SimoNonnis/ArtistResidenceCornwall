(function($) {

  
  //Mobile Dropdown Navigation
  $('#menu-main-navigation').tinyNav({header: 'Navigation'});
  //End
      

    

  


  //Home-Page Boxes Ordering
  $('.cell--bk-widget').insertAfter('.cell--square:eq(3)');
  $('.cell--promo-bkg').insertAfter('.cell--square:eq(4)');

  $('.cell--square').not(':first').css('height', '300px');
  $('.cell--square:eq(5), .cell--square:eq(6)').css('margin-top', '-4em');

  $('.cell__square-banner:eq(0), .cell__square-banner:eq(1)').css('margin-top', '3em');
  //End
    





	// Our Places - Side Widget
	$('.widget').on('click touch', '#our-places-btn', function() {
    $('.widget').toggleClass('is-open');
  });
  //End




  

  // Single Room Slider
  $('.flexslider').flexslider({
    animation: "slide",
    initDelay: 1000
  });
  //End





  

  // Gallery Pages
  $('#gallery').magnificPopup({
    delegate: 'a', // child items selector, by clicking on it popup will open
    type: 'image',
    gallery:{ enabled:true }
  });
  //End


  


  

  
  //Our Places PopUp
  $('.ourPlaces-popup-btn').magnificPopup({
    type:'inline',
    midClick: true
  });
  //End





  //Newsletter PopUp
  $('.newsLetter-popup-btn').magnificPopup({
    type:'inline',
    closeOnBgClick: false,
    midClick: true
  });
  //End



  //RESDIARY BOOKING food and drink page
  //The Cornish Bar PopUp
  $('.resDiary-popup-btn').magnificPopup({
    type:'inline',
    closeOnBgClick: false,
    midClick: true
  });
  //End









  var endDate = new Date();
    //Booking Widget End Datepicker
  $('.datepicker-end').pickadate({
    format: 'dd/mmm/yy',
    formatSubmit: 'mm/dd/yyyy',
    min: endDate,
    hiddenName: true,
    onOpen: function(){
      //Get date set in 'Arrival' box
      var dateObject = $('.datepicker-start').pickadate('get','select');
      //Increase the date by 1 day
      var nextDate = new Date(dateObject.year, dateObject.month, (dateObject.date + 1));
      //Assign to the 'Departure' input
      this.set('select', nextDate);
    }
  });
  //Booking Widget Start Datepicker
  $('.datepicker-start').pickadate({
    format: 'dd/mmm/yy',
    formatSubmit: 'mm/dd/yyyy',
    hiddenName: true,
    min: endDate
  });
  //End



  //Neighbourhood Filter
  var $allSquares = $('.square-group').find('.all');
      
  $("#select--areas, #select--types").on('change',function() {
    var $a = $("#select--areas").val(),
        $b = $("#select--types").val();
    
    $allSquares.hide().filter("." + $a + '.' + $b).show();
  
  });
  //End




})(jQuery);









// Booking Widget 
function bookOnlineUrl() {

  var formUrl         = document.getElementById('form-url').value;


  var checkInVal      = document.getElementById('start_hidden').value;
  var checkOutVal     = document.getElementById('end_hidden').value;
  var guestsVal       = document.getElementsByName('guests')[0].value;
  var areaVal         = document.getElementById('area').value;
  var propertyTypeVal = document.getElementById('propertyType').value;

  var checkIn     = checkInVal;
  var checkOut    = checkOutVal;
  
  var newUrl      = formUrl + '/search?' + 'in=' + checkIn + '&out=' + checkOut + '&guests=' + guestsVal + '&area=' + areaVal + '&propertytype=' + propertyTypeVal;


  
  window.open(newUrl);

  return false;

}
//End






//Newsletter Validation
function validate_signup(frm) {

  var emailAddress = frm.Email.value;
  var errorString = '';

  if (emailAddress === '' || emailAddress.indexOf('@') == -1) {
    errorString = 'Please enter your email address';
  }

  var els = frm.getElementsByTagName('input');

  for (var i = 0; i < els.length; i++) {
    if (els[i].className == 'text') {
      if (els[i].value === '') {
        errorString = 'Please complete all required fields.';
      }
    } 
  }

  var isError = false;
  
  if (errorString.length > 0)
    isError = true;

  if (isError)
    alert(errorString);
  return !isError;

}
//End



//SVG Fallback using Modernizr (IE8 and Android <=2.3)
if (!Modernizr.svg) {
  
  var imgs = document.querySelectorAll('.logo-svg'),//document.getElementsByClassName doesn't work on IE8
      svgExtension = /.*\.svg$/;
      
  if(imgs[0].src.match(svgExtension)) {
      imgs[0].src = imgs[0].src.slice(0, -3) + 'png';
  }
   
}
//End