<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/png" sizes="32x32" href="img/favicon-32.png">
        <style>@import "style.css";@import url('hi.css');</style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="functions.js"></script>

        <select name="language" id="language">
          <option value="chinese" selected>中文(繁)</option>
          <option value="japanese">日本語</option>
          <option value="english">English</option>
          <option value="korean">한국인</option>
        </select>
        
        <input type=button value="翻譯(Translate)" onClick="Translate()" />
        <?php 
              //session_start();  //很重要，可以用的變數存在session裡
              // $username=$_SESSION["name"];
              $username="";
              echo $username;
              echo "<script>alert('$username Doctor, welcome my website.');
                    </script>";?>
        <span class= Title-inner hi=歡迎 style="color:rgb(65, 204, 127)"></span>  <!--歡迎詞翻譯-->
        <title>
            明日方舟個人首頁
        </title>
        <!-- <center><font size="7"><b><i>明日方舟</b></i></font></center> -->
        <div class="Title-outer">
          <div class="Title-inner">
            &nbsp;明日方舟&nbsp;
          </div>
        </div>
        <br><br>
        <meta charset="utf-8">
        <!-- <script>
            document.getElementById("myaudio").play();
        </script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <!--<script src="https://kit.fontawesome.com/aefcaba564.js" crossorigin="anonymous"></script>-->
    </head>

    <body>
        <div id="skd" style=" position:absolute; z-index: -1;">
            <image src="img/skadi.gif" style='width:75px; height: 75px'/>   <!--鼠標圖案-->
        </div>
        <div class="Music-img-container">
          <img src = img/music-img-close.png class="Music-img" id="music-img" >
        </div>
        <div class="Back-top" title="回頂部"></div>
        
        <include src=test.html></include>
        <table align=center border="1" width="90%" >
            <tr>
                <td bgcolor=white >
                    作者的話:<br>
                    &emsp;&emsp;HI!大家好，我會做這個明日方舟網頁的原因，只是喜歡這個遊戲而已，
                    因此想把所喜愛的角色放進來，這網頁沒有任何商業用途喔~所以請不要吉我QQ。<br>
                    如果有空將會更新更多資料~~~
                </td>                 
            </tr>
        </table>
        <br><br><br>
        <center><audio id="myaudio" src="bgm/Home.mp3" autoplay="autoplay" loop="true" preload="auto">
        </audio></center>
        <br><br><br>
        <table align=center border="2" width="90%">
            <tr align=center bgcolor=white>
                <td colspan=2>
                    幹員目錄
                </td>
            </tr>
            <tr  align=center bgcolor=white>
                <td width="50%">
                    <a href="Skadi.html">斯卡蒂</a>
                </td>
                <td width="50%">
                    <a href="Skadi_the_Corrupting_Heart.html">濁心斯卡蒂</a>
                </td>
            </tr>
            <tr  align=center bgcolor=white>
              <td width="50%">
                  <a href="Rosmontis.html">迷迭香</a>
              </td>
              <td width="50%">
                  <a href="Schwarz.html">黑</a>
              </td>
            </tr>
            <tr  align=center bgcolor=white>
              <td width="50%">
                  <a href="Eunectes.html">森蚺</a>
              </td>
              <td width="50%">
                  <a href="Mudrock.html">泥岩</a>
              </td>
            </tr>
            <tr  align=center bgcolor=white>
              <td width="50%">
                  <a href="Projekt_Red.html">紅</a>
              </td>
              <td width="50%">
                敬請期待OwO
            </td>
            </tr>
        </table>
        <div class="chart-container">    <!--圖表-->
          <div class="chart-background">
            <center><p style='color:white'>各職業的幹員人數</p></center>
            <canvas id="myChart"></canvas>
          </div>
        </div>
        <footer>
          <center><a href="Source.html" style="color:white;">資料引用連結</a></center>
        </footer>
    </body>
</html>
<script>
    

var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
  type: 'bar', //圖表類型
  data: {
    //標題
    labels: ['先鋒', '近衛', '狙擊', '重裝', '醫療', '輔助', '術師', '特種'],
    datasets: [{
      label: '幹員人數', //標籤
      data: [28, 64, 48, 35, 29, 29, 42, 34], //資料
      //圖表bar背景色
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(246, 158, 32, 0.2)',
        'rgba(169, 212, 99, 0.2)',
        'rgba(55, 42, 250, 0.2)'
      ],
      //圖表外框線色
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(246, 158, 32, 1)',
        'rgba(169, 212, 99, 1)',
        'rgba(55, 42, 250, 1)'
      ],
      //外框線寬度
      borderWidth: 1
    }]
  },
  options: {
    legend: {
        labels: {
          fontColor: "white"    //標題字顏色
        }
    },  
    scales: {
      yAxes:[{
        beginAtZero: true,
        ticks: {
          fontColor:'white',    //y軸字顏色
          fontSize: 15,
        },
        scaleLabel: {           //y軸標題
          display: true,
          labelString: '人數',
          fontColor:'white',
          fontSize: 20,
        }
      }],
      xAxes:[{
        beginAtZero: true,
        ticks: {
          fontColor:'white',    //x軸字顏色
          fontSize: 15,
        },
        scaleLabel: {           //x軸標題
          display: true,
          labelString: '職業',
          fontColor:'white',
          fontSize: 20,
        }
      }]
    }
  }
});
  
/*function include(dom){const all=$("include",dom);
    for(let k=0;k<all.length;k++){let o=all[k];
      let src=$(o).attr('src');o.removeAttribute('src');
      fetch(src).then(function(file){file.text().then(function(content){ $(o).html(content); });},function(){});
    }
  }
  $(document).ready(function(){
    include(document);
  });*/

  function Translate(){
    var language = document.getElementById("language").value;
    $("body").attr('語言',language);
    //alert(language);
  }
</script>