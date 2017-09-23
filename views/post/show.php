<h1>Show Action</h1>

<button class="btn btn-success" id="btn">Click me...</button>

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAssets']); ?>
<?php //$this->registerJsFile('@web/js/scripts.js', ['position' => \yii\web\View::POS_END]); ?>
<?php $this->registerCSSFile('@web/css/style.css', ['position' => \yii\web\View::POS_END]); ?>
<?php //$this->registerJs("$('.container').append('<p>show!!</p>');", \yii\web\View::POS_LOAD) ?>

<!--<script type="text/javascript">-->
<!--    showMyGod();-->
<!--    </script>-->

<?php
//$script = <<< JS
//   $('#btn').on('click', function() {
//     $.ajax({
//        url: 'index.php?r=post/index',
//        data: {test: '123'},
//        type: 'POST',
//        success: function(res) {
//        console.log(res);
//        },
//        error: function() {
//            alert('error!');
//        }
//     });
//   });
//JS;
//$this->registerJS($script);

?>