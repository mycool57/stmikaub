
Malas Ngoding | Tutorial belajar pemrograman web, mobile, desktop
MALAS NGODING
TOKO
FREEBIES
CODE EDITOR
Cara Membuat Animasi Preloader Dengan CSS3

Oleh admin | CSS3, Web Design	|9 April 2016 |No Comment
Malas Ngoding
Web Programming
Web Design
Desktop Programming
Mobile Programming
Inspirasi
WordPress
Home / Cara Membuat Animasi Preloader Dengan CSS3

cara membuat animasi preloader dengan css3
Cara Membuat Animasi Preloader Dengan CSS3

Oleh admin | CSS3, Web Design	|9 April 2016 |No Comment

Cara Membuat Animasi Preloader Dengan CSS3

Cara Membuat Animasi Preloader Dengan CSS3 – Terima kasih sebelumnya saya ucapkan kepada teman-teman yang sudah membaca tutorial-turoial pemrograman di malasngoding.com. khususnya tutorial membuat animasi preloader dengan css3 ini. sebenarnya saya agak bingung sih mau ngupdate tutorial apa lagi di malasngoding.com. teman-teman kalau ada yang mau request tutorial pemrograman bisa menghubungi saya melalui facebook. kebingungan saya hilang saat saya googling. dan menemukan tutorial yang saya rasa cocok untuk di angkat di www.malasngoding.com. yaitu tutorial cara membuat efek animasi preloader dengan css3.

Di tutorial ini akan saya jelaskan tentang cara membuat efek animasi yang bentuknya seperti efek loading. tutorial ini saya kutip dari website ternama. yaitu medialoot.com. jadi saya akan mencoba menjelaskan secara terperinci tentang komponen-komponen pembuatan preloading dengan css3. karena saya lihat di medialoot sendiri tidak menjelaskan secara terperinci. tapi yang penting terima kasih banyak juga untuk medialoot.com karena sudah bersedia membagikan ilmunya kepada kita secara gratis.

Cara Membuat Animasi Preloader Dengan CSS3

Akan langsung kita masuk ke cara membuat efek preloader dengan css3. di sini ada beberapa buah efek animasi yang di buat. dan akan kita jelaskan satu persatu. oh iya kalau teman-teman berkenan hatinya, mohon share tutorial ini. agar teman-teman yang lain juga bisa membaca tutorial ini. dan semoga pahala untuk saling berbaginya bisa berlipat ganda. biar cepat masuk surga. hehe..

Animasi preloader 1 – Double Spinner

Langsung saja.

HTML


<div class="box">
  <div id="preloader-1">
    <span></span>
    <span></span>
  </div>
</div>
1
2
3
4
5
6
<div class="box">
  <div id="preloader-1">
    <span></span>
    <span></span>
  </div>
</div>
CSS


body{
  background: #ffb83c;
}

#preloader-1 {
  position: relative;
  margin:0px auto;
  width:100px;
}

#preloader-1 span {
  position: absolute;
  border: 8px solid #fff;
  border-top: 8px solid transparent;
  border-radius: 999px;
}

#preloader-1 span:nth-child(1) {
  width: 80px;
  height: 80px;
  animation: spin-1 2s infinite linear;
}

#preloader-1 span:nth-child(2) {
  top: 20px;
  left: 20px;
  width: 40px;
  height: 40px;
  animation: spin-2 1s infinite linear;
}

@keyframes spin-1 {
  0% {
    transform: rotate(360deg);
    opacity: 1;
  }
  50% {
    transform: rotate(180deg);
    opacity: 0.5;
  }
  100% {
    transform: rotate(0deg);
    opacity: 1;
  }
}

@keyframes spin-2 {
  0% {
    transform: rotate(0deg);
    opacity: 0.5;
  }
  50% {
    transform: rotate(180deg);
    opacity: 1;
  }
  100% {
    transform: rotate(360deg);
    opacity: 0.5;
  }
}
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
body{
  background: #ffb83c;
}
 
