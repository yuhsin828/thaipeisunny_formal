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
                <li class="breadcrumb-item text_dark active" aria-current="page">關於小泰陽</li>
            </ol>
        </div>

        <div class="row">
            <!-- 快速選單 -->
            <aside class="col-md-3">
                <ul class="nav flex-md-column px-2 py-3 listStyleNone">
                    <li class="nav-item border-bottom col-6 col-md-12 text-center" id="itemClick1" type="button">
                        <div class="nav-link text_dark">關於我們</div>
                    </li>
                    <li class="nav-item border-bottom col-6 col-md-12 text-center" id="itemClick2" type="button">
                        <div class="nav-link text_dark">聯絡我們</div>
                    </li>
                </ul>
            </aside>

            <!-- 內容 -->
            <article class="col-md-9 lh-lg">
                <!-- 關於我們 -->
                <div class="pb-3" id="list-item-1">
                    <h4 class="p-2 fw-bolder bg_lemonYellow">關於我們</h4>

                    <p class="notoSerif fw-bolder">
                        「想做得太多，能做得太少，那就勇往直前做到最好！」──國北小泰陽理念
                    </p>
                    <p>
                        <span class="bg_lightYellow round_1">國北小泰陽</span>是由國立臺北教育大學自然科學教育學系所創設之社團（現已變更為學務處課外組底下的社團），以泰北偏遠地區學生與家庭為服務對象，創立宗旨便是希望以專業教育技能重新定義志工價值。
                    </p>
                    <p>
                        一改過去的國際志工服務的廣域性，小泰陽針對單一場域進行長時間的關注與了解，以永續經營為前提，多方面進行教育志工服務，提供師資培育課程與教學物資援助，並隨著經驗累積，不斷調整服務方向與內容，逐漸擴大至巡迴教育、物資發放、教育制度建立、教育硬體汰新與深入家庭訪談等，藉由長時間耕耘泰北教育環境，了解當地真實需求，更獲得當地師生的認可與信賴。小泰陽永遠可以做得更多，不只是給予適時、適地、適物的協助，同時也發揮了國北教大最堅強的教育專業。
                    </p>
                    <p>
                        小泰陽以整體教學環境提升與教學品質更新為最終目標，陪著孩子重新發現希望，探索更多未來的可能性。考量當地環境，我們同時設立小泰陽師資培育基金與小泰陽急難救助獎學金，協助當地師長改善教育制度，創造優質教育環境，幫助更多學生一圓教育的夢想。
                    </p>
                    <p>
                        因為愛，我們蛻變，因為責任，我們矢志做到最好；或許，想做得太多，能做得太少，那就勇往直前做到最好！
                    </p>
                    <p>
                        我們是──國北小泰陽。
                    </p>
                </div>
                <!-- 聯絡我們 -->
                <div class="py-3" id="list-item-2">
                    <h4 class="p-2 fw-bolder bg_lemonYellow">聯絡我們</h4>

                    <h6 class="pt-2 fw-bolder">國立臺北教育大學 國北小泰陽</h6>
                    <div>
                        <i class="fa fa-facebook-square me-1" aria-hidden="true"></i>
                        <a class="text-decoration-none text_dark" target="_blank" href="https://zh-tw.facebook.com/thaipeisunny">國北小泰陽
                            <i class="fa fa-external-link ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div>
                        <i class="fa fa-envelope me-1" aria-hidden="true"></i>
                        <a class="text-decoration-none text_dark" target="_blank" href="mailto:thaipeisunny@gmail.com">thaipeisunny.web@gmail.com
                            <i class="fa fa-external-link ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div>
                        <i class="fa fa-map me-1" aria-hidden="true"></i>
                        <a class="text-decoration-none text_dark" target="_blank" href="https://goo.gl/maps/DR3SvAso4TjWCbrv7">臺北市大安區和平東路二段134號
                            <i class="fa fa-external-link ms-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

<script src="/js/about.js"></script>

</body>

</html>



<script>
    $('title').text('關於小泰陽｜小泰陽華文樂園');
</script>