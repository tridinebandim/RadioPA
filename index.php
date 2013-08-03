<?php
	include('top.php') ;

	$file = FileManager::create();
	$file->handler();
	$ssh = Ssh::create();
	$setting = Setting::create();
	$setting->handler();
?>

	<div class="body">
		<div class="title">Добро пожаловать</div>
		<div class="border">
<?php

	if ($user['admin'] == 0) {
			Вы зашли как <i>DJ</i>. Вам открыт доступ к модулям 'Стастистика' и частично к  'Ваши DJ' и 'Статус'.
<?php
    } else {
?>
    		Вы зашли как <i>Администратор</i>. Вам открыт доступ ко всем модулям.
<?php
    }
?>
	Пожалуйста, используйте главное меню для работы с доступными сервисами.
	<br><br>
	Система: <b>RadioCMS</b><br>
	Версия: <b><?=RADIOCMS_VERSION?></b>
	<br>
<?php
	$count = $file->getCountTempFiles();
	$pokazat = "";
	if ($count >= 1 and TEMP_UPLOAD != "") {
	} else {
	}
?>
			Файлов во временной папке Upload: <b><?=$count?></b><?=$pokazat?>
<?php
?>
	<br>
<?php
    if (!$ssh->checkEzstreamCompatibility()) {
?>
            <div><span class="red">Установлен ezstream не с сайта RadioCMS, существуют ограничения на длинну id3-тегов</span></div>
<?php
    }   
?>
<?php
	if (
		DIR_SHOW == "on" and
		DIR_NAME != "" and
		DIR_URL != "" and
		DIR_STREAM != "" and
		DIR_DESCRIPTION != "" and
		DIR_GENRE != ""
	) {
?>
			<div>Ваше радио <span class="green">отображается</span> в каталоге RadioCMS</div>
<?php
	} else {
<?php
?>
<?php
	if ( file_exists("install.php")) {
?>
			<div><span class="red">install.php не удалён</span> — <a href="?del_install=1">Удалить</a></div>
<?php
	}
?>
<?php
			include('Tpl/error.tpl.html');
?>
			<br><br>
			<img style="position: absolute; margin-top: -1px;" src="images/go.png" border="0"> <a style="position: absolute; margin-left: 17px;" href="http://radiocms.ru" target="_blank">Официальный сайт</a>
			<br>
			<br>
			<form method="POST" action="">
				<textarea name="main_text" style="width: 500px; height: 100px;"><?=$setting->getDescription()?></textarea>
				<p>
					<input class="button" type="submit" value="Сохранить">
				</p>
			</form>
		</div>
	</div>
<?php
    include('Tpl/footer.tpl.html');
?>  	