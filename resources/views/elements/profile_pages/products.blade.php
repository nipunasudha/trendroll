
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
            @foreach($products as $product)
            <tr onclick="window.document.location='//www.google.com';" style="cursor:pointer;">

                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->seller->name}}</td>
                <td>{{$product->collection_id}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>

            </tr>

           @endforeach

        </tbody>
    </table>

<script>

$(document).ready(function(){
    $('#myTable1').DataTable();
    $('#myTable1').fadeIn(800);


});
</script>
