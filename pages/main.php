  

<div class="information col-6 col-mob-12">
    <div class="alert">
        <h1>Alerts</h1>
        <hr style="width: 90%;">
        <div class="ListAlerts" id="ListAlert">
            <?php
            include_once  '../Database/alert.php';
            include_once  '../Database/Database.php';
            include_once  '../Database/DAL_alert.php';
            $database = new Database();
            $db = $database->getConnection();
            $DAL_alert = new DAL_alert();
            
            $listAlert = $DAL_alert->read($db);
            if ($listAlert->num_rows > 0) {
                $numberAlert=0;
                while ($alert = $listAlert->fetch_assoc()) {
                 
                    echo "  
                        <div class='notfication unRead'id='notfication'>
                        <div class='notfication' onclick='viewAlert(" . htmlspecialchars($alert['id']) . ")' data-id='".$alert['id']."'>
                <img src='" . htmlspecialchars($alert['img']) . "' class='imagenotfprofile'>
                <div class='requestNotification'>
                    <p><strong> " . htmlspecialchars($alert['notificraion']) . "</strong></p>
                    <p>" . htmlspecialchars($alert['shortDescription']) . "</p>
                    <div class='Time-Name'>
                     
                        <h6>" . htmlspecialchars($alert['dateTime']) . "</h6>
                    </div>
                </div>
              

               </div>
                <i class='fa fa-eye' aria-hidden='true' onclick='updateStatus(".htmlspecialchars( $alert['id']).")'></i>
               </div>
             
          
               <hr style='width: 100%;'>
                    ";
 

                    $numberAlert++;
                    if ($numberAlert == 3)break; 

                }
             
                
            } else {
                echo "<p>No alerts found.</p>";
            }
           
            $db->close();


            ?>
           
            <a  onclick="changeContent('Alert')" style="color:blue ; display:flex;align-items: center;justify-content: center;">See More</a>   
        </div>
    </div>
    <div class="news">
        <h1>News</h1>
        <hr style="width: 100%;">
        <div class="listNews">

        <?php
         include_once  '../Database/News.php';
         include_once  '../Database/Database.php';
         include_once  '../Database/DAL_news.php';
         $database = new Database();
         $db = $database->getConnection();
         $DAL_news = new DAL_news();

         $listnews = $DAL_news->read($db);
         $numberAlert=0;
         if ($listnews->num_rows > 0) {
             while ($news = $listnews->fetch_assoc()) {
                $numberAlert++;
                if($numberAlert==5)break;
             
                 echo "  
        <div class='cardNews'>
                <img src='".htmlspecialchars($news['img'])."'>
                <div class='titleNews'>
                    <h3>".htmlspecialchars($news['title'])."</h3>
                    <p>".htmlspecialchars($news['time'])."</p>
                    <h6>".htmlspecialchars($news['shortDescription'])."</h6>
                   
                </div>
            </div>
                           ";
                
                }
            } else {
                echo "<p>No News found.</p>";
            }
            $db->close();
        ?>

        </div>
        <a  onclick="changeContent('News')" style="color:blue ; display:flex;align-items: center;justify-content: center;">See More</a>   

    </div>
</div>

<div class="controler col-10 col-mob-12">
    <h1>Control</h1>
    <div class="container">
        <?php
        include_once "../Database/Database.php";
        include_once "../Database/DAL_device.php";
        include_once "../Database/device.php";

        $Database=new Database();
        $DAL_device=new DAL_device();
        $device=new Device();
        $db=$Database->getConnection();
        $listDevice=$DAL_device->read($db);
        $numberDevice=0;
            while ($device= $listDevice->fetch_assoc()) {
                $numberDevice++;
              

                echo'
                <div class="card col-6">
                <img src="../cctv.png" id="imageDevice" class="imageDevice">
                <h2>' . htmlspecialchars($device['diviceName']) . '</h2>
                <h2>' . htmlspecialchars($device['type']) . '</h2>
                <p>' . htmlspecialchars($device['maker']) . '</p>
                </div>
      '; 
       if ($numberDevice==5)break;
           
            }

        ?>
        
        <div >
        <img src="../ask-for-help.png" id="imageAC">
        </div>
    </div>
    <a  onclick="changeContent('Device')" style="color:blue ; display:flex;align-items: center;justify-content: center;">See More</a>   

  </div> 
