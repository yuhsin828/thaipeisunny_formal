<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php"); ?>

<main class="bg_light">
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
        <li class="breadcrumb-item text_dark active" aria-current="page">注音符號</li>
      </ol>
    </div>

    <div class="row justify-content-center">
      <!-- 注音列表 -->
      <div class="col-lg-4 my-3">
        <div class="d-flex flex-wrap justify-content-start gap-3">
          <?php for ($i = 1; $i <= 37; $i++) {
            if ($i < 10) {
              echo '<img class="img-fluid bg_lightPink round_50 box_shadow_2 pointer" id="0' . $i . '" src="/images/zhuyin/0' . $i . '" alt="0' . $i . '" onclick="letterClick(\'0' . $i . '\')">';
            } else {
              echo '<img class="img-fluid bg_lightPink round_50 box_shadow_2 pointer" id="' . $i . '" src="/images/zhuyin/' . $i . '" alt="' . $i . '" onclick="letterClick(\'' . $i . '\')">';
            }
          }
          ?>
        </div>
      </div>

      <!-- 右半部 -->
      <div class="col-lg-8 row my-3">
        <!-- 主圖 -->
        <div class="col-xl-9 col-xxl-8 mb-2" id="zhuyinMain">
          <img class="img-fluid" id="mainPic" src="/images/zhuyin/mainPic/A_01_a.jpg" alt="注音">
        </div>
        <!-- 選項切換 -->
        <div class="col-xl-3 col-xxl-3 d-flex flex-wrap justify-content-between gap-2">
          <div class="d-flex flex-wrap flex-xl-column p-2 bg_lightOrange round_1">
            <img class="img-fluid round_1 pointer" id="btn_zhuyin" src="/images/zhuyin/btn_zhuyin.svg" alt="注音" onclick="changeMainPic('a')">
            <img class="img-fluid round_1 pointer" id="btn_write" src="/images/zhuyin/btn_write.svg" alt="筆順" onclick="changeMainPic('b')">
            <img class="img-fluid round_1 pointer" id="btn_img" src="/images/zhuyin/btn_img.svg" alt="圖卡" onclick="changeMainPic('c')">
          </div>
          <div class="d-flex flex-wrap flex-xl-column p-2 bg_lightOrange round_1">
            <img class="img-fluid round_1 pointer" id="play1" src="/images/zhuyin/btn_sound_m.svg" alt="男聲" onclick="playMp3('1');">
            <img class="img-fluid round_1 pointer" id="play2" src="/images/zhuyin/btn_sound_f.svg" alt="女聲" onclick="playMp3('2');">
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<audio id="audio1" src=""></audio>
<audio id="audio2" src=""></audio>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
  $('title').text('注音符號｜小泰陽華文樂園');

  let letter = '01';
  let voice = 0;
  letterClick('01');

  // 每切換符號，呼叫 復原符號按鈕、復原右邊選單、秀出主圖，設定此符號按鈕的背景顏色（預設一進來是ㄅ）
  function letterClick(id2) {
    letter = id2;
    clearList();
    clearRight('a');
    showPic(id2, 'a');

    let i = parseInt(id2);
    if (i < 22) {
      $('#' + id2).removeClass('bg_lightPink').addClass('bg_pink');
    } else if (i < 25) {
      $('#' + id2).removeClass('bg_lightGreen').addClass('bg_green');
    } else {
      $('#' + id2).removeClass('bg_lightBlue').addClass('bg_blue');
    }
  }

  // 每切換符號，復原所有符號按鈕的背景顏色
  function clearList() {
    let target = '';
    for (let i = 1; i <= 37; i++) {
      if (i < 10) {
        target = '0' + i.toString();
      } else {
        target = i.toString();
      }

      if (i < 22) {
        $('#' + target).removeClass('bg_pink').addClass('bg_lightPink');
      } else if (i < 25) {
        $('#' + target).removeClass('bg_green').addClass('bg_lightGreen');
      } else {
        $('#' + target).removeClass('bg_blue').addClass('bg_lightBlue');
      }
    }
  }

  // 每切換符號，秀出主圖，畫面自動滑動到主圖（預設一進來是ㄅ）
  function showPic(id2) {
    $('#mainPic').attr("src", '/images/zhuyin/mainPic/A_' + id2 + '_a.jpg');

    const item = $('#zhuyinMain').offset().top - $('.navbar').innerHeight();
    $('html,body').animate({
      scrollTop: item
    }, 200);
  }

  // 每切換符號，或每切換右邊選項，復原右邊所有選項按鈕的背景顏色
  // 判斷是注音/筆順/圖卡，記錄voice和btn，設定此選項按鈕的背景顏色（預設是注音）
  function clearRight(n) {
    $('#btn_zhuyin').removeClass('bg_orange');
    $('#btn_write').removeClass('bg_orange');
    $('#btn_img').removeClass('bg_orange');

    $('#play1').removeClass('bg_orange');
    $('#play2').removeClass('bg_orange');

    let btn;
    switch (n) {
      case "a":
        voice = 0;
        btn = 'btn_zhuyin';
        break;
      case "b":
        voice = 0;
        btn = 'btn_write';
        break;
      case "c":
        voice = 1;
        btn = 'btn_img';
        break;
      default:
        voice = 0;
        btn = 'btn_zhuyin';
        break;
    }
    $('#' + btn).addClass('bg_orange');
  }

  // 每切換右邊選項，呼叫 復原右邊選單，判斷是注音/筆順/圖卡，秀出此主圖（預設是注音）
  function changeMainPic(n) {
    clearRight(n);

    let imgType;
    switch (n) {
      case "a":
        imgType = '.jpg';
        break;
      case "b":
        imgType = '.gif';
        break;
      case "c":
        imgType = '.svg';
        break;
      default:
        imgType = '.jpg';
        break;
    }
    $('#mainPic').attr("src", '/images/zhuyin/mainPic/A_' + letter + '_' + n + imgType);
  }

  //每切換音檔，復原兩個音檔按鈕的背景顏色，設定此音檔按鈕的背景顏色，判斷是（voice 注音/圖卡、n 男/女）哪個音檔
  function playMp3(n) {
    $('#play1').removeClass('bg_orange');
    $('#play2').removeClass('bg_orange');
    $('#play' + n).addClass('bg_orange');
    setTimeout(function() {
      $('#play' + n).removeClass('bg_orange');
    }, 1800)

    $('#audio' + n).attr("autoplay", "");
    if (parseInt(n) + voice == 1) {
      $('#audio' + n).attr("src", '/wav/zhuyin/A_' + letter + '_m_ab.mp3');
    } else if (parseInt(n) + voice == 2 && voice == 0) {
      $('#audio' + n).attr("src", '/wav/zhuyin/A_' + letter + '_w_ab.mp3');
    } else if (parseInt(n) + voice == 2 && voice == 1) {
      $('#audio' + n).attr("src", '/wav/zhuyin/A_' + letter + '_m_c.mp3');
    } else if (parseInt(n) + voice == 3) {
      $('#audio' + n).attr("src", '/wav/zhuyin/A_' + letter + '_w_c.mp3');
    }
  }
</script>