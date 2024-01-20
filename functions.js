$(document).ready(function () {
    // 捲軸偵測距離頂部超過 50 才顯示按鈕
    $(window).scroll(function () {
      if ($(window).scrollTop() > 50) {
        if ($(".Back-top").hasClass("hide")) {
          $(".Back-top").toggleClass("hide");
        }
      } else {
        $(".Back-top").addClass("hide");
      }
    });
  
    // 點擊按鈕回頂部
    $(".Back-top").on("click", function (event) {
      $("html, body").animate(
        {
          scrollTop: 0
        },
        500 // 回頂部時間為 500 毫秒
      );
    });
  });


function Skadi() {     //鼠標精靈
    var div = document.getElementById("skd");
    var intX = window.event.pageX;
    var intY = window.event.pageY;
    div.style.left = intX+"px";
    div.style.top = intY+"px";
}
document.onmousemove = Skadi;


$(document).ready(function () {
  // 切換音樂開關
  $(".Music-img").on("click", function (event) {
    var music = $("#myaudio")[0];
    if($("#music-img").attr("src") == "img/music-img-close.png"){
      $("#music-img").attr("src", "img/music-img-play.png");
      music.play();
    }
    else{
      $("#music-img").attr("src", "img/music-img-close.png");
      music.pause();
    }
  });
});