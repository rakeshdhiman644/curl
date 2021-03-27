<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
 <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
 
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
 
 <script>
 	$(document).ready(function(){
$('.items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}

]
});
});
 </script>
 <style>
 	html,
body {
    background-color: #039BE5
}
 	.items {
    width: 90%;
    margin: 0px auto;
    margin-top: 100px
}

.slick-slide {
    margin: 10px
}

.slick-slide img {
    width: 100%;
    border: 0px solid #fff
}
 </style>
</head>
<body>
<div class="items">
	<?php
//https://m.media-amazon.com/images/I/71pvc7TWf-L._AC_UL320_.jpg
//https://m.media-amazon.com/images/I/71t58FV+qFL._AC_UL320_.jpg
//https://m.media-amazon.com/images/I/71vspbUNAdL._AC_UL320_.jpg
//https://www.amazon.in/s?i=aps&k=php%20books&ref=nb_sb_noss&url=search-alias%3Daps
//https://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=php+books
//https://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=php+books
//https://www.amazon.in/s?i=aps&k=java%20books&ref=nb_sb_noss_1&url=search-alias%3Daps
//https://m.media-amazon.com/images/I/71GrLKDeGRL._AC_UY218_.jpg
$ch = curl_init();
$url = "https://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=php+books";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
preg_match_all("!https://m.media-amazon.com/images/I/(.*)._AC_UL320_.jpg!",$result,$matches);
$images = array_values(array_unique($matches[0]));
// echo "<pre>";
// print_r($images);
foreach($images as $list){
	echo "<div><img src='$list'/></div>";
}
curl_close($ch);
?>
     <!-- <div><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1565190720/gallery/preview/02_o_car.jpg"></div> -->
 </div>
 <script>
    function startTime() {
    var today = new Date();
    var hr = today.getHours();
    var min = today.getMinutes();
    var sec = today.getSeconds();
    ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    hr = (hr == 0) ? 12 : hr;
    hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var time = setTimeout(function(){ startTime() }, 500);
}
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
 </script>
</body>
</html>