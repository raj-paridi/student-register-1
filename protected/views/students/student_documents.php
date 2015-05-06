<?php
$this->widget('bootstrap.widgets.TbGridView', array(
			'type'=>'striped bordered condensed',
			'id'=>'usersDocuments-grid',
			'emptyText'=>'<center class="grey">You have not uploaded any documents yet.</center>',
			'dataProvider'=>new CArrayDataProvider($student_documents),
			'columns'=>array(
							array('name'=>'document_type','header'=>'<center>Type</center>','type'=>'raw','value'=>'$data->document_type'),
							array('name'=>'document','header'=>'<center>Submitted Documents</center>','type'=>'raw','value'=>'CHtml::link($data->document,Yii::app()->request->baseUrl."/documents/".$data->file_name,array("target"=>"_blank"))'),
							array('name'=>'uploaded_on','header'=>'<center>Uploaded on</center>','type'=>'raw','value'=>'"<center>".($data->uploaded_on)."</center>"'),
							array('name'=>'status','header'=>'<center>Status</center>','type'=>'raw','value'=>'$data->status=="Rejected"?"<center>Rejected</center>":"<center>".$data->status."</center>"'),
					   ),
		));
?>