#preloader-1 {
  position: relative;
  margin:0px auto;
  width:100px;
}
 
#preloader-1 span {
  position: absolute;
  border: 8px solid #fff;
  border-top: 8px solid transparent;
  border-radius: 999px;
}
 
#preloader-1 span:nth-child(1) {
  width: 80px;
  height: 80px;
  animation: spin-1 2s infinite linear;
}
 
#preloader-1 span:nth-child(2) {
  top: 20px;
  left: 20px;
  width: 40px;
  height: 40px;
  animation: spin-2 1s infinite linear;
}
 
@keyframes spin-1 {
  0% {
    transform: rotate(360deg);
    opacity: 1;
  }
  50% {
    transform: rotate(180deg);
    opacity: 0.5;
  }
  100% {
    transform: rotate(0deg);
    opacity: 1;
  }
}
 
@keyframes spin-2 {
  0% {
    transform: rotate(0deg);
    opacity: 0.5;
  }
  50% {
    transform: rotate(180deg);
    opacity: 1;
  }
  100% {
    transform: rotate(360deg);
    opacity: 0.5;
  }
}
dan hasilnya

cara membuat animasi preloader dengan css3
cara membuat animasi preloader dengan css3
akan saa jelaskan sedikit. intinya ada di element span. ada dua buah span. dan keduanya di jadikan sebagai efek yang melingkar membentuk animasi loading seperti pada hasilnya.


#preloader-1 span:nth-child(1) {
  width: 80px;
  height: 80px;
  animation: spin-1 2s infinite linear;
}

#preloader-1 span:nth-child(2) {
  top: 20px;
  left: 20px;
  width: 40px;
  height: 40px;
  animation: spin-2 1s infinite linear;
}
1
2
3
4
5
6
7
8
9
10
11
12
13
#preloader-1 span:nth-child(1) {
  width: 80px;
  height: 80px;
  animation: spin-1 2s infinite linear;
}
 
#preloader-1 span:nth-child(2) {
  top: 20px;
  left: 20px;
  width: 40px;
  height: 40px;
  animation: spin-2 1s infinite linear;
}
perhatikan pada syntax di atas.


#preloader-1 span:nth-child(1)
1
#preloader-1 span:nth-child(1)
di gunakan untuk memilih span yang pertama pada css. dan


#preloader-1 span:nth-child(2)
1
#preloader-1 span:nth-child(2)
untuk memilih span yang kedia. :nth-child() berfungsi untuk memilih element HTML berdasarkan turunan elament induk(child).

lalu kemudian kedua span tadi di berikan efek css3


@keyframes spin-1 {
  0% {
    transform: rotate(360deg);
    opacity: 1;
  }
  50% {
    transform: rotate(180deg);
    opacity: 0.5;
  }
  100% {
    transform: rotate(0deg);
    opacity: 1;
  }
}

@keyframes spin-2 {
  0% {
    transform: rotate(0deg);
    opacity: 0.5;
  }
  50% {
    transform: rotate(180deg);
    opacity: 1;
  }
  100% {
    transform: rotate(360deg);
    opacity: 0.5;
  }
}
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
@keyframes spin-1 {
  0% {
    transform: rotate(360deg);
    opacity: 1;
  }
  50% {
    transform: rotate(180deg);
    opacity: 0.5;
  }
  100% {
    transform: rotate(0deg);
    opacity: 1;
  }
}
 
@keyframes spin-2 {
  0% {
    transform: rotate(0deg);
    opacity: 0.5;
  }
  50% {
    transform: rotate(180deg);
    opacity: 1;
  }
  100% {
    transform: rotate(360deg);
    opacity: 0.5;
  }
}
transform rotate() sudah kita bahas pada tutorial css3 di malasngoding.com. rotate() berfungsi untuk memutar element dengan css3.

contohnya.


 0% {
    transform: rotate(360deg);
    opacity: 1;
  }
  50% {
    transform: rotate(180deg);
    opacity: 0.5;
  }
  100% {
    transform: rotate(0deg);
    opacity: 1;
  }
