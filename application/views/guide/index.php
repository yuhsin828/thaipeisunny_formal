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
                <li class="breadcrumb-item text_dark active" aria-current="page">網站導覽</li>
            </ol>
        </div>

        <div class="row">
            <!-- 快速選單 -->
            <aside class="col-md-3">
                <ul class="nav flex-md-column px-2 py-3 listStyleNone">
                    <li class="nav-item border-bottom col-6 col-sm-4 col-md-12 text-center" id="itemClick1" type="button">
                        <div class="nav-link text_dark">網站緣起</div>
                    </li>
                    <li class="nav-item border-bottom col-6 col-sm-4 col-md-12 text-center" id="itemClick2" type="button">
                        <div class="nav-link text_dark">網站沿革</div>
                    </li>
                    <li class="nav-item border-bottom col-6 col-sm-4 col-md-12 text-center" id="itemClick3" type="button">
                        <div class="nav-link text_dark">操作指引</div>
                    </li>
                </ul>
            </aside>

            <!-- 內容 -->
            <article class="col-md-9 lh-lg">
                <!-- 網站緣起 -->
                <div class="py-3" id="list-item-1">
                    <h4 class="p-2 fw-bolder bg_lemonYellow">網站緣起</h4>

                    <h6 class="pt-2 fw-bolder">起點｜為什麼會有國北小泰陽學習資源網</h6>
                    <p>
                        2020年初，新冠肺炎（COVID-19）疫情於全球肆虐，國北小泰陽每年暑假至泰北清萊府華文學校的服務計畫，因此被迫中斷。出團服務對於團隊而言，是十多年以來，每年最為看重的大事。藉由每次為期四到五週的服務，我們與華校師生、當地村民建立了深厚的信任關係與情感連結。面對突如其來的轉變，促使團隊開始思考：我們的下一步是什麼？
                    </p>

                    <h6 class="pt-2 fw-bolder">思考與決定｜我們要怎麼做──架設網站</h6>
                    <p>
                        近年有賴於各界合力，當地的電力供應與網際網路漸趨穩定與普及。小泰陽在臺預備服務的期間，仍得以持續與華校師生保持聯繫。我們便由此開始發想、思考透過線上管道與泰北師生交流的可能性。
                        綜合評估當地華校需求與網路設備條件後，我們於2020年7月架設「國北小泰陽學習資源網」，將與華文學習與教學相關的資源分門別類，提供給泰北華校的師生，並且藉由網站架構的功能設計，回應學生、教師等不同身分的使用需求。
                    </p>

                    <h6 class="pt-2 fw-bolder">展望｜網站成為穩定維繫的線上平臺</h6>
                    <p>
                        <span class="notoSerif">「值得去做的事，永遠都不會太早或太遲。」──《班傑明的奇幻之旅》</span><br>
                        無論未來團隊是否能夠順利出團至當地服務，學習資源網將會是小泰陽長期經營、持續更新的線上平臺，與泰北師生共創友善的華文學習園地。藉由網路的無遠弗屆，縮短我們與泰北之間的距離，傳遞我們對泰北的關心。
                    </p>
                </div>
                <!-- 網站沿革 -->
                <div class="py-3" id="list-item-2">
                    <h4 class="p-2 fw-bolder bg_lemonYellow">網站沿革</h4>

                    <h6 class="pt-2 fw-bolder">行動起步｜2020.07 - 2021.08</h6>
                    <p>網站共分為四大主區塊，分別是：</p>

                    <p>
                        <span class="fw-bolder">學生學習區：</span>
                        根據華校幼幼班、小學部學生使用的華文教材，我們親自製作輔助的學習素材；同時上架團隊另製的多元主題學習材料，以利學生延伸了解語言在生活中、在中華文化中的樣貌。團隊也於Facebook創立「國北小泰陽學習資源網_交流板」社團，期待小泰陽能成為更加主動的服務角色，結合社群軟體的傳播力與流通性，與華校學生進行即時的互動與回饋。
                    </p>

                    <p>
                        <span class="fw-bolder">教師交流區：</span>
                        小泰陽將華校小學部主要使用的華文課本、習作、教師手冊內容進行綜合對照，重整成容易閱讀的表格，幫助教師快速連結學生的先備經驗並預備教學；而教學交流的內容，則運用影片的形式，分享團隊成員在備課與教學階段，會以哪些原則與目標進行準備。期望能透過與當地老師的交流，促進彼此的專業成長，為教學帶來更多可能性。
                    </p>

                    <p>
                        <span class="fw-bolder">好站推薦：</span>
                        團隊嘗試從學生的角度，發想學習華文時會遇到的問題，以及從教師的視角，思考教學時可能需要使用到的資源。以問題點與功能性作為分類，連結現有的線上資源，並輔以由我們製作的網站操作教學影片，提供給泰北華校師生作為延伸學習或資料參照。
                    </p>

                    <p>
                        <span class="fw-bolder">下載專區：</span>
                        在Google雲端硬碟設立資料夾，將團隊所製作的華文學習與教學資源相關檔案置於其中，包含華文讀本與課文唸讀之音檔、華文教材對照表與附錄等。期待華校師生能夠運用這些資源，增進學習與教學。
                    </p>
                </div>
                <!-- 操作指引 -->
                <div class="py-3" id="list-item-3">
                    <h4 class="p-2 fw-bolder bg_lemonYellow">操作指引</h4>

                    <h6 class="pt-2">準備中，敬請期待<i class="fa fa-wrench ms-1" aria-hidden="true"></i></h6>
                </div>
            </article>
        </div>
    </div>
</main>

<?php $this->load->view("common/footer.php"); ?>

<script src="./js/about.js"></script>

</body>

</html>



<script>
    $('title').text('網站導覽｜小泰陽華文樂園');
</script>