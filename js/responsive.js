var defaultURL = 'pixelbing.com'; 

 
   

//show loading graphic
function showLoader(id) {
  $('#' + id + ' img').fadeIn('slow');
}

//hide loading graphic
function hideLoader(id) {
  $('#' + id + ' img').fadeOut('slow');
}

//function to check load state of each frame
function allLoaded(){
  var results = [];
  $('iframe').each(function(){
    if(!$(this).data('loaded')){results.push(false)}
  });
  var result = (results.length > 0) ? false : true;
  return result;
};

function loadPage($frame, url) {
  if ( url.substr(0,7) !== 'http://' && url.substr(0,8) !== 'https://' && url.substr(0, 7) !== 'file://' ) {
    url = 'http://'+url;
  }
  $('iframe').not($frame).each(function(){showLoader($(this).parent().attr('id'));})
  $('iframe').not($frame).data('loaded', false);
  $('iframe').not($frame).attr('src', url);
}

$('.frame').each(function(){showLoader($(this).attr('id'))});


//when document loads
$(document).ready(function(){


  loadPage('', defaultURL);

  //query string
  var qsArray = window.location.href.split('?');
  var qs = qsArray[qsArray.length-1];

  if(qs != '' && qsArray.length > 1){
    $('#url').val(qs);
    loadPage('', qs);
  }

 

  


  //when the url textbox is used
  $('form').submit(function(){
    loadPage('' , $('#url').val());
    return false;
  });

  //when frame loads
  $('iframe').load(function(){

    var $this = $(this);
    var url = '';
    var error = false;

    try{
      url = $this.contents().get(0).location.href;
    } catch(e) {
      error = true;
      if($('#url').val() != ''){
        url = $('#url').val();
      } else {
        url = defaultURL;
      }
    }

    //load other pages with the same URL
    if(allLoaded()){
      if(error){
        alert('Browsers prevent navigation from inside iframes across domains.\nPlease use the textbox at the top for external sites.');
        loadPage('', defaultURL);
      }else{
        loadPage($this, url);
      }
    }

    //when frame loads, hide loader graphic
    else{
      error = false;
      hideLoader($(this).parent().attr('id'));
      $(this).data('loaded',true);
    }
  });


  



});
