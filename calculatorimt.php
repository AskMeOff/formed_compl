<div class="col-12">
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Медицинские калькуляторы</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <!--создали таб имт ---------------------- -->
      <li class="nav-item">
        <a class="nav-link active" id="bmi-tab" data-toggle="tab" href="#imt" role="tab" aria-controls="bmi" aria-selected="true">Калькулятор индекса массы тела (ИМТ)</a>
      </li>

      <!--создали таб скф ---------------------- -->
      <li class="nav-item">
        <a class="nav-link" id="text-tab" data-toggle="tab" href="#skf" role="tab" aria-controls="text" aria-selected="false">Скорость клубочковой фильтрации (СКФ)</a>
      </li>

      <!--создали таб энерготрат ---------------------- -->
      <li class="nav-item">
        <a class="nav-link" id="text-tab" data-toggle="tab" href="#zesp" role="tab" aria-controls="text" aria-selected="false">Затраты энергии в состоянии покоя (ЗЭСП)</a>
      </li>

      <!--создали таб анион ---------------------- -->
      <li class="nav-item">
        <a class="nav-link" id="text-tab" data-toggle="tab" href="#anionr" role="tab" aria-controls="text" aria-selected="false">Анионная разница</a>
      </li>

      <!--создали таб инфузии ---------------------- -->
      <li class="nav-item">
        <a class="nav-link" id="text-tab" data-toggle="tab" href="#infuz" role="tab" aria-controls="text" aria-selected="false">Расчет скорости инфузии препарата через линеомат (скорость титрования)</a>
      </li>

      <!--Создали таб депрессии---------------------- -->
      <li class="nav-item">
        <a class="nav-link" id="text-tab" data-toggle="tab" href="#depress" role="tab" aria-controls="text" aria-selected="false">Гериатрическая шкала депрессии</a>
      </li>


      <!--Создали таб алкоголя---------------------- -->
      <li class="nav-item">
        <a class="nav-link" id="text-tab" data-toggle="tab" href="#alcohol" role="tab" aria-controls="text" aria-selected="false">Калькулятор алкоголя в крови</a>
      </li>

    </ul>  <!--СПИСОК ТАБОВ ---------------------- -->
        <!--СПИСОК ТАБОВ ---------------------- -->


    <!--заполинили таб имт контентом ---------------------- -->
    <div class="tab-content">
      <!--заполняем имт ---------------------- -->
      <div class="tab-pane fade show active" id="imt" role="tabpanel" aria-labelledby="bmi-tab">
        <div class ="textimt">
          <br></br>
          <p>
          На данной странице с помощью калькулятора ИМТ вы можете рассчитать свой показатель. Достаточно ввести вес и рост в поля ниже.
          </p>
          <p>Индекс Массы Тела рассчитывается по формуле: ИМТ= вес (кг) / рост (м)2. </p>
        </div>
        <form id="bmiForm">
          <div class="form-group">
            <label for="height">Рост (см):</label>
            <input type="number" class="form-control" id="heightimt" required>
          </div>
          <div class="form-group">
            <label for="weight">Вес (кг):</label>
            <input type="number" class="form-control" id="weightimt" required>
          </div>
          <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>
        <div id="bmiResult" style="display: none;">
          <h2>Ваш индекс массы тела (ИМТ): <span id="bmiValue"></span></h2>
          <p id="bmiCategory"></p>
        </div>
        <br></br>
        <div class ="textimt"> <p>
            Расчёт индекса массы тела определяет в каком соотношении находятся вес и рост, калькулятор подходит для взрослых мужчин и женщин.</p>
            <p>В таблице ниже можно посмотреть разъяснение показателей согласно рекомендациям Всемирной Организации Здравоохранения (ВОЗ): </p>
        </div>

        <table border="1" bordercolor="" width="50%" bgcolor="">
          <tr>
            <td style = "text-align: center"> Индекс массы тела </td>
            <td style = "text-align: center"> Соответствие между массой человека и его ростом </td>
          </tr>
          <tr>
            <td> 16 и менее </td>
            <td> Выраженный дефицит массы тела </td>
          </tr>
          <tr>
            <td> 16-18,5 </td>
            <td> Недостаточная (дефицит) масса тела </td>
          </tr>
          <tr>
            <td> 18,5-25 </td>
            <td> Норма </td>
          </tr>
          <tr>
            <td> 25-30 </td>
            <td> Избыточная масса тела (предожирение) </td>
          </tr>
          <tr>
            <td> 30-35 </td>
            <td> Ожирение первой степени </td>
          </tr>
          <tr>
            <td> 35-40 </td>
            <td> Ожирение второй степени </td>
          </tr>
          <tr>
            <td> 40 и более </td>
            <td> Ожирение третьей степени (морбидное) </td>
          </tr>
        </table>


        <br></br>
        <div class ="textimt"> <p>
            В частности, результат ИМТ является одним из факторов для выполнения бариатрической операции. </p>
          <p>Но стоит помнить, что результат носит рекомендательный характер. </p>
          <p>Перед принятием решения необходима консультация бариатрического хирурга.</p>
        </div>

      </div>
      <!--закрыли имт ---------------------- -->




      <!--заполинили таб имт контентом ---------------------- -->
      <!--заполняем скф ---------------------- -->
      <div class="tab-pane fade" id="skf" role="tabpanel" aria-labelledby="text-tab">
        <div class ="textskf">
          <br></br>
          <p>Скорость клубочковой фильтрации (СКФ) – количество крови очищаемой почками за определенный период времени.</p>
          <p> СКФ является основным показателем для оценки функции почек и стадии почечной недостаточности.</p>
          <p>Для расчёта СКФ используются формулы (алгоритмы) MDRD, CKD-EPI</p>
          <p>186 * СерумКреатинин^-1.154 * возраст^-0.203 * КоэфициентРасы </p>
          <p>'Белый': 1,
            'Черный': 1.159,
            'Азиат': 0.813,
            'Другой': 1.018</p>
        </div>

        <label for="age">Возраст (лет):</label><br>
        <input type="number" id="ageskf" name="age" required><br><br>

        <label for="gender">Пол:</label><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Мужской</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Женский</label><br><br>

        <label for="serumCreatinine">Креатинин в сыворотке крови (мг/дл):</label><br>
        <input type="number" step="0.01" id="serumCreatinineskf" name="serumCreatinine" required><br><br>

        <label for="race">Раса:</label><br>
        <select id="raceskf" name="race" required>
          <option value="white">Белая</option>
          <option value="black">Афроамериканская</option>
          <option value="asian">Азиатская</option>
          <option value="other">Другая</option>
        </select><br><br>

        <button type="submit" id="calculate" class="btn btn-primary">Рассчитать</button>
        <div id="result"></div>


        <table border="1" bordercolor="" width="50%" bgcolor="">
          <tr>
            <td style = "text-align: center"> Стадия </td>
            <td style = "text-align: center"> СКФ (мл/мин/1.73м2) </td>
            <td style = "text-align: center"> Описание </td>
          </tr>
          <tr>
            <td> C1 </td>
            <td> В> 90 </td>
            <td> Нормальный уровень СКФ </td>
          </tr>
          <tr>
            <td> C2 </td>
            <td> 60 - 90 </td>
            <td> Незначительно сниженный уровень СКФ </td>
          </tr>
          <tr>
            <td> C3a </td>
            <td> 45 - 60 </td>
            <td> Умеренно сниженный уровень СКФ </td>
          </tr>
          <tr>
            <td> C3b </td>
            <td> 30 - 45 </td>
            <td> Существенно сниженный уровень СКФ </td>
          </tr>
          <tr>
            <td> C4 </td>
            <td> 15 - 30 </td>
            <td> Резко сниженный уровень СКФ </td>
          </tr>
          <tr>
            <td> C5 </td>
            <td> < 15 </td>
            <td> Терминальная почечная недостаточность </td>
          </tr>
        </table>

        <div class ="textskf">
          <br></br>
          <p>Если результат ниже 60 мл/мин/1,73 м2, то это говорит о наличии патологий, что является причиной для постановки диагноза хронической болезни почек (ХБП).</p>
          <p>Повышение СКФ отмечается при развитии сахарного диабета, гипертонической болезни, а также появления нефротического синдрома. </p>
          <p>Снижение свидетельствует о том, что почки не выполняют свои функции в полном объеме, что может быть вызвано сердечной недостаточностью, дегидратацией или шоком. </p>
          <p> Если у пациента пиелонефрит, то каналы нефронов поражаются и СКФ снижается позднее. </p>
          <p> Если пациент беременна, имеет ожирение или истощение, а также заболевания, связанные с работой почек, формула определения СКФ может давать недостоверные результаты. </p>
          <p> В данном случае нужно определять клиренс креатинина по пробе Реберга. </p>

        </div>
      </div>
      <!--закрыли скф ---------------------- -->



      <!--создали зесп ---------------------- -->
      <div class="tab-pane fade" id="zesp" role="tabpanel" aria-labelledby="text-tab">

        <div class ="textzesp">
          <br></br>
          <p> Формула Миффлина-Сан Жеора – это одна из самых последних формул расчета калорий для оптимального похудения или сохранения нормального веса.</p>
          <p> Она была выведена в 2005 году и все чаще стала заменять классическую формулу Харриса-Бенедикта.</p>
          <p> Формула Миффлина-Сан Жеора, разработанная группой американских врачей-диетологов под руководством докторов Миффлина и Сан Жеора</p>
          <p> существует в двух вариантах – упрощенном и доработанном и выдает необходимое количество килокалорий (ккал) в сутки для каждого конкретного человека.</p>

          <p>Используемые уравнения</p>
          <p>REE = (10 * Вес) + (6.25 * Рост) - (5 * Возраст) + Пол (для мужчин - 5, для женщин - 161); --- (БОВ * суточный расход энергии)</p>
        </div>

        <div id="calculationForm" class ="zespform">
          <label for="height">Рост (см):</label>
          <input type="number" class="form-control" id="heightzesp" required>
          <br>
          <label for="weight">Вес (кг):</label>
          <input type="number" class="form-control" id="weightzesp" required>
          <br>

          <label for="age">Возраст (лет):</label><br>
          <input type="number" id="agezesp" name="age" required>
          <br></br>
          <label for="gender">Пол:</label> <br>
          <select class = "selzesp" id="genderzesp" required><br>
            <option value="male">Мужской</option>
            <option value="female">Женский</option>
          </select>
          </br>


          <label for="activity">Уровень физической нагрузки:</label><br>
          <select id="activityzesp" name="activityz" required>
            <option value="basework">Основной (базовый) уровень обмена веществ</option>
            <option value="minnagr">Минимальные нагрузки (сидячая работа)</option>
            <option value="3razweek">Необременительные тренировки 3 раза в неделю</option>
            <option value="5razweek">Тренировки 5 раз в неделю (работа средней тяжести)</option>
            <option value="5intensrazweek">Интенсивные тренировки 5 раз в неделю</option>
            <option value="evday">Ежедневные тренировки</option>
            <option value="evintday2">Ежедневные интенсивные тренировки или занятия 2 раза в день</option>
            <option value="hardwork2day">Тяжелая физическая работа или интенсивные тренировки 2 раза в день</option>
          </select><br><br>
        <br></br>
          <button class="btn btn-primary" type="button" onclick="calculateREE()">Рассчитать</button>
        </form>
        <div id="resultzesp"></div>
