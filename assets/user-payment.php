<?php
include '../config/config.php';
session_start();
if(empty($_SESSION['user_email'])){
    header('location:user-login.php');
}


if(isset($_POST['book'])){
  $tickets_num = $_POST['ticket_res'];
  $event_id = $_POST['event_id'];
}

$sql = "SELECT * FROM `event` WHERE `id`='$event_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="PAYMENT page style/style.css" >
    <script src="PAYMENT page style/mainjs.js"></script>
    <title>Payment Page</title>
  </head>

  <body>
    <main class="container">
      <div class="main">

        <!-- Payment Method Section  -->
        <section class="payment_method">
          <h2 class="ship_head">Payment Method</h2>
          <div class="card_info">
            <div class="card_head">
              <h2 class="card_title">Debit or Credit Card</h2>
            </div>
            <div class="card_types">
              <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349221.png" alt="" />
              <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349230.png" alt="" />
              <img class="card_img" src="https://cdn-icons-png.flaticon.com/512/349/349228.png" alt="" />
              <img class="card_img" src="https://img.icons8.com/fluency/512/mastercard.png" alt="" />
            </div>
            <form action="../handlers/payment.php" method="post" >
              <input type="text" name="Name" value="" placeholder="Card Holder" maxlength="60" />
              <input type="text" name="Number" value="" placeholder="Card Number" maxlength="16" />
              <input type="hidden" style="display: none;" name="event_id" value="<?=$row['id']?>" />
              <input type="hidden" style="display: none;" name="tickets_num" value="<?=$tickets_num?>" />
              <input type="hidden" style="display: none;" name="user_id" value="<?= $_SESSION['user_id']?>"/>
              <div>
                <input type="text" name="Name" value="" placeholder="Expire" maxlength="4" />
                <input type="text" name="Name" value="" placeholder="CVC" maxlength="3" />
              </div>

            <!-- <span class="save_card">Save Card</span> -->
          </div>
          <div class="e_payment">
            <div class="pay">
              <img src="https://cdn-icons-png.flaticon.com/512/6124/6124998.png" alt="" />
            </div>
            <div class="pay">
              <img src="https://cdn-icons-png.flaticon.com/512/5977/5977576.png" alt="" />
            </div>
            <div class="pay">
              <img src="https://cdn-icons-png.flaticon.com/512/196/196565.png" alt="" />
            </div>
          </div>
          <button class="confirm_btn" type="submit" name="pay"  >Confirm</button>
          </form>
        </section>
        <!-- Order Summary Section  -->
        <section class="order_summary">
          <h2 class="order_head">Order Summary</h2>
          <div class="order_price">
            <hr />
            <div class="price">
              <p>Event Name:</p>
              <p><?=$row['name']?></p>
            </div>
            <div class="price">
              <p>Ticket Price:</p>
              <p><?=$row['price']?> EGP</p>
            </div>
            <div class="price">
              <p>Amount of Tickets:</p>
              <?php
                if($tickets_num == 1){ ?>
                  <p><?=$tickets_num?> ticket</p>
              <?php
                }
                else{ ?>
                  <p><?=$tickets_num?> tickets</p>
              <?php
                }
              ?>
            </div>
            <br/>
            <hr/>
            <div class="total_price">
              <p class="dark">Total:</p>
              <p class="dark"><?=$row['price'] * $tickets_num?> EGP</p>
            </div>
          </div>
          <img class="qr_code" src="https://cdn-icons-png.flaticon.com/512/714/714390.png" alt="" />
          <p class="condition">
            Pay and Confirm Order by QR Code Using <b>Mobile Application</b>
          </p>

        </section>

      </div>
    </main>
    <script src="mainjs.js"></script>

  </body>

</html>