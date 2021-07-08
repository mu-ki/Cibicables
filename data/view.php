<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ftth Data</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css?v=395"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- form theme -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/journal/bootstrap.min.css" rel="stylesheet">

    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css?v=395" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css?v=395" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?v=395"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="//cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.css?v=395">
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css?v=395" />

    <link rel="stylesheet" type="text/css"
        href="//cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css?v=395">

    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/css/bootstrap-select.min.css?v=395" />

    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css?v=395" rel="stylesheet">

    <!-- bootstrap star rating -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/css/star-rating.min.css?v=395"
        media="all" rel="stylesheet" type="text/css" />
    <!-- if you need to use a theme, then include the theme CSS file -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/themes/krajee-svg/theme.css?v=395"
        media="all" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .xs {
            font-size: 0.575rem !important;
        }

        .error {
            color: #a94442
        }

        /*custom css for switch*/
        .switch {
            font-size: 1rem;
            position: relative;
        }

        .switch input {
            position: absolute;
            height: 1px;
            width: 1px;
            background: none;
            border: 0;
            clip: rect(0 0 0 0);
            clip-path: inset(50%);
            overflow: hidden;
            padding: 0;
        }

        .switch input+label {
            position: relative;
            min-width: calc(calc(2.375rem * .8) * 2);
            border-radius: calc(2.375rem * .8);
            height: calc(2.375rem * .8);
            line-height: calc(2.375rem * .8);
            display: inline-block;
            cursor: pointer;
            outline: none;
            user-select: none;
            vertical-align: middle;
            text-indent: calc(calc(calc(2.375rem * .8) * 2) + .5rem);
        }

        .switch input+label::before,
        .switch input+label::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: calc(calc(2.375rem * .8) * 2);
            bottom: 0;
            display: block;
        }

        .switch input+label::before {
            right: 0;
            background-color: #dee2e6;
            border-radius: calc(2.375rem * .8);
            transition: 0.2s all;
        }

        .switch input+label::after {
            top: 2px;
            left: 2px;
            width: calc(calc(2.375rem * .8) - calc(2px * 2));
            height: calc(calc(2.375rem * .8) - calc(2px * 2));
            border-radius: 50%;
            background-color: white;
            transition: 0.2s all;
        }

        .switch input:checked+label::before {
            background-color: #08d;
        }

        .switch input:checked+label::after {
            margin-left: calc(2.375rem * .8);
        }

        .switch input:focus+label::before {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0, 136, 221, 0.25);
        }

        .switch input:disabled+label {
            color: #868e96;
            cursor: not-allowed;
        }

        .switch input:disabled+label::before {
            background-color: #e9ecef;
        }

        .switch.switch-sm {
            font-size: 0.875rem;
        }

        .switch.switch-sm input+label {
            min-width: calc(calc(1.9375rem * .8) * 2);
            height: calc(1.9375rem * .8);
            line-height: calc(1.9375rem * .8);
            text-indent: calc(calc(calc(1.9375rem * .8) * 2) + .5rem);
        }

        .switch.switch-sm input+label::before {
            width: calc(calc(1.9375rem * .8) * 2);
        }

        .switch.switch-sm input+label::after {
            width: calc(calc(1.9375rem * .8) - calc(2px * 2));
            height: calc(calc(1.9375rem * .8) - calc(2px * 2));
        }

        .switch.switch-sm input:checked+label::after {
            margin-left: calc(1.9375rem * .8);
        }

        .switch.switch-lg {
            font-size: 1.25rem;
        }

        .switch.switch-lg input+label {
            min-width: calc(calc(3rem * .8) * 2);
            height: calc(3rem * .8);
            line-height: calc(3rem * .8);
            text-indent: calc(calc(calc(3rem * .8) * 2) + .5rem);
        }

        .switch.switch-lg input+label::before {
            width: calc(calc(3rem * .8) * 2);
        }

        .switch.switch-lg input+label::after {
            width: calc(calc(3rem * .8) - calc(2px * 2));
            height: calc(calc(3rem * .8) - calc(2px * 2));
        }

        .switch.switch-lg input:checked+label::after {
            margin-left: calc(3rem * .8);
        }

        .switch+.switch {
            margin-left: 1rem;
        }

        .dropdown-menu {
            margin-top: .75rem;
        }

        .signature-pad {
            background: aliceblue;
        }

        .pointer {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="card">
                    <div class="card-body" style=" background-color: #ffffff; ">
                        <div class="row">
                            <div class="col-md-12">
                            <?php
include 'Config.php';
$query = "SELECT * FROM customers WHERE custId='" . $_GET["custId"] . "'"; // Fetch data from the table customers using id
$result = mysqli_query($dbCon, $query);
$customer = mysqli_fetch_assoc($result);
?>
            <form action="update-process.php" method="POST">
              <input type="hidden" name="custId" value="<?php echo $_GET["custId"]; ?>" class="form-control" required="">
                                    <div class="row">
                                        <div class=" col-md-12 ">

                                            <div class="">
                                                <h1 style="color:#0169d0">
                                                    <center>CIBI FTTH DATA</center>
                                                </h1>
                                            </div>
                                        </div>
                                        <div class=" col-md-12 ">
                                            <hr style="
                                                    padding-top: 1px;
                                                                            padding-bottom:1px;
                                                                            border-top:1px solid #0a0a0a;
                        ">
                                        </div>
                                        <div class=" col-md-5 ">
                                            <div class="form-group">
                                                <label for="field_27">
                                                    <span style="color:#000000">
                                                        Name
                                                    </span>

                                                    <span style="color:#a94442">*</span>
                                                </label>
                                                <div class="input-group">


                                                    <input type="text" name="name"  value="<?php echo $customer['name']; ?>"
                                                        placeholder="Enter Customer Name" class="form-control  "
                                                        id="field_27" required data-msg-required="Enter Customer Name" disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user-circle"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-4 ">
                                            <div class="form-group">
                                                <label for="field_25">
                                                    <span style="color:#000000">
                                                        Number
                                                    </span>

                                                    <span style="color:#a94442">*</span>
                                                </label>
                                                <div class="input-group">


                                                    <input type="number" name="number"  value="<?php echo $customer['number']; ?>"
                                                        placeholder="Enter Customer Number" class="form-control  "
                                                        id="field_25" required
                                                        data-msg-required="Enter Customer Number" disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-mobile"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-3 ">
                                            <div class="form-group">
                                                <label for="field_12">
                                                    <span style="color:#000000">
                                                        Tele-Phone
                                                    </span>

                                                </label>
                                                <div class="input-group">


                                                    <input type="number" name="telephone"  value="<?php echo $customer['telephone']; ?>"
                                                        placeholder="Enter Tele-Phone" class="form-control  "
                                                        id="field_12" data-msg-required="This field is required" disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-phone"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-5 ">
                                            <div class="form-group">
                                                <label for="field_8">
                                                    <span style="color:#000000">
                                                        User Name
                                                    </span>

                                                    <span style="color:#a94442">*</span>
                                                </label>
                                                <div class="input-group">


                                                    <input type="email" name="ftthus"  value="<?php echo $customer['ftthus']; ?>"
                                                        placeholder="Enter FTTH User Name" class="form-control  "
                                                        id="field_8" data-rule-email="1"
                                                        data-msg-email="Enter FTTH User Name" required
                                                        data-msg-required="Enter FTTH User Name" disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-5 ">
                                            <div class="form-group">
                                                <label for="field_7">
                                                    <span style="color:#000000">
                                                        Password
                                                    </span>

                                                    <span style="color:#a94442">*</span>
                                                </label>
                                                <div class="input-group">


                                                    <input type="text" name="ftthps"  value="<?php echo $customer['ftthps']; ?>"
                                                        placeholder="Enter FTTH Password" class="form-control  "
                                                        id="field_7" required data-msg-required="Enter Password" disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-lock"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-2 ">

                                            <div class="form-group">
                                                <label for="field_17">
                                                    <span style="color:#000000">Status</span>
                                                    <span style="color:#a94442">*</span>
                                                </label>

                                                <div class="input-group">
                                                    <select class="custom-select  " required
                                                        data-msg-required="This field is required" id="field_17"
                                                        name="status" disabled>
                                                       <option <?php if($customer['status'] == "Active"){ echo 'selected'; } ?>>
                                                            Active
                                                        </option>
                                                        <option <?php if($customer['status'] == "Inactive"){ echo 'selected'; } ?>>
                                                            Inactive
                                                        </option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-thumbs-up"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-2 ">
                                            <div class="form-group">
                                                <label for="field_26">
                                                    <span style="color:#000000">
                                                        VLan
                                                    </span>

                                                    <span style="color:#a94442">*</span>
                                                </label>
                                                <div class="input-group">


                                                    <input type="number" name="vlan"  value="<?php echo $customer['vlan']; ?>"
                                                        placeholder="Enter VLan Id" class="form-control  " id="field_26"
                                                        required data-msg-required="Enter VLan Id" disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-table"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-2 ">

                                            <div class="form-group">
                                                <label for="field_15">
                                                    <span style="color:#000000">Pon</span>
                                                    <span style="color:#a94442">*</span>
                                                </label>

                                                <div class="input-group">
                                                    <select class="custom-select  " required  value="<?php echo $customer['pon']; ?>"
                                                        data-msg-required="This field is required" id="field_15"
                                                        name="pon" disabled>
                                                        <option <?php if($customer['pon'] == "1"){ echo 'selected'; } ?>>
                                                            1
                                                        </option >
                                                        <option <?php if($customer['pon'] == "2"){ echo 'selected'; } ?>>
                                                            2
                                                        </option>
                                                        <option><?php if($customer['pon'] == "3"){ echo 'selected'; } ?>
                                                            3
                                                        </option>
                                                        <option <?php if($customer['pon'] == "4"){ echo 'selected'; } ?>>
                                                            4
                                                        </option>
                                                        <option <?php if($customer['pon'] == "5"){ echo 'selected'; } ?>>
                                                            5
                                                        </option>
                                                        <option <?php if($customer['pon'] == "6"){ echo 'selected'; } ?>>
                                                            6
                                                        </option>
                                                        <option <?php if($customer['pon'] == "7"){ echo 'selected'; } ?>>
                                                            7
                                                        </option>
                                                        <option <?php if($customer['pon'] == "8"){ echo 'selected'; } ?>>
                                                            8
                                                        </option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-hashtag"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-2 ">
                                            <div class="form-group">
                                                <label for="field_14">
                                                    <span style="color:#000000">
                                                        Port
                                                    </span>

                                                    <span style="color:#a94442">*</span>
                                                </label>
                                                <div class="input-group">


                                                    <input type="number" name="port"  value="<?php echo $customer['port']; ?>"
                                                        placeholder="Port Number" class="form-control  " id="field_14"
                                                        required data-msg-required="Enter Port Number"disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-podcast"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-4 ">
                                            <div class="form-group">
                                                <label for="field_23">
                                                    <span style="color:#000000">
                                                        Mac Adress
                                                    </span>

                                                </label>
                                                <div class="input-group">


                                                    <input type="text" name="macid"  value="<?php echo $customer['macid']; ?>"
                                                        placeholder="Enter Mac Adress" class="form-control  "
                                                        id="field_23" data-msg-required="This field is required" disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-address-card"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-2 ">
                                            <div class="form-group">
                                                <label for="field_22">
                                                    <span style="color:#000000">
                                                        Plan
                                                    </span>

                                                    <span style="color:#a94442">*</span>
                                                </label>
                                                <div class="input-group">


                                                    <input type="text" name="plan" placeholder="Enter Plan"  value="<?php echo $customer['plan']; ?>"
                                                        class="form-control  " id="field_22" required
                                                        data-msg-required="Enter Plan">

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-rupee-sign"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" col-md-12 ">
                                            <hr style="
                                                    padding-top: 1px;
                                                                            padding-bottom:1px;
                                                                            border-top:1px solid #0a0a0a;
                        ">
                                        </div>
                                        <div class=" col-md-4 ">

                                            <div class="form-group">
                                                <label for="field_19">
                                                    <span style="color:#000000">Operator</span>
                                                    <span style="color:#a94442">*</span>
                                                </label>

                                                <div class="input-group">
                                                    <select class="custom-select  " required  value=""
                                                        data-msg-required="This field is required" id="field_19"
                                                        name="operator" disabled> 
                                                        <option  value = "Ananthi" <?php if($customer['operator'] == "Ananthi"){ echo 'selected'; } ?>>
                                                            Ananthi
                                                        </option>
                                                        <option  value = "MyilSamy"  <?php if($customer['operator'] == "MyilSamy"){ echo 'selected'; } ?>>
                                                            MyilSamy
                                                        </option>
                                                        <option value = "NemanthSamy"  <?php if($customer['operator'] == "NemanthSamy"){ echo 'selected'; } ?>>
                                                            NemanthSamy
                                                        </option>
                                                        <option value = "Ranjani"  <?php if($customer['operator'] == "Ranjani"){ echo 'selected'; } ?>>
                                                            Ranjani
                                                        </option>
                                                        <option value = "ThangaMuthu"  <?php if($customer['operator'] == "ThangaMuthu"){ echo 'selected'; } ?>>
                                                            ThangaMuthu
                                                        </option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-users"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-4 ">
                                            <div class="form-group">
                                                <label for="field_20">
                                                    <span style="color:#000000">
                                                        Connection Data
                                                    </span>
                                                    <span style="color:#a94442">*</span>
                                                </label>
                                                <div class="input-group date" id="field_21" data-target-input="nearest">
                                                    <input type="text" name="connectiondate" name="date"  value="<?php echo $customer['connectiondate']; ?>"
                                                        data-toggle="datetimepicker" id="field_21"
                                                        class="form-control datetimepicker-input " readonly
                                                        data-target="#field_21" required
                                                        data-msg-required="This field is required" disabled>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" data-target="#field_21"
                                                            data-toggle="datetimepicker">
                                                            <i class="fas fa-calendar"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-md-3 ">
                                            <div class="form-group">
                                                <label for="field_24">
                                                    <span style="color:#000000">
                                                        Commision Amount
                                                    </span>

                                                </label>
                                                <div class="input-group">


                                                    <input type="text" name="commisionamount"  value="<?php echo $customer['commisionamount']; ?>"
                                                        placeholder="Enter Amount" class="form-control  " id="field_24"
                                                        data-msg-required="This field is required" disabled>

                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-rupee-sign"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn float-right  btn-primary"
                                       data-btn_text="Submit">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- reCaptcha -->
    <script src="//www.google.com/recaptcha/api.js?v=395" async defer></script>

    <script type="text/javascript">
        if (typeof jQuery == 'undefined') {
            document.write(
                '<script src="//code.jquery.com/jquery-3.4.1.min.js?v=395" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></' +
                'script>');
        }
    </script>

    <!-- Bootstrap Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js?v=395"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js?v=395"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js?v=395"></script>
    <script src="//cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js?v=395"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js?v=395"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/rangeslider.js/2.3.2/rangeslider.min.js?v=395">
    </script>
    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js?v=395">
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js?v=395">
    </script>

    <script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.10/js/bootstrap-select.min.js?v=395"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.min.js?v=395">
    </script>

    <!-- Boostrap star rating -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/star-rating.min.js?v=395"
        type="text/javascript"></script>
    <!-- if you need to use a theme, then include the theme Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/themes/krajee-svg/theme.js?v=395">
    </script>
    <!-- optionally if you need translation for your language then include locale file as mentioned below -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.6/js/locales/<lang>.js"></script> -->
    <!-- signature pad (https://github.com/szimek/signature_pad)-->
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js?v=395"></script>
    <script>
                    $('#field_20').datetimepicker({
                icons: {
                    time: 'far fa-clock',
                },
                format: 'DD-MM-YYYY',
                showClear: true,
                ignoreReadonly: true,
                defaultDate: $("input#field_20").data(moment())
            });
    </script>
</body>

</html>