<br>
          <p>Не забывайте, что данная формула актуальна только для лиц в возрасте от 13 до 80 лет.</p></br>

        </div>
      </div>
      <!--закрыли зесп ---------------------- -->







      <!--открыли анион ---------------------- -->
      <div class="tab-pane fade" id="anionr" role="tabpanel" aria-labelledby="anionr-tab">
        <div class ="textanionr">
          <br></br>
          <p>Используемые уравнения: АР = Na (Натрий) - (Cl (Хлор) + HCO3 (Бикарбонат))
          </p>
        </div>
        <form id="anionrForm">
          <div class="form-group">
            <label for="natrii">Na (Натрий mEq/L):</label><br>
            <input type="number" step="0.01" id="natriianionr" name="natrii" required><br><br>
          </div>
          <div class="form-group">
            <label for="clor">Cl (Хлор mEq/L):</label><br>
            <input type="number" step="0.01" id="cloranion" name="clor" required onchange="checkClorValue(this)"><br>
            <span id="clor-error" style="color: red;"></span><br>
          </div>

          <div class="form-group">
            <label for="bicarbonat">HCO3 (Бикарбонат mEq/L):</label><br>
            <input type="number" step="0.01" id="bicarbonatanionr" name="bicarbonat" required><br><br>
          </div>

          <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>
        <div id="AnionrResult" style="display: none;">
          <h2>Результат: <span id="AnionrValue"></span></h2>
        </div>
        <br></br>

      </div>

      <!--закрыли анион ---------------------- -->


      <!--открыли скорости инфузии---------------------- -->
      <div class="tab-pane fade" id="infuz" role="tabpanel" aria-labelledby="infuz-tab">
        <div class ="textinfuz">
          <div>
            <br>
            </br>
          <p><strong>Об этом калькуляторе</strong></p>
          <p>Этот калькулятор позволяет расчитать скорость инфузии препарата через линеомат (скорость титрования в мл/час) при известном количестве препарата в милиграммах в известном объеме раствора. Также необходимо указать вес пациента и дозировку, определяемую либо в мкг*кг/мин, либо в мл/час.</p>
          <p>Например, 4% раствор дофамина объемом 5 мл содержит 200 мг чистого вещества (4% - 40 мг, 40*5=200). Ампула препарата (5 мл) разведена физ. раствором до объема 20 мл. Соответственно, 200 мг - это количество препарата, а 20 мл - общий объем раствора. Вес пациента - 70 кг и используется почечная дозировка дофамина (2 мкг*кг/час). Таким образом, скорость введения составит 0,84 мл/час.</p>
          <p>Скорость в мл/час автоматически пересчитывается в скорость в каплях в минуту при указании дозировки препарата в микрограммах на килограмм в минуту. При этом в рачет берется то, что в 1 милилитр содержит 20 капель.</p>
          <p>Если скорость в каплях в минуту менее 1 капли в минуту, калькулятор предлагает выбрать меньшее разведение и перейти с капельного введения на введение с помощью линеомата.</p>
          <p>Также калькулятор позволяет рассчитать скорость инфузии в мкг*кг/мин при известной дозировке препарата в мл/час.</p>
          <p>Для того, чтобы использовать калькулятор при расчете доз препаратов, не зависящих от веса, в поле "Вес пациента" введите значение равное 1.</p>
          <p><strong>Формула</strong></p>
          <p>Скорость инфузии = масса тела пациента (кг) * доза препарата (мкг/кг*мин) / (количество препарата в инфузионном растворе (мг) * (1 000/общий объем инфузионного раствора))*60</p>
        </div>
        </div>
        <form id="infuzForm">

          <div class="form-group">
            <label for="kolpr" title="Содержание препарата в милиграммах в общем объеме раствора"> Количество препарата, мг: </label><br>
            <input type="number" step="0.01" id="kolprinfuz" name="kolpr" required><br><br>
          </div>

          <div class="form-group">
            <label for="obem" >Общий объем раствора, мл:</label><br>
            <input type="number" step="0.01" id="obeminfuz" name="obem" required><br><br>
          </div>

          <div class="form-group">
            <label for="vespac" title="Если вы применяете препарат, для расчета дозирования которого не используется вес тела, поставьте в этом поле цифру 1">Вес пациента, кг:</label><br>
            <input type="number" step="0.01" id="vespacinfuz" name="vespac" required><br><br>
          </div>

          <div class="form-group">
            <label for="dozamin">Дозировка в мкг*кг/мин:</label><br>
            <input type="number" step="0.01" id="dozamininfuz" name="dozamin" required><br><br>
          </div>


          <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>
        <div id="infuzResult" style="display: none;">
          <h2>Скорость инфузии (мкг*кг/мин): <span id="infuzValue"></span></h2>

        </div>
        <br></br>
        <div class ="textinfuz">
        <div>
          <h3>Диапазон доз и начальные скорости введения некоторых распространенных препаратов для пациента с массой тела 70 кг при разведении до общего объема раствора равным 20 мл</h3>
        </div>


          <table border="1" bordercolor="" width="50%" bgcolor="">
            <tr>
              <th>Препарат</th>
              <th>Диапазон доз, (мкг/кг*мин)</th>
              <th>Количество препарата в 1 мл стандартной формы выпуска, мг</th>
              <th>Скорость, мл/час</th>
            </tr>
            <tr>
              <td>Адреналин (гидрохлорид)</td>
              <td>0,05-0,4</td>
              <td>1 (0.1% - 1,0)</td>
              <td>4.2</td>
            </tr>
            <tr>
              <td>Норадреналин (левонор)</td>
              <td>0,03-1</td>
              <td>1 (0.1% - 1,0)</td>
              <td>2.5</td>
            </tr>
            <tr>
              <td>Дофамин</td>
              <td>1-20</td>
              <td>200 (4% - 5,0)</td>
              <td>0.4</td>
            </tr>
            <tr>
              <td>Нитроглицерин</td>
              <td>10-400 мкг/мин</td>
              <td>20 (1% - 2,0)</td>
              <td>0.6</td>
            </tr>
            <tr>
              <td>Фенилэфрин (мезатон)</td>
              <td>0.3-2</td>
              <td>10 (1% - 1,0)</td>
              <td>2.5</td>
            </tr>
          </table>

          <div>
            <h3>Краткие замечания по описанным препаратам:</h3>
          </div>
          <div>
            <p><strong>Дофамин</strong></p>
            <p>Если скорость инфузии > 20—30 мкг/кг/мин, дофамин целесообразно заменить другим сосудосуживающим средством (адреналин, норадреналин).</p>
            <p>Действие на гемодинамику зависит от дозы:</p>
            <ul>
              <li>Низкая доза: 1—5 мкг/кг/мин, увеличивает почечный кровоток и диурез.</li>
              <li>Средняя доза: 5—15 мкг/кг/мин, увеличивает почечный кровоток, ЧСС, сократимость миокарда и сердечный выброс.</li>
              <li>Высокая доза: > 15 мкг/кг/мин, оказывает сосудосуживающее действие.</li>
            </ul>
          </div>
          <div>
            <p><strong>Фенилэфрин</strong></p>
            <p>Можно вводить болюсно по 25 - 100 мкг. Через несколько часов развивается тахифилаксия.</p>
          </div>

      </div>

    </div>
      <!--закрыли скорости инфузии---------------------- -->





      <!--открыли скорости депрессию---------------------- -->
      <div class="tab-pane fade" id="depress" role="tabpanel" aria-labelledby="depress-tab">
        <br>
        </br>
         <h4>Выберите лучший ответ, описывающий то, как вы чувствовали себя на прошлой неделе:</h2>
        <form id="depression-form">
          <h5>1. Вы в основном довольны своей жизнью?</h5>
          <input type="radio" name="hap1" value="0"> Да
          <input type="radio" name="hap1" value="1"> Нет
          <br>
          </br>
          <h5>2. Вы прекратили заниматься многими видами деятельности и хобби?</h5>
          <input type="radio" name="hap2" value="1"> Да
          <input type="radio" name="hap2" value="0"> Нет
          <br>
          </br>
          <h5>3.Вы считаете, что ваша жизнь пуста?</h5>
          <input type="radio" name="hap3" value="1"> Да
          <input type="radio" name="hap3" value="0"> Нет
          <br>
          </br>
          <h5>4. Часто скучаете?</h5>
          <input type="radio" name="hap4" value="1"> Да
          <input type="radio" name="hap4" value="0"> Нет
          <br>
          </br>
          <h5>5. Вы в хорошем настроении большую часть времени?</h5>
          <input type="radio" name="hap5" value="0"> Да
          <input type="radio" name="hap5" value="1"> Нет
          <br>
          </br>
          <h5>6. Боитесь ли вы, что с вами случится что-то плохое?</h5>
          <input type="radio" name="hap6" value="1"> Да
          <input type="radio" name="hap6" value="0"> Нет
          <br>
          </br>
          <h5>7. Вы чувствуете себя счастливым большую часть времени?</h5>
          <input type="radio" name="hap7" value="0"> Да
          <input type="radio" name="hap7" value="1"> Нет
          <br>
          </br>
          <h5>8. Вы часто чувствуете себя беспомощным?</h5>
          <input type="radio" name="hap8" value="1"> Да
          <input type="radio" name="hap8" value="0"> Нет
          <br>
          </br>
          <h5>9. Вы предпочитаете оставаться дома, чем гулять и заниматься чем-то новым?</h5>
          <input type="radio" name="hap9" value="1"> Да
          <input type="radio" name="hap9" value="0"> Нет
          <br>
          </br>
          <h5>10. Считаете ли вы, что у вас больше проблем с памятью, чем у большинства людей?</h5>
          <input type="radio" name="hap10" value="1"> Да
          <input type="radio" name="hap10" value="0"> Нет
          <br>
          </br>
          <h5>11. Как вы думаете, замечательно, ли быть живым сейчас?</h5>
          <input type="radio" name="hap11" value="0"> Да
          <input type="radio" name="hap11" value="1"> Нет
          <br>
          </br>
          <h5>12. Считаете ли вы свое существование довольно бесполезным?</h5>
          <input type="radio" name="hap12" value="1"> Да
          <input type="radio" name="hap12" value="0"> Нет
          <br>
          </br>
          <h5>13. Считаете ли вы себя полным энергии?</h5>
          <input type="radio" name="hap13" value="0"> Да
          <input type="radio" name="hap13" value="1"> Нет
          <br>
          </br>
          <h5>14. Вы считаете, что ваша ситуация безнадежна?</h5>
          <input type="radio" name="hap14" value="1"> Да
          <input type="radio" name="hap14" value="0"> Нет
          <br>
          </br>
          <h5>15. Вы думаете, что большинству людей лучше, чем вам?</h5>
          <input type="radio" name="hap15" value="1"> Да
          <input type="radio" name="hap15" value="0"> Нет


          <br><br>
          <input type="button"  class="btn btn-primary" value="Рассчитать" onclick="calculateDepression()">
        </form>
           <br>
           </br>

        <div id="resultdepress"></div>
           <br></br>

           <table border="1" bordercolor="" width="50%" bgcolor="">

             <tr>
               <td>10 - 15 баллов:	Депрессия, скорее всего, присутствует</td>
             </tr>
             <tr>
               <td>6 - 9 баллов:	Депрессия возможна</td>
             </tr>
             <tr>
               <td>0 - 5 баллов:	Депрессии, скорее всего, нет</td>

             </tr>

           </table>
      </div>



      <!--закрыли  депрессию---------------------- -->


      <!--открыли  алко---------------------- -->
      <div class="tab-pane fade" id="alcohol" role="tabpanel" aria-labelledby="alcohol-tab">
        <br>
        </br>
        <form>
          <label>Пол:</label>
          <input type="radio" name="ger" value="male" checked> Мужской
          <input type="radio" name="ger" value="female"> Женский
          <br>
          <label>Вес (кг):</label>
          <input type="number" id="vess" required>
          <br>
          <label>Количество выпитого алкоголя (в мл):</label>
          <input type="number" id="alc" required>
          <br>
          <label>Процент алкоголя в напитке:</label>
          <input type="number" id="alcoholPercentage" step="0.1" required>
          <br>

          <input type="submit" value="Рассчитать" onclick="calculateBloodAlcoholLevel(event)">
        </form>
        <br>
        </br>
        <p id="results"></p>
      </div>
      <!--закрыли алко ---------------------- -->










  </div>
  </div>
