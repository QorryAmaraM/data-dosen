<?php
$data = json_decode(file_get_contents("http://localhost/api/"), TRUE);
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css" />
<body>
  <style>
    rata-kiri {text-align:"left" }
body {font-family: 'Poppins'}

img {
  border-radius: 50%;
  object-position: center;
  object-fit: cover;
  filter: drop-shadow(0 0 0.25rem grey);

}

.flex-container {
  display: flex;
  flex-direction: row;
}

@media (max-width: 900px) {
  .flex-container {
    flex-direction: column;
  }
}

.tab-container {
  padding: 0px 40px;
}

.topnav {
          display: flex;
          justify-content: space-between;
          width: 100%;
          position: fixed;
          background-color: #39000A;
          margin: top;
        }

        .topnav .nav {
          display: flex;
          flex-direction: row;
          justify-content: flex-end;
          align-items: stretch;
        }

        .topnav a.brand a {
          position:  ;
          padding-left: 20px;
          line-height: 70px;
          text-transform: uppercase;
          font-size: 1.4em;
          align-items: center;
        }

        .logo {
          display: flex;
          gap: 16px;
          padding: 8px 50px;
        }

        .header {
          display: flex;
          flex-direction: column;
          color: white;
          margin: 0;
        }

        .header p {
          margin: 0;
        }

        .topnav a, .topnav button {
          display: flex;
          justify-content: flex-end;
          color: #f2f2f2;
          text-align: right;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 15px;
          align-items: center;
          justify-content: space-between;
        }

        .topnav a:hover, .dropdown:hover .dropbtn {
          background-color: #009128;
          color: white;
        }

        .topnav .icon {
          display: none;
        }

        .dropdown .dropbtn {
          height: 100%;
          font-size: 15px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
          width: 100%;
        }

        .dropdown-content {
          background-color: #39000A;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          color: white;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: center;
        }

        .dropdown-content-nested {
          background-color: #B6001F !important;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 2;
          top: 0;
          left: 160px;
        }

        .dropdown-content-nested a {
          color: white;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: center;
        }

        .dropdown > .dropdown-content,
        .dropdown > .dropdown-content-nested {
          display: none;
          position: absolute;
          flex-direction: column;
        }
        .dropdown:hover > .dropdown-content,
        .dropdown:hover > .dropdown-content-nested {
          display: flex;
          background-color: #B6001F;
        }

  @media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
    </style>

    <div class="topnav">
      <div class="logo">
          <img src="https://ftmunjani.net/wp-content/uploads/2020/07/logo-3.png" width="60px" height="60px" />
          <div class="header">
            <p style="font-size: 12px">Fakultas</p>
            <p style="font-weight: 700">Teknologi Manufaktur</p>
            <p style="font-size: 11px">Universitas Jenderal Achmad Yani</p>
          </div>
      </div>
      <div class="nav">
        <div class="dropdown">
          <button class="dropbtn">PROFIL 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">PROFIL DAN SEJARAH</a>
            <a href="#">VISI DAN MISI</a>
            <a href="#">AKREDITASI</a>
            <a href="#">STRUKTUR ORGANISASI</a>
            <a href="#">PIMPINAN</a>
            <a href="#">SENAT</a>
            <a href="#">DOSEN</a>
            <a href="#">TENAGA KEPENDIDIKAN</a>
            <a href="#">MAHASISWA</a>
          </div>
        </div> 
        <div class="dropdown">
          <button class="dropbtn">ADMISI 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">PENDAFTARAN</a>
          </div>
        </div> 
        <div class="dropdown">
          <button class="dropbtn">PROGRAM STUDI 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">TEKNIK INDUSTRI</a>
            <a href="#">TEKNIK MESIN</a>
            <a href="#">TEKNIK METALURGI</a>
            <a href="#">MANAJEMEN TEKNOLOGI</a>
          </div>
        </div> 
        <div class="dropdown">
          <button class="dropbtn">FASILITAS 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <div class="dropdown">
              <button class="dropbtn">AKADEMIK 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content-nested">
                <a href="#">KALENDER AKADEMIK</a>
                <a href="#">E-JOURNAL</a>
                <a href="#">PERPUSTAKAAN</a>
              </div>
              <button class="dropbtn">KEMAHASISWAAN 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content-nested">
                <a href="#">PERATURAN AKADEMIK</a>
                <a href="#">UNIT KEGIATAN KAMPUS</a>
              </div>
            </div>
          </div>
        </div> 
        <div class="dropdown">
          <button class="dropbtn">PENELITIAN DAN PKM 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">SIMLIT LPPM</a>
            <a href="#">DATA PENELITIAN & PKM</a>
            <a href="#">DAFTAR JURNAL</a>
          </div>
        </div> 
        <a href="#about">PENGUMUMAN</a>
        <a href="#about">KERJA SAMA</a>
        <a href="#about">TRACER STUDY</a>
        
      </div>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
  

    <div class="w3-padding-48">
</div> 

<div class="w3-container">
  <h2 style="font-family: var(--font--family-poppins); font-weight: bold; text-align:center">PROFIL DOSEN</h2>
  
  <div class="w3-padding-16">
