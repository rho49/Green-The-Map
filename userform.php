<!DOCTYPE html>
<html>
<head>
  <title>User Form</title>

<style type="text/css">
  
body{
  margin:0 auto;
  width:90%;
  padding:0;
  font-family: 'Didact Gothic', sans-serif;
}
.wrap{
  margin-top:30px;
  width:480px;
}
fieldset{
  width: 400px;
  border-radius:10px;
  border-right:1px solid transparent;
  border-left:1px solid transparent;
}
legend{
  background:#3A3D52;
  width:100px;
  height:100px;
  margin-left:168px;
  border-radius:50px;
}
h3{
  position:relative;
  padding-top:20px;
  text-align:center;
  color:#FF6D2E;
}
h2{
  text-align: center;
  font-size: 0.9em;
  color:lightgrey;
  padding-top: 10px;
}
legend{
  background:#3A3D52;
  width:200px;
  height:90px;
  margin-left:20px;
  border-radius:50px;
}
input{
  width:170px;
  height: 50px;
  margin-left:30px;
  margin-top: 15px;
  text-align: center;
  border-radius: 10px;
  border: 1px solid lightgrey;
  color: #7D7769;
  font-weight: bold;
}
input:focus{
  border:1px solid rgba(255,109,46,0.6);
  box-shadow: 0 0 3px rgba(255,109,46,0.6);
  outline: none;
  font-size: 1.1em;
}
input[type=file]{
  width: 200px;
  height: 21px;
  margin-left:30px;
  margin-top: 15px;
  text-align: center;
  border-radius: 2px;
}
#location{
  width: 200px;
  height: 21px;
  margin-left:30px;
  margin-top: 15px;
  text-align: center;
  border-radius: 2px;
}
textarea{
  /*width:170px;
  height: 50px;*/
  margin-left:30px;
  margin-top: 15px;
  text-align: center;
  border-radius: 10px;
  border: 1px solid lightgrey;
  color: #7D7769;
  font-weight: bold;
}
textarea:focus{
  border:1px solid rgba(255,109,46,0.6);
  box-shadow: 0 0 3px rgba(255,109,46,0.6);
  outline: none;
  font-size: 1.1em;
}
button{
  background: #fff;
  border: 1px solid transparent;
  border-radius:10px ;
  width: 120px;
  height: 50px;
  margin-left: 20px;
  margin-top:15px;
  color: #7D7769;
}
button:hover{
  background:#FBF7EF ;
  border-radius: 10px;
}
button:focus{
  border:1px solid rgba(255,109,46,0.6);
  box-shadow: 0 0 3px  rgba(255,109,46,0.6);
  outline: none;
  font-size: 1.1em;
}
/*.fa-facebook{
  color:#4F79A7;
}
.fa-google-plus{
  color:#D64E3C;
}
.fa-twitter{
  color:#4ECDED;
}
.fa-facebook, .fa-google-plus, .fa-twitter{
  padding: 8px;
} */
input[type=submit]{
  background: #FF9D73;
  color: #3A3D52;
  margin:20px 140px 30px;
}
input[type=submit]:hover{
  background:#FF8652;
}

</style>
</head>

<body>


  <center>
      <link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <div class="wrap">
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <legend><h3>File the issue</h3></legend> 
              <input type="text" name="yourName" placeholder="Your Name" required />
              <input type="text" name="email" placeholder="Email" required />
              <input type="text" name="yourName" placeholder="Contact Number" />
              <!-- <input type="text" name="psw" placeholder="Location" required /> -->
              <input type="Number" name="psw" min="1" max="20" placeholder="Bin Number" required />
              <br><br>
              <label for="location">Select the location: </label>
              <select id="location" name="location" required>
                <option>Choose one</option>
                <option value="Majestic">Majestic</option>
                <option value="Goraguntepalya">Goraguntepalya</option>
                <option value="Jayanagar">Jayanagar</option>
                <option value="Banashankari">Banashankari</option>
                <option value="RR Nagar">RR Nagar</option>
                <option value="Koramangala">Koramangala</option>
                <option value="HSR Layout">HSR Layout</option>
                <option value="Indiranagar">Indiranagar</option>
                <option value="BTM Layout">BTM Layout</option>
                <option value="Whitefield">Whitefield</option>
                <option value="Kengeri">Kengeri</option>
              </select>
              <br>Upload an image:<input type="file" name="file" id="file" >
              <textarea rows = "5" cols = "40" name = "yourName" placeholder="Your message"></textarea>
              <input type="submit" name="submit" value="Hit us up!">

              <!-- <button type="submit" name="submit">UPLOAD</button> -->
              <!-- <input type="button" value="Display" class="homebutton" id="btnHome"  -->
                     <!-- onClick="document.location.href='display.php'" />  -->
          </fieldset>
        </form>
      </div>
  </center>

</body>
</html>