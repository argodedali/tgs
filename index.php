<html>
  <head>
    <title>SMA N 6 SEMARANG</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <script src="jquery-3.3.1.min.js"></script>
  
  
  </head>
  <body>
  <center>
  <div id="wrapper">
    <div id="header">
    <img src="header.jpg" height="200px" width="100%">
    </div>
    <div id="menu">
      
    <ul>
  <li><a href="index.php">Beranda</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Profil sekolah</a>
    <div class="dropdown-content">
      <a class="linkpindah"href="sejarah.php">Visi dan Misi</a>
      <a class="linkpindah" href="identitas.php">Identitas sekolah</a>
      <a class="linkpindah" href="perkembangan.php">Sejarah SMAN 6 SEMARANG </a>
      <a class="linkpindah"href="guru.php">Guru dan Karyawan</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Kurikulum</a>
    <div class="dropdown-content">
      <a class="linkpindah"href="kosong.php">Program Kerja</a>
      <a class="linkpindah" href="kosong.php">Struktur</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Kesiswaan</a>
    <div class="dropdown-content">
      <a class="linkpindah"href="kosong.php">Program Kerja</a>
      <a class="linkpindah" href="kosong.php">Struktur</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Humas</a>
    <div class="dropdown-content">
      <a class="linkpindah"href="formdom.php">formdom</a>
      <a class="linkpindah" href="kosong.php">Struktur</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sarpra</a>
    <div class="dropdown-content">
      <a class="linkpindah"href="kosong.php">Program kerja</a>
      <a class="linkpindah" href="kosong.php">Struktur</a>
      <a class="linkpindah" href="kosong.php">Denah lokasi</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Forum Guru</a>
    <div class="dropdown-content">
      <a class="linkpindah"href="kosong.php">Guru IPA</a>
      <a class="linkpindah" href="kosong.php">Guru IPS</a>
      <a class="linkpindah" href="kosong.php">Guru Bahasa</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Pengumuman</a>
    <div class="dropdown-content">
    <a class="linkpindah"href="pengumuman.php">Kelulusan tahun 2017/2018</a>   
    </div>
  </li>
</ul>
    </div>
    <div id="sidebar1">
    <h1 style="color:blue;">Pengumuman Kelulusan</h1>
    <br>2018<hr>
    
      

  
  
  <p>PENGUMUMAN LULUS TAHUN 2018</p>
    </div>
    <div id="artikel">
        <p><h1>SAMBUTAN KEPALA SMA NEGERI 6 SEMARANG</h1>
      <style>
      #gambar	{
        float:left;
        padding-left:8px;
      }
      </style>
      <img src="kepala.jpeg" align="left" width="30%" height="150px" class="gambar" id="gambar">
      Bismillahirohmannirrohim Assalamualaikum Warahmatullah 
      Wabarakatuh Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, 
      bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan 
      alamat www.sman6smg.sch.id dapat kami perbaharui. Kami mengucapkan selamat datang 
      di Website kami Sekolah Menengah Atas Negeri (SMAN) 6 Semarang...<br>
      <a href="posting1.html">
          More read >>>>>
      </a></p>
    </div>
    <div id="sidebar2">
    <p>SOCIAL PROFILE</p><hr>
    <div id="share-sossial-buttons">
       <!-- Untuk Twitter -->
    <a href="https://twitter.com/share?url=https://dumetschool.com&text=Simple%20Share%20Buttons&hashtags=simplesharebuttons" target="_blank">
      <img src="twitt.png" width="30px" height="30px" alt="Twitter" />
    </a>

    <!-- Untuk Email -->
    <a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://dumetschool.com">
      <img src="email.jpg" width="30px" height="30px" alt="Email" />
  </a>

  <!-- Untuk Facebook -->
  <a href="http://www.facebook.com/sharer.php?u=https://dumetschool.com" target="_blank">
    <img src="face.jpeg" width="30px" height="30px" alt="Facebook" />
</a>


      
    
   
      
  
  </div>
    
    </div>
    
	
	
    <div id="footer">
    Copyright &copy; 2018 Argodedali
    </div>
  </div>
  </center>
  <script>
  var dataJSONlokal=[
            {
              nama:"Deli",
              kel:"A11.2017.10643",
            },
            {
              nama:"Elang",
              kel:"A11.2017",
            },

  ];
  var i;
  for(i=0;i<2;i++){
    console.log(dataJSONlokal[i].nama);
    console.log(dataJSONlokal[i].kel);
  }

   

  $(document).ready(function () {
    $(".linkpindah").click(function (e) { 
      e.preventDefault();
      $.get($(this).attr("href"), function (data, textStatus, jqXHR) {
          $("#artikel").html(data);
        }
       
      );
      
    });
  });  
  </script>
  <footer>
  
  
  </footer>
  </body>
</html>