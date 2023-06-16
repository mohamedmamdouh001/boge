 <?php
include '../config/config.php';
session_start();
$owner_id = $_SESSION['owner_id'];
if(isset($_GET['signout'])){
    unset($_SESSION['full_name']);
    header('location:owner-login.php');
}
if(empty($_SESSION['full_name'])){
    header('location:owner-login.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <title>Dashboard</title>
</head>

<body>
    <div class="page d-flex">
        <div class="sidepar bg-white p-20 p-relative">
            <h3 class="p-relative txt-center mt-0"><?= $_SESSION['full_name'] ?>'s dashboard</h3>
          <!-- HTML !-->
<form action="" method="get"> <button style="margin-left: 15px; " name="signout" class="button-54" role="button">SIGN OUT </button></form>


            
        </div>
        <div class="content-area w-full overflow-h">
            <div class="head bg-white p-15 between-flex">
                <div class=" p-relative">
                    
                </div>
                <div class="icon d-flex align-center">
                    
                    <img src="images/avatar.png" alt="" />
                   
                </div>
            </div>

          
            <div class="wrapper d-grid gap-20">
                <div class="welcome bg-white rad-10 txt-c-mobile dis-block-mobile">
                    <div class="intro p-20 d-flex space-between bg-eee">
                        <div>
                            <h2 class="m-0">Welcome</h2>
                            <?php
                            if(isset($_SESSION['success'])){ ?>
                                <div class="alert alert-success" role="alert">
                                <?=$_SESSION['success']?>
                                </div>
                            <?php
                            unset($_SESSION['success']);
                            }
                            ?>
                            <p class="c-gray mt-5"> <?= $_SESSION['full_name'] ?></p>
                        </div>
                        <img class="hide-mobile" src="images/welcome.png" alt="" />
                    </div>
                    <img class="avatar" src="images/avatar.png" alt="" />
                    <div class="body txt-center d-flex p-20 mt-20 mb-20 dis-block-mobile">
                        <div>
                            CLICK ON ADD EVENT TO MAKE EVENT REQUEST 
                        </div>
                      
                        <div>
                         
                        </div>
                        <div>
                                            


                        </div>
                    </div>
                    <a style="width: 500PX ; text-align: center  ; ; " href="EVENTDETIALFORM.php" class="visit d-block fs-14 bg-blue c-white w-fit btn-shape  ">           ADD EVENT </a>


                </div>


                <?php
                    $stmt1 = "SELECT SUM(`tickets_num`) FROM `event` WHERE `owner_id`='$owner_id' ";
                    $summation = mysqli_query($conn, $stmt1);
                ?>
                <div class="tickets p-20 bg-white rad-10">
                    <h2 class="mt-0 mb-10">Tickets Statistics</h2>
                    <p class="c-gray fs-14 mb-20 mt-0">Everything About Tickets</p>
                    <div class="d-flex gap-20 txt-center f-wrap">
                        <div class="box p-20 rad-10 fs-13 c-gray  bo">
                            <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                            <span class="d-block c-b fw-bold fs-25 mb-5"> <?php while ($row = $summation->fetch_assoc()) {echo $row["SUM(`tickets_num`)"];} ?> </span>
                            Total
                        </div>
                        <div class="box p-20 rad-10 fs-13 c-gray bo">
                            <i class="fa-solid fa-circle-check fa-2x mb-10 c-green"></i>
                            <span class="d-block c-b fw-bold fs-25 mb-5">Under Developing</span>
                            sold
                        </div>
                        <div class="box p-20 rad-10 fs-13 c-gray bo">
                            <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                            <span class="d-block c-b fw-bold fs-25 mb-5">Under Developing</span>
                            remaining tickets
                        </div>

                       
                    </div>
                </div>

                

            


            </div>


            <div class="projects p-20 bg-white rad-20 m-20">
                <h2 class="mt-0 mb-20">Event Requested </h2>
                <div class="responsive-table">
                    <table class="fs-15 w-full">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Date  </td>
                                <td>Ticket Price</td>
                                <td>Event days</td>
                                <td>Status</td>
                                
                                <td>Full Details</td>
                                <td>Cancel</td>
                                <td>update</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM `event` WHERE `owner_id`= '$owner_id' ";
                                $result = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($result)){ 
                                    ?>
                            <form method="get" >   
                                <tr>
                                    <td><?=$row['name'] ?> </td>
                                    <td><?=$row['date'] ?></td>
                                    <td><?=$row['price'] ?></td>
                                    <td><?=$row['host_days'] ?></td>
                                    <td>
                                        <span class="label bg-green c-white btn-shape"><?=$row['status'] ?></span>
                                    </td>
                                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal?id=<?= $row['id']?>">
                                            View
                                        </button>
                                    </td>
                                    <td><a href="../handlers/delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete Event</a></td>
                                <td>

                                <a href="" class="label bg-orange c-white btn-shape"> update </a>
                            
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