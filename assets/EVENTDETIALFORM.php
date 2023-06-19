<?php
session_start();
if(empty($_SESSION['owner_id'])){
  header("location:ownerlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="formbold-main-wrapper">
      
        <div class="formbold-form-wrapper">
        <p><a class="link-opacity-50-hover" href="owner-dashboard.php">Back To Home</a></p>
          <form action="../handlers/owner-add-event.php" method="POST" enctype="multipart/form-data" >
          <?php
                     if (isset($_SESSION["success"])) {?>
                      <div class="alert alert-success" role="alert">
                        <?= $_SESSION["success"] ?>
                      </div>
                      <?php
                      unset($_SESSION["success"]);
                    }
                    ?>
              <div class="formbold-input-flex">
 
                <div>

                    <input
                    type="datetime-local"
                    name="event_date"
                    id="firstname"
                    placeholder="Jane"
                    class="formbold-form-input"
                    />
                    <label for="firstname" class="formbold-form-label"> Event Date  </label>
                </div>
                <div>
                    <input
                    type="text"
                    name="event_name"
                    id="lastname"
                    placeholder="EX:Cooper"
                    class="formbold-form-input"
                    />
                    <label for="lastname" class="formbold-form-label"> Event Name </label>
                </div>
                <div>
                  <input
                  type="number"
                  name="ticket_num"
                  id="phone"
                  placeholder="ex:100 "
                  class="formbold-form-input"
                  />
                  <label for="phone" class="formbold-form-label"> Number of tickets   </label>
              </div>
              </div>
     
                <br>
                
              <div class="formbold-input-flex">
                <div>
                  <select class="formbold-form-input" name="category" id="occupation">
                    <option value="Educational">Educational</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Sports">Sports</option>
                    <option value="Music">Music</option>
                  </select><label class="formbold-form-label">CATEGORY</label>
                </div>
                <div>
                  <input
                  type="number"
                  name="host_days"
                  id="lastname"
                  placeholder="EX: 9 days"
                  class="formbold-form-input"
                  />
                  <label for="lastname" class="formbold-form-label"> Days of hosting  </label>
              </div>
                <div>
                  <input
                  type="number"
                  name="price"
                  id="phone"
                  placeholder="ex:100EGP "
                  class="formbold-form-input"
                  />
                  <label for="phone" class="formbold-form-label"> Price  </label>
              </div>
              </div>
                    
              <div class="formbold-mb-3">
        <label for="social" class="formbold-form-label"  >
          socail media link
        </label>
        <input
          type="text"
          name="social"
          id="social"
          class="formbold-form-input"
          placeholder="ULR"
        />
      </div>
      <DIv></DIv>
              <div class="formbold-mb-3">
                <label for="upload" class="formbold-form-label">
                  Upload  event photo
                </label>
                <input
                  type="file"
                  name="image"
                  id="upload"
                  class="formbold-form-input formbold-form-file"
                />
              </div>
              
        
              <div class="formbold-textarea">
                  <textarea
                      rows="6"
                      name="description"
                      id="message"
                      placeholder="Write description about your event "
                      class="formbold-form-input"
                  ></textarea>
                  <label for="message" class="formbold-form-label"> Description</label>
              </div>
         
      
             
              <button class="formbold-btn" name="request">
               Rquest Event
              </button>
           
          </form>
        </div>
      </div>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        body {
          font-family: "Inter", sans-serif;
        }
        .formbold-main-wrapper {
          display: flex;
          align-items: center;
          justify-content: center;
          padding: 48px;
        }
      
        .formbold-form-wrapper {
          margin: 0 auto;
          max-width: 550px;
          width: 100%;
          background: white;
        }
      
        .formbold-input-flex {
          display: flex;
          gap: 20px;
          margin-bottom: 22px;
        }
        .formbold-input-flex > div {
          width: 50%;
          display: flex;
          flex-direction: column-reverse;
        }
        .formbold-textarea {
          display: flex;
          flex-direction: column-reverse;
        }
      
        .formbold-form-input {
          width: 100%;
          padding-bottom: 10px;
          border: none;
          border-bottom: 1px solid #DDE3EC;
          background: #FFFFFF;
          font-weight: 500;
          font-size: 16px;
          color: #07074D;
          outline: none;
          resize: none;
        }
        .formbold-form-input::placeholder {
          color: #536387;
        }
        .formbold-form-input:focus {
          border-color: #6A64F1;
        }
        .formbold-form-label {
          color: #07074D;
          font-weight: 500;
          font-size: 14px;
          line-height: 24px;
          display: block;
          margin-bottom: 18px;
        }
        .formbold-form-input:focus + .formbold-form-label {
          color: #6A64F1;
        }
      
        .formbold-input-file {
          margin-top: 30px;
        }
        .formbold-input-file input[type="file"] {
          position: absolute;
          top: 6px;
          left: 0;
          z-index: -1;
        }
        .formbold-input-file .formbold-input-label {
          display: flex;
          align-items: center;
          gap: 10px;
          position: relative;
        }
      
        .formbold-filename-wrapper {
          display: flex;
          flex-direction: column;
          gap: 6px;
          margin-bottom: 22px;
        }
        .formbold-filename {
          display: flex;
          align-items: center;
          justify-content: space-between;
          font-size: 14px;
          line-height: 24px;
          color: #536387;
        }
        .formbold-filename svg {
          cursor: pointer;
        }
      
        .formbold-btn {
          font-size: 16px;
          border-radius: 5px;
          padding: 12px 25px;
          border: none;
          font-weight: 500;
          background-color: #6A64F1;
          color: white;
          cursor: pointer;
          margin-top: 25px;
        }
        .formbold-btn:hover {
          box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
      
      </style>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</body>
</html>