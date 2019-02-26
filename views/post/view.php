<?php
use yii\helpers\BaseUrl;
$this->title='View';
?>


<div class="box box-info">
    <div class="box-header with-border">
              <h3 class="box-title">Articles</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>No.</th>
                <th>Date</th>
                <th>Title</th>
                <th>Youtube</th>
                <th>File</th>
                <th>Image</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach($data as $index => $value){?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $value['date_created']; ?></td>
                  <td><?= $value['title']; ?></td>
                  <td><?= $value['youtube']; ?></td>
                  <td><?= $value['file']; ?></td>
                  <td><?= $value['image']; ?></td>
                  <td><?= $value['author']; ?></td>
                  <td><a href="<?= BaseUrl::toRoute(['site/edit-post','id'=> $value['id']]);?>" class="label label-success">Edit</a>&nbsp;<a href="<?= BaseUrl::toRoute(['site/delete-post','id'=> $value['id']]);?>" class="label label-danger">Delete</a>&nbsp;<a href="<?= $value['status'] ==='Active' ? BaseUrl::toRoute(['site/draft-post','id'=> $value['id']]) : BaseUrl::toRoute(['site/active-post','id'=> $value['id']]); ?>" class="label label-warning"><?= $value['status'] === 'Inactive' ? 'Activate' : 'Draft' ?></a></td>
                </tr>
                <?php $no++; } ?>   
            </tbody>
            
        </table>
    </div>
    <!-- /.box-body -->
</div>