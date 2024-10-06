<?php
 include_once  '../Database/alert.php';
 include_once  '../Database/Database.php';
 include_once  '../Database/DAL_alert.php';
 include_once  '../Database/DAL_news.php';
 $database = new Database();
 $db = $database->getConnection();
 $DAL_alert = new DAL_alert();
 $DAL_news = new DAL_news();
 $item2 = $_GET['itemshow'];

 if($_GET['itemshow']==="box"){
 if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $listAlert = $DAL_alert->readWhenID($db,$id);
    
    if ($listAlert->num_rows > 0) {
    $alert = $listAlert->fetch_assoc();

    
            echo "
            
                <img src='" . htmlspecialchars($alert['img']) . "'>
           
                <div class='databox'>
                    <h1>" . htmlspecialchars($alert['notificraion']) . "</h1>
                    <p> By:&nbsp;" . htmlspecialchars($alert['name']) . ";</p>
                    <P> Posted on:" . htmlspecialchars($alert['dateTime']) . "</P>
                    <p>" . htmlspecialchars($alert['description']) . "</p>
                    
                    <div class='actionButton'>
                        <input type='button' value='colse' onclick='closeLightBox()'>
                        <input type='button' value='TakeAction' onclick='takeAction()'>
                    </div>
                </div>
            ";
        
    }
    else{
        echo "no row found";
    }
}
}elseif($_GET['itemshow']==="controlerAlert"){
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $listAlert = $DAL_alert->readWhenID($db,$id);
        
        if ($listAlert->num_rows > 0) {
        $alert = $listAlert->fetch_assoc();
     
        
                echo "
                
                    <img src='" . htmlspecialchars($alert['img']) . "'style=' width: 50px; height: 50px;'>
               
                    <div class='databoxAlertAll'>
                        <h1>" . htmlspecialchars($alert['notificraion']) . "</h1>
                        <p> By:&nbsp;" . htmlspecialchars($alert['name']) . ";</p>
                        <P> Posted on:" . htmlspecialchars($alert['dateTime']) . "</P>
                        <p>" . htmlspecialchars($alert['description']) . "</p>
                    </div>
                ";
            
        }
        else{
            echo "no row found";
        }
    }
}elseif($_GET['itemshow']==="controlerNews"){
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $listNews = $DAL_news->readOne($db,$id);
        
        if ($listNews->num_rows > 0) {
        $news = $listNews->fetch_assoc();
     $DAL_news->update($db,$id);
        
                echo "
                
                    <img src='" . htmlspecialchars($news['img']) . "'style=' width: 50px; height: 50px;'>
               
                    <div class='databoxAlertAll'>
                        <h1>" . htmlspecialchars($news['title']) . "</h1>
                        <p> By:&nbsp;" . htmlspecialchars($news['name']) . ";</p>
                        <P> Posted on:" . htmlspecialchars($news['time']) . "</P>
                        <p>" . htmlspecialchars($news['description']) . "</p>
                    </div>
                ";
            
        }
        else{
            echo "no row found";
        }
    }
    
}
?>