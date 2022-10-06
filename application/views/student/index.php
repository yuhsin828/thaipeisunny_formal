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
        <li class="breadcrumb-item text_dark active" aria-current="page">學生學習區</li>
      </ol>
    </div>

    <div class="row g-3 g-lg-5 justify-content-center">
      <!-- 課內學習 -->
      <div class="col-sm-6 col-lg-4 my-5">
        <div class="p-3 text-center bg_light round_1">
          <div class="menu_ic_pos">
            <img class="img-fluid ic_ctrl" src="/images/student/ic_in.png" alt="課內學習">
          </div>
          <img class="img-fluid mt-2 mb-3" src="/images/student/title_in.svg" alt="課內學習">

          <a class="" href="/student/zhuyin">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/student/btn_in_zhuyin.svg" alt="注音符號">
            </div>
          </a>
          <a class="" href="/student/kidsreader">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/student/btn_in_kidsreader.svg" alt="幼兒園讀本唸讀">
            </div>
          </a>
          <a class="" href="/student/textbook">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/student/btn_in_textbook.svg" alt="小學部課本唸讀">
            </div>
          </a>
        </div>
      </div>
      <!-- 課外學習 -->
      <div class="col-sm-6 col-lg-4 my-5">
        <div class="p-3 text-center bg_light round_1">
          <div class="menu_ic_pos">
            <img class="img-fluid ic_ctrl" src="/images/student/ic_out.png" alt="課外學習">
          </div>
          <img class="img-fluid mt-2 mb-3" src="/images/student/title_out.svg" alt="課外學習">

          <a class="" href="/student/story">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/student/btn_out_story.svg" alt="小泰陽故事集">
            </div>
          </a>
          <a class="" href="/student/huayu">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/student/btn_out_huayu.svg" alt="生活華語">
            </div>
          </a>
          <a class="" href="/student/holiday">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/student/btn_out_holiday.svg" alt="中華節慶">
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>