<?php include("db.php") ?>
<?php include("includes/header.php") ?>
   
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <form action="save_task.php" method="POST">
                <div class="card card-body">
                    <div class="form-group">
                        <input type="text" name="title" placeholder="Name" class="form-control" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description"  rows="2" placeholder="Decription" class="form-control"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </div>
            </form>
        </div>
        <div class="col-md-8">
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>

