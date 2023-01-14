$(document).ready(()=>{
    $(document).scroll(function () {
        var scroll = $(this).scrollTop();
        var topDist = $("header").position();
        if (scroll > topDist.top) {
            $('#mynav').addClass('scrollNav')
            
            
        } else {
          $('#mynav').removeClass('scrollNav')
        }
  }) 
}

)

