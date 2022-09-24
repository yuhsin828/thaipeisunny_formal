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
                <li class="breadcrumb-item text_dark active" aria-current="page">幼兒園讀本唸讀</li>
            </ol>
        </div>

        <!-- 播放器 -->
        <!-- <div class="player_pos">
            <audio id="audio1" src="" controls></audio>
        </div> -->

        <!-- 課次選單 -->
        <div class="row bg_light round_1">
            <div class="py-3 px-3 px-lg-5">
                <!-- 播放器 -->
                <div class="row justify-content-center my-3">
                    <audio id="audio1" src="" controls></audio>
                </div>

                <div class="d-flex justify-content-center flex-wrap gap-3 mt-5 mb-3">
                    <div class="bg_lightPink round_1 box_shadow_2 pointer" id="btn1" onclick="lessonClick(1,1,6,1)">
                        <img class="img-fluid" src="/images/kidsreader/上冊L1-6.svg" alt="上冊 第1~6課">
                    </div>
                    <div class="bg_lightPink round_1 box_shadow_2 pointer" id="btn2" onclick="lessonClick(1,7,12,2)">
                        <img class="img-fluid" src="/images/kidsreader/上冊L7-12.svg" alt="上冊 第7~12課">
                    </div>
                </div>

                <div class="d-flex justify-content-center flex-wrap gap-3 mb-5">
                    <div class="bg_lightPink round_1 box_shadow_2 pointer" id="btn3" onclick="lessonClick(2,1,6,3)">
                        <img class="img-fluid" src="/images/kidsreader/下冊L1-6.svg" alt="下冊 第1~6課">
                    </div>
                    <div class="bg_lightPink round_1 box_shadow_2 pointer" id="btn4" onclick="lessonClick(2,7,8,4)">
                        <img class="img-fluid" src="/images/kidsreader/下冊L7-8.svg" alt="下冊 第7~8課">
                    </div>
                    <div class="bg_lightPink round_1 box_shadow_2 pointer" id="btn5" onclick="lessonClick(2,9,12,5)">
                        <img class="img-fluid" src="/images/kidsreader/下冊L9-12.svg" alt="下冊 第9~12課">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

</body>

</html>



<script>
    function lessonClick(semester, start, end, btn) {
        for (let i = 1; i <= 5; i++) {
            $('#btn' + i).removeClass('bg_pink');
            $('#btn' + i).addClass('bg_lightPink');
        };
        $('#btn' + btn).removeClass('bg_lightPink').addClass('bg_pink');

        playMp3(semester, start, end, btn);
    }

    function playMp3(semester, start, end, btn) {
        $('#audio1').attr("autoplay", "");
        $('#audio1').attr("src", '/wav/kidsreader/' + semester + '_' + 'L' + start + '-' + end + '.wav');
    }
</script>