</div>
</div>


<style>



  #results {
    margin-top: 30px;
  }

  #results p {
    margin-bottom: 10px;
  }

  #results span {
    font-weight: bold;
  }














  #result {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    /* height: 100vh; */
    /* background-color: lightblue; */
    color: black;
    font-size: 24px;
    padding: 20px;
  }
  </style>


<style>


.zespform {
margin-bottom: 20px;
}

.labzesp {
font-weight: bold;
}

.selzesp {
width: 15%;
padding: 5px;
margin-bottom: 10px;
}

.butzesp {
display: block;
width: 15%;
padding: 10px;
background-color: #007bff;
color: white;
border: none;
cursor: pointer;
}

#resultzesp {
text-align: center;
font-size: 18px;
font-weight: bold;
}


#resultdepress
{
  text-align: left;
  font-size: 18px;
  font-weight: bold;
}
</style>

<style>
  .form-control{
    width:15%;
  }
  </style>






<!--считаем скф ---------------------- -->
  <script>
    document.getElementById('calculate').addEventListener('click', function() {
      var age = parseFloat(document.getElementById('ageskf').value);
      var gender = document.querySelector('input[name="gender"]:checked').value;
      var serumCreatinine = parseFloat(document.getElementById('serumCreatinineskf').value);
      var race = document.getElementById('raceskf').value;

      var raceCoefficients = {
        'white': 1,
        'black': 1.159,
        'asian': 0.813,
        'other': 1.018
      };

      var multiplier = 186 * Math.pow(serumCreatinine, -1.154) * Math.pow(age, -0.203) * raceCoefficients[race];
      var result;

      if (gender === 'male') {
        result = multiplier;
      } else {
        result = multiplier * 0.742;
      }

      document.getElementById('result').innerHTML = "Скорость клубочковой фильтрации: " + result.toFixed(2) + " мл/мин/1.73 м²";
    });
  </script>


