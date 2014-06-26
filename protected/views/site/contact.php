<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name . ' - Обратная связь';
$this->breadcrumbs=array(
	'Обратная связь',
);
?>
<h2><br />Уважаемые посетители!</h2>

<p>Просим Вас внимательно ознакомиться с порядком приема и рассмотрения обращений в МБУ ЦОДД в электронном виде.</p>
<ol>
    <li>На обращения, поступившие с неполной или неточной информацией об отправителе, ответ не дается.</li>
    <li>Не принимаются к рассмотрению обращения, содержащие:
        <ul>
        <li>вопросы, не относящиеся к компетенции МБУ ЦОДД;</li>
        <li>ненормативную лексику и оскорбительные высказывания;</li>
        <li>призывы к свержению существующего строя и разжиганию межнациональной розни;</li>
        <li>вопросы, требующие в соответствии с установленным порядком наличия удостоверяющих реквизитов (подписи, печати и др.);</li>
        <li>любую рекламу.</li>
        </ul>
    </li>
    </ol>
<p>В случае согласия с установленным порядком вы можете заполнить форму внизу и ваше обращение будет рассмотрено согласно пункту 3 установленного порядка. Ответ на ваше обращение будет отправлено по электронной почте.</p>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Имя'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Фамилия'); ?>
		<?php echo $form->textField($model,'secondName',array('size'=>60)); ?>
		<?php echo $form->error($model,'secondName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Отчество'); ?>
		<?php echo $form->textField($model,'thirdName',array('size'=>60)); ?>
		<?php echo $form->error($model,'thirdName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Адрес'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Контактный телефон'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Электронная почта'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Тема'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Сообщение'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>60)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Пожалуйста, введите буквы, изображенные на картинке выше.
		<br/>Буквы вводятся без учета регистра.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Отправить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>