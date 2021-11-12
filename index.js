$(document).ready(function () {
    $(function() {
        $('.demoslide img:gt(0)').hide();
        setInterval(function(){
          $('.demoslide :first-child').fadeOut() //FadeOut là ảnh đang hiện
          .next('img').fadeIn() //fadeIn ảnh tiếp theo
          .end().appendTo('.demoslide'); // chuyển vị trí ảnh xuống cuối
          }, 5000);
    })

        // $('.txt-number-giohang').click(function (e) { 
        //     e.preventDefault();
        //     $('.list-child-giohang').toggleClass('active-giohang');
        // });

});