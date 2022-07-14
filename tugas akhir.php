<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			font-family: arial;
			padding: 10px;
			background-color: darkslategray;
			border-radius: 25px 25px 25px 25px;
		}

		.header {
			padding: 30px;
			text-align: center;
			color: white;
			border-radius: 25px 25px 25px 25px;
		}

		.header h1 {
			font-size: 50px
		}

		.topnav {
			overflow: hidden;
			background-color: #333;
		}

		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}

		.leftcolumn {
			float: left;
			width: 25%;
			background-color: #f1f1f1;
			padding-left: 20px
		}

		.centercolumn {
			float: left;
			width: 50%;
			background-color: #f1f1f1;
			padding-left: 20px
		}

		.rightcolumn {
			float: left;
			width: 25%;
			background-color: #f1f1f1;
			padding-left: 20px;
			border-radius: 50px 50px 50px 50px;
		}

		.fakeimg {
			background-color: #aaa;
			width: 75%;
		}

		.card {
			background-color: white;
			padding: 20px;
			margin-top: 20px;
		}

		.row:after {
			content: "";
			display: table;
			clear: both;
		}

		.footer {
			padding: 20px;
			text-align: center;
			background-color: darkslategrey;
			margin-top: 20px;
			color: white;
			border-radius: 10px;
		}
		.row{
			border-radius: 30px 30px 30px 30px;
		}

		.leftcolumn, .rightcolumn {
			width: 100%
			padding0;
		}

	    .topnav a {
	    	float: none;
	    	width: 100%
	    }
	 button {
    font-size: 12;
    border-style: none;
    /*background-color: #d6e0f5;*/
   }


	button:hover {
    color: aliceblue;
    background-color: #2952a3;
    border: 2px solid blueviolet;
}
	</style>
