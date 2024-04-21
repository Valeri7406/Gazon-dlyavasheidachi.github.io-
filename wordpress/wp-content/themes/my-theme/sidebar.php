<!--<div class="side">
<?php get_sidebar(); ?>
                <h2>ТОП видов газонов</h2>
                <h5>По версии авторов сайта</h5>

                <div class="calculate-1">
               <h3>Калькулятор <br> расчёта</h3>
    <form action='' method='post' class="calculate-form-1">
        <input type="text" name="number1" class="numbers-1" placeholder="Число 1">
        <select class="operations-1" name="operation">
            <option value='plus'>+</option>
            <option value='minus'>-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="number2" class="numbers-1" placeholder="Число 2">
        
        <input class="submit_form-1" type="submit" name="submit" value="Получить ответ"> 
    </form>
</body>
<?php
if(isset($_POST['submit'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];

    if(!$operation || (!$number1 && $number1 != '0') || (!$number2 && $number2 != '0')) {
        $error_result = 'Не все поля заполнены';

    }
    else {
        
        if(!is_numeric($number1) || !is_numeric($number2)){
            $error_result = "Операторы должны быть числами";
        }
        else 
        switch($operation){
            case 'plus':
                $result = $number1 + $number2;
                break;
            case 'minus':
                $result = $number1 - $number2;
                break;
            case 'multiply':
                $result = $number1 * $number2;
                break;
            case 'divide':
                if( $number2 == '0')
                    $error_result = "<b> На ноль <br> делить нельзя!</b>";
                else
                   $result = $number1 / $number2;
                break;    
        }
    }
    if(isset($error_result)){
        echo "<div class='error-text-1'><b>Ошибка:</b>$error_result</div>";
    }   
    else {
        echo "<div class='answer-text-1'><b>Ответ:    $result</b></div>";
    }
}
?>
</div><br>            
               
                <div class="fakeimg" style="width: 200px;">
                <img src="https://mykaleidoscope.ru/uploads/posts/2020-02/1582053553_45-p-gazon-v-landshaftnom-dizaine-113.jpg">
                <p><a target="_blank" href="http://wordpress/%d0%b2%d0%b5%d1%81%d0%b5%d0%bd%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%81%d1%82%d1%80%d0%be%d0%b5%d0%bd%d0%b8%d0%b5-2024-%d0%b3/">Обычный садовый газон</a></p></div><br>
                

                <div class="fakeimg" style="width: 200px;">
                <img src="https://stroy-podskazka.ru/images/article/orig/2020/06/vse-chto-neobhodimo-znat-o-gazonnoj-trave.jpg">
                <p><a target="_blank" href="http://wordpress/186-2/">Партерный газон</a></p></div><br>
               

                <div class="fakeimg" style="width: 200px;">
                <img src="https://static.insales-cdn.com/r/-hRDBgVIwzE/rs:fit:1000:1000:1/plain/images/products/1/5234/460338290/_%D0%A1%D0%BF%D0%BE%D1%80%D1%82.jpg">     
                <p><a target="_blank" href="http://wordpress/%d1%81%d0%bf%d0%be%d1%80%d1%82%d0%b8%d0%b2%d0%bd%d1%8b%d0%b9-%d0%b3%d0%b0%d0%b7%d0%be%d0%bd/">Спортивный газон</a></p></div><br>
                

                <div class="fakeimg" style="width: 200px;">
                <img src="https://avatars.mds.yandex.net/i?id=c941250a9c436d0655207e31d6f3eea240514887-5251249-images-thumbs&n=13">
                <p><a target="_blank" href="http://wordpress/%d0%bc%d0%b0%d0%b2%d1%80%d0%b8%d1%82%d0%b0%d0%bd%d1%81%d0%ba%d0%b8%d0%b9-%d0%b3%d0%b0%d0%b7%d0%be%d0%bd/">Мавританский газон</a></p></div><br>
               

                <div class="fakeimg" style="width: 200px;">
                <img src="https://avatars.mds.yandex.net/i?id=87ed205bbb11153e494176d3a9fc1beb2dda3ed1-10594781-images-thumbs&n=13">
                <p><a target="_blank" href="http://wordpress/%d1%82%d0%b5%d0%bd%d0%b5%d0%b2%d1%8b%d0%bd%d0%be%d1%81%d0%bb%d0%b8%d0%b2%d1%8b%d0%b9-%d0%b3%d0%b0%d0%b7%d0%be%d0%bd/">Теневыносливый газон</a></p></div><br>
                


                <div class="fakeimg" style="width: 200px;">
                <img src="http://wordpress/wp-content/uploads/2024/02/scale_2400-2.jpg">
                <p><a target="_blank" href="http://wordpress/%d0%bd%d0%b5%d1%82%d1%80%d0%b0%d0%b2%d1%8f%d0%bd%d0%b8%d1%81%d1%82%d1%8b%d0%b9-%d0%b3%d0%b0%d0%b7%d0%be%d0%bd/">Нетравянистый газон</a></p></div><br>

                


                <div class="fakeimg" style="width: 200px;">
                <img src="https://waysi.ru/wp-content/uploads/d/a/1/da1b77d742c17e733274293d4a8e852c.png">
                <p><a target="_blank" href="http://wordpress/2024/02/29/%d1%87%d0%b0%d1%81%d1%82%d0%be-%d0%b7%d0%b0%d0%b4%d0%b0%d0%b2%d0%b0%d0%b5%d0%bc%d1%8b%d0%b5-%d0%b2%d0%be%d0%bf%d1%80%d0%be%d1%81%d1%8b/">Часто задаваемые вопросы</a></p>  </div><br>
                

            
</div>-->