1
2
3
4
5
6
7
8
9
10
11
12
 0% {
    transform: rotate(360deg);
    opacity: 1;
  }
  50% {
    transform: rotate(180deg);
    opacity: 0.5;
  }
  100% {
    transform: rotate(0deg);
    opacity: 1;
  }
persen yang ada di atas untuk menentukan waktu dari animasi. berarti dari 0  opacity/ketransparannannya di setting senilai 1. dengan putaran sebesar 360 derajat. dan pada pertengahan animasi atau 50% putarannya berubah menjadi 180 derajat. dan yang terakhir dari 50 sampai 100 persen atau selesai putaran di kembalikan ke nilai 0 derajat.

FULL SOURCE


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="box">
		<center>
			<h1>
				Membuat animasi preloader dengan css3<br>
				Double spinner<br/>
				www.malasngoding.com
			</h1>			
		</center>
		<div id="preloader-1">
			<span></span>
			<span></span>
		</div>
	</div>

	<style type="text/css">
		body{
			background: #ffb83c;
		}
		h1{
			font-family: sans-serif;
			color: #fcfcfc;
			font-weight: 100;			
		}

		#preloader-1 {
			position: relative;
			margin:100px auto;
			width:100px;
		}

		#preloader-1 span {
			position: absolute;
			border: 8px solid #fff;
			border-top: 8px solid transparent;
			border-radius: 999px;
		}

		#preloader-1 span:nth-child(1) {
			width: 80px;
			height: 80px;
			animation: spin-1 2s infinite linear;
		}

		#preloader-1 span:nth-child(2) {
			top: 20px;
			left: 20px;
			width: 40px;
			height: 40px;
			animation: spin-2 1s infinite linear;
		}

		@keyframes spin-1 {
			0% {
				transform: rotate(360deg);
				opacity: 1;
			}
			50% {
				transform: rotate(180deg);
				opacity: 0.5;
			}
			100% {
				transform: rotate(0deg);
				opacity: 1;
			}
		}

		@keyframes spin-2 {
			0% {
				transform: rotate(0deg);
				opacity: 0.5;
			}
			50% {
				transform: rotate(180deg);
				opacity: 1;
			}
			100% {
				transform: rotate(360deg);
				opacity: 0.5;
			}
		}
	</style>
</body>
</html>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="box">
		<center>
			<h1>
				Membuat animasi preloader dengan css3<br>
				Double spinner<br/>
				www.malasngoding.com
			</h1>			
		</center>
		<div id="preloader-1">
			<span></span>
			<span></span>
		</div>
	</div>
 
	<style type="text/css">
		body{
			background: #ffb83c;
		}
		h1{
			font-family: sans-serif;
			color: #fcfcfc;
			font-weight: 100;			
		}
 
		#preloader-1 {
			position: relative;
			margin:100px auto;
			width:100px;
		}
 
		#preloader-1 span {
			position: absolute;
			border: 8px solid #fff;
			border-top: 8px solid transparent;
			border-radius: 999px;
		}
 
		#preloader-1 span:nth-child(1) {
			width: 80px;
			height: 80px;
			animation: spin-1 2s infinite linear;
		}
 
		#preloader-1 span:nth-child(2) {
			top: 20px;
			left: 20px;
			width: 40px;
			height: 40px;
			animation: spin-2 1s infinite linear;
		}
 
		@keyframes spin-1 {
			0% {
				transform: rotate(360deg);
				opacity: 1;
			}
			50% {
				transform: rotate(180deg);
				opacity: 0.5;
			}
			100% {
				transform: rotate(0deg);
				opacity: 1;
			}
		}
 
		@keyframes spin-2 {
			0% {
				transform: rotate(0deg);
				opacity: 0.5;
			}
			50% {
				transform: rotate(180deg);
				opacity: 1;
			}
			100% {
				transform: rotate(360deg);
				opacity: 0.5;
			}
		}
	</style>
</body>
</html>

Animasi preloader 2 – Crossing Circle

