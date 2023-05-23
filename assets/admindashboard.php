<?php
include "../config/config.php";
session_start();
$admin_id = $_SESSION['admin_id'];
if(empty($_SESSION['admin_id'])){
    header("location:admin-login.php");
}
if(isset($_GET['signout'])){
    header('location:admindashboard.php');
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css1/all.min.css" />
    <link rel="stylesheet" href="css1/framework.css" />
    <link rel="stylesheet" href="css1/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>admin Dashboard</title>
</head>
<?php
    $sql = "SELECT * FROM `admin` WHERE `id`='$admin_id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<body>
    <div class="page d-flex">
        <div class="sidepar bg-white p-20 p-relative">
            <h3 class="p-relative txt-center mt-0"><?= $row['name'] ?>'s Dashboard</h3>
            <ul>
                <li>
                    <a class="active d-flex align-center fs-14 c-b p-10 rad-6" href=""><i
                            class="fa-solid fa-file fa-fw"></i><span>Owners</span>
                    </a>
                </li>
              
                <li>
                    <a class="d-flex align-center fs-14 c-b p-10 rad-6" href=""><i
                            class="fa-solid fa-user fa-fw"></i><span> users  </span>
                    </a>
                </li>
                
               
                <li>
                    <form action="" method="get" >
                        <button  class="button-54  d-flex align-center fs-14 c-b p-10 rad-6" name="signout" ><i
                                class="fa-solid fa-user-group fa-fw"></i><span> signout </span>
                        </button>
                    </form>
                </li>
             
            </ul>
        </div>
        <div class="content-area w-full overflow-h">
            <div class="head bg-white p-15 between-flex">
                <div class=" p-relative">
                  
                </div>
                <div class="icon d-flex align-center">
                    <span class=" p-relative">
                    
                    </span>
                    <img src="images/avatar.png" alt="" />
                </div>
            </div>

            <h1 class="p-relative">owners enevnts</h1>
     


            <div class="projects p-20 bg-white rad-20 m-20">
                <h2 class="mt-0 mb-20"> details </h2>
                <div class="responsive-table">
                    <table class="fs-15 w-full">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Date</td>
                                <td>Category</td>
                                <td>Ticket Price</td>
                                <td>Hosting days</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM `event` WHERE `status`='pending'";
                                $result = mysqli_query($conn,$sql);
                            ?>
                            <?php
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <form action="">
                                    <tr>
                                        <td> <?=$row['name']?> </td>
                                        <td> <?=$row['date']?> </td>
                                        <td> <?=$row['category']?> </td>
                                        <td> <?=$row['price']?> </td>
                                        <td> <?=$row['host_days']?> </td>
                                        <td>
                                                <button type="button" style="color: white;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal?id=<?= $row['id']?>">
                                                    View Information
                                                </button>
                                            <a href="../handlers/accept.php?id=<?=$row['id']?>" class="btn btn-success">Accept</a>
                                            <a href="../handlers/reject.php?id=<?=$row['id']?>" class="btn btn-danger">Reject</a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="exampleModal?id=<?= $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-3" id="exampleModalLabel"> <?=$row['name'] ?> </h1>
                                              <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              <div> <h5>Number of tickets: </h5> <?=$row['tickets_num']?> </div>
                                              <div> <h5>Date of Event: </h5> <?=$row['date']?>  </div>
                                              <div> <h5>Category: </h5> <?=$row['category']?>  </div>
                                              <div> <h5>Host Days: </h5> <?=$row['host_days']?> </div>
                                              <div> <h5>Price of the ticket: </h5> <?=$row['price']?> </div>
                                              <div >
                                                <h5>Event Image: </h5> 
                                                <img src="event_img/<?=$row['event_img'];?>" style="height: 300px; width: 300px;" alt="pic" class="img-fluid" >
                                            </div>
                                              <div> <h5>Description: </h5> <?=$row['description']?> </div>
                                              <div> <h5>Status: </h5> <?=$row['status']?> </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </form>
                        <?php      
                            } 
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>