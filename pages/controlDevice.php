<div class="information  col-6 col-mob-12 " style="background-color: white;border-radius: 20px;">
  <div class="addDevice col-6 col-mob-12">
  <h1 style="margin: unset;display: flex;justify-content: center;">device</h1>
  <form action="../include/CreateDevice.php" method="post" class="fromEditDevice">
  <select name="updateOrInsert" id="updateOrInsert" onchange="UpdateOrInsert()">
          <option value="Insert" >Insert</option>
          <option value="Update" >Update</option>
  </select>
  <div class="showInsertDevice" id="InsertDevice" name="InsertDevice">
  <h4 style="  margin: unset;">device Name:</h4>
      <input type="Text" name="deviceName" id="deviceName" placeholder="deviceName">
      <h4 style="  margin: unset;">Make:</h4>
      <input type="Text" placeholder="Make" name="Make" id="Make">
      <h4>Location In House:</h4>
      <input type="Text" placeholder="locationInHouse" name="locationInHouse" id="locationInHouse">  
      <h4 style="  margin: unset;">TYPE:</h4>  
      <div class="custom">
      <select name="type" id="type">
          <option value="camera">camera</option>
          <option value="wishing machine">wishing machine</option>
          <option value="light room">light room</option>
          <option value="personal camera">personal camera</option>
          <option value="AC">AC</option>
        </select>
        <input type="button" onclick="showCustomDevice()" value="Custom" class="customDeviceButton">
        </div>
        <div class="hideCustomDevice" id="deviceCustomDiv" name="deviceCustomDiv">
        <h4>Custom Device:</h4>
        <input type="Text" placeholder="Custom Device" name="CustomDevice" id="CustomDevice">  
        </div>
      <input type="submit" name="submint" value="Add device" class="submintButton">
      </div>





      <div class="hideUpdateDevice" id="UpdateDevice"name="UpdateDevice">
      <h4 style="  margin: unset;">device id:</h4>
      <input type="Text" name="deviceId" id="deviceId" placeholder="Device ID">
       <h4 style="  margin: unset;">device Name:</h4>
      <input type="Text" name="deviceUpdateName" id="deviceUpdateName" placeholder="device Name">
      <h4 style="  margin: unset;">Make:</h4>
      <input type="Text" placeholder="Make" name="updateMake" id="updateMake">
      <h4>Location In House:</h4>
      <input type="Text" placeholder="locationInHouse" name="updateLocationInHouse" id="updateLocationInHouse">   
      <h4>type:</h4>
        <input type="Text" placeholder="type" name="updateType" id="updateType">  
      
      <input type="submit" name="submint" value="update device" class="submintButton">
      </div>
      
    </form>
    
  </div>
</div>



<div class="alldevice col-10 col-mob-12">
  <h1>List of device</h1> 
  <?php
  include_once "../Database/device.php";
  include_once "../Database/DAL_device.php";
  include_once "../Database/Database.php";
  $database = new Database();
  $DAL_device = new DAL_device();
  $db = $database-> getConnection();
  $listdevices = $DAL_device->read($db);
  while ($device = $listdevices->fetch_assoc()) {
    echo '
            <div class="device">
    <img src="../cctv.png" id="imageDevice" class="imageDevice">
 
    <h2>' . htmlspecialchars($device['diviceName']) . '</h2>
    <h2>' . htmlspecialchars($device['type']) . '</h2>
    <p>' . htmlspecialchars($device['controlDeviceId']) . ' </p>
    <p>' . htmlspecialchars($device['maker']) . '</p>
    <p>' . htmlspecialchars($device['locationInHouse']) . '</p>
      <a class="fa fa-trash-o" aria-hidden="true" onclick="deleteDevice(' . $device['id'] . ')"></a>
    </div>
      <hr style="width: 100%;">
        ';
        
  }
  ?>

</div>