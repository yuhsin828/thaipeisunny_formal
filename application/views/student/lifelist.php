<!doctype html>
<html lang="en">
<?php
$row_cnt = $viewClass->num_rows();
//echo "Vicc".$row_cnt;

?>
<?php $this->load->view("common/header.php"); ?>

<div class="ftco-blocks-cover-1">
  <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
  <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/學生學習區.JPG')">
    <div class="container">
      <div class="row align-items-center ">

        <div class="col-md-5 mt-5 pt-5">
          <span class="text-cursive h5 text-red">Welcome To Our Thaipei Sunny</span>
          <h1 class="text-cursive h5 text-teal">生活華語</h1>
          <p><a href="/home"><span class="text-cursive text-white">首頁</span></a>
            /<span class="mx-3"><a href="/student"><span class="text-cursive text-white">學生學習區</span></a>
              /<span class="text-cursive text-white mx-3">生活華語</span></p>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="site-section" style="background-color: #d99694">




  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-lg-1 float-right" style="position:relative;margin-right:  -30px;margin-top: 15px;height: auto;width: 95px">
        <a href="/student/life"><img src="/images/student/4_返回目錄.png" alt="Image" class="card-img-top  float-end"> </a>
      </div>
      <div class="col-sm-11">
        <div class="shadow-sm card" style="border-radius:25px;border:0px solid #000000;padding: 20px; background: #f2f2f2;">
          <div class="row flex-nowrap">
            <div class="col-10">
              <img src="/images/student/3_1_1_1a.png" alt="Image" id="title_pic" style="display:inline-block;">
            </div>
            <div class="col-2">
              <img src="/images/student/4_播放按鍵.svg" alt="Image" id="title_pic" onclick="playMp3();" onmouseover="style='cursor: pointer;width:   50px;height: 50px;;margin-top: 40px;'" style="display:inline-block;position: relative;float:left;width:   50px;height: 50px;;margin-top: 40px;">
            </div>
          </div>
          <div class="card-body">
            <div class="row align-items-stretch">
              <div class="col-sm-6 align-top">
                <img src="/images/student/3_1_1_1c.jpeg" alt="Image" class="img-fluid rounded float-start" id="main_pic">
              </div>

              <div class="col-sm-6 ">
                <div style="margin-top:-50px"> <span>
                    <img src="/images/student/4_播放按鍵.svg" onmouseover="style='cursor: pointer;display:inline-block;position: relative;float:right;width:   50px;height: 50px;;margin-top: 5px;'" style="display:inline-block;position: relative;float:right;width:   50px;height: 50px;margin-top:5px" onclick="playMp4();"></span>
                  <span>
                    <img src="/images/student/3_1_1_1b.png" alt="Image" id="desc_pic" class="img-fluid"> </span>

                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">

            <!------------------------------------>
            <div id="carouselExampleControls" class="carousel" data-ride="carousel">
              <div class="carousel-inner">
                <?php
                $i = 0;

                foreach ($viewClass->result() as $row) {
                  if ($i % 5 == 0) {
                    if ($i == 0) {
                      echo '<div class="carousel-item active" id="c' . $i . '">';
                      $firstID = $row->lifeDetail_buttonID;
                      $firstImage = $row->lifeDetail_no;
                    } else {
                      echo '<div class="carousel-item">';
                    }

                    echo '<div>';
                    echo '<div class="row align-items-stretch flex-nowrap">';
                    echo '<div class="col-sm-1">';
                    echo '<a  href="#carouselExampleControls" role="button" data-slide="prev"><img class="d-block w-100" src="/images/student/4_往左.png" alt="Second slide"></a>';
                    echo '</div>';
                  }

                  //內容開始-->

                  echo '<div class="col-sm-2"><img class="d-block w-100 " id="ID' . $row->lifeDetail_buttonID . '" onclick=\'change("' . $row->lifeDetail_buttonID . '","' . $row->lifeDetail_no . '","' . $row->lifeDetail_no . '")\' src="/images/student/life/' . $row->lifeDetail_buttonID . 'a.png" alt="First slide"></div>';
                  if ($i == $row_cnt - 1  && $i != 0 && ($i + 1) % 5 > 0) {
                    for ($j = $row_cnt % 5; $j < 5; $j++) {
                      echo '<div class="col-sm-2"> <img class="d-block w-100" src="/images/student/life_detail_empty.png" alt="Second slide"></div>';
                    }
                  }

                  if (($i + 1) % 5 == 0 || $row_cnt == $i + 1) {
                    echo '<div class="col-sm-1">';
                    echo '<a  href="#carouselExampleControls" role="button" data-slide="next">  <img class="d-block w-100" src="/images/student/4_往右.png" alt="Second slide"></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                  }


                  $i++;
                }
                ?>
                <!--內容結束-->

              </div>
            </div>
            <!------------------------------------>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br />
</div>

<audio id="audio1" src=""></audio>
<audio id="audio2" src=""></audio>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
  $('.carousel').carousel({
    interval: 200000
  })
  $('#carouselExampleControls').bind('slid.bs.carousel', function(e) {
    // do something...
    //alert('11');
    //alert(e.to);
    $.ajax({
      type: "POST",
      url: "/student/queryCurrentLife/",
      data: {
        p: e.to,
        c: '<?php echo $category; ?>'
      },
      success: function(data) {
        //alert(data.lifeDetail_name);
        change(data.lifeDetail_buttonID, data.lifeDetail_no, data.lifeDetail_no);
      },
      dataType: 'json'
    });
  })
  var mem_arry = new Array();
  var currentImg = "";
  var currentImg2 = "";
  change('<?php echo $firstID; ?>', '<?php echo $firstImage; ?>', '<?php echo $firstImage; ?>');

  function refreshImg(id) {
    clearAll();
    $('#ID' + id).attr("src", '/images/student/life/' + id + 'b.png');
    $('#audio1').attr("autoplay", "");
    mem_arry.push(id);
  }

  function clearAll() {
    for (var i = 0; i < mem_arry.length; i++) {
      $('#ID' + mem_arry[i]).attr("src", '/images/student/life/' + mem_arry[i] + 'a.png');
    }
    mem_arry.length = 0;
  }

  function change(id, img, img2) {
    //alert(id);
    refreshImg(id);
    $('#main_pic').attr("src", '/images/student/' + img + 'c.jpeg');
    $('#title_pic').attr("src", '/images/student/' + img + 'a.png');
    $('#desc_pic').attr("src", '/images/student/' + img + 'b.png');
    $('#audio1').attr("src", '/images/student/audio/' + img + 'd.mp3');
    //alert('/images/student/audio/'+img+'d.mp3');
    $('#audio1').attr("src", '');
    currentImg = img;
    currentImg2 = img2;
  }

  function playMp3() {
    $('#audio1').attr("src", '/images/student/audio/' + currentImg + 'd.mp3');
  }

  function playMp4() {
    $('#audio1').attr("src", '/images/student/audio/' + currentImg2 + 'e.wav');
  }
</script>