Sesuai dengan nama preloader animation ini (crossing circle). animasi preloader ini berbentuk dua lingkaran kecil yang saling bersebrangan. oke kita lihat langsung source code nya ya.

HTML


<div class="box">
  <center>
    <h1>
	Membuat animasi preloader dengan css3<br>
	Crossing Circle<br/>
	www.malasngoding.com
   </h1>
  </center>
  <div id="preloader-2">
    <span></span>
    <span></span>
  </div>
</div>
1
2
3
4
5
6
7
8
9
10
11
12
13
<div class="box">
  <center>
    <h1>
	Membuat animasi preloader dengan css3<br>
	Crossing Circle<br/>
	www.malasngoding.com
   </h1>
  </center>
  <div id="preloader-2">
    <span></span>
    <span></span>
  </div>
</div>
CSS


body {
  background-color: #4ad3b4;
}

h1 {
  font-family: sans-serif;
  color: #fcfcfc;
  font-weight: 100;
  font-size: 16pt;
}

#preloader-2 {
  position: relative;
  margin: 70px auto;
  width: 100px;
}

#preloader-2 span {
  position: absolute;
  width: 30px;
  height: 30px;
  background: #fff;
  border-radius: 999px;
}

#preloader-2 span:nth-child(1) {
  animation: cross-1 1.5s infinite linear;
}

#preloader-2 span:nth-child(2) {
  animation: cross-2 1.5s infinite linear;
}

@keyframes cross-1 {
  0% {
    transform: translateX(0px);
    opacity: 1;
  }
  50% {
    transform: translateX(80px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(0px);
    opacity: 1;
  }
}

@keyframes cross-2 {
  0% {
    transform: translateX(80px);
    opacity: 1;
  }
  50% {
    transform: translateX(0px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(80px);
    opacity: 1;
  }
}
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
body {
  background-color: #4ad3b4;
}
 
h1 {
  font-family: sans-serif;
  color: #fcfcfc;
  font-weight: 100;
  font-size: 16pt;
}
 
#preloader-2 {
  position: relative;
  margin: 70px auto;
  width: 100px;
}
 
#preloader-2 span {
  position: absolute;
  width: 30px;
  height: 30px;
  background: #fff;
  border-radius: 999px;
}
 
#preloader-2 span:nth-child(1) {
  animation: cross-1 1.5s infinite linear;
}
 
#preloader-2 span:nth-child(2) {
  animation: cross-2 1.5s infinite linear;
}
 