</div>

  <div class="flex-container w3-container">
  <div class="w3-col s3 w3-center">
    <div class="w3-container w3-center">
      <img src="<?= $data['foto'] ?>" class="w3-circle" alt="Avatar" style="width:200px; height:200px">
    </div>
  </div>
  <div class="w3-col s9 w3-center">
    <div class="w3-container">
      <table class="table">
    <tr>
      <th style="text-align:left; padding: 5px 0px">NID</th>
      <td>         : </td>
      <td style="text-align:left"><?= $data['nid'] ?></td>
   </tr>
   <tr>
      <th style="text-align:left; padding: 5px 0px">Nama</th>
      <td>         : </td>
      <td style="text-align:left"><?= $data['nama'] ?></td>
    </tr>
    <tr>
      <th style="text-align:left; padding: 5px 0px">Program Studi</th>
      <td>         : </td>
      <td style="text-align:left"><?= $data['prog_studi'] ?></td>
    </tr>
    <tr>
      <th style="text-align:left; padding: 5px 0px">Fakultas</th>
      <td>         : </td>
      <td style="text-align:left"><?= $data['fakultas'] ?></td>
    </tr>
    <tr>
      <th style="text-align:left; padding: 5px 0px">Jabatan Fungsional</th>
      <td>         : </td>
      <td style="text-align:left"><?= $data['jabfung'] ?></td>
    </tr>
    <tr>
      <th style="text-align:left; padding: 5px 0px">Pendidikan Terakhir</th>
      <td>         : </td>
      <td style="text-align:left"><?= $data['pendidikan_terkahir'] ?></td>
    </tr>
    </table>
    </div>
  </div>
  </div>
</div>

<div class="w3-padding-16">
</div>
<hr class="hr" /> </hr>
<div class="w3-padding-16">
</div>

<div class="tab-container">
  <div class="w3-row w3-round-xlarge w3-gray w3-padding-8" style="border-radius: 10px 5px 0px 0px">
    <a href="javascript:void(0)" onclick="openCity(event, 'Publikasi');"id="defaultOpen">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding active" style="width: 25%; text-align:center; font-weight: bold">Publikasi</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Penelitian');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"style="width: 25%; text-align:center; font-weight: bold">Penelitian</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Buku');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding"style="width: 25%; text-align:center; font-weight: bold">Buku</div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Riwayat Pendidikan');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 25%; text-align:center; font-weight: bold">Riwayat Pendidikan</div>
    </a>
  </div>


  <div id="Publikasi" class="w3-container city" style="display:none">
    <h2 style="text-align:center; font-family: var(--font--family-poppins) ">Publikasi</h2>
    <table class="w3-table-all">
    <tr>
      <th>No</th>
      <th>Tanggal</th>
      <th>Judul</th>
      <th>File</th>
    </tr>
    <tr>
        <td><?= $data['publikasi'][0]['id']?></td>
        <td><?= $data['publikasi'][0]['tanggal'] ?></td>
        <td><?= $data['publikasi'][0]['judul'] ?></td>
        <td><a href='<?= $data['publikasi'][0]['file'] ?>'>LINK</a></td>
</tr>
 </table>
  </div>

  <div id="Penelitian" class="w3-container city" style="display:none">
    <h2 style="text-align:center; font-family: var(--font--family-poppins)">Penelitian</h2>
    <table class="w3-table-all">
    <tr>
      <th>No</th>
      <th>Tanggal</th>
      <th>Judul</th>
      <th>File</th>
    </tr>
    <tr>
        <td><?= $data['penelitian'][0]['id']?></td>
        <td><?= $data['penelitian'][0]['tanggal'] ?></td>
        <td><?= $data['penelitian'][0]['judul'] ?></td>
        <td><a href='<?= $data['penelitian'][0]['file'] ?>'>LINK</a></td>
</tr> 
 </table>
  </div>

  <div id="Buku" class="w3-container city" style="display:none">
    <h2 style="text-align:center; font-family: var(--font--family-poppins)">Buku</h2>
    <table class="w3-table-all">
    <tr>
      <th>No</th>
      <th>Tanggal</th>
      <th>Judul</th>
      <th>File</th>
    </tr>
    <tr>
        <td><?= $data['buku'][0]['id']?></td>
        <td><?= $data['buku'][0]['tanggal'] ?></td>
        <td><?= $data['buku'][0]['judul'] ?></td>
        <td><a href='<?= $data['buku'][0]['file'] ?>'>LINK</a></td>
</tr>
 </table>
  </div> 

  <div id="Riwayat Pendidikan" class="w3-container city" style="display:none">
    <h2 style="text-align:center; font-family: var(--font--family-poppins)">Riwayat Pendidikan</h2>
    <table class="w3-table-all style="text-align:center">
    <tr>
      <th>No</th>
      <th>Tanggal Ijazah</th>
      <th>Perguruan Tinggi</th>
      <th>Jenjang</th>
    </tr>
    <tr>
        <td><?= $data['riwayat_pendidikan'][0]['id']?></td>
        <td><?= $data['riwayat_pendidikan'][0]['tanggal_ijazah'] ?></td>
        <td><?= $data['riwayat_pendidikan'][0]['perguruan_tinggi'] ?></td>
        <td><?= $data['riwayat_pendidikan'][0]['jenjang'] ?></td>
</tr>
 </table>
  </div>
</div>

<div class="link-jurnal">
  <p>Visit me on:
    <p><a href="https://www.scopus.com/"><img src="https://literasidigital.com/wp-content/uploads/2020/01/Primos-1024x369.jpg" alt="scopus" width="100" height="132"></a></p>
    <p><a href="https://sinta.kemdikbud.go.id/"><img src="https://web.syekhnurjati.ac.id/iat/wp-content/uploads/sites/18/2020/09/Sinta.jpg" alt="sinta" width="100" height="132"></a></p>
    <p><a href="https://sistem.lldikti6.id/"><img src="https://karirlab-prod-bucket.s3.ap-southeast-1.amazonaws.com/files/privates/FsU1ebI2fa2t5NTF9qWwZssv8If2beYm4YTqjwn4.png" alt="lldikti" width="100" height="132"></a></p>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
this.document.getElementById("defaultOpen").click();


function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>



</body>
</html>
