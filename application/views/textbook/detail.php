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
          <h1 class="text-cursive h5 text-teal">華文課本唸讀</h1>
          <p><a href="/home" class="text-white"><span class="text-cursive text-white">首頁</span></a> <span class="mx-3">/</span><a href="/student" class="text-white"><span class="text-cursive text-white">學生學習區</span></a> <span class="mx-3">/</span> <span class="text-cursive text-white">華文課本唸讀</span></p>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="site-section" style="background-color: #d99694">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12 text-center">
        <span class="text-cursive h5 text-red d-block">Textbook Reading</span>
        <h2 class="text-white">華文課本唸讀：
          <?php
          switch ($grade) {
            case "1":
              echo "一年級";
              break;
            case "2":
              echo "二年級";
              break;
            case "3":
              echo "三年級";
              break;
            case "4":
              echo "四年級";
              break;
            case "5":
              echo "五年級";
              break;
            case "6":
              echo "六年級";
              break;
            default:
              echo "一年級";
              break;
          }
          ?> /上冊
        </h2>
      </div>
    </div>
    <div class="row text-center">
      <?php foreach ($viewClass1->result() as $row) { ?>
        <div class="col-lg-4">
          <?php if ($row->textbook_reading_status == "1") { ?>
            <p><a data-fancybox data-type="iframe" data-src="/Wavplayer/index/<?php echo $row->textbook_reading_file; ?>" href="javascript:;" data-options='{"type" : "iframe", "iframe" : {"preload" : true, "css" : {"width" : "600px","height":"250px"}}}'>
                <span class="btn btn-gray"><?php echo $row->textbook_reading_title; ?></span></a></p>

          <?php } else { ?>
            <p><span class="btn btn-blue"><?php echo $row->textbook_reading_title; ?></span></p>
          <?php } ?>
        </div>
      <?php } ?>
    </div>

    <br /><br />
    <div class="row mb-4">
      <div class="col-12 text-center">
        <h2 class="text-white">華文課本唸讀：
          <?php
          switch ($grade) {
            case "1":
              echo "一年級";
              break;
            case "2":
              echo "二年級";
              break;
            case "3":
              echo "三年級";
              break;
            case "4":
              echo "四年級";
              break;
            case "5":
              echo "五年級";
              break;
            case "6":
              echo "六年級";
              break;
            default:
              echo "一年級";
              break;
          }
          ?> /下冊
        </h2>
      </div>
    </div>

    <div class="row text-center">
      <?php foreach ($viewClass2->result() as $row) { ?>
        <div class="col-lg-4">
          <?php if ($row->textbook_reading_status == "1") { ?>
            <p><a data-fancybox data-type="iframe" data-src="/wavplayer/index/<?php echo $row->textbook_reading_file; ?>" href="javascript:;" data-options='{"type" : "iframe", "iframe" : {"preload" : true, "css" : {"width" : "600px","height":"250px"}}}'>
                <span class="btn btn-blue"><?php echo $row->textbook_reading_title; ?></span></a></p>

          <?php } else { ?>
            <p><span class="btn btn-gray"><?php echo $row->textbook_reading_title; ?></span></p>
          <?php } ?>
        </div>
      <?php } ?>
    </div>

  </div>
</div>









<?php $this->load->view("common/footer.php"); ?>


</body>

</html>