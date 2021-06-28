<?php
session_start();
$store_Id = $_SESSION['ID'];

?>
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
        $query = "Select *from jobregistration";
        $result = mysqli_query($connection, $query);
//        
//        var_dump($result);
//        exit();
 
        ?>
        
        <div class="main-div">
            <h2 style="margin-top: 20px;">
                List of Candidates!!
            </h2>
            <div class="center-div">
                <p>Hello <?php echo $_SESSION['UserName']; ?></p>
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
                   <td><a href="updates.php?id=<?php echo $get_result['id']; ?>" data-toggle="tooltip" data-placement="top" title="Update">
                                       <i class="fa fa-edit" aria-hidden="true"></i></a></td>
                                       <td><a href="delete.php?id=<?php echo $get_result['id']; ?>" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   
    </body>
</html>
