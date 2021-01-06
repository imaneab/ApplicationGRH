<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper">
<section class="panel panel-primary">
<div class="panel-heading">
Download Files Laravel
</div>
<div class="panel-body">
<table class="table table-bordered">
<thead>
<th>Title</th>
<th>Upload Date</th>
<th>Action</th>
</thead>
<tbody>
<?php foreach($downloads as $down): ?>
<tr>
<td><?php echo e($down->file_title); ?></td>
<td><?php echo e($down->created_at); ?></td>
<td><a href="download/<?php echo e($down->file_name); ?>" download="<?php echo e($down->file_name); ?>">
<button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download"> Download</i></button>
</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
<table>
</div>
</section>
</div>

</body>
</html>