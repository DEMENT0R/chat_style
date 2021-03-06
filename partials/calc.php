  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>

  <style media="screen">
    .center_div{
      margin: 0 auto;
      width:80% /* value of your choice which suits your alignment */
    }
  </style>
  <div class="container">
    <h1>Tomoru</h1>
    <form class="form-horizontal">
      <fieldset>

        <!-- Form Name -->
        <legend>Расчёт стоимости бота</legend>

        <!-- Multiple Type Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios-1">Какой тип бота вам нужен?</label>
          <div class="col-md-4">
            <div class="radio">
              <label for="radios-0">
                <input type="radio" name="radios-1" id="radios-1-0" value="1" checked="checked">
                Первый (10000)
              </label>
            </div>
            <div class="radio">
              <label for="radios-1">
                <input type="radio" name="radios-1" id="radios-1-1" value="2">
                Второй (20000)
              </label>
            </div>
            <div class="radio">
              <label for="radios-2">
                <input type="radio" name="radios-1" id="radios-1-2" value="3">
                Третий (40000)
              </label>
            </div>
          </div>
        </div>

        <!-- Multiple Intel Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios-2">Как уровень знаний бота?</label>
          <div class="col-md-4">
            <div class="radio">
              <label for="radios-0">
                <input type="radio" name="radios-2" id="radios-2-0" value="1" checked="checked">
                Тупой (10000)
              </label>
            </div>
            <div class="radio">
              <label for="radios-1">
                <input type="radio" name="radios-2" id="radios-2-1" value="2">
                Молодец (30000)
              </label>
            </div>
            <div class="radio">
              <label for="radios-2">
                <input type="radio" name="radios-2" id="radios-2-2" value="3">
                Умный (60000)
              </label>
            </div>
          </div>
        </div>

        <!-- Text quantity input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Сколько сотрудников выполняет эту функцию?</label>
          <div class="col-md-2">
            <input id="textinput_quant" name="textinput_quant" type="text" placeholder="Число" class="form-control input-md" required="" value="1">
            <span class="help-block">Примерно...</span>
          </div>
        </div>

        <!-- Text salary input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Какая средняя зарплата сотрудника до уплаты налогов?</label>
          <div class="col-md-2">
            <input id="textinput_salary" name="textinput_salary" type="text" placeholder="ЗП" class="form-control input-md" required="" value="25000">
            <span class="help-block">Примерно...</span>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton">А теперь давайте всё посчитаем!</label>
          <div class="col-md-4">
            <p id="total_result">...</p>
            <p id="total_profit">...</p>
            <p id="this_year_profit">...</p>
            <p id="year_profit">...</p>
            <button id="singlebutton" name="" class="btn btn-success">Купить!</button>
          </div>
        </div>

      </fieldset>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  <script src="../js/calc.js"></script>
