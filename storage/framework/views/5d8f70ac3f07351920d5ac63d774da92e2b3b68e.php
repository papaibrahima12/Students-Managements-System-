<div class="card mb-3">
    <img src="https://www.daaraahibahiseydidjamil.org/wp-content/uploads/2020/08/logo_site-1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Students Management System</h5>
      <p class="card-text">You can find here all information about students.</p>
      <div class="col" >
        <table class="table">
            <thead>
              <tr>
                    <th scope="col">INE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                    <td><?php echo e($student->ine); ?></td>
                    <td><?php echo e($student->firstName); ?></td>
                    <td><?php echo e($student->secondName); ?></td>
                    <td><?php echo e($student->age); ?></td>
                    <td><?php echo e($student->speciality); ?></td>
                    <td>
                        <a href="<?php echo e(url('students/edit/'.$student->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    </td>
              </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
    </div>
    </div>
</div>
<?php /**PATH /home/pisow/Bureau/Gestion Darra/myapp/resources/views/studentslist.blade.php ENDPATH**/ ?>