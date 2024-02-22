@extends('layouts.aca')
@section('kontent')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dua Kolom</title>
  <style>
    /* .container{
width: 50%;
margin: 50px auto;
} */

body{
  background-color: #f9f9f9;
}

.card{
  width: max-content;
 
}

h2{
  padding-top:30px;
  padding-left:20px ;
}


textarea {
  padding-left: 10px;
}


#videoPlayer {
position: relative;


}

video {
margin-bottom: 20%;
margin-top: 70px;
margin-left: 80px;
padding-right: 10px;
}

button {
position: absolute;
bottom: 10px;
left: 50%;

}



textarea{
  margin-bottom: 20%;
  margin-top: 70px;
}

iframe{
  width: 500px;
  height: 400px;
  margin-bottom: 30px;
}


  </style>
</head>
<body>
  <div class="card" id="learning" style="width: 900px;margin-left:300px;margin-top:50px;">
    <h2>Learning Video</h2>
    <div id="videoPlayer">
        <video id="myVideo" width="400px" controls onended="restartVideo()">
            <source src="../assets/images/Vid1.mp4" type="video/mp4" id="markSuccessBtn">
            Your browser does not support HTML5 video.
        </video>
        <textarea name="" id="" cols="40" rows="10"> Masukkan Kesimpulan</textarea>
        <button type="button" class="btn btn-outline-primary">Sumbit</button>
    </div>
    <div id="successMessage" style="display:none">
        <p style="padding-left: 50px;">Congratulations! You have successfully completed the video.</p>
        <iframe src="https://repository.syekhnurjati.ac.id/3102/3/isi%20buku%20%7BIS.pdf" title="materi" class="p-3"></iframe>
        <div class="card">
          <form>
              <label for="firstName">First Name:</label>
              <input type="text" id="firstName" name="firstName" required>
  
              <label for="lastName">Last Name:</label>
              <input type="text" id="lastName" name="lastName" required>
  
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
  
              <button type="submit">Submit</button>
          </form>
      </div>
        <div>
          <a href="/form2" class="btn btn-outline-success"> Lanjut LKPD 2 </a>
        </div>
    </div>
</div>
<script src="/assets/js/form.js"></script>
</div>
</div>
</div>


</body>
</html>
@endsection 