<!--считаем imt ---------------------- -->
<script>

  document.getElementById('bmiForm').addEventListener('submit', function(event) {
    event.preventDefault(); // форму не отправляем!!!

    // получаем вес и кг из формы
    var weight = parseFloat(document.getElementById('weightimt').value);
    var height = parseFloat(document.getElementById('heightimt').value);

    // считаем имт
    var bmi = weight / ((height/100) ** 2);

    // Выводим результат
    document.getElementById('bmiValue').innerHTML = bmi.toFixed(2);

    // выводим категорию ИМТ
    var bmiCategory = '';
    if (bmi < 18.5) {
      bmiCategory = 'Недостаточный вес';
    } else if (bmi >= 18.5 && bmi < 25) {
      bmiCategory = 'Нормальный вес';
    } else if (bmi >= 25 && bmi < 30) {
      bmiCategory = 'Избыточный вес';
    } else {
      bmiCategory = 'Ожирение';
    }
    document.getElementById('bmiCategory').innerHTML = "Категория: " + bmiCategory;

    // показываем результат
    document.getElementById('bmiResult').style.display = 'block';
  });


  let itemMenu = document.querySelector("[href='/index.php?calculatorimt']");
  itemMenu.style = "color: #148A8A;";

</script>

<!--считаем zesp ---------------------- -->
<script>
  function calculateREE() {
    var weight = document.getElementById('weightzesp').value;
    var height = document.getElementById('heightzesp').value;
    var age = document.getElementById('agezesp').value;
    var gender = document.getElementById('genderzesp').value;
    var activity = document.getElementById('activityzesp').value;
    var activityCoefficients = {
      'basework': 1,
      'minnagr': 1.2,
      '3razweek': 1.375,
      '5razweek': 1.4625,
      '5intensrazweek': 1.550,
      'evday': 1.6375,
      'evintday2': 1.725,
      'hardwork2day': 1.9
    };

    var REE = (10 * weight) + (6.25 * height) - (5 * age);
    if (gender === 'male') {
      REE += 5;
      REE = REE * activityCoefficients[activity];
    } else if (gender === 'female') {
      REE -= 161;
      REE = REE * activityCoefficients[activity];
    }

    document.getElementById('resultzesp').innerHTML = 'REE: ' + REE.toFixed(2) +'ккал/день';
  }
