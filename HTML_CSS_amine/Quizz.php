<?php
include 'Head.php';
include 'js.php';
 ?>
<body>
<section class="QuizzName">
<h2> QUIZ 1 </h2>
</section>
<div class="container-fluid ">
        <div class="modal-header">
          <h3><span class="label label-success" id="">1</span> Question 1</h3>
        </div>
      <div class="modal-body">
        <div class="col-xs-6 ">
        <div class="quiz" id="quiz" data-toggle="buttons">
            <label class="btn btn-lg btn-primary btn-block"> <input type="radio" name="" value="1">1 One</label>
            <label class="btn btn-lg btn-primary btn-block"> <input type="radio" name="" value="2">2 Two</label>
        </div>
      </div>
      </div>
      <div class="modal-body">
        <div class="col-xs-6 ">
        <div class="quiz" id="quiz" data-toggle="buttons">
            <label class="btn btn-lg btn-primary btn-block"> <input type="radio" name="" value="3">3 Three</label>
            <label class="btn btn-lg btn-primary btn-block"> <input type="radio" name="" value="4">4 Four</label>
        </div>
      </div>
    </div>
</div>
 <section class="button">
   <a href="#" class="myButton">Valider</a>
 </section>

</body>