<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
  <title>My LIFF app</title>
  <link rel="stylesheet" href="css/style.css" media="all">

  <!--<script>
    // Avoid Liff caching for debuging
    document.write('<link rel="stylesheet" href="css/style.css?cache=' + new Date().getTime() + '" media="all">')
  </script>-->
  
    <script>
    // Avoid Liff caching for debuging
    document.write('<link rel="stylesheet" href="css/style.css?cache=' + new Date().getTime() + '" media="all">')
  </script>
  
</head>
<body>
  <p id="os"><b>OS:</b> </p>
  <p id="language"><b>Language:</b> </p>
  <p id="version"><b>Version:</b> </p>
  <p id="isInClient"><b>isInClient:</b> </p>
  <p id="accessToken"><b>AccessToken:</b> </p>
  <img id="pictureUrl">
  <p id="userId"><b>userId:</b> </p>
  <p id="displayName"><b>displayName:</b> </p>
  <p id="statusMessage"><b>statusMessage:</b> </p>
  <p id="decodedIDToken"><b>email:</b> </p>
  <p id="type"><b>type:</b> </p>
  <p id="viewType"><b>viewType:</b> </p>
  <p id="utouId"><b>utouId:</b> </p>
  <p id="roomId"><b>roomId:</b> </p>
  <p id="groupId"><b>groupId:</b> </p>
  <p id="friendship"><b>isFriendship:</b> </p>
  <p id="scanCode"><b>Code:</b> </p>
  <p id="isLoggedIn"><b>isLoggedIn:</b> </p>
  <p id="universalLink1"><b>Universal Link:</b> </p>
  <p id="universalLink2"><b>Universal Link with Query params:</b> </p>
  <p><a href="path/?param=9">Link to Path</a></p>

  <button id="btnMsg" onclick="sendMsg()">Send Message</button>
  <button id="btnShare" onclick="shareMsg()">Share Target Picker</button>
  <button onclick="openWindow()">Open Window</button>
  <button id="btnScanCode" onclick="scanCode()">Scan Code</button>
  <button id="btnLogOut" onclick="logOut()">Log Out</button>
  <button id="btnClose" onclick="closed()">Close</button>

  <!-- <script src="js/vconsole.min.js"></script> -->
  <!-- <script>
    var vConsole = new VConsole()
    console.log("Hello World!")
  </script> -->
  
  <script src="js/vconsole.min.js"></script>
  <script>
    var vConsole = new VConsole()
    console.log("Hello World!")
  </script>

  <script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
  <script>
    function createUniversalLink() {
      const link1 = liff.permanetLink.createUrl()
      document.getElementById("universalLink1").append(link1)

      liff.permanetLink.setExtraQueryParam('param=9')
      const link2 = liff.permanetLink.createUrl()
      document.getElementById("universalLink2").append(link2)
    }

    async function shareMsg() {
      await liff.shareTargetPicker([
        {
          "type" : "text",
          "text" : "This message was sent by ShareTargetPicker" 
        }
      ])
    }

    function logOut() {
      liff.logout()
      window.location.reload()
    }

    function closed() {
      liff.closeWindow()
    }

    async function scanCode() {
      const result = await liff.scanCode()
      document.getElementById("scanCode").append(result.value)
    }

    function openWindow() {
      liff.openWindow({
        url: "https://line.me",
        external: true
      })
    }

    async function getFriendship() {
      const friend = await liff.getFriendship()
      document.getElementById("friendship").append(friend.friendFlag)
      if (!friend.friendFlag) {
        if (confirm("คุณยังไม่ได้เพิ่ม bot เป็นเพื่อน จะเพิ่มเลยไหม?")) {
          window.location = "https://line.me/R/ti/p/@178yfyoa"
        }
      }
    }

    async function sendMsg() {
      if (liff.getContext().type !== "none"){
        await liff.sendMessages([
          {
            "type" : "sticker",
            "stickerId" : 1,
            "packageId" : 1
          }
        ])
        alert ("Messege sent")
      }
    }

    function getContext() {
      document.getElementById("type").append(liff.getContext().type)
      document.getElementById("viewType").append(liff.getContext().viewType)
      document.getElementById("utouId").append(liff.getContext().utouId)
      document.getElementById("roomId").append(liff.getContext().roomId)
      document.getElementById("groupId").append(liff.getContext().groupId)
    }

    async function getUserProfile() {
      const profile = await liff.getProfile()
      document.getElementById("pictureUrl").src = profile.pictureUrl
      document.getElementById("userId").append(profile.userId)
      document.getElementById("statusMessage").append(profile.statusMessage)
      document.getElementById("displayName").append(profile.displayName)
      document.getElementById("decodedIDToken").append(liff.getDecodedIDToken().email)
    }



    function getEnvironment() {
      document.getElementById("os").append(liff.getOS())
      document.getElementById("language").append(liff.getLanguage())
      document.getElementById("version").append(liff.getVersion())
      document.getElementById("accessToken").append(liff.getAccessToken())
      document.getElementById("isInClient").append(liff.isInClient())
      if (liff.isInClient()) {
        document.getElementById("btnLogOut").style.display = "none"
      } else {
        document.getElementById("btnMsg").style.display = "none"
        document.getElementById("btnScanCode" ). style.display = "none"
        document.getElementById("btnClose" ).style.display = "none"
      }

    }

    async function main() {
      // alert("LINE Developers x Skooldio")
      
      await liff.init({ liffId: "1656366766-K2yEwp3y" })
      // await liff.init({ liffId: "YOUR-LIFF-ID" })
      document.getElementById("isLoggedIn").append(liff.isLoggedIn())
      if (liff.isLoggedIn()) {
        getEnvironment()
        getUserProfile()
        getContext()
        getFriendship()
      } else {
       // liff.login()
      }

      createUniversalLink()

      //getEnvironment()
      //getUserProfile()
      //getContext()
      //getFriendship()
      // createUniversalLink()
    }
    main()
  </script>
</body>
</html>
