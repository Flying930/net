<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/png" sizes="32x32" href="img/favicon-32.png">
        <style>@import "style.css";@import url('hi.css');</style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <select name="language" id="language">
          <option value="chinese" selected>中文(繁)</option>
          <option value="japanese">日本語</option>
          <option value="english">English</option>
          <option value="korean">한국인</option>
        </select>
        <input type=button value="翻譯(Translate)" onClick="Translate()" />
        <?php session_start();  //很重要，可以用的變數存在session裡
              $username=$_SESSION["name"];
              echo $username;
              echo "<script>alert('$username 博士，歡迎進來我的網頁');
                    </script>";?>
        <span hi=歡迎 style="color:rgb(65, 204, 127)"></span>
        <title>
            明日方舟個人首頁
        </title>
        <center><font size="7"><b><i>明日方舟</b></i></font></center>
        <br><br>
        <meta charset="utf-8">
        <script>
            document.getElementById("myaudio").play();
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <!--<script src="https://kit.fontawesome.com/aefcaba564.js" crossorigin="anonymous"></script>-->
    </head>

    <body>
        <div id="skd" style=" position:absolute; z-index: -1;">
            <image src="img/skadi.gif" style='width:75px; height: 75px'/>   <!--鼠標圖案-->
        </div>
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
        <center><audio id="myaudio" src="bgm/主選單首頁．Home.mp3" autoplay="autoplay" loop="true">
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
                    <a href="斯卡蒂.html">斯卡蒂</a>
                </td>
                <td width="50%">
                    <a href="濁心斯卡蒂.html">濁心斯卡蒂</a>
                </td>
            </tr>
            <tr  align=center bgcolor=white>
              <td width="50%">
                  <a href="迷迭香.html">迷迭香</a>
              </td>
              <td width="50%">
                  <a href="黑.html">黑</a>
              </td>
            </tr>
            <tr  align=center bgcolor=white>
              <td width="50%">
                  <a href="森蚺.html">森蚺</a>
              </td>
              <td width="50%">
                  <a href="泥岩.html">泥岩</a>
              </td>
            </tr>
            <tr  align=center bgcolor=white>
              <td width="50%">
                  <a href="紅.html">紅</a>
              </td>
              <td width="50%">
                敬請期待OwO
            </td>
            </tr>
        </table>
        <center><div class="chart-container" style="position: relative; height:60vh; width:80vw">
          <canvas id="myChart"></canvas>
          <a href="資源引用連結.html" style="color:white;">資料引用連結</a>
        </div></center>
    </body>
</html>
<script>
    function Skadi() {
        var div = document.getElementById("skd");
        var intX = window.event.pageX;
        var intY = window.event.pageY;
        div.style.left = intX+"px";
        div.style.top = intY+"px";
}
document.onmousemove = Skadi;

var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
  type: 'bar', //圖表類型
  data: {
    //標題
    labels: ['Skadi', 'Skadi the Corrupting Heart', 'Eunectes', 'Mudrock', 'Projekt Red', 'Schwarz', 'Rosmontis'],
    datasets: [{
      label: '喜歡程度比較', //標籤
      data: [7, 6, 5, 4, 3, 2, 1, 0], //資料
      //圖表背景色
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(246, 158, 32, 0.2)',
        'rgba(169, 212, 99, 0.2)'

      ],
      //圖表外框線色
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(246, 158, 32, 1)',
        'rgba(169, 212, 99, 1)'
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
          fontColor:'white'     //y軸字顏色
        }
      }],
      xAxes:[{
        beginAtZero: true,
        ticks: {
          fontColor:'white'     //x軸字顏色
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