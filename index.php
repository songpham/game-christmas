<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Game Christmas</title>
    <!-- Bootstrap -->
    <link href="bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
        <div class="title"><img src="images/logo.png" style="width: 70%" /></div>
        <div class="space"></div>
        <div class="row game">
            <?php
$arrayQuestion = array(
    1 => 'If you were born on Christmas day under what zodiac sign would you be?
    <span style="color: #2787d4">Bạn sẽ thuộc chòm sao nào nếu sinh vào ngày giáng sinh?</span>
    <br/><img src="questions/21171883.jpg" />',
    2 => 'Which country was The “Last Christmas” music video by Wham filmed?
    <span style="color: #2787d4">Video ca khúc “Last Christmas” của nhóm Wham được quay tại đất nước nào?</span>
    <br/><img src="questions/last-christmas-wham-original.jpg" />',
    3 => 'What present did Harry Potter receive for his first Christmas at Hogwarts?
    <span style="color: #2787d4">Harry Porter đã nhận được món quà gì vào ngày Giáng sinh đầu tiên ở Hogwarts?</span>
    <br/><img src="questions/Harry-Potter-hogwarts-house-rivalry-19903224-1600-1200.jpg" />',
    4 => 'Which fruity sauce is a usual accompaniment to the Christmas turkey?
    <span style="color: #2787d4">Loại sốt nào được sử dụng phổ biến với gà Tây trong ngày Giáng Sinh?</span>
    <br/><img src="questions/Noel-GayTay.jpg" />',
    5 => 'How many points does a snowflake have?
    <span style="color: #2787d4">Bông tuyết có bao nhiêu cánh?</span>',
    6 => 'Where does the the Christmas tree originally come from?
    <span style="color: #2787d4">Cây thông Noel bắt nguồn từ quốc gia nào?</span>
    <br/><img src="questions/bi an cay thong noel 1.jpg" />',
    7 => 'Where are the Christmas presents brought by a witch?
    <span style="color: #2787d4">Ở quốc gia nào sau đây, món quà giáng sinh được tặng bởi bà phù thủy?</span><br/>
    1. Italy<br/>
    2. Portugal<br/>
    3. Spain
    <br/><img src="questions/image_31946_witchnd.jpg" />',
    8 => '7km is the distance between this famous Muslim city to where Jesus was born? Name this city?
    <span style="color: #2787d4">Khoảng cách giữa thành phố Hồi giáo nổi tiếng này và nơi Chúa sinh ra là 7km? Tên thành phố là gì?</span>
    <br/><img src="questions/59LongThuongXot10.jpg" />',
    9 => 'Listen to a short music and guess the name of the song.
    <span style="color: #2787d4">Nghe một đoạn nhạc và đoán tên bài hát.</span>',
    10 => 'Which English author wrote the book “A Christmas carol”?
    <span style="color: #2787d4">Tác giả cuốn sách “Christmas Carol”?</span>
    <br/><img src="questions/A_Christmas_Carol_hq_wallpaper.jpg" />',
    11 => 'In the Christmas song “Jingle Bells”, how many horses pulled the sleigh?
    <span style="color: #2787d4">Có bao nhiêu chú ngựa kéo xe trượt tuyết trong bài hát “Jingle Bell”?</span>
    <br/><img src="questions/hqdefault.jpg" />',
    12 => 'Which female American singer sang “All I Want For Christmas Is You” in 1994?
    <span style="color: #2787d4">Nữ ca sĩ người Mỹ đã trình diễn ca khúc “All I want for Christmas is you” vào năm 1994?</span>',
    13 => 'Name of the main character in the movie  “Home alone”?
    <span style="color: #2787d4">Tên của nhân vật chính trong phim “Ở nhà một mình”?</span>
    <br/><img src="questions/Home-Alone-home-alone-31423371-1876-1027.jpg" />',
    14 => 'If I was born on Christmas Day, yet my birthday falls in the summer, where would I be?
    <span style="color: #2787d4">Nếu tôi sinh ra vào ngày Giáng sinh, nhưng ngày sinh của tôi rơi vào mùa Hè, liệu tôi có thể sinh ra tại đâu?</span>',
    15 => 'Traditionally what is hidden inside a rice pudding at Christmas in Sweden?
    <span style="color: #2787d4">Theo truyền thống, cái gì sẽ được giấu bên trong bánh gạo vào ngày giáng sinh ở Thụy điển?</span>
    <br/><img src="questions/39-hoi-cho-giang-sinh-ivivu.com-33.jpg" />',
    16 => 'Hebrew and Arabic are official language of what country?
    <span style="color: #2787d4">Tiếng Ả rập và Hebrew là ngôn ngữ chính thức của quốc gia nào?</span>'
);
            foreach ($arrayQuestion as $i => $value) { ?>
            <div class="col-xs-3 item">
                <div class="holder">
                    <div class="image"><img src="result/<?php echo $i ?>.jpg" alt="<?php echo $i ?>" /></div>
                    <div class="text"><strong class="question-number"><?php echo $i ?></strong>: <?php echo $value ?></div>
                    <div class="holder-number" data-id="<?php echo $i ?>"><a href="javascript:void(0)" class="number"><img src="icons/<?php echo $i ?>.png" /></a></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="background-mask"></div>
    <div class="show-question">
        <div class="title">&nbsp;</div>
        <div class="space">&nbsp;</div>
        <div class="question">&nbsp;</div>
        <div class="space3">&nbsp;</div>
        <a href="javascript:void(0)" class="button correct"><span class="glyphicon glyphicon-ok"></span></a>
        <a href="javascript:void(0)" class="button incorrect"><span class="glyphicon glyphicon-remove"></span></a>
    </div>
    <div id="sound"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="js/snowstorm.js?version=1"></script>
    <script src="js/script.js?version=1"></script>
  </body>
</html>