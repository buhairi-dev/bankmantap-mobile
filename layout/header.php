<!DOCTYPE html>
<html lang="id-ID">
<head>
    <title>www.bankmantap.co.id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”description” content="description">
    <link rel="shortcut icon" type="image/png" href="asset/logo_mantap.png"  class="img-responsive">
    <!-- CSS Bootsrap ver.4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all"/>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
     
</head>
<body>
<!-- ====================================================== NAVBAR MENU ===================================================== -->
<style>
nav{
  background: #FFF;
}
nav:after{
  content: '';
  clear: both;
  display: table;
}
nav .logo{
  float: left;
  color: white;
  font-size: 23px;
  font-weight: 600;
  padding-top:10px;
  padding-left: 60px;
  color:#1b1b1b;
}
nav ul{
  float: right;
  margin-right: 12rem;
  list-style: none;
  padding:10px;
}
nav ul li{
  float: left;
  background: white;
  margin: 0 4px;
}
nav ul li a{
  color:#535353;
  line-height: 70px;
  text-decoration: none;
  font-size: 14px;
  padding: 8px 15px;
  background: white;
}
nav ul li a:hover{
  color: black;
}
nav ul ul li a:hover{
  box-shadow: none;
  color: #FFF;
  display: block;
  background: #0F2B5B;
}
nav ul ul{
  position: absolute;
  top: 90px;
  border-top: 3px solid black;
  opacity: 0;
  visibility: hidden;
  transition: top .3s;
}
nav ul ul ul{
  border-top: none;
}
nav ul li:hover > ul{
  top: 85px;
  opacity: 1;
  visibility: visible;
}
nav ul ul li{
  position: relative;
  margin: 0px;
  width: 150px;
  float: none;
  display: list-item;
  border-bottom: 0.5px solid rgba(0,0,0,0.2);
}
nav ul ul li a{
  line-height: 50px;
}
nav ul ul ul li{
  position: relative;
  top: -60px;
  left: 150px;
}
 
.show,.icon,input{
  display: none;
}

.fa-plus{
  font-size: 15px;
  margin-left: 40px;
}

header{
  font-size: 35px;
  font-weight: 600;
  padding: 10px 0;
}
 
@media all and (max-width: 968px) {
  nav{
    padding: 0px 0px;
  }

  nav ul{
    margin-right: 0px;
    float: left;
  }

  nav .logo{
    float: center;
    margin-left: 90px;
    width: 55%;
  }

  nav .fine{
    display: block;
    background: black;
    margin-right: 600px;
  }

  .show + a, ul{
    display: none;
    color: black;
  }

  nav ul li, nav ul ul li{
    display: block;
    width: 100%;
    border-bottom: 1px solid black;
  }

  nav ul li a:hover{
    box-shadow: none;
    color: black;
  }
  
  .show{
    display: block;
    color: black;
    font-size: 15px;
    padding: 0 15px;
    line-height: 40px;
    cursor: pointer;
  }
  
  .show:hover{
   color: black;
  }

  .icon{
    display: block;
    color: #FCD116;
    background-color:#0F2B5B;
    position: absolute; 
    line-height: 60px;
    cursor: pointer;
    font-size: 25px;
    width:13%;
    padding-left:6px;
  }

  nav ul ul{
    top: 50px;
    border-top: 0px;
    float: none;
    position: static;
    display: none;
    opacity: 1;
    visibility: visible;
    color: black;

  }
  nav ul ul a{
    top:50px;
    padding-left: 30px;
    color: black;
    
  }
  nav ul ul ul a{
    padding-left: 80px;
    color: black;
  }
  nav ul ul ul li{
    position: static;
    color: black;
  }
  [id^=btn]:checked + ul{
    display: block;
  }
  nav ul ul li{
    border-bottom: 0px;
  }
  span.cancel:before{
    content: '\f00d';
  }
}

