<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daara Management System</title>
  </head>
  <body>
    <?php echo $__env->make("navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($layout == 'index'): ?>
        <div class="container-fluid mt-4">
            <div class="row">
            <section class="col-md-12">
                <?php echo $__env->make("studentslist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
            <section class="col-md-5"></section>
            </div>
        </div>
    <?php elseif($layout == 'create'): ?>
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                <?php echo $__env->make("studentslist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
            <section class="col">
                <form action="<?php echo e(url('/students/store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                    <label>INE</label>
                    <input type="text" name="ine" class="form-control" placeholder="Entrez votre INE">
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="firstName" class="form-control" placeholder="Entrez votre prenom">
                    </div>
                    <div class="form-group">
                        <label>Second Name</label>
                        <input type="text" name="secondName" class="form-control" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" name="age" class="form-control" placeholder="Entrez votre age">
                    </div>
                    <div class="form-group">
                        <label>Speciality</label>
                        <input type="text" name="speciality" class="form-control" placeholder="Entrez votre specialite">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-info" value="Submit">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </div>
                </form>
            </section>
        </div>
    </div>
    <?php elseif($layout == 'show'): ?>
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col">
            <?php echo $__env->make("studentslist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <section class="col"></section>
        </div>
    </div>
    <?php elseif($layout == 'edit'): ?>
    <div class="container-fluid mt-4">
        <div class="row">
        <section class="col">
            <?php echo $__env->make("studentslist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </section>
        <section class="col">
            <form action="<?php echo e(url('/update/'.$student->id )); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label>INE</label>
                  <input value=<?php echo e($student->ine); ?> type="text" name="ine" class="form-control" placeholder="Entrez votre INE">
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input value=<?php echo e($student->firstName); ?> type="text" name="firstName" class="form-control" placeholder="Entrez votre prenom">
                </div>
                <div class="form-group">
                    <label>Second Name</label>
                    <input value=<?php echo e($student->secondName); ?> type="text" name="secondName" class="form-control" placeholder="Entrez votre nom">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input value=<?php echo e($student->age); ?> type="text" name="age" class="form-control" placeholder="Entrez votre age">
                </div>
                <div class="form-group">
                    <label>Speciality</label>
                    <input value=<?php echo e($student->speciality); ?> type="text" name="speciality" class="form-control" placeholder="Entrez votre specialite">
                </div>
                <div>
                    <input type="submit" class="btn btn-info" value="Update">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </div>
              </form>
        </section>
        </div>
    </div>
    <?php endif; ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php /**PATH /home/pisow/Bureau/Gestion Darra/myapp/resources/views/student.blade.php ENDPATH**/ ?>