@keyframes cross-1 {
  0% {
    transform: translateX(0px);
    opacity: 1;
  }
  50% {
    transform: translateX(80px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(0px);
    opacity: 1;
  }
}
 
@keyframes cross-2 {
  0% {
    transform: translateX(80px);
    opacity: 1;
  }
  50% {
    transform: translateX(0px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(80px);
    opacity: 1;
  }
}

Membuat animasi crossing circle ini juga menggunakan 2 buah element span. tapi sudah di buat dalam bentuk lingkaran(perhatikan syntax css di atas).


@keyframes cross-1 {
  0% {
    transform: translateX(0px);
    opacity: 1;
  }
  50% {
    transform: translateX(80px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(0px);
    opacity: 1;
  }
}

@keyframes cross-2 {
  0% {
    transform: translateX(80px);
    opacity: 1;
  }
  50% {
    transform: translateX(0px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(80px);
    opacity: 1;
  }
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
@keyframes cross-1 {
  0% {
    transform: translateX(0px);
    opacity: 1;
  }
  50% {
    transform: translateX(80px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(0px);
    opacity: 1;
  }
}
 
@keyframes cross-2 {
  0% {
    transform: translateX(80px);
    opacity: 1;
  }
  50% {
    transform: translateX(0px);
    opacity: 0.5;
  }
  100% {
    transform: translateX(80px);
    opacity: 1;
  }
jika animasi preloader yang pertama di buat dengan rotate() untuk membuat element berputas, animasi preloader yang kedua ini di buat menggunakan bantuan syntax translate css3. transform translate css3 juga sudah kita pelajari pada tutorial sebelumnya di malasngoding.com. Cara Membuat Animasi Preloader Dengan CSS3

FULL SOURCE


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="box">
		<center>
			<h1>
				Membuat animasi preloader dengan css3<br>
				Crossing Circle<br/>
				www.malasngoding.com
			</h1>
		</center>
		<div id="preloader-2">
			<span></span>
			<span></span>
		</div>
	</div>

	<!-- http://medialoot.com/ -->

	<style type="text/css">
		body {
			background-color: #4ad3b4;
		}

		h1 {
			font-family: sans-serif;
			color: #fcfcfc;
			font-weight: 100;
			font-size: 16pt;
		}

		#preloader-2 {
			position: relative;
			margin: 70px auto;
			width: 100px;
		}

		#preloader-2 span {
			position: absolute;
			width: 30px;
			height: 30px;
			background: #fff;
			border-radius: 999px;
		}

		#preloader-2 span:nth-child(1) {
			animation: cross-1 1.5s infinite linear;
		}

		#preloader-2 span:nth-child(2) {
			animation: cross-2 1.5s infinite linear;
		}

		@keyframes cross-1 {
			0% {
				transform: translateX(0px);
				opacity: 1;
			}
			50% {
				transform: translateX(80px);
				opacity: 0.5;
			}
			100% {
				transform: translateX(0px);
				opacity: 1;
			}
		}

		@keyframes cross-2 {
			0% {
				transform: translateX(80px);
				opacity: 1;
			}
			50% {
				transform: translateX(0px);
				opacity: 0.5;
			}
			100% {
				transform: translateX(80px);
				opacity: 1;
			}
		}
	</style>
</body>
</html>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="box">
		<center>
			<h1>
				Membuat animasi preloader dengan css3<br>
				Crossing Circle<br/>
				www.malasngoding.com
			</h1>
		</center>
		<div id="preloader-2">
			<span></span>
			<span></span>
		</div>
	</div>
 
	<!-- http://medialoot.com/ -->
 
	<style type="text/css">
		body {
			background-color: #4ad3b4;
		}
 
		h1 {
			font-family: sans-serif;
			color: #fcfcfc;
			font-weight: 100;
			font-size: 16pt;
		}
 
		#preloader-2 {
			position: relative;
			margin: 70px auto;
			width: 100px;
		}
 
		#preloader-2 span {
			position: absolute;
			width: 30px;
			height: 30px;
			background: #fff;
			border-radius: 999px;
		}
 
		#preloader-2 span:nth-child(1) {
			animation: cross-1 1.5s infinite linear;
		}
 
		#preloader-2 span:nth-child(2) {
			animation: cross-2 1.5s infinite linear;
		}
 
		@keyframes cross-1 {
			0% {
				transform: translateX(0px);
				opacity: 1;
			}
			50% {
				transform: translateX(80px);
				opacity: 0.5;
			}
			100% {
				transform: translateX(0px);
				opacity: 1;
			}
		}
 
		@keyframes cross-2 {
			0% {
				transform: translateX(80px);
				opacity: 1;
			}
			50% {
				transform: translateX(0px);
				opacity: 0.5;
			}
			100% {
				transform: translateX(80px);
				opacity: 1;
			}
		}
	</style>
</body>
</html>
 

Animasi Preloader 3 – Circle Rotator

Cirlce Rotator adalah animasi preloader yang membentuk lingkaran yang berputar. sama seperi animasi preloader yang pertama kita bahas. bedanya circle rotator hanya memiliki satu garis.

HTML


<div class="box">
	<center>
		<h1>
			Membuat animasi preloader dengan css3<br>
			Circle Rotator<br/>
			www.malasngoding.com
		</h1>
	</center>
	<div id="preloader-3">
		<span></span>			
	</div>
</div>
1
2
3
4
5
6
7
8
9
10
11
12
<div class="box">
	<div id="preloader-3">
		<span></span>			
	</div>
</div>
CSS


