<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper">


<div class="panel-body">

<?php foreach($downloads as $down): ?>

<a href="download/<?php echo e($down->file_name); ?>" download="<?php echo e($down->file_name); ?>">
<button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download"> Download</i></button>
</a>

<?php endforeach; ?>

</div>

</div>

</body>
</html>