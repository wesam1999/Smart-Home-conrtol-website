<div class="information col-6 col-mob-12">
    <div class="alertEntranceHall">
        <h1>All Alert</h1>
        <hr style="width: 90%;">
        <div class="Listdevice" id="Listdevice">
            <?php
            include_once  '../Database/alert.php';
            include_once  '../Database/Database.php';
            include_once  '../Database/DAL_alert.php';
            $database = new Database();
            $db = $database->getConnection();
            $DAL_alert = new DAL_alert();
            
            $listAlert = $DAL_alert->read($db);
            if ($listAlert->num_rows > 0) {
                while ($alert = $listAlert->fetch_assoc()) {
                   
                    echo "  
 <div class='notfication unRead' id='notfication' onclick=\"getAlertData(" . htmlspecialchars($alert['id']) . ", 'controlerAlert')\" data-id='" . $alert['id'] . "'>
                 <img src='" . htmlspecialchars($alert['img']) . "' class='imagenotfprofile'>
                <div class='requestNotification'>
                    <p><strong> " . htmlspecialchars($alert['notificraion']) . "</strong></p>
                    <p>" . htmlspecialchars($alert['shortDescription']) . "</p>
                    <div class='Time-Name'>
                     
                        <h6>" . htmlspecialchars($alert['dateTime']) . "</h6>
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
<div class="controlerAlertAll col-10 col-mob-12" id="controlerAlert">

</div>