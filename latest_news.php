<?php
      
    
    $loading= connect();
    $result = mysqli_query($loading, "SELECT * FROM articles order by date desc limit 5");
    mysqli_close($loading);  
?>
 <div class="right_menu">
       
        <h3 class="latest_news_header">ПОСЛЕДНИЕ НОВОСТИ</h3>
        <?php foreach($result as $post):?>  
        <a href="/news.php?id=<?=$post['id']?>">
              <div class="latest_news"> 
                      <?=$post['themes']?>
               </div>
        </a>
        <hr>
        <?php endforeach;?>
        
</div>
        