<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php"); ?>

<main class="bg_lemonYellow">
  <div class="container py-5">
    <!-- breadcrumb -->
    <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb d-flex align-items-center">
        <li class="breadcrumb-item">
          <a class="text-decoration-none text_dark" href="/home">首頁</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-decoration-none text_dark" href="/student">學生學習區</a>
        </li>
        <li class="breadcrumb-item text_dark active" aria-current="page">中華節慶</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-3 text-center mb-3">
        <a class="" href="/student/holidaydetail/1">
          <img class="img-fluid bg_light round_1 box_shadow_4" src="/images/holiday/4_1春節.png" alt="春節">
        </a>
      </div>
      <div class="col-sm-6 col-md-3 text-center mb-3">
        <a class="" href="/student/holidaydetail/2">
          <img class="img-fluid bg_light round_1 box_shadow_4" src="/images/holiday/4_2元宵節.png" alt="元宵節">
        </a>
      </div>
      <div class="col-sm-6 col-md-3 text-center mb-3">
        <a class="" href="/student/holidaydetail/3">
          <img class="img-fluid bg_light round_1 box_shadow_4" src="/images/holiday/4_3清明節.png" alt="清明節">
        </a>
      </div>
      <div class="col-sm-6 col-md-3 text-center mb-3">
        <a class="" href="/student/holidaydetail/4">
          <img class="img-fluid bg_light round_1 box_shadow_4" src="/images/holiday/4_4端午節.png" alt="端午節">
        </a>
      </div>
      <div class="col-sm-6 col-md-3 text-center mb-3">
        <a class="" href="/student/holidaydetail/5">
          <img class="img-fluid bg_light round_1 box_shadow_4" src="/images/holiday/4_5七夕.png" alt="七夕">
        </a>
      </div>
      <div class="col-sm-6 col-md-3 text-center mb-3">
        <a class="" href="/student/holidaydetail/6">
          <img class="img-fluid bg_light round_1 box_shadow_4" src="/images/holiday/4_6中元節.png" alt="中元節">
        </a>
      </div>
      <div class="col-sm-6 col-md-3 text-center mb-3">
        <a class="" href="/student/holidaydetail/7">
          <img class="img-fluid bg_light round_1 box_shadow_4" src="/images/holiday/4_7中秋節.png" alt="中秋節">
        </a>
      </div>
      <div class="col-sm-6 col-md-3 text-center mb-3">
        <a class="" href="/student/holidaydetail/8">
          <img class="img-fluid bg_light round_1 box_shadow_4" src="/images/holiday/4_8重陽節.png" alt="重陽節">
        </a>
      </div>
    </div>
  </div>
</main>

<?php $this->load->view("common/footer.php"); ?>


</body>

</html>