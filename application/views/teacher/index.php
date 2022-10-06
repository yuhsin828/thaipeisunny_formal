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
        <li class="breadcrumb-item text_dark active" aria-current="page">教師交流區</li>
      </ol>
    </div>

    <div class="row g-3 g-lg-5 justify-content-center">
      <!-- 教學交流 -->
      <div class="col-sm-6 col-lg-4 my-5">
        <div class="p-3 text-center bg_light round_1">
          <div class="menu_ic_pos">
            <img class="img-fluid ic_ctrl" src="/images/teacher/ic_教學交流.png" alt="教學交流">
          </div>
          <img class="img-fluid mt-2 mb-3" src="/images/teacher/title_教學交流.svg" alt="教學交流">

          <a class="" href="https://youtube.com/playlist?list=PLr8qlAE1LVtD87GQzUYT8dOR5O88eXVMo" target="_blank">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/teacher/btn_班級經營.svg" alt="班級經營">
            </div>
          </a>
          <a class="" href="https://youtube.com/playlist?list=PLr8qlAE1LVtB61-paX6jCCi1zv-qYi0oQ" target="_blank">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/teacher/btn_課前準備.svg" alt="課前準備">
            </div>
          </a>
          <a class="" href="https://youtube.com/playlist?list=PLr8qlAE1LVtBpImwSyjWGyFHwE956hUKB" target="_blank">
            <div class="bg_beachBlue round_1 box_shadow_4 mb-3">
              <img class="img-fluid" src="/images/teacher/btn_課堂安排.svg" alt="課堂安排">
            </div>
          </a>
        </div>
      </div>
      <!-- 教材資源 -->
      <div class="col-sm-6 col-lg-4 my-5">
        <div class="p-3 text-center bg_light round_1">
          <div class="menu_ic_pos">
            <img class="img-fluid ic_ctrl" src="/images/teacher/ic_教材資源.png" alt="教材資源">
          </div>
          <img class="img-fluid mt-2 mb-3" src="/images/teacher/title_教材資源.svg" alt="教材資源">

          <a class="pointer_none" href="#">
            <div class="bg_beachBlue round_1 btn_disable mb-3">
              <img class="img-fluid" src="/images/teacher/btn_各冊內容對照.svg" alt="各冊內容對照">
            </div>
          </a>
          <a class="pointer_none" href="#">
            <div class="bg_beachBlue round_1 btn_disable mb-3">
              <img class="img-fluid" src="/images/teacher/btn_生字練習簿.svg" alt="生字練習簿">
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