</head>
<body>

	<div class="header" style="background-color: darkslategray;">
		<h1 style="font-family: Algerian">YOGADITMA SITE</h1>
		<h2>jagan lupa dengan harimu mari melihat kalender dan berhitung dengan kalkulator</h2>
	</div>

	<div class="leftcolumn" style="background-color: white" >
			<div class="card" style="background-color: white">
				<h1><center>KALENDER</center></h1>
			<?php
	        //mengambil tanggal sistem saat ini (1-31)
	        $hari = date("d");
	        $hariini=$hari;
	        //mengambil bulan sistem saat ini (1-12)
	        $bulan = date("m");
	        //mengambil tahun sistem saat ini
	        $tahun = date("Y");
	        //mencari jumlah hari bulan dan tahun ini
	        $jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
	        ?>

            <?php
	        switch ($bulan) {
            case 1: $nmbulan = "Jan"; break;
		    case 2: $nmbulan = "Feb"; break;
		    case 3: $nmbulan = "Mar"; break;
		    case 4: $nmbulan = "Apr"; break;
		    case 5: $nmbulan = "Mei"; break;
		    case 6: $nmbulan = "Jun"; break;
		    case 7: $nmbulan = "Jul"; break;
		    case 8: $nmbulan = "Agu"; break;
		    case 9: $nmbulan = "Sep"; break;
		    case 10: $nmbulan = "Okt"; break;
		    case 11: $nmbulan = "Nov"; break;
		    case 12: $nmbulan = "Des"; break;
	        }
	        echo "<center><h1>$nmbulan $tahun</h1></center>";
	        ?>	    
	        <br>
	<table style="border: 2px solid #1E90FF" align="center" cellpadding="5">
		<tr bgcolor="#ADD8E6">
			<td align="center"><font color="#FF0000">Min</font></td>
			<td align="center">Sen</td>
			<td align="center">Sel</td>
			<td align="center">Rab</td>
			<td align="center">Kam</td>
			<td align="center">Jum</td>
			<td align="center">Sab</td>
		</tr>

        <?php
	    $s=date("w",mktime (0,0,0,$bulan,1,$tahun));
	    for ($ds=1; $ds<=$s; $ds++) { 
		echo "<td></td>";
	}

	for ($d=1; $d<=$jumlahhari; $d++) {
		//jika minggu ke 0, maka buat baris baru
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==0) {
			echo "<tr>";
		}

		$warna="#000000"; //warna default
		$warnasel="white"; //warna sel default

		//jika hari minggu beri warna merah
		if (date("l",mktime (0,0,0,$bulan,$d,$tahun))=="Sunday") {
			$warna="#FF0000";
		}

		//blok sel yang sesuai hari ini
		if ($hariini==$d) {
			$warna="blue";
			$warnasel="yellow";
		}

		//beri warna default tanggal tiap harinya (selain hari minggu)
		echo "<td align=center valign=middle bgcolor=$warnasel> <span style=\"color:$warna\">$d</span></td>";

		//jika hari ke enam, akhiri baris
		if (date("w",mktime (0,0,0,$bulan,$d,$tahun))==6) {
			echo "</tr>";
		}
	} 
	echo '</table>';
    ?>
    <br><br>
			</div>
		</div>

	<div class="row" style="background-color: white;">
		<div class="centercolumn" style="background-color: white;">
			<div class="card">
				<h2 align="center" style="font-family: Courier">TUGAS AKHIR PEMROGRAMAN WEB</h2><br><br>
				<div>
					<center><img src="logo UAD.jpg" width="400px" height="400px"></center>
				</div>
				<br><br><br>

					<div align="center"><h2>SIAPAKAH DIRI ANDAA!!!!</h2></div>
		            <form name="nama" method="post" action="proses.php">
			        <table width="58%" border="0" align="center">
				    <tr>
					    <td>Nama lengkap</td>
					    <td><input type="text" name="nama" id="nama"></td>
				    </tr>
				    <tr>
					    <td>NIM</td>
					    <td><input type="text" name="nim" id="nim"></td>
				    </tr>
				    <tr>
					    <td>E-mail</td>
					    <td><input type="text" name="email" id="email"></td>
				    </tr>
				    <tr>
					<td>Prodi</td>
					<td><select name="prodi" id="prodi">
						<option>Informatika</option>
						<option>Kedokteran</option>
						<option>Farmasi</option>
						<option>Teknik Industri</option>
						<option>Teknik Kimia</option>
					</select></td>
					<tr>
					    <td>Alamat</td>
					    <td><input type="text" name="alamat" id="alamat"></td>
				    </tr>
				</tr>
				<tr>
					<td>&nbsp</td>
					<td><input type="submit" name="submit" value="kirim" id="kirim"><input type="reset" name="reset" value="batal"></td>
				</tr>
				
			</table>
		</form>
		<div align="center"><strong><a href="lihat.php">::Lihat Data Diri::</a></strong></div>
			</div>
			<div class="card">
			<!-- jam digital	 -->
			<style>
			h1,h2,p,a{
				font-family: sans-serif;
				font-weight: normal;
			}
			.kotak{
					overflow: hidden;
					background-color: #333;
				}
				/*style link dalam menu*/
				.kotak{
					color: blanchedalmond;
					text-align: center;
					text-decoration: none;
				}
				/*ubah warna saat kursor di atasnya*/
				.kotak:hover{
					background-color: darkgoldenrod;
				}
		 
			.jam-digital-malasngoding {
				overflow: hidden;
				width: 330px;
				margin: 20px auto;
				border: 5px solid #efefef;
				}
			.kotak{
				float: left;
				width: 100px;
				height: 100px;
				background-color: #189fff;
				border-radius: 5px;
				border-color: darkgoldenrod;
			}
			.jam-digital-malasngoding p {
				color: #fff;
				font-size: 36px;
				text-align: center;
				margin-top: 30px;
			}
		 
		 
		</style>
		 
		<center>
			<h1>Digital Oclock</h1>
			<h2>YOGA ADITYA MAHARDIKA</h2>
		</center>
		 
		<div class="jam-digital-malasngoding">
			<div class="kotak">
				<p id="jam">jam </p>
			</div>
			<div class="kotak">
				<p id="menit">menit</p>
			</div>
			<div class="kotak">
				<p id="detik">detik</p>
			</div>
		</div>
		 
		 
		<script>
			window.setTimeout("waktu()", 1000);
		 
			function waktu() {
				var waktu = new Date();
				setTimeout("waktu()", 1000);
				document.getElementById("jam").innerHTML = waktu.getHours();
				document.getElementById("menit").innerHTML = waktu.getMinutes();
				document.getElementById("detik").innerHTML = waktu.getSeconds();
			}
		</script>
			</div>
		</div>

		<div class="rightcolumn" style="background-color: white">
			<div class="card" style="background-color: white">
            <h1><center>KALKULATOR</center></h1>
			<table border="1" cellspacing="10" align="center" cellpadding="">
                <tr>
                    <td colspan="4" id="inputLabel">0</td>
                </tr>

                <tr>
                    <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>

                <tr>
                   <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                   <td><button onclick="pushBtn(this);">.</button></td>
                   <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
                </table>
                <script type="text/javascript">
                var inputLabel = document.getElementById('inputLabel');
                function pushBtn(obj) {
                    var pushed = obj.innerHTML
                    if (pushed == '=') {
                    // Calculate
                    inputLabel.innerHTML = eval(inputLabel.innerHTML);
                    } else if (pushed == 'Reset') {
                    // All Clear
                    inputLabel.innerHTML = '0';
                    } else {
                        if (inputLabel.innerHTML == '0') {
                               inputLabel.innerHTML = pushed;  
                    } else {
                        inputLabel.innerHTML += pushed;   
                    }
                }
            }
            </script>
			</div>
		</div>
</div>   
     <div class="footer">
     	<h2>Copyright @YogaAdityaMahardika 2022</h2>
     </div>
</body>
</html>