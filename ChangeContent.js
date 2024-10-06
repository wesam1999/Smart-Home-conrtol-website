let rootdir = window.location.href;

function routerpage(x,id,ele) {

 switch (x) {
    
    case "main":
        let stateObjmain = { id: "100" };
        window.history.pushState(stateObjmain, "name of the view (main-page)", rootdir+"/main.php");
        newURL=window.location.href.replace("/dashboard.php","/pages")
        var currentView = window.location.href.replace(rootdir,"");
        console.log(newURL);
        return newURL;
        break;
    case "Alert":
        let stateObjAlert = { id: "100" };
        window.history.pushState(stateObjAlert, "name of the view (alert-page)", rootdir+"/all-alerts.php");
        newURL=window.location.href.replace("/dashboard.php","/pages")
        var currentView = window.location.href.replace(rootdir,"");
        console.log(newURL);
        return newURL;
        break;
    case "News":
        let stateObjNews = { id: "100" };
        window.history.pushState(stateObjNews, "name of the view (News-page)", rootdir+"/all-News.php");
        newURL=window.location.href.replace("/dashboard.php","/pages")
        var currentView = window.location.href.replace(rootdir,"");
        return newURL;
        break;
    case "Device":
        let stateObjDevice = { id: "100" };
        window.history.pushState(stateObjDevice, "name of the view (device-page)", rootdir+"/controlDevice.php");
        newURL=window.location.href.replace("/dashboard.php","/pages")
        var currentView = window.location.href.replace(rootdir,"");
        return newURL;
        break;  
    case "Help":
        let stateObjHelp = { id: "100" };
        window.history.pushState(stateObjHelp, "name of the view (help-page)", rootdir+"/library.html");
        newURL=window.location.href.replace("/dashboard.php","/pages")
         var currentView = window.location.href.replace(rootdir,"");
        return newURL;
        break;
        case "getSingleAlert":
            if (ele=="box") {
                let stateObjSingleAlert = { id: "100" };
        newURL=window.location.href.replace("/dashboard.php/main.php","/include/getSingleAlert.php?id="+id+"&itemshow="+ele)
         var currentView = window.location.href.replace(rootdir,"");
        return newURL;
            }else if(ele=="controlerAlert"){
                newURL=window.location.href.replace("/dashboard.php/all-alerts.php","/include/getSingleAlert.php?id="+id+"&itemshow="+ele)
                var currentView = window.location.href.replace(rootdir,"");
                return newURL;
            }else if(ele=="controlerNews"){
                newURL=window.location.href.replace("/dashboard.php/all-News.php","/include/getSingleAlert.php?id="+id+"&itemshow="+ele)
                var currentView = window.location.href.replace(rootdir,"");
                return newURL;
            }
        
        break;      
    default:
        let stateObjdefault = { id: "100" };
        window.history.pushState(stateObjdefault, "name of the view (main-page)", rootdir+"/main.php");
        newURL=window.location.href.replace("/dashboard.php","/pages")
         var currentView = window.location.href.replace(rootdir,"");
        return newURL;
        break;
 }

 

}


function changeContent(x){
    var xhttp = new XMLHttpRequest();
    FuncActive(x);
    switch(x){
    case 'main':
        xhttp.open("GET",routerpage(x), false);
        xhttp.send();
        document.getElementById("main").innerHTML = " ";
        document.getElementById("main").innerHTML = xhttp.responseText;
        break;

    case 'News': 
        xhttp.open("GET", routerpage(x), false);
        xhttp.send();
        document.getElementById("main").innerHTML = " ";
        document.getElementById("main").innerHTML = xhttp.responseText;
        break;  

    case 'Device': 
        xhttp.open("GET", routerpage(x), false);
        xhttp.send();
        document.getElementById("main").innerHTML = " ";
        document.getElementById("main").innerHTML = xhttp.responseText;
        break;  
        
    case 'Alert': 
        xhttp.open("GET", routerpage(x), false);
        xhttp.send();
        document.getElementById("main").innerHTML = " ";
        document.getElementById("main").innerHTML = xhttp.responseText;
        break; 
    
    case 'Help': 
        xhttp.open("GET", routerpage(x), false);
        xhttp.send();
        document.getElementById("main").innerHTML = " ";
        document.getElementById("main").innerHTML = xhttp.responseText;
        break; 
    
    default:
        xhttp.open("GET", routerpage(x), false);
        xhttp.send();
        document.getElementById("main").innerHTML = " ";
        document.getElementById("main").innerHTML = xhttp.responseText;
        break;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    console.log('The page has loaded!');
    changeContent();
});

function FuncActive(place){


  let MobCardsMainRoom=document.getElementById("MobCardsMainRoom");
  let MobCardsRoomEntrance=document.getElementById("MobCardsRoomEntrance");
  let MobCardsLivingRoom=document.getElementById("MobCardsLivingRoom");
  let MobCardsFamilyRoom=document.getElementById("MobCardsFamilyRoom");
  let MobCardsLibaryRoom=document.getElementById("MobCardsLibaryRoom");


  //remove all active 
  MobCardsMainRoom.classList.remove("active");
  MobCardsRoomEntrance.classList.remove("active");
  MobCardsLivingRoom.classList.remove("active");
  MobCardsFamilyRoom.classList.remove("active");
  MobCardsLibaryRoom.classList.remove("active");
  
  
  // add all class to all 
  MobCardsMainRoom.classList.add("CardsRoom");
  MobCardsRoomEntrance.classList.add("CardsRoom");
  MobCardsLivingRoom.classList.add("CardsRoom");
  MobCardsFamilyRoom.classList.add("CardsRoom");
  MobCardsLibaryRoom.classList.add("CardsRoom");


  
 
 

  switch(place){
      case 'main':
          MobCardsMainRoom.classList.add("active");
          MobCardsMainRoom.classList.remove("CardsRoom");
        
          break;
      case 'Alert':
          MobCardsRoomEntrance.classList.add("active");
          MobCardsRoomEntrance.classList.remove("CardsRoom");
        
          break;
      case 'News':
          MobCardsLivingRoom.classList.add("active");
          MobCardsLivingRoom.classList.remove("CardsRoom");
          
       
          break;
      case 'Device':
          MobCardsFamilyRoom.classList.add("active");
          MobCardsFamilyRoom.classList.remove("CardsRoom");

          break; 
      case 'Help':
          MobCardsLibaryRoom.classList.add("active");
          MobCardsLibaryRoom.classList.remove("CardsRoom");

          break; 
      

  }

}
