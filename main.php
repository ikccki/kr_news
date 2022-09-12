<?php

    $loading= connect();
    $result = mysqli_query($loading, "SELECT * FROM articles order by date desc");
    mysqli_close($loading);  
?>

<div class="main">

        <?php foreach($result as $art):?>  
        <article  class="main_news"><a class="link_on_main" href="/news.php?id=<?=$art['id']?>"><div class="caption"><h4><?=$art['themes']?></h4></div></a></article>
         <?php endforeach;?>  

</div>
   
    
       
