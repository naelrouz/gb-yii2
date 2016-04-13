<?php
use yii\bootstrap\ActiveForm;
use \yii\bootstrap\Html;
?>

<div class="row register">
<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
<?php
$form = ActiveForm::begin([
    'enableClientValidation' => TRUE,
    'enableAjaxValidation' => FALSE
    
])
?>

    <?php
    echo $form->field($model, 'username');
    ?>
    <?php
    echo $form->field($model, 'email');
    ?>
     <?php
    echo $form->field($model, 'password')->passwordInput();
    ?>
     <?php
    echo $form->field($model, 'repassword')->passwordInput();
    ?>
    <?php
    echo Html::submitButton('Send',['class' => 'btn btn-success']);
    ?>
    
    <?php
    ActiveForm::end();
    ?>    


                
        </div>
  
</div>