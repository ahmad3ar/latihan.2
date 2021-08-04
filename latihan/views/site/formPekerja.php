<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="row">
	<div class="col-sm-6">
		<?php
		if(Yii::$app->session->hasFlash('success')){
			echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
		}
		$form = ActiveForm::begin([
			'method'=>'post',
			'action'=> Url::to(['site/sform-pekerja']),
		])
		?>
		<?= $form->field($model,'nama')->textInput() ?>
		<?= $form->field($model,'jabatan')->dropDownList($model->dataJabatan(),[
			'class' => 'form-control','prompt'=>'-Pilih Jabatan-'
			]) ?>
			<?= $form->field($model,'email')->textInput() ?>
			<?= $form->field($model,'keterangan')->textInput() ?>
			<div class="form-group">
				<?=Html::submitButton('simpan',['class' => 'btn btn-primary']) ?>
			</div>

			<?php
			ActiveForm::end();
			?>
		</div>
		<div class="col-sm-6">
			<table class="table table-bordered table-hover">
				<tr class="danger">
					<th>nama</th>
					<th>jabatan</th>
					<th>email</th>
					<th>keterangan</th>
				</tr>
				<?php
				foreach ($dataPekerja as $row) {
				 	?>
				 	<tr>
				 		<td><?= $row->nama ?></td>
				 		<td><?= $row->labelJabatan() ?></td>
				 		<td><?= $row->email ?></td>
				 		<td><?= $row->keterangan ?></td>
				 	</tr>
				 	<?php
				 }
				 ?>
			</table>
		</div>
	</div>