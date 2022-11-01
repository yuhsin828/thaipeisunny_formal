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
        <li class="breadcrumb-item text_dark active" aria-current="page">小學部課文唸讀</li>
      </ol>
    </div>

    <!-- 標籤切換鈕 -->
    <div class="row">
      <div class="col-6 col-md-4 col-lg-2 p-2 text-center round_top_1" id="g1">
        <img class="img-fluid pointer" src="/images/textbook/g1.svg" alt="一年級" onclick="gradeClick(1)">
      </div>
      <div class="col-6 col-md-4 col-lg-2 p-2 text-center round_top_1" id="g2">
        <img class="img-fluid pointer" src="/images/textbook/g2.svg" alt="二年級" onclick="gradeClick(2)">
      </div>
      <div class="col-6 col-md-4 col-lg-2 p-2 text-center round_top_1" id="g3">
        <img class="img-fluid pointer" src="/images/textbook/g3.svg" alt="三年級" onclick="gradeClick(3)">
      </div>
      <div class="col-6 col-md-4 col-lg-2 p-2 text-center round_top_1" id="g4">
        <img class="img-fluid pointer" src="/images/textbook/g4.svg" alt="四年級" onclick="gradeClick(4)">
      </div>
      <div class="col-6 col-md-4 col-lg-2 p-2 text-center round_top_1" id="g5">
        <img class="img-fluid pointer" src="/images/textbook/g5.svg" alt="五年級" onclick="gradeClick(5)">
      </div>
      <div class="col-6 col-md-4 col-lg-2 p-2 text-center round_top_1" id="g6">
        <img class="img-fluid pointer" src="/images/textbook/g6.svg" alt="六年級" onclick="gradeClick(6)">
      </div>
    </div>

    <!-- 播放器 -->
    <!-- <div class="player_pos">
      <audio id="audio1" src="" controls></audio>
    </div> -->

    <!-- 課次選單 -->
    <div class="row bg_light round_bottom_1">
      <div class="py-3 px-3 px-lg-5">
        <!-- 播放器 -->
        <div class="row justify-content-center my-3">
          <audio id="audio1" src="" controls></audio>
        </div>

        <!-- 上學期 -->
        <div class="d-flex justify-content-center my-3">
          <img src="/images/textbook/s1.svg" alt="上學期">
        </div>
        <div class="d-flex justify-content-center flex-wrap gap-2 gap-sm-3 mb-5">
          <?php for ($i = 1; $i <= 15; $i++) {
            echo '<div class="bg_lightPink round_1 box_shadow_2 pointer" id="S1L' . $i . '" onclick="lessonClick(1, ' . $i . ')">';
            echo ' <img class="img-fluid" src="/images/textbook/l' . $i . '.svg" alt="第' . $i . '課">';
            echo '</div>';
          }
          ?>
        </div>

        <!-- 下學期 -->
        <div class="d-flex justify-content-center mb-3">
          <img src="/images/textbook/s2.svg" alt="下學期">
        </div>
        <h6 class="pb-2 text-center fs_sr"><i class="fa fa-bullhorn me-1" aria-hidden="true"></i>下學期第13-15課錄製中，暫時無法播放，敬請見諒</h6>
        <div class="d-flex justify-content-center flex-wrap gap-2 gap-sm-3 mb-5">
          <?php for ($i = 1; $i <= 15; $i++) {
            echo '<div class="bg_lightPink round_1 box_shadow_2 pointer" id="S2L' . $i . '" onclick="lessonClick(2, ' . $i . ')">';
            echo ' <img class="img-fluid" src="/images/textbook/l' . $i . '.svg" alt="第' . $i . '課">';
            echo '</div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
  $('title').text('小學部課文唸讀｜小泰陽華文樂園');

  let curGrade = 1;
  let curSemester = 1;
  let curLesson = 1;

  gradeClick(curGrade);

  // 每切換年級，更改年級按鈕的背景顏色（預設一進來是1年級）；呼叫 結束音檔播放、復原課次按鈕
  function gradeClick(g) {
    curGrade = g;
    for (let i = 1; i <= 6; i++) {
      $('#g' + i).removeClass('bg_light');
    };
    $('#g' + g).addClass('bg_light');
    endMp3();
    newList();
  }

  // 每切換年級，復原所有課次按鈕的背景顏色；呼叫 預設第一課
  function newList() {
    for (let i = 1; i <= 15; i++) {
      $('#S1L' + i).removeClass('bg_pink').addClass('bg_lightPink');
      $('#S2L' + i).removeClass('bg_pink').addClass('bg_lightPink');
    };

    $('#S2L15').removeClass('btn_disable').addClass('pointer box_shadow_2');
    if (curGrade == 6) {
      $('#S2L15').addClass('btn_disable').removeClass('pointer box_shadow_2');
    }

    // 下學期第13-15課錄製中，暫時無法播放，敬請見諒
    if (curGrade == 4 || curGrade == 5 || curGrade == 6) {
      $('h6').show();
    } else {
      $('h6').hide();
    }
    defaultLesson();
  }

  // 每切換年級，預設第一課按鈕的背景顏色、取消自動播放音檔、加入音檔
  function defaultLesson() {
    $('#S1L1').removeClass('bg_lightPink').addClass('bg_pink');
    $('#audio1').removeAttr("autoplay");
    $('#audio1').attr("src", '/wav/textbook/' + curGrade + '_1' + '_' + 'L1' + '.wav');
  }

  // 每切換課次，復原所有課次按鈕的背景顏色、設定此課次按鈕的背景顏色；呼叫 播放音檔
  function lessonClick(S, L) {
    curSemester = S;
    curLesson = L;
    for (let i = 1; i <= 15; i++) {
      $('#S1L' + i).removeClass('bg_pink').addClass('bg_lightPink');
      $('#S2L' + i).removeClass('bg_pink').addClass('bg_lightPink');
    };
    $('#S' + S + 'L' + L).removeClass('bg_lightPink').addClass('bg_pink');

    playMp3();
  }

  // 每切換課次，加入音檔並自動播放
  function playMp3() {
    $('#audio1').attr("autoplay", "");
    $('#audio1').attr("src", '/wav/textbook/' + curGrade + '_' + curSemester + '_' + 'L' + curLesson + '.wav');
  }

  // 每切換年級，強制結束音檔播放
  function endMp3() {
    $('#audio1').attr("src", "");
  }
</script>