</style>
<nav>
        <label for="btn" class="icon">
         <span class="fa fa-bars"></span>
         </label>

         <div class="logo">
         <a class="navbar-brand ml-4 mr-5" href="#"><img src="asset/logo_mantap.png"  alt="Logo" width="80%"></a>
         </div>

       
         <input type="checkbox" id="btn">
         <ul>
            <li><a href="#" class="show">BERANDA</a></li>
            <li>
               <label for="btn-1" class="show">TENTANG KAMI</label>
               <a href="#">TENTANG KAMI</a>
               <input type="checkbox" id="btn-1">
               <ul>
                        <li><a href="#">Submenu-1</a></li>
                        <li><a href="#">Submenu-2</a></li>
                        <li><a href="#">Submenu-3</a></li>
               </ul>
            </li>
            <li>
               <label for="btn-2" class="show">INFO MANTAP</label>
               <a href="#">INFO MANTAP</a>
               <input type="checkbox" id="btn-2">
               <ul>
                        <li><a href="#">Submenu-1</a></li>
                        <li><a href="#">Submenu-2</a></li>
               </ul>
            </li>

            <li>
               <label for="btn-3" class="show">BISNIS</label>
               <a href="#">BISNIS</a>
               <input type="checkbox" id="btn-3">
               <ul>
                        <li><a href="#">Submenu-1</a></li>
                        <li><a href="#">Submenu-2</a></li>
               </ul>
            </li>
            <li><a href="#" class="show">CABANG</a></li>
            <li><a href="#" class="show">KARIR</a></li>
         </ul>
         </nav>

<script>
         $('.icon').click(function(){
           $('span').toggleClass("cancel");
         });
</script>

  
<!-- 
<nav class="navbar navbar-expand-lg p-3 fixed-top navbar-light bg-white border-bottom">
<a class="navbar-brand ml-4 mr-5" href="#"><img src="asset/logo_mantap.png"  alt="Logo" width="80%"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" style="margin-left:30%;" id="navbarSupportedContent">

    <ul class="navbar-nav" style="font-size:12px; font-weight: bold;">
    <li class="nav-item" >
    <a class="nav-link mr-3" href="index.php">BERANDA <span class="sr-only">(current)</span></a>
    </li>
         
    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG KAMI</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="sekilas-perusahaan.php">Sekilas Perusahaan</a>
      <a class="dropdown-item" href="struktur-organisasi.php">Struktur Organisasi</a>
      <a class="dropdown-item" href="budaya-kerja.php">Budaya Kerja</a>
      <a class="dropdown-item" href="manajemen.php">Manajemen</a>
      <a class="dropdown-item" href="pemegang-saham.php">Pemegang Saham</a>
      <a class="dropdown-item" href="penghargaan.php">Penghargaan</a>
     
    </div>
    </li> 


    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INFO MANTAP</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="berita-mantap.php">Berita Mantap</a>
      <a class="dropdown-item" href="promosi-mantap.php">Promosi Mantap</a>
      <a class="dropdown-item" href="program-mantap.php">Program Mantap</a>
      <a class="dropdown-item" href="laporan-keuangan.php">Laporan Keuangan</a>
      <a class="dropdown-item" href="goodcorpgovernance.php">Good Corporate Governance</a>
      <a class="dropdown-item" href="pengungkapan-ksk.php">Pengungkapan Kuantitatif Eksposur Risiko</a>
      <a class="dropdown-item" href="whistleblowing-system.php">Whistleblowing System</a>
    </div>
    </li>
    
    <li class="nav-item dropdown">
    <a class="nav-link mr-3 dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BISNIS</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="pinjaman.php">Pinjaman Mantap</a>
      <a class="dropdown-item" href="simpanan.php">Simpanan Mantap</a>
      <a class="dropdown-item" href="jasa-bank.php">Jasa Bank</a>
      <a class="dropdown-item" href="simulasi.php">Simulasi</a>

      
    </div>
    </li> 

    
    <li class="nav-item"><a class="nav-link mr-3" href="kantor-cabang.php" tabindex="-1" aria-disabled="true">CABANG</a></li>
    <li class="nav-item"><a class="nav-link mr-3" href="karir.php" tabindex="-1" aria-disabled="true">KARIR</a></li>   


    </ul>

     
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="search-result.php">
          <input type="text" placeholder="Search.." name="search">
          <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
    
    <a class="text-muted" href="#" onclick="openSearch()">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
    <circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
    </a> 
    

    <div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-sm btn-warning">
    <input type="radio" name="options" id="option1" autocomplete="off" checked>IDN
    </label>
    <label class="btn btn-sm btn-outline-warning text-dark">
    <input type="radio" name="options" id="option2" autocomplete="off">ENG
    </label>
    </div>

</div>
 
</nav>


</header> -->
<!-- ====================================================== /NAVBAR  ===================================================== -->