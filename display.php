<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    
    <link href="styles.css" rel="stylesheet" type="text/css"/>
    <link href="display_style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'links.php';
        include 'db_connection.php';
        $query = "Select * from jobregistration";
        $result = mysqli_query($connection, $query);
        
//        Display total rows
//        $num = mysqli_num_rows($result);
//        echo $num;
       

        
        ?>
        
        <div class="main-div">
            <h2 style="margin-top: 20px;">
                List of Candidates!!
            </h2>
            <div class="center-div">
                <div class="table-responsive" class="bolder">
                    <table>
                        <thead>
                            <tr>
                                
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Qualification</th>
                                <th>Reference</th>
                                <th>Job Posts</th>
                                <th>Gender</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <?php
                   while($get_result = mysqli_fetch_array($result)){ 
                         
         
                         ?>
                                <td><?php echo $get_result['id']; ?></td>
                                <td><?php echo $get_result['FullName']; ?></td>
                                <td><?php echo $get_result['Email']; ?></td>
                                <td><?php echo $get_result['Cellphone']; ?></td> 
                                <td><?php echo $get_result['Qualification']; ?></td>
                                <td><?php echo $get_result['refer']; ?></td>  
                                <td><?php echo $get_result['jobpost']; ?></td>
                                 <td><?php echo $get_result['Gender']; ?></td>
                                <td><i class="fa fa-edit" aria-hidden="true"></i></td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        
        
    </body>
</html>
