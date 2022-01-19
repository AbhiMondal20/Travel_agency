//js code
<script>
    $(document).ready(function(){
        // add multiple select / deselect functionality
        $('#selectall').on('click',function(){
            if(this.checked){
                $('.case').each(function(){
                    this.checked = true;
                });
            }else{
                $('.case').each(function(){
                    this.checked = false;
                });
            }
        });
        // if all checkbox are selected, check the selectall checkbox
        // and viceversa
        $('.case').on('click',function(){
            if($('.case:checked').length == $('.case').length){
                $('#selectall').prop('checked',true);
            }else{
                $('#selectall').prop('checked',false);
            }
        });
    });
</script>

//PHP code
<?php
        error_reporting(0);
        //Delete
        if(isset($_POST['delete']))
        {
            if (count($_POST["id"]) > 0 ) {

                $all = implode(",", $_POST["id"]);
          
                $sqldel="DELETE FROM `adminreg` WHERE `id` IN ($all)";
				
				echo " $sqldel";

                if($conn->query($sqldel) !== true)
                {
                    die("<div class='alert alert-danger'>
                    Error in deleting item
                    </div>");
                }
                echo "<div class='alert alert-success'>
                        Item(s) have been deleted successfully!
                        </div>";
            }
            else
            {
                echo "<div class='alert alert-warning'>
                        Select checkbox to delete product!
                     </div>";
            }
        }
?>

<button type="submit" class="btn btn-danger float-right" name="delete" onclick="return confirm('Do you want to delete this item?');">Delete Item</button>

<table  border="1"  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th><input type="checkbox" id="selectall"/></th>
       <th>Sl No</th>
	   <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        
       
    </tr>
    </thead>
    <tbody>
    <!--Stock items will be displayed here from database-->
    <?php
	include "connection.php";
        $sqlshow = "SELECT * FROM `adminreg`";
        $res = $conn->query($sqlshow);

        if($res->num_rows > 0)
        {
            while($row = $res->fetch_assoc())
            {
                echo "<tr>
                        <td><input type='checkbox' class='case' name='del_id[]' value='$row[id]'></td>
                        <td> $row[id] </td>
						<td> $row[name] </td>
                        <td> $row[email] </td>
                        <td> $row[password] </td>
                        
                    </tr>";
            }
        }
        else
        {
            echo "<tr><td colspan='7' align='center'> Empty Stock </td></tr>";
        }
    ?>
    </tbody>
</table>