body {
	background-color: #ab69d9;
}
h1 {
	font-family: sans-serif;
	color: #fcfcfc;
	font-weight: 100;
	font-size: 16pt;
}
#preloader-3 {
	position:relative;
	animation: rotate 1s infinite linear;
	border: 4px solid rgba(255, 255, 255, .25);
	width: 80px;
	height: 80px;
	border-radius: 999px;
	margin: 70px auto;			
}
#preloader-3 span {
	position:absolute;
	width:80px;
	height:80px;
	border: 4px solid transparent;
	border-top: 4px solid #fff;
	top: -4px;
	left: -4px;
	border-radius:999px;
}
@keyframes rotate {
	0% {transform: rotate(0deg);}
	100% {transform: rotate(360deg);}
}
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
body {
	background-color: #ab69d9;
}
h1 {
	font-family: sans-serif;
	color: #fcfcfc;
	font-weight: 100;
	font-size: 16pt;
}
#preloader-3 {
	position:relative;
	animation: rotate 1s infinite linear;
	border: 4px solid rgba(255, 255, 255, .25);
	width: 80px;
	height: 80px;
	border-radius: 999px;
	margin: 70px auto;			
}
#preloader-3 span {
	position:absolute;
	width:80px;
	height:80px;
	border: 4px solid transparent;
	border-top: 4px solid #fff;
	top: -4px;
	left: -4px;
	border-radius:999px;
}
@keyframes rotate {
	0% {transform: rotate(0deg);}
	100% {transform: rotate(360deg);}
}

@keyframes rotate {
	0% {transform: rotate(0deg);}
	100% {transform: rotate(360deg);}
}
1
2
3
4
@keyframes rotate {
	0% {transform: rotate(0deg);}
	100% {transform: rotate(360deg);}
}


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="box">
		<center>
			<h1>
				Membuat animasi preloader dengan css3<br>
				Circle Rotator<br/>
			</h1>
		</center>
		<div id="preloader-3">
			<span></span>			
		</div>
	</div>

	<!-- http://medialoot.com/ -->

	<style type="text/css">
			body {
				background-color: #ab69d9;
			}

			h1 {
				font-family: sans-serif;
				color: #fcfcfc;
				font-weight: 100;
				font-size: 16pt;
			}

			#preloader-3 {
				position:relative;
				animation: rotate 1s infinite linear;
				border: 4px solid rgba(255, 255, 255, .25);
				width: 80px;
				height: 80px;
				border-radius: 999px;
				margin: 70px auto;			
			}
			#preloader-3 span {
				position:absolute;
				width:80px;
				height:80px;
				border: 4px solid transparent;
				border-top: 4px solid #fff;
				top: -4px;
				left: -4px;
				border-radius:999px;
			}
			@keyframes rotate {
				0% {transform: rotate(0deg);}
				100% {transform: rotate(360deg);}
			}
	</style>
</body>
</html>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="box">
		<center>
			<h1>
				Membuat animasi preloader dengan css3<br>
				Circle Rotator<br/>
				www.malasngoding.com
			</h1>
		</center>
		<div id="preloader-3">
			<span></span>			
		</div>
	</div>
 
	<!-- http://medialoot.com/ -->
 
	<style type="text/css">
			body {
				background-color: #ab69d9;
			}
 
			h1 {
				font-family: sans-serif;
				color: #fcfcfc;
				font-weight: 100;
				font-size: 16pt;
			}
 
			#preloader-3 {
				position:relative;
				animation: rotate 1s infinite linear;
				border: 4px solid rgba(255, 255, 255, .25);
				width: 80px;
				height: 80px;
				border-radius: 999px;
				margin: 70px auto;			
			}
			#preloader-3 span {
				position:absolute;
				width:80px;
				height:80px;
				border: 4px solid transparent;
				border-top: 4px solid #fff;
				top: -4px;
				left: -4px;
				border-radius:999px;
			}
			@keyframes rotate {
				0% {transform: rotate(0deg);}
				100% {transform: rotate(360deg);}
			}
	</style>
</body>
</html>

