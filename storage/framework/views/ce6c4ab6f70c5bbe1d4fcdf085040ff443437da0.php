
<link href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css" rel="stylesheet">
<script src= "https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>


<table id="myTable1" class="display" cellspacing="0" width="100%" style="display:none;">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Seller</th>
                <th>Collection</th>
                <th>Added On</th>
                <th>Last Modified</th>

            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Seller</th>
                <th>Collection</th>
                <th>Added On</th>
                <th>Last Modified</th>
            </tr>
        </tfoot>
        <tbody>
            <?php foreach($products as $product): ?>
            <tr onclick="window.document.location='//www.google.com';" style="cursor:pointer;">

                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->seller->name); ?></td>
                <td><?php echo e($product->collection_id); ?></td>
                <td><?php echo e($product->created_at); ?></td>
                <td><?php echo e($product->updated_at); ?></td>

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