</script>


<!--считаем anion ---------------------- -->
<script>

  document.getElementById('anionrForm').addEventListener('submit', function(event) {
    event.preventDefault(); // форму не отправляем!!!

    // получаем из формы
    var natrii= parseFloat(document.getElementById('natriianionr').value);
    var clor= parseFloat(document.getElementById('cloranion').value);
    var bicarbonat = parseFloat(document.getElementById('bicarbonatanionr').value);

    if (clor < 60) {
      alert("Значение Хлора не может быть меньше 60");
    }
    else if (natrii < 80){alert("Значение Натрия не может быть меньше 80");}
    else {

      // считаем
      var anionr = natrii - (clor + bicarbonat);

      // Выводим результат
      document.getElementById('AnionrValue').innerHTML = anionr.toFixed(2);


      // показываем результат
      document.getElementById('AnionrResult').style.display = 'block';
    }
  });

</script>



<!--считаем скорость инфузии ---------------------- -->


<script>
  document.getElementById('infuzForm').addEventListener('submit', function(event) {
    event.preventDefault(); // форму не отправляем!!!

    // получаем  из формы
    var kolprinfuz = parseFloat(document.getElementById('kolprinfuz').value);
    var obeminfuz = parseFloat(document.getElementById('obeminfuz').value);
    var vespacinfuz = parseFloat(document.getElementById('vespacinfuz').value);
    var dozamininfuz = parseFloat(document.getElementById('dozamininfuz').value);

    // считаем скорость
    var infuzResult = vespacinfuz * dozamininfuz / (kolprinfuz * (1000 / obeminfuz)) * 60;

    // Выводим результат
    document.getElementById('infuzValue').innerHTML = infuzResult.toFixed(2);

    // показываем результат
    document.getElementById('infuzResult').style.display = 'block';
  });


