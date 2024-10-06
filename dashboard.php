<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleResponsive.css">
    <link rel="stylesheet" href="styleSideBar.css">
    <link rel="stylesheet" href="styleMainPage.css">
    <link rel="stylesheet" href="styledevice.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Automation Dashboard</title>
    <script src="ChangeContent.js"></script>
    <script src="HideSideBar.js"></script>  
    <script>
    function takeAction(){
        alert("takeAction");
    }

    function viewAlert(id) {
        getAlertData(id,'box');
        
        let backdropAlert = document.getElementById("backdropAlert");
        let statusReaded = document.getElementById("notfication");
        let lightBox = document.getElementById("box");

        if (backdropAlert.classList.contains("hidden")) {
            backdropAlert.classList.remove("hidden");
            backdropAlert.classList.add("shown");
            statusReaded.classList.remove('unRead');

        }

        if (lightBox.classList.contains("hidden")) {
            lightBox.classList.remove("hidden");
            lightBox.classList.add("shown");
         
        }
        removeFromDiv();     
    }

    function removeFromDiv() {
        let containingElement = document.querySelector('#backdropAlert');
    }

    function getAlertData(id,Elementid) {
        
        if (Elementid==="box") {
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
                if (xmlhttp.status == 200) {
                    document.getElementById("box").innerHTML = xmlhttp.responseText;
                } else if (xmlhttp.status == 400) {
                    alert('There was an error 400');
                } else {
                    alert('something else other than 200 was returned');
                }
            }
        };
        

        xmlhttp.open("GET", routerpage("getSingleAlert",id,Elementid), true);
        xmlhttp.send();
        }else if(Elementid==="controlerAlert"){
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
                if (xmlhttp.status == 200) {
                    document.getElementById("controlerAlert").innerHTML = xmlhttp.responseText;
                } else if (xmlhttp.status == 400) {
                    alert('There was an error 400');
                } else {
                    alert('something else other than 200 was returned');
                }
            }
        };

        xmlhttp.open("GET", routerpage("getSingleAlert",id,Elementid), true);
        xmlhttp.send();
        }else if(Elementid==="controlerNews"){
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == XMLHttpRequest.DONE) { // XMLHttpRequest.DONE == 4
                if (xmlhttp.status == 200) {
                    document.getElementById("controlerNews").innerHTML = xmlhttp.responseText;
                } else if (xmlhttp.status == 400) {
                    alert('There was an error 400');
                } else {
                    alert('something else other than 200 was returned');
                }
            }
        };
       
        xmlhttp.open("GET",routerpage("getSingleAlert",id,Elementid), true);
        xmlhttp.send();
        }
       
       
    }

    function closeLightBox() {
        let backdropAlert = document.getElementById('backdropAlert');
        let lightBox = document.getElementById("box");

        if (backdropAlert.classList.contains('shown')) {
            backdropAlert.classList.remove('shown');
            backdropAlert.classList.add('hidden');
        }

        if (lightBox.classList.contains('shown')) {
            lightBox.classList.remove('shown');
            lightBox.classList.add('hidden');
        }
    }
    function createDevice(arguments){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "pages/CreateDevice.php?newDevice=" + arguments, true);
        xmlhttp.send();
    }
   function deleteDevice(id){
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "../include/deleteDevice.php?id=" + id, true);
        xmlhttp.send();

   }
   function updateStatus(id){
    let notfication=document.getElementById("notfication");
    if (notfication.classList.contains("unRead")) {
        notfication.classList.remove("unRead");
    }else{
        notfication.classList.add("unRead");
    }
     

    
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "../include/updateStatusAlert.php?id=" + id, true);
        xmlhttp.send();

   }
  function showCustomDevice(){
    let deviceCustomDiv=document.getElementById("deviceCustomDiv");
     if(deviceCustomDiv.classList.contains("hideCustomDevice")){
        deviceCustomDiv.classList.remove("hideCustomDevice");
        deviceCustomDiv.classList.add("showCustomDevice");
     }else if(deviceCustomDiv.classList.contains("showCustomDevice")){
        deviceCustomDiv.classList.add("hideCustomDevice");
        deviceCustomDiv.classList.remove("showCustomDevice");
     }

  }
 function UpdateOrInsert(){
    selectElement =document.querySelector('#updateOrInsert');
    output = selectElement.value;
    console. log(output);
    if(output=="Insert"){
        let UpdateDevice=document.getElementById("UpdateDevice");
        let InsertDevice=document.getElementById("InsertDevice");
     if(InsertDevice.classList.contains("showInsertDevice")&&UpdateDevice.classList.contains("hideUpdateDevice")){
        InsertDevice.classList.remove("showInsertDevice");
        InsertDevice.classList.add("hideInsertDevice");

        UpdateDevice.classList.remove("hideUpdateDevice");
        UpdateDevice.classList.add("showUpdateDevice");
     }else if(InsertDevice.classList.contains("hideInsertDevice")&&UpdateDevice.classList.contains("showUpdateDevice")){
        InsertDevice.classList.add("showInsertDevice");
        InsertDevice.classList.remove("hideInsertDevice");

        UpdateDevice.classList.add("hideUpdateDevice");
        UpdateDevice.classList.remove("showUpdateDevice");
     }
    }else if(output=="Update"){
        let UpdateDevice=document.getElementById("UpdateDevice");
        let InsertDevice=document.getElementById("InsertDevice");
     if(UpdateDevice.classList.contains("hideUpdateDevice")&&InsertDevice.classList.contains("showInsertDevice")){
        UpdateDevice.classList.remove("hideUpdateDevice");
        UpdateDevice.classList.add("showUpdateDevice");

        InsertDevice.classList.add("hideInsertDevice");
        InsertDevice.classList.remove("showInsertDevice");
     }
    }else if(UpdateDevice.classList.contains("showUpdateDevice")&&InsertDevice.classList.contains("hideInsertDevice")){
        UpdateDevice.classList.add("hideUpdateDevice");
        UpdateDevice.classList.remove("showUpdateDevice");

        InsertDevice.classList.remove("hideInsertDevice");
        InsertDevice.classList.add("showInsertDevice");
    }
 }
    </script>
