
<link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
<script src= "https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>


<table id="myTable1" class="display" cellspacing="0" width="100%" style="display:none;">
        <thead>
            <tr>
                <th>Reviewer</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>Last Modified</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
              <th>Reviewer</th>
              <th>Rating</th>
              <th>Comment</th>
              <th>Last Modified</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach($reviews as $review): ?>
            <tr onclick="window.document.location='//www.google.com';" style="cursor:pointer;">
                <td><?php echo e($review->reviewer->name); ?></td>
                <td><img src="<?php echo e(url('img/rating_set')); ?>/rating<?php echo e($review->rating); ?>.png" height="30"></td>
                <td><?php echo e($review->comment); ?></td>
                <td><?php echo e($review->updated_at); ?></td>

            </tr>

           <?php endforeach; ?>

        </tbody>
    </table>

<script>

$(document).ready(function(){
    $('#myTable1').DataTable();
    $('#myTable1').fadeIn(800);


});
</script>
