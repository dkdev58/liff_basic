<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
  <title>My LIFF app</title>
  <link rel="stylesheet" href="css/style.css" media="all">


</head>

<body>


  <img id="pictureUrl">
  <p id="userId"><b>userId:</b> </p>
  <p id="displayName"><b>displayName:</b> </p>
  <p id="statusMessage"><b>statusMessage:</b> </p>
  <p id="decodedIDToken"><b>email:</b> </p>

  <p id="userid1"><b>userid1:</b> </p>
  <p id="userid2"><b>userid2:</b> </p>
  <p id="userid3"><b>userid3:</b> </p>

  <a href="" onclick="external1()">esanphc (external browser)</a><br>

  <script>
    function external1() {
      liff.openWindow({
        url: "https://esanphc.net",
        external: true
      })
    }
  </script>

  <a href="https://esanphc.net">esanphc  (inapp browser - not endpiont)</a>
  <br>
  <a href="test.php">test (in liff browser - endpoint)</a>

  <button id="btnMsg" onclick="sendMsg()">Send Message</button>



  <!-- LIFF START-->
  <script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>

  <script>

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



      //ทดสอบส่งค่า
      console.log(profile.userId)
      console.log(profile.pictureUrl)
      //const userid1 = (profile.userId)
      //console.log(userid1)
      //document.getElementById("userid1").innerHTML="<h2>"+(userid1)+"</h2>"
      document.getElementById("userid1").innerHTML="<h6>userid"+(profile.userId)+"</h6>"
      document.getElementById("userid2").innerHTML="userid_form<input name='userid_form' type='text' value='"+(profile.userId)+"'>"
      document.getElementById("userid3").innerHTML="userid_form hidden <input name='userid_form' type='hidden' value='"+(profile.userId)+"'>"

    }



    async function main() {
      // alert("LINE Developers x Skooldio")
      
      await liff.init({ liffId: "1656366766-K2yEwp3y" })
      // await liff.init({ liffId: "YOUR-LIFF-ID" })

      if (liff.isLoggedIn()) {
 
        getUserProfile()
        getContext()

      } else {
       // liff.login()
      }

    }
    main()



  </script>



  <!-- VConsole -->
  <script src="js/vconsole.min.js"></script>
  <script>
    var vConsole = new VConsole()
    console.log("Hello World!")
  </script>



  <script>
    // Avoid Liff caching for debuging
    document.write('<link rel="stylesheet" href="css/style.css?cache=' + new Date().getTime() + '" media="all">')
  </script>



</body>

</html>