<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> BOGE partners </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="become a partner style/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    
      <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
          <div class="loginbackground box-background--white padding-top--64">
            <div class="loginbackground-gridContainer">
              <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                </div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
              </div>
            </div>
          </div>
          <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
              <h1><a href="" rel="dofollow">become a partner </a></h1>
            </div>
            <div class="formbold-main-wrapper">
             
              <div class="formbold-form-wrapper">
                     <img src="">
                <form action="../handlers/owner-register.handl.php" method="POST" enctype="multipart/form-data" >
                  <div class="formbold-input-wrapp formbold-mb-3">
                  <?php
                     if (isset($_SESSION['error'])) {?>
                      <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['error'] ?>
                      </div>
                      <?php
                      unset($_SESSION['error']);
                    }
                    ?>
                    <label for="firstname" class="formbold-form-label"> Name </label>
            
                    <div>
                      <input
                        type="text"
                        name="firstname"
                        id="firstname"
                        placeholder="First name"
                        class="formbold-form-input"
                      />
            
                      <input
                        type="text"
                        name="lastname"
                        id="lastname"
                        placeholder="Last name"
                        class="formbold-form-input" required
                      />
                    </div>
                  </div>
            
                  <div class="formbold-mb-3">
                    <label for="age" class="formbold-form-label"> Age </label>
                    <input
                      type="text"
                      name="age"
                      id="age"
                      placeholder="ex:25"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-3">
                    <label for="national id" class="formbold-form-label"> National id </label>
                    <input
                      type="number"
                      name="ssn"
                      id="national_id"
                      placeholder="your national_id"
                      class="formbold-form-input"
                    />
                  </div>
                  <div class="formbold-mb-3">
                    <label for="phone" class="formbold-form-label"> Phone Number </label>
                    <input
                      type="number"
                      name="phone"
                      id="phone"
                      placeholder="Enter your phone number"
                      class="formbold-form-input"
                    />
                  </div>
                  
            
                  <div class="formbold-mb-3">
                
                  </div>
            
                
            
                  <div class="formbold-mb-3">
                    <label for="email" class="formbold-form-label"> Email </label>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="example@email.com"
                      class="formbold-form-input"
                    />
                  </div>

                  <!-- <div class="formbold-mb-3">
                    <label for="email" class="formbold-form-label"> password </label>
                    <input
                      type="password"
                      name="password"
                      id="password"
                      placeholder="password"
                      class="formbold-form-input"
                    />
                  </div> -->
            
                  <div class="formbold-mb-3">
                    <label for="address" class="formbold-form-label"> City </label>
            
                    <input
                      type="text"
                      name="city"
                      id="address"
                      placeholder="ex:cairo"
                      class="formbold-form-input formbold-mb-3"
                    />
                 
                  </div>
            
                  <!-- <div class="formbold-mb-3 formbold-input-wrapp">
                    <label for="phone" class="formbold-form-label"> Phone </label>
            
                    <div>
                
            
                      <input
                        type="text"
                        name="phone"
                        id="phone"
                        placeholder="Phone number"
                        class="formbold-form-input"
                      />
                    </div>
                  </div> -->
            
                  <div class="formbold-input-flex">
                    <div>
                     
                    </div>
                    <div>
           
                    
                    </div>
                  </div>
            
             
                  <div class="formbold-checkbox-wrapper">
                    <label for="supportCheckbox" class="formbold-checkbox-label">
                      <div class="formbold-relative">
                        <input
                          type="checkbox"
                          id="supportCheckbox"
                          class="formbold-input-checkbox"
                        />
                        <div class="formbold-checkbox-inner">
                          <span class="formbold-opacity-0">
                            <svg
                              width="11"
                              height="8"
                              viewBox="0 0 11 8"
                              class="formbold-stroke-current"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M8.81868 0.688604L4.16688 5.4878L2.05598 3.29507C1.70417 2.92271 1.1569 2.96409 0.805082 3.29507C0.453266 3.66742 0.492357 4.24663 0.805082 4.61898L3.30689 7.18407C3.54143 7.43231 3.85416 7.55642 4.16688 7.55642C4.47961 7.55642 4.79233 7.43231 5.02688 7.18407L10.0696 2.05389C10.4214 1.68154 10.4214 1.10233 10.0696 0.729976C9.71776 0.357624 9.17049 0.357625 8.81868 0.688604Z"
                                fill="white"
                              />
                            </svg>
                          </span>
                        </div>
                      </div>
                      I agree to the defined
                      <a href="#"> terms, conditions, and policies</a>
                    </label>
                  </div>
            
                  <button  class="formbold-btn">Submit</button>
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
                font-family: 'Inter', sans-serif;
              }
              .formbold-mb-3 {
                margin-bottom: 15px;
              }
              .formbold-relative {
                position: relative;
              }
              .formbold-opacity-0 {
                opacity: 0;
              }
              .formbold-stroke-current {
                stroke: #ffffff;
                z-index: 999;
              }
              #supportCheckbox:checked ~ div span {
                opacity: 1;
              }
              #supportCheckbox:checked ~ div {
                background: #6a64f1;
                border-color: #6a64f1;
              }
            
              .formbold-main-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 48px;
              }
            
              .formbold-form-wrapper {
                margin: 0 auto;
                max-width: 570px;
                width: 100%;
                background: white;
                padding: 40px;
              }
            
              .formbold-img {
                display: block;
                margin: 0 auto 45px;
              }
            
              .formbold-input-wrapp > div {
                display: flex;
                gap: 20px;
              }
            
              .formbold-input-flex {
                display: flex;
                gap: 20px;
                margin-bottom: 15px;
              }
              .formbold-input-flex > div {
                width: 50%;
              }
              .formbold-form-input {
                width: 100%;
                padding: 13px 22px;
                border-radius: 5px;
                border: 1px solid #dde3ec;
                background: #ffffff;
                font-weight: 500;
                font-size: 16px;
                color: #536387;
                outline: none;
                resize: none;
              }
              .formbold-form-input::placeholder,
              select.formbold-form-input,
              .formbold-form-input[type='date']::-webkit-datetime-edit-text,
              .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
              .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
              .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
                color: rgba(83, 99, 135, 0.5);
              }
            
              .formbold-form-input:focus {
                border-color: #6a64f1;
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
              }
              .formbold-form-label {
                color: #536387;
                font-size: 14px;
                line-height: 24px;
                display: block;
                margin-bottom: 10px;
              }
            
              .formbold-checkbox-label {
                display: flex;
                cursor: pointer;
                user-select: none;
                font-size: 16px;
                line-height: 24px;
                color: #536387;
              }
              .formbold-checkbox-label a {
                margin-left: 5px;
                color: #6a64f1;
              }
              .formbold-input-checkbox {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border-width: 0;
              }
              .formbold-checkbox-inner {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 20px;
                height: 20px;
                margin-right: 16px;
                margin-top: 2px;
                border: 0.7px solid #dde3ec;
                border-radius: 3px;
              }
            
              .formbold-form-file {
                padding: 12px;
                font-size: 14px;
                line-height: 24px;
                color: rgba(83, 99, 135, 0.5);
              }
              .formbold-form-file::-webkit-file-upload-button {
                display: none;
              }
              .formbold-form-file:before {
                content: 'Upload';
                display: inline-block;
                background: #EEEEEE;
                border: 0.5px solid #E7E7E7;
                border-radius: 3px;
                padding: 3px 12px;
                outline: none;
                white-space: nowrap;
              
                cursor: pointer;
                color: #637381;
                font-weight: 500;
                font-size: 12px;
                line-height: 16px;
                margin-right: 10px;
              }
            
              .formbold-btn {
                font-size: 16px;
                border-radius: 5px;
                padding: 14px 25px;
                border: none;
                font-weight: 500;
                background-color: #6a64f1;
                color: white;
                cursor: pointer;
                margin-top: 25px;
              }
              .formbold-btn:hover {
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
              }
            
              .formbold-w-45 {
                width: 45%;
              }
            </style>
               
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
              

    
   

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->