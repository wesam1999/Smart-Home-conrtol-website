
        function hideSideBar() { 
            let sideBar = document.getElementById("side_bar"); 
            let sideBarAppName = document.getElementById("app_name");
            let mainContainer = document.getElementById("main");
            let tempLabel = document.getElementById("temperature");
            let sideBarToggle = document.getElementById("sideBarToggle");
            let TextMainBar=document.getElementById("TextMainBar");
            let TextEntraceBar=document.getElementById("TextEntraceBar");
            let TextLivingBar=document.getElementById("TextLivingRoomBar");
            let TextFamilyBar=document.getElementById("TextFamilyBar");
            let TextLibaryBar=document.getElementById("TextLibaryBar");
            let textScheduleOne=document.getElementById("textScheduleOne");
            let textScheduleTwo=document.getElementById("textScheduleTwo");
            let textScheduleThree=document.getElementById("textScheduleThree");
            if (sideBar.classList.contains("expanded") && tempLabel.classList.contains("shown")) {
                sideBar.classList.remove("expanded");
                sideBar.classList.add("shrinked");
                
                sideBarAppName.classList.remove("shown");
                sideBarAppName.classList.add("hidden");

                sideBar.classList.remove("col-2");
                sideBar.classList.add("col-1");

                mainContainer.classList.remove("col-10");
                mainContainer.classList.add("col-11");

                tempLabel.classList.remove("shown");
                tempLabel.classList.add("hidden");

                TextMainBar.classList.remove("shown");
                TextMainBar.classList.add("hidden");

                TextEntraceBar.classList.remove("shown");
                TextEntraceBar.classList.add("hidden");

                TextLivingBar.classList.remove("shown");
                TextLivingBar.classList.add("hidden");
                
                TextFamilyBar.classList.remove("shown");
                TextFamilyBar.classList.add("hidden");

                TextLibaryBar.classList.remove("shown");
                TextLibaryBar.classList.add("hidden");

                textScheduleOne.classList.remove("shown");
                textScheduleOne.classList.add("hidden");


                textScheduleTwo.classList.remove("shown");
                textScheduleTwo.classList.add("hidden");
                
                
                textScheduleThree.classList.remove("shown");
                textScheduleThree.classList.add("hidden");
                
                sideBarToggle.setAttribute("value", "show");
            }
            else if (sideBar.classList.contains("shrinked") && tempLabel.classList.contains("hidden")) {
                sideBar.classList.add("expanded");
                sideBar.classList.remove("shrinked");
                sideBarAppName.classList.add("shown");
                sideBarAppName.classList.remove("hidden");

                sideBar.classList.add("col-2");
                sideBar.classList.remove("col-1");

                mainContainer.classList.add("col-10");
                mainContainer.classList.remove("col-11");

                tempLabel.classList.add("shown");
                tempLabel.classList.remove("hidden");



                TextMainBar.classList.remove("hidden");
                TextMainBar.classList.add("shown");

                TextEntraceBar.classList.add("shown");
                TextEntraceBar.classList.remove("hidden");

                TextLivingBar.classList.add("shown");
                TextLivingBar.classList.remove("hidden");
                
                TextFamilyBar.classList.add("shown");
                TextFamilyBar.classList.remove("hidden");

                TextLibaryBar.classList.add("shown");
                TextLibaryBar.classList.remove("hidden");

                textScheduleOne.classList.add("shown");
                textScheduleOne.classList.remove("hidden");


                textScheduleTwo.classList.add("shown");
                textScheduleTwo.classList.remove("hidden");
                
                
                textScheduleThree.classList.add("shown");
                textScheduleThree.classList.remove("hidden");
                

                sideBarToggle.setAttribute("value", "hide");
            }
        }

        function hideSideBarMobile() {
            let sideBarMo = document.getElementById("SideBarMobile");
            let mobBackDrop=document.getElementById("backdrop");
            if (sideBarMo.classList.contains("hidden")) {
                sideBarMo.classList.remove("hidden");
                sideBarMo.classList.add("shown");
                mobBackDrop.classList.remove("hidden");
                mobBackDrop.classList.add("shown");

            } else if (sideBarMo.contains("shown")) {
                sideBarMo.classList.add("hidden");
                sideBarMo.classList.remove("shown");
                
                mobBackDrop.classList.remove("shown");
                mobBackDrop.classList.add("hidden");

                imgRemoveBar.classList.add("shown");
            }
        }
        function ImgRemoveBar() {
            let sideBarMo = document.getElementById("SideBarMobile");
            let mobBackDrop=document.getElementById("backdrop");
            if (sideBarMo.classList.contains("shown")) {
                sideBarMo.classList.add("hidden");

                mobBackDrop.classList.remove("shown");
                mobBackDrop.classList.add("hidden");

            } else if (sideBarMo.classList.contains("hidden")) {
                sideBarMo.classList.add("shown");
                
                mobBackDrop.classList.remove("hidden");
                mobBackDrop.classList.add("shown"); 
            }

        }
    