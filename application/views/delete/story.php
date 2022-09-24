<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php"); ?>

<div class="ftco-blocks-cover-1">
  <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
  <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/學生學習區.JPG')">
    <div class="container">
      <div class="row align-items-center ">

        <div class="col-md-5 mt-5 pt-5">
          <span class="text-cursive h5 text-red">Welcome To Our Thaipei Sunny</span>
          <h1 class="text-cursive h5 text-teal">小泰陽故事集</h1>
          <p><a href="/home"><span class="text-cursive text-white">首頁</span></a> <span class="mx-3">/</span> <span class="text-cursive text-white">學生學習區</span>/</span> <span class="text-cursive text-white">小泰陽故事集</span></p>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="site-section" style="background-color: #d99694">
  <div class="container">
    <div class="row justify-content-md-center">

      <div class="col-lg-6 col-md-4 mb-5">
        <img src="/images/story/b_0_純文字(小泰陽故事集).png" alt="Image" class="img-fluid">
      </div>
    </div>

    <div class="row">

      <div class="col-3">
        <div><img id="img1" src="/images/story/b_2_1.png" alt="Image" class="img-fluid" onclick="changeVideo('1');"></div>
        <div><img id="img2" src="/images/story/b_2_2.png" alt="Image" class="img-fluid" onclick="changeVideo('2');"></div>
        <div><img id="img3" src="/images/story/b_2_3.png" alt="Image" class="img-fluid" onclick="changeVideo('3');"></div>
        <div><img id="img4" src="/images/story/b_2_4.png" alt="Image" class="img-fluid" onclick="changeVideo('4');"></div>
        <div><img id="img5" src="/images/story/b_2_5.png" alt="Image" class="img-fluid" onclick="changeVideo('5');"></div>
        <div><img id="img6" src="/images/story/b_2_6.png" alt="Image" class="img-fluid" onclick="changeVideo('6');"></div>
        <div><img id="img7" src="/images/story/b_2_7.png" alt="Image" class="img-fluid" onclick="changeVideo('7');"></div>
      </div>
      <div class="col-9">
        <div>
          <iframe id="iFrameID" width="900" height="500" src="https://www.youtube.com/embed/WVcJxerM6CA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view("common/footer.php"); ?>


</body>

</html>
<script>
  var curVideo;
  var YTUrl = "https://www.youtube.com/embed/";
  curVideo = '<?php echo $pageID; ?>';

  clearImage();
  setURL(curVideo);

  function clearImage() {

    $('#img1').attr("src", '/images/story/b_2_1.png');
    $('#img2').attr("src", '/images/story/b_2_2.png');
    $('#img3').attr("src", '/images/story/b_2_3.png');
    $('#img4').attr("src", '/images/story/b_2_4.png');
    $('#img5').attr("src", '/images/story/b_2_5.png');
    $('#img6').attr("src", '/images/story/b_2_6.png');
    $('#img7').attr("src", '/images/story/b_2_7.png');
  }

  function setURL(id) {
    var video;
    switch (id) {
      case "1":
        $('#img1').attr("src", '/images/story/b_2_1_red.png');
        video = 'WVcJxerM6CA';
        break;
      case "2":
        $('#img2').attr("src", '/images/story/b_2_2_red.png');
        video = 'WaCF-WGOrFw';
        break;
      case "3":
        $('#img3').attr("src", '/images/story/b_2_3_red.png');
        video = 'G45JKiOGGtU';
        break;
      case "4":
        $('#img4').attr("src", '/images/story/b_2_4_red.png');
        video = 'aww6goxkc6g';
        break;
      case "5":
        $('#img5').attr("src", '/images/story/b_2_5_red.png');
        video = 'vCmBWzr-clc';
        break;
      case "6":
        $('#img6').attr("src", '/images/story/b_2_6_red.png');
        video = '6tKClhM7OqM';
        break;
      case "7":
        $('#img7').attr("src", '/images/story/b_2_7_red.png');
        video = '8N6KyORu-Ew';
        break;
      default:
        $('#img1').attr("src", '/images/story/b_2_1_red.png');
        video = 'WVcJxerM6CA';
        break;
    }
    $('#iFrameID').attr("src", YTUrl + video);
  }

  function changeVideo(id) {
    clearImage();
    setURL(id);
  }
</script>