</head>

<body>
    <div id="backdrop" class="hidden">&nbsp;</div>
    <div id="backdropAlert"style=" position: fixed; top: 0; left: 0; height: 100vh; width: 100vw; background-color: rgba(25,25,25,0.61); backdrop-filter: blur(10px);"
        onclick="closeLightBox()" class="hidden">
    </div>
    <div class="box hidden" id="box">
            &nbsp;
        </div>

    <div class="title title_mob " id="title">
        <button id="sideBarToggleMobile" onclick="hideSideBarMobile()"><i class="fa fa-bars iconSize"></i></button>
        <p>Smart-Home</p>
    </div>
    <div class="mob-side-bar col-mob-10  hidden" id="SideBarMobile">
        <div class="cardtitle">
            <img src="logo.jpg">
            <p>Smart-Home</p>
            <img src="angle-left.png" alt="remove" id="AngleLeftRemoveBar" onclick="ImgRemoveBar()">
        </div>
        <div class="MobcardSearch">
            <input type="button" id="MobSearchIcon" class="MobSearchIcon">
            <input type="search" id="Mobsearch" class="Mobsearch">
        </div>
        <div class="Room">


            <h3>PAGES</h3>
            <div class="CardsRoom" id="CardsMainRoom" onclick="changeContent('main')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="MobTextMainBar">
                    <h4>Main Dashboard</h4>
                </div>
            </div>


            <div class="CardsRoom" id="CardsRoomEntrance" onclick="changeContent('Alert')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="MobTextEntraceBar">
                    <h4>Alert</h4>
                </div>
            </div>


            <div class="CardsRoom" id="CardsLivingRoom" onclick="changeContent('News')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="MobTextLivingRoomBar">
                    <h4>News</h4>
                </div>
            </div>

            <div class="CardsRoom" id="CardsFamilyRoom" onclick="changeContent('Device')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="MobTextFamilyBar">
                    <h4>Device</h4>
                </div>
            </div>



            <div class="CardsRoom" id="CardsLibaryRoom" onclick="changeContent('Help')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="MobTextLibaryBar">
                    <h4>Help</h4>
                </div>
            </div>

        </div>

        <div class="imges" style="font-size: 1.5rem;">
            <i class="fa fa-lightbulb-o " aria-hidden="true"
                style="display: flex; width: 2rem;height: 2rem; justify-content: center;align-items: center;"></i>
            <i class="fa fa-tty" aria-hidden="true"
                style="display: flex; width: 2rem;height: 2rem; justify-content: center;align-items: center;"></i>
            <i class="fa fa-camera" aria-hidden="true"
                style="display: flex; width: 2rem;height: 2rem; justify-content: center;align-items: center;"></i>
            <i class="fa fa-rss-square" aria-hidden="true"
                style="display: flex; width: 2rem;height: 2rem; justify-content: center;align-items: center;"></i>
        </div>

        <div class="Schedule">
            <h3>SCHEDULE</h3>
            <div class="Schedule">
                <div class="CardSchedule" id="MobCardScheduleOne">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="textScheduleOne shown" id="MObtextScheduleOne">
                        <h4>80:00.09:00AM</h4>
                    </div>
                </div>
                <div class="CardSchedule" id="MobCardScheduleTwo">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="textScheduleTwo shown" id="MobtextScheduleTwo">
                        <h4>80:00.09:00AM</h4>
                    </div>
                </div>


                <div class="CardSchedule" id="MobCardScheduleThree">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="textScheduleThree shown" id="MobtextScheduleThree">
                        <h4>80:00.09:00AM</h4>
                    </div>
                </div>


            </div>
        </div>

        <div class="shown" id="temperatureMobile">
            <h3>temperature</h3>
            <p><strong>Out Door:</strong> 23c</p>
            <p><strong>In Door:</strong> 23c</p>
        </div>
        <!-- <script>
        window.onload = requestWeather();

        function appendHTMLWearther(result) {
            const htmlContent = ` <h3>temperature</h3>
                                      <p><strong>Out Door:</strong> ${result.current.temperature}° C</p>
                                      <p><strong>In Door:</strong> ${result.current.temperature}° C</p>`;
            document.getElementById("temperatureMobile").innerHTML = htmlContent;
        }

        function requestWeather() {

            const url = 'https://api.weatherstack.com/current?access_key=5b852c6a85f0f6df2dee8ace7861ce01&query=Amman';
            const options = {
                method: 'GET'
            };

            try {
                response = fetch(url, options).then(response => response.json())
                    .then(result => {

                        appendHTMLWearther(result);
                    })
            } catch (error) {
                console.error(error);

            }
        }
        </script> -->
    </div>


    <div class="side-bar col-2 expanded" id="side_bar">
        <div class="AppName" id="AppName">
            <div class="shown" id="app_name">
                <img src="logo.jpg">
                <p>Smart-Home</p>
            </div>
            <input id="sideBarToggle" type="button" onclick="hideSideBar()" value="hide">
        </div>
        <div class="Room">


            <h3>PAGES</h3>
            <div class="CardsRoom" id="MobCardsMainRoom" onclick="changeContent('main')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="TextMainBar">
                    <h4>Main Dashboard</h4>
                </div>
            </div>


            <div class="CardsRoom" id="MobCardsRoomEntrance" onclick="changeContent('Alert')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="TextEntraceBar">
                    <h4>Alert</h4>
                </div>
            </div>


            <div class="CardsRoom" id="MobCardsLivingRoom" onclick="changeContent('News')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="TextLivingRoomBar">
                    <h4>News</h4>
                </div>
            </div>

            <div class="CardsRoom" id="MobCardsFamilyRoom" onclick="changeContent('Device')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="TextFamilyBar">
                    <h4>Device</h4>
                </div>
            </div>



            <div class="CardsRoom" id="MobCardsLibaryRoom" onclick="changeContent('Help')">
                <i class="fa fa-home"></i>
                <div class="pages shown" id="TextLibaryBar">
                    <h4>Help</h4>
                </div>
            </div>

        </div>




        <div class="imges" style="font-size: 1.5rem;">
            <i class="fa fa-lightbulb-o " aria-hidden="true"
                style="display: flex; width: 2rem;height: 2rem; justify-content: center;align-items: center;"></i>
            <i class="fa fa-tty" aria-hidden="true"
                style="display: flex; width: 2rem;height: 2rem; justify-content: center;align-items: center;"></i>
            <i class="fa fa-camera" aria-hidden="true"
                style="display: flex; width: 2rem;height: 2rem; justify-content: center;align-items: center;"></i>
            <i class="fa fa-rss-square" aria-hidden="true"
                style="display: flex; width: 2rem;height: 2rem; justify-content: center;align-items: center;"></i>
        </div>
        <hr width="100%" style="  border-top: 1px solid rgba(25,25,70,0.15);">


        <div class="Schedule">
            <h3>SCHEDULE</h3>
            <div class="Schedule">
                <div class="CardSchedule" id="CardScheduleOne">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="textScheduleOne shown" id="textScheduleOne">
                        <h4>80:00.09:00AM</h4>
                    </div>
                </div>
                <div class="CardSchedule" id="CardScheduleTwo">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="textScheduleTwo shown" id="textScheduleTwo">
                        <h4>80:00.09:00AM</h4>
                    </div>
                </div>


                <div class="CardSchedule" id="CardScheduleThree">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <div class="textScheduleThree shown" id="textScheduleThree">
                        <h4>80:00.09:00AM</h4>
                    </div>
                </div>


            </div>
        </div>





        <div class="temperature shown" id="temperature">

            <p><strong>Out Door:</strong> 23c</p>
            <p><strong>In Door:</strong> 23c</p>
        </div>
    </div>

    <div class="main col-10 col-mob-12" id="main">
        &nbsp;
    </div>

    <p class="print-warning">this file was printed</p>

</body>

</html>