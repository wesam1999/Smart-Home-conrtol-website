<div class="information col-6 col-mob-12">
    <div class="NewsEntranceHall">
        <h1>All News</h1>
        <hr style="width: 90%;">
        <div class="Listdevice" id="Listdevice">
            <?php
            include_once  '../Database/News.php';
            include_once  '../Database/Database.php';
            include_once  '../Database/DAL_news.php';
            $database = new Database();
            $db = $database->getConnection();
            $DAL_news = new DAL_news();
            
            $listNews = $DAL_news->read($db);
            if ($listNews->num_rows > 0) {
                while ($news = $listNews->fetch_assoc()) {
                   
                    echo "  
 <div class='notfication unRead' id='notfication' 
 onclick=\"getAlertData(" . htmlspecialchars($news['id']) . ", 'controlerNews')\" data-id='" . $news['id'] . "
 '>
                 <img src='" . htmlspecialchars($news['img']) . "' class='imagenotfprofile'>
                <div class='requestNotification'>
                    <p><strong> " . htmlspecialchars($news['title']) . "</strong></p>
                    <p>" . htmlspecialchars($news['shortDescription']) . "</p>
                    <div class='Time-Name'>
                     
                        <h6>" . htmlspecialchars($news['time']) . "</h6>
                    </div>
                </div>



               </div>
               <hr style='width: 100%;'>
                    ";
                    
                }
             
                
            } else {
                echo "<p>No alerts found.</p>";
            }
           
            $db->close();


            ?>

            
        </div>
    </div>

</div>
<div class="controlerAlertAll col-10 col-mob-12" id="controlerNews">

</div>
