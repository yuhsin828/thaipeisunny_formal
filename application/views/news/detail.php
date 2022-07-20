<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php");?>

      <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/img_4.jpg')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h5 text-red">Welcome To Our Thaipei Sunny</span>
              <h1 class="mb-3 font-weight-bold text-teal">最新消息</h1>
              <p><a href="/home" class="text-white"><span  class="text-cursive text-white">首頁</span></a> <span class="mx-3">/</span> <span  class="text-cursive text-white">最新消息</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
            <div class="text-cursive h5 text-red"><?php echo $viewNews->news_date;?></div> <br/>
        </div>
         <div class="row">
            <div><h3 class="text-black">   <span class="text-cursive"> <?php echo $viewNews->news_title;?></span></h3><br/>   </div>
        </div>
         <div class="row"  style="text-align: right;">
            <div class="text-cursive h5">作者：<?php echo $viewNews->news_author;?></div> <br/>
        </div>
        <div class="row">
       <div class="bg-white p-3 p-md-5">
             <span class="text-cursive"> <?php echo nl2br($viewNews->news_content);?>
            </span>
            </div>

        </div>
      </div>
    </div>
    







    
<?php $this->load->view("common/footer.php");?>
    

  </body>

</html>