</script>

<!--закрыли скорость инфузии ---------------------- -->


<script>
  function calculateDepression() {
    var form = document.getElementById('depression-form');
    var radios = form.querySelectorAll('input[type="radio"]:checked');
    console.log(radios);
    var totalQuestions = 15;
    if (radios.length < totalQuestions) {
      alert("Пожалуйста, выберите ответы на все вопросы");
    } else {
      var totalPoints = 0;

      for (var i = 0; i < radios.length; i++) {
        totalPoints += parseInt(radios[i].value);
      }

      var resultDiv = document.getElementById('resultdepress');
      resultDiv.innerHTML = 'Ваш результат по шкале депрессии: ' + totalPoints;
    }
  }

</script>


<script>

  function calculateBloodAlcoholLevel(event) {
    event.preventDefault();

    // Получение значений из полей формы
    var gender = document.querySelector('input[name="ger"]:checked').value;
    var weight = parseFloat(document.getElementById('vess').value);
    var alcoholConsumed = parseFloat(document.getElementById('alc').value);
    var alcoholPercentage = parseFloat(document.getElementById('alcoholPercentage').value);

    // Расчет калькулятора промилле
    var bloodAlcoholLevel = 0;
    if (gender === 'male') {
      bloodAlcoholLevel = (alcoholConsumed * alcoholPercentage/100 * 0.789) / (weight * 0.68) ;
    } else {
      bloodAlcoholLevel = (alcoholConsumed * alcoholPercentage/100 * 0.789) / (weight * 0.55) ;
    }

    // Вывод результатов
    var results = document.getElementById('results');
    if (bloodAlcoholLevel < 0) {
      results.innerHTML = "У вас отсутствует алкоголь в крови.";
    } else {
      results.innerHTML = "Концентрация алкоголя в крови: " + bloodAlcoholLevel.toFixed(2) + " промилле.";
    }

    // Расчет времени до полного выхода из крови
    var timeToSober = (bloodAlcoholLevel / 0.015) / 10;
    if (timeToSober > 0) {
      results.innerHTML += "<br>Время до полного выхода из крови: " + timeToSober.toFixed(2) + " часов.";
    }
  }
</script>


