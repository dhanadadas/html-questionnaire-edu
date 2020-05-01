<?php
require_once('city.php'); // подключаем список с городами

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

// возвращаем список городов
if ($action == 'getCity')
{
    if (isset($city[$_GET['region']]))
    {
        echo json_encode($city[$_GET['region']]); // возвраащем данные в JSON формате;
    }
    else
    {
        echo json_encode(array('Выберите область'));
    }

    exit;
}

// выводим пришедшие данные
if ($action == 'postResult')
{
    echo '<pre>' . htmlspecialchars(print_r($_POST, true)) . '</pre>';
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> <link rel="icon" href="/favicon.ico" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(function(){
        $('#element_21').change(function(){
		var value = $('#element_21 option:selected').text();
        document.getElementById('element_1').value = value;

    })
});
</script>
	<title>Независимая оценка качества условий оказания услуг организациями культуры Брянской области</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<style>
        body {font-family:Verdana; font-size:12px;}
    </style>
<script type="text/javascript">
    // <![CDATA[
        function loadCity(select)
        {
            var citySelect = $('select[name="sss"]');
            citySelect.attr('disabled', 'disabled'); // делаем список городов не активным
            
            // послыаем AJAX запрос, который вернёт список городов для выбранной области
            $.getJSON('index.php', {action:'getCity', region:select.value}, function(cityList){
                
                citySelect.html(''); // очищаем список городов
                
                // заполняем список городов новыми пришедшими данными
                $.each(cityList, function(i){
                    citySelect.append('<option value="' + i + '">' + this + '</option>');
                });
                
                citySelect.removeAttr('disabled'); // делаем список городов активным
                
            });
        }
    // ]]>
    </script>
</head>

<body id="main_body" >
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<!-- <h1><a>
Независимая оценка качества условий оказания услуг организациями культуры Брянской области</a></h1>-->
	
<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe"
style="display:none;" onload="if(submitted)
{window.location='https://kultura32.rane-brf.ru/spasibo.html';}"></iframe>
<form action="https://docs.google.com/forms/d/e/1FAIpQLSc8wwaNUPw1E9SoRHyXshcgqAXnVnyT8VFMnysbZeug1Dl4Aw/formResponse" method="POST" id="mG61Hd"
target="hidden_iframe" onsubmit="submitted=true;">
		
					<div class="form_description">
			<h2><b>
Независимая оценка качества условий оказания услуг организациями культуры Брянской области</b></h2>
			<p>Мы хотим узнать, как Вы оцениваете качество работы организации культуры. Просим внимательно отнестись к анкетированию и внимательно ответить на вопросы. Анкета является анонимной. Указывать свое имя, Ваши личные данные не требуется. Ваше мнение нам очень важно и будет учтено в дальнейшей работе.</p>
		</div>						
			<ul >
			
							<li id="li_21" >
		<label class="description" for="element_21">Учреждение</label>
		<div>
			<select  required name="region" onchange="loadCity(this)">
            <option></option>
            
            <?php
            // заполняем список областей
            foreach ($city as $region => $cityList)
            {
                echo '<option value="' . $region . '">' . $region . '</option>' . "\n";
            }
            ?>
            
        </select>
        
        <select class="element select medium" required id="element_21" name="sss" disabled="disabled">
            <option>Тип учреждения </option>
        </select>
		</div> 
		</li>
					<li id="li_1" >
		<label class="description" for="element_1">Выбранное учреждение (Если учреждения нет в списке - введите здесь)</label>
		<div>
			<input required id="element_1" name="entry.562845566" class="element text large" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
		<li id="li_2" >
		<label class="description" for="entry.989816706">1. Вы удовлетворены открытостью, полнотой и доступностью информации о деятельности организации, размещенной на информационных стендах, на сайте в информационно-телекоммуникационной сети "Интернет? </label>
		<span>
			<input  required id="element_2_1" name="entry.989816706" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_2_1">Да</label>
<input  required id="element_2_2" name="entry.989816706" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_2_2">Нет</label>


		</span> 
		</li>		<li id="li_3" >
		<label class="description" for="entry.1453720170">2. Удовлетворены Вы комфортностью условий предоставления услуг? </label>
		<span>
          
			<input required id="element_3_1" name="entry.1453720170" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_3_1">Да</label>
			<input required id="element_3_2" name="entry.1453720170" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_3_2">Нет</label>
		</span> 
		</li>		<li id="li_4" >
		<label class="description" for="entry.1945542648">3. Имеете ли вы установленную группу инвалидности?</label>
		<span>
<input required id="element_4_2" name="entry.1945542648" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_4_2">Да</label>
<input  required id="element_4_3" name="entry.1945542648" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_4_3">Нет</label>


		</span> 
		</li>		<li id="li_7" >
		<label class="description" for="entry.1704398673">4. В организации обеспечены условия доступности для лиц с ограниченными возможностями? </label>
		<span>
		<input required id="element_7_2" name="entry.1704398673" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_7_2">Да</label>	<input required id="element_7_1" name="entry.1704398673" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_7_1">Нет</label>

		</span> 
		</li>		<li id="li_8" >
		<label class="description" for="entry.1008885641">5.	Удовлетворены Вы доброжелательностью, вежливостью работников справочной, кассиров?</label>
		<span>
<input required id="element_8_2" name="entry.1008885641" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_8_2">Да</label>
		<input required id="element_8_1" name="entry.1008885641" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_8_1">Нет</label>

		</span> 
		</li>		<li id="li_9" >
		<label class="description" for="entry.376864943">6. Удовлетворены Вы доброжелательностью, вежливостью работников организации, обеспечивающих непосредственное оказание услуги? </label>
		<span>
<input required id="element_9_2" name="entry.376864943" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_9_2">Да</label>
<input required id="element_9_1" name="entry.376864943" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_9_1">Нет</label>

		</span> 
		</li>		<li id="li_10" >
		<label class="description" for="entry.1985987816">7. Вы обращались в организацию по телефону, по электронной почте, с помощью электронных сервисов (подачи электронного обращения/жалоб/предложений, записи на получение услуги, получение консультации по оказываемым услугам и пр.)? </label>
		<span>
						<input required id="element_10_2" name="entry.1985987816" class="element radio" type="radio" value="Да" />
			<label class="choice" for="element_10_2">Да</label>
			<input required id="element_10_1" name="entry.1985987816" class="element radio" type="radio" value="Нет" />
			<label class="choice" for="element_10_1">Нет</label>

		</span> 
		</li>		<li id="li_11" >
		<label class="description" for="entry.1502110979">8. Удовлетворены Вы доброжелательностью, вежливостью работников организации при использовании дистанционных форм взаимодействия (по телефону, по электронной почте, с помощью электронных сервисов (подачи электронного обращения/жалоб/предложений, записи на получение услуги, получение консультации по оказываемым услугам и пр.))  </label>
		<span>
			<input required id="element_11_1" name="entry.1502110979" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_11_1">Да</label>
<input required id="element_11_2" name="entry.1502110979" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_11_2">Нет</label>
		</span> 

		</span> 
		</li>		<li id="li_12" >
		<label class="description" for="entry.73662640">9. Если бы у Вас была возможность выбора организации, Вы готовы рекомендовать организацию родственникам и знакомым? </label>
		<span>
			<input required id="element_12_1" name="entry.73662640" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_12_1">Да</label>
<input required id="element_12_2" name="entry.73662640" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_12_2">Нет</label>
		</span> 
		</span> 
		</li>		<li id="li_13" >
		<label class="description" for="entry.2117721207">10. Удовлетворены Вы графиком работы организации?</label>
		<span>
			<input required id="element_13_1" name="entry.2117721207" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_13_1">Да</label>
<input required id="element_13_2" name="entry.2117721207" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_13_2">Нет</label>
		</span> 
		</span> 
		</li>		<li id="li_14" >
		<label class="description" for="entry.1419134260">11. Удовлетворены Вы в целом условиями оказания услуг в организации? </label>
		<span>
			<input required id="element_14_1" name="entry.1419134260" class="element radio" type="radio" value="Да" />
<label class="choice" for="element_14_1">Да</label>
<input required id="element_14_2" name="entry.1419134260" class="element radio" type="radio" value="Нет" />
<label class="choice" for="element_14_2">Нет</label>
		</span> 
		</li>			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="3586" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Отправить" />
		</li>
			</ul>
		</form>	<br>
		<div id="footer">
			(с) 2018 год
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
