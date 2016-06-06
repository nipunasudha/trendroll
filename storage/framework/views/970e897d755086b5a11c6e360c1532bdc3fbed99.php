<?php $__env->startSection('content'); ?>
		<link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
		<script src= "https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
     
<table id="myTable1" class="display" cellspacing="0" width="100%" style="display:none;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td><a href="//www.google.com">2011/04/25</a></td>
                <td><img src="https://cdn4.iconfinder.com/data/icons/simplicio/128x128/notification_error.png" height="28"></td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                  <td><img src="https://cdn4.iconfinder.com/data/icons/simplicio/128x128/notification_error.png" height="28"></td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                  <td><img src="https://cdn4.iconfinder.com/data/icons/simplicio/128x128/notification_error.png" height="28"></td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                  <td><img src="https://cdn4.iconfinder.com/data/icons/simplicio/128x128/notification_error.png" height="28"></td>
            </tr>
           
        </tbody>
    </table>

<script>
$(document).ready(function(){
    $('#myTable1').DataTable({
  "scrollX": true
});
    $('#myTable1').fadeIn(800);
    
    
});
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>