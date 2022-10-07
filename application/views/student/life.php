<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php"); ?>

<div class="ftco-blocks-cover-1">
  <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
  <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/學生學習區.JPG')">
    <div class="container">
      <div class="row align-items-center">

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

    <div class="row justify-content-md-center">

      <div class="col-lg-4  col-md-4" style="background-image:url('/images/student/3_0_1.png');background-size: contain;background-repeat: no-repeat;float: left;margin: 0px;height: 500px;width: 500px">
        <div style="position: relative;top:120px;left: 40px;float: left;width: 320px;">
          <?php foreach ($viewClass1->result() as $row) { ?>
            <p><a href="/student/lifelist/<?php echo $row->life_id; ?>"><img src="/images/student/<?php echo $row->life_img; ?>" alt="Image" class="img-fluid" style="width:52%;height: 30%;position: relative;float: left;margin-bottom: 2px"></a></p>
          <?php } ?>
          <p><a href="/student/lifelist/999"><img src="/images/student/3_0_1_6灰.png" alt="Image" class="img-fluid" style="width:52%;height: 30%;position: relative;float: left;margin-bottom: 2px"></a></p>
        </div>
      </div>

      <div class="col-lg-4  col-md-4" style="background-image:url('/images/student/3_0_2.png');background-size: contain;background-repeat: no-repeat;float: left;margin: 0px;height: 500px;width: 500px;">
        <div style="position: relative;top:120px;left: 40px;float: left;width: 320px;">
          <?php foreach ($viewClass2->result() as $row) { ?>
            <p><a href="/student/lifelist/<?php echo $row->life_id; ?>"><img src="/images/student/<?php echo $row->life_img; ?>" alt="Image" class="img-fluid" style="width:52%;height: 30%;position: relative;float: left;margin-bottom: 2px"></a></p>
          <?php } ?>
          <p><a href="/student/lifelist/998"><img src="/images/student/3_0_1_6灰.png" alt="Image" class="img-fluid" style="width:52%;height: 30%;position: relative;float: left;margin-bottom: 2px"></a></p>
        </div>
      </div>

      <div class="col-lg-4 col-md-4" style="background-image:url('/images/student/3_0_3.png');background-size: contain;background-repeat: no-repeat;float: left;margin: 0px;height: 500px;width: 500px;">
        <div style="position: relative;top:120px;left: 40px;float: left;width: 320px;">
          <?php foreach ($viewClass3->result() as $row) { ?>
            <p><a href="/student/lifelist/<?php echo $row->life_id; ?>"><img src="/images/student/<?php echo $row->life_img; ?>" alt="Image" class="img-fluid" style="width:52%;height: 30%;position: relative;float: left;margin-bottom: 2px"></a></p>
          <?php } ?>
          <p><img src="/images/student/life_empty.png" alt="Image" class="img-fluid" style="width:52%;height: 30%;position: relative;float: left;margin-bottom: 2px"></p>
          <p><a href="/student/lifelist/997"><img src="/images/student/3_0_1_6灰.png" alt="Image" class="img-fluid" style="width:52%;height: 30%;position: relative;float: left;margin-bottom: 2px"></a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view("common/footer.php"); ?>


</body>

</html>