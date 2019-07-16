<?php
/* @var $this yii\web\View */

?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="">
      <div class="row" style="">
        <div class="col-md-6 col-12">
          <h1 class="pb-2" style="">Задачи на сегодня</h1>
        </div>
        <div class="col-md-2" style=""></div>
        <div class="col-md-2 text-right col-5 pb-3"><a class="btn btn-primary" href="#">Календарь</a></div>
        <div class="text-right col-md-2 col-7 pb-3"><a class="btn btn-secondary" href="#">+ Новая задача</a></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Время</th>
                  <th>Задача</th>
                  <th>Место</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="all-day">
                  <td>Весь день</td>
                  <td>Международный день тудушек</td>
                  <td>Где пожелаешь</td>
                  <td class="text-right"><a class="btn btn-outline-primary" href="#">Редактировать</a><a class="btn btn-outline-danger" href="#">Удалить</a></td>
                </tr>
                <tr>
                  <td>10:15–11:50</td>
                  <td>ОбМеКон лекция (Аникьева М.А.)<br><i>каждые две недели</i></td>
                  <td>УЛК217</td>
                  <td class="text-right"><a class="btn btn-outline-primary" href="#">Редактировать</a><a class="btn btn-outline-danger" href="#">Удалить</a></td>
                </tr>
                <tr>
                  <td>12:00–13:35</td>
                  <td>ОбМеКон лабораторная работа (Аникьева М.А.)<br><i>каждый четверг</i></td>
                  <td>УЛК217</td>
                  <td class="text-right"><a class="btn btn-outline-primary" href="#">Редактировать</a><a class="btn btn-outline-danger" href="#">Удалить</a></td>
                </tr>
                <tr>
                  <td>14:10–15:45</td>
                  <td>МИСП лабораторная работа (Брежнев Р.В.)<br><i>каждый четверг</i></td>
                  <td>УЛК410</td>
                  <td class="text-right"><a class="btn btn-outline-primary" href="#">Редактировать</a><a class="btn btn-outline-danger" href="#">Удалить</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
