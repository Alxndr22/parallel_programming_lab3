<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Даты выхода игр</title>
	<link rel="stylesheet" href="sl_data.css">

</head>
<body>
	<h1>Даты выхода игр</h1>
	<h3>01.12.19 - 31.12.19</h3>
	<div id="main_page">
		<div class="header">Список ближайших релизов</div>

		<div class="box"><img src="src/phoenix_point.jpg" width="100%" height="50%">
			<strong>Жанр:</strong> strategy<br><strong>Дата выхода:</strong> 3 декабря 2019 г.<br><strong>Платформа:</strong> Mac, PC, PS4, XONE<br><strong>Разработчик: </strong>Snapshot Games
            <div class="box">
                <?php if (!isset($_REQUEST['Submit'])) { ?>
                    <form name="phoenix" method="post">
                        <input name="item_id" id="item_id" value="2" style="visibility: hidden">
                        <label for="name_user">Name</label>
                        <input type="text" name="name_user" id="name_user">
                        <label for="text">Text</label>
                        <input type="text" name="text" id="text">
                        <input type="submit" name="Submit" id="Submit" value="Submit">
                    </form>
                <?php } else {
                    $con = new mysqli('localhost', 'root', '145100', 'date_release_db');

                    $item_id = $_POST['item_id'];
                    $name_user = $_POST['name_user'];
                    $text = $_POST['text'];


                    $sql = "INSERT INTO `comment` (`item_id`, `name_user`, `text`) VALUES ('item_id', 'name_user', 'text')";

                    $result = mysqli_query($con, $sql);

                }
                ?>
            </div>
        </div>


		<div class="box"><img src="src/vampire.jpg" width="100%" height="50%">
			<strong>Жанр:</strong> adventure<br><strong>Дата выхода:</strong> 4 декабря 2019 г.<br><strong>Платформа:</strong> Mac, NSW, PC<br><strong>Разработчик: </strong>Draw Distance
		</div>

		<div class="box"><img src="src/darksider.jpg" width="100%" height="50%">
			<strong>Жанр: </strong>rpg<br><strong>Дата выхода: </strong>5 декабря 2019 г.<br><strong>Платформа: </strong>NSW, PC, PS4, Stadia, XONE<br><strong>Разработчик: </strong>Airship Syndicate
		</div>

		<div class="box"><img src="src/boneworks.jpg" width="100%" height="50%">
			<strong>Жанр: </strong>action<br><strong>Дата выхода: </strong>10 декабря 2019 г.<br><strong>Платформа: </strong>PC<br><strong>Разработчик: </strong>Stress Level Zero
		</div>

		<div class="box"><img src="src/jurassic.jpg" width="100%" height="50%">
			<strong>Жанр: </strong>strategy<br><strong>Дата выхода: </strong>10 декабря 2019 г.<br><strong>Платформа: </strong>PC, PS4, XONE<br><strong>Разработчик: </strong>Frontier Developments
		</div>

		<div class="box"><img src="src/mechwarrior.jpg" width="100%" height="50%">
			<strong>Жанр: </strong>action, simulator<br><strong>Дата выхода: </strong>10 декабря 2019 г.<br><strong>Платформа: </strong>PC<br><strong>Разработчик: </strong>Pirenha Games
		</div>

		<div class="box"><img src="src/totalwar.jpg" width="100%" height="50%">
			<strong>Жанр: </strong>strategy<br><strong>Дата выхода: </strong>12 декабря 2019 г.<br><strong>Платформа: </strong>Mac, PC<br><strong>Разработчик: </strong>Creative Assembly
		</div>


		<div class="box"><img src="src/spintires.jpg" width="100%" height="50%">
			<strong>Жанр: </strong>racing<br><strong>Дата выхода: </strong>13 декабря 2019 г.<br><strong>Платформа: </strong>PC<br><strong>Разработчик: </strong>Oovee Game Studios
		</div>

		<div class="box"><img src="src/wattam.jpg" width="100%" height="50%">
			<strong>Жанр: </strong>arcade<br><strong>Дата выхода: </strong>17 декабря 2019 г.<br><strong>Платформа: </strong>PC, PS4<br><strong>Разработчик: </strong>Annapurna Interactive
		</div>
	</div>

</body>
</html>