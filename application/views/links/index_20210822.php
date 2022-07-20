<!doctype html>
<html lang="en">

<?php $this->load->view("common/header.php");?>

      <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/好站推薦.JPG')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h5 text-red">Welcome To Our Thaipei Sunny</span>
              <h1 class="text-cursive h5 text-white">好站推薦</h1>
              <p><a href="/home" class="text-white"><span  class="text-cursive text-white">首頁</span></a> <span class="mx-3">/</span><span  class="text-cursive text-white">好站推薦</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

<div class="site-section" style="background-color: #c3d69b">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="text-cursive h5 text-red d-block">Recommanded Links</span>
            <h2 class="text-black">好站推薦</h2>
            <p><img src="/images/post_4.jpg" width="350" height="300"></p>
          </div>
          <div class="col-md-8">
            <div class="pricing teal">
            
 
              <ul class="ul-check list-unstyled teal">
                <?php foreach($viewLinks->result() as $row){?>
                <li>
                    
                  
                    <a href="<?php echo $row->links_url;?>" target="_blank"><?php echo $row->links_title;?> </a>
                </li>  
               <?php } ?>
              </ul>
          
            </div>
          </div>
       
        </div>
      </div>
    </div>








    
<?php $this->load->view("common/footer.php");?>
    

  </body>

</html>

