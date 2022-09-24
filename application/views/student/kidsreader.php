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
                    <h1 class="text-cursive h5 text-teal">華語讀本唸讀</h1>
                    <p><a href="/home" class="text-white"><span class="text-cursive text-white">首頁</span></a> <span class="mx-3">/</span> <a href="/resource" class="text-white"><span class="text-cursive text-white">教師交流區</span></a> <span class="mx-3">/</span><span class="text-cursive text-white">華語讀本唸讀</span></p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="site-section" style="background-color: #d99694">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <span class="text-cursive h5 text-red d-block">Textbook Reading</span>
                <h2 class="text-white">華語讀本唸讀
                </h2>
            </div>
        </div>
        <div class="row text-center">
            <?php foreach ($viewClass1->result() as $row) { ?>
                <div class="col-4">

                    <a data-fancybox data-type="iframe" data-src="/wavplayer/index/<?php echo $row->textbook_reading_file; ?>" href="javascript:;" data-options='{"type" : "iframe", "iframe" : {"preload" : true, "css" : {"width" : "600px","height":"250px"}}}'>
                        <img src="/images/student/kidsreading/<?php echo $row->textbook_reading_image; ?>" style="height:70%;height:70%;">

                    </a>
                </div>
            <?php } ?>
        </div>

        <div class="row text-center">
            <?php foreach ($viewClass2->result() as $row) { ?>
                <div class="col-4">
                    <a data-fancybox data-type="iframe" data-src="/wavplayer/index/<?php echo $row->textbook_reading_file; ?>" href="javascript:;" data-options='{"type" : "iframe", "iframe" : {"preload" : true, "css" : {"width" : "600px","height":"250px"}}}'>

                        <img src="/images/student/kidsreading/<?php echo $row->textbook_reading_image; ?>" style="height:70%;height:70%;">

                    </a>
                </div>
            <?php } ?>
        </div>


    </div>
</div>


<script>
    $('[data-fancybox]').fancybox({
        toolbar: false,
        smallBtn: true,
        width: 500 px,
        height: 300 px;
        iframe: {
            preload: false
        }
    })
</script>






<?php $this->load->view("common/footer.php"); ?>


</body>

</html>