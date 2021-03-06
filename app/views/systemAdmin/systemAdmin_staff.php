<?php require APPROOT . "/views/inc/header.php" ?>


<body class="layout-template-1">

    <?php
    $selectedMain = "CreateAccount";
    $selectedSub = "Staff";
    require APPROOT . "/views/systemAdmin/systemAdmin_sideNav.php"
    ?>

    <?php
    $title = "Create Account";
    require APPROOT . "/views/inc/headerBar.php"
    ?>

    <!--Content-->
    <div class="content admin">
        <div class="formadmin">

            <div class="ownAddstaffContainer contentBox">
                <div class="ownAddStaff_Formheading">
                    <h1>Staff Account</h1>
                </div>

                <form action="<?php echo URLROOT; ?>/staff/addStaff" method="post" enctype="multipart/form-data">
                    <div class="ownAddstaff_formWrapper">
                        <!------------------------------ Basic Info Starts------------------------------------------------------------------------------->

                        <div class="ownAddstaffBasicinfo">
                            <h3 class="ownAddstaffBasicinfoSubHead">Basic Info</h3> <br>
                            <!------------------ maingrid1 start --------------------------------------------------------->
                            <div class="ownAddstaffMaingrid1">

                                <div class="ownAddstaffFormGroupImage">
                                    <div class="ownAddstaffBasicinfoFilesubBtn">
                                        <label for="ownAddstaffBasicinfoImagesub" class="ownAddstaffBasicinfoImagewrapper">
                                            <input type="file" accept="image/*" name="staffimage" id="ownAddstaffBasicinfoImagesub" onchange="loadFile(event)" />
                                            <?php if ($data['staffimagePath'] == '' || $data['staffimagePath_error']) : ?>
                                                <img src="<?php echo URLROOT ?>/public/icons/AddImg.png" class="ownAddstaffBasicinfoIcon" id='profileImg' height="160px" width="160px" borderRadious='50%'> <br>

                                            <?php elseif ($data['staffimagePath']) : ?>
                                                <img src="<?php echo URLROOT ?>/public/imgs/staffImgs/<?php echo $data['staffimagePath']; ?> " class="ownAddstaffBasicinfoIcon" id='profileImg' height="160px" width="160px" borderRadious='50%'> <br>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                    <span class="error"><?php echo $data['staffimagePath_error']; ?></span>
                                </div>

                                <div class="ownAddstaffFormGroupFname">
                                    <label class="ownAddstaffLabels">First Name</label>
                                    <input type="text" name="staffFname" id="ownAddstaffBasicinfoFirstname" placeholder="Your first name here" value="<?php echo $data['staffFname']; ?>">
                                    <span class="error"><?php echo $data['staffFname_error']; ?></span>
                                </div>
                                <div class="ownAddstaffFormGroupLname">
                                    <label class="ownAddstaffLabels">Last Name</label>
                                    <input type="text" name="staffLname" id="ownAddstaffLastname" placeholder="Your last name here" value="<?php echo $data['staffLname']; ?>">
                                    <span class="error"><?php echo $data['staffLname_error']; ?></span>
                                </div>


                                <div class="ownAddstaffFormGroupRadio">
                                    <label class="ownAddstaffLabels">Gender</label>
                                    <div class="ownAddstaffBasicinfoRadiowrapper">
                                        <div class="option">
                                            <div class="labelname">
                                                <label class="option1" for="option1"> Male</label>
                                            </div>
                                            <div class="inputdiv">
                                                <input type="radio" class="genderMale" name="gender" id="option-1" value="M" <?php if ($data['gender'] == 'M') echo 'checked'; ?>>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="labelname">
                                                <label for="option2">Female</label>
                                            </div>
                                            <div class="inputdiv"> <input type="radio" class="genderFemale" name="gender" id="option-2" value="F" <?php if ($data['gender'] == 'F') echo 'checked'; ?>></div>

                                        </div>
                                    </div>
                                    <span class="error"><?php echo $data['gender_error']; ?></span>

                                </div>
                                <div class="ownAddstaffFormGroupNIC">
                                    <label class="ownAddstaffLabels">NIC</label>
                                    <input type="text" name="staffNIC" id="NIC" class="staffNIC" placeholder="Your NIC here" value="<?php echo $data['staffNIC']; ?>">
                                    <span class="error"><?php echo $data['staffNIC_error']; ?></span>
                                </div>
                            </div>
                            <!------------------ maingrid1 end ----------------------------------------------------------->
                            <!------------------ maingrid2 start --------------------------------------------------------->
                            <div class="ownAddstaffMaingrid2">
                                <div class="ownAddstaffFormGroupDOB">
                                    <label class="ownAddstaffLabels"> Date Of Birth</label>
                                    <input type="date" name="staffDOB" class="Date" value="<?php echo $data['staffDOB']; ?>">
                                    <span class="error"><?php echo $data['staffDOB_error']; ?></span>
                                </div>
                                <div class="ownAddstaffFormGroupStype">
                                    <label class="ownAddstaffLabels">Staff Type</label>
                                    <select name="staffType" class="dropdownselectbox">
                                        <option class="unbold" value="0" option selected="true" disabled="disabled">Select</option>
                                        <option value=5 <?php if ($data['staffType'] == 5) echo 'selected'; ?>>Service Provider</option>
                                        <option value=4 <?php if ($data['staffType'] == 4) echo 'selected'; ?>>Receptionist</option>
                                        <option value=3 <?php if ($data['staffType'] == 3) echo 'selected'; ?>>Manager</option>
                                        <option value=2 <?php if ($data['staffType'] == 2) echo 'selected'; ?>>Owner</option>
                                    </select>
                                    <span class="error"><?php echo $data['staffType_error']; ?></span>
                                </div>
                            </div>
                        </div>
                        <!------------------ maingrid2 ends --------------------------------------------------------------->
                        <!----------------------------------------------- Basic Info ends ---------------------------------------------------------------------------->

                        <div class="ownAddstaffLineContainer">
                            <div class="ownAddstaffLines">
                            </div>
                        </div>


                        <!------------------------------------------ Contact Details starts -------------------------------------------------------------------------->
                        <div class="ownAddstaffContactdetails">
                            <h3 class="subhead">Contact Details</h3> <br>
                            <!------------------ maingrid3 start ---------------------------------------------------------->
                            <div class="ownAddstaffMaingrid3">
                                <div class="ownAddstaffFormGroupADD">
                                    <label class="ownAddstaffLabels">Address</label>
                                    <textarea class="homeAdd" name="staffHomeAdd" rows="4" cols="50" placeholder="Your address here" value="<?php echo $data['staffHomeAdd']; ?>"><?php if ($data['staffHomeAdd'] == $data['staffHomeAddTyped']) echo $data['staffHomeAdd']; ?></textarea>
                                    <span class="error"><?php echo $data['staffHomeAdd_error']; ?></span>
                                </div>
                            </div>
                            <!------------------ maingrid3 ends ---------------------------------------------------------->
                            <!------------------ maingrid4 start ---------------------------------------------------------->
                            <div class="ownAddstaffMaingrid4">
                                <div class="ownAddstaffFormGroupTP">
                                    <label class="ownAddstaffLabels">Contact Number</label>
                                    <input type="text" name="staffMobileNo" id="contactnum" placeholder="Your contact number here" value="<?php echo $data['staffMobileNo']; ?>">
                                    <span class="error"><?php echo $data['staffMobileNo_error']; ?></span>
                                </div>
                                <div class="ownAddstaffFormGroupMAIL">
                                    <label class="ownAddstaffLabels">E-mail</label>
                                    <input type="text" name="staffEmail" id="email" placeholder="Your email here" value="<?php echo $data['staffEmail']; ?>">
                                    <span class="error"><?php echo $data['staffEmail_error']; ?></span>
                                </div>
                            </div>
                        </div>
                        <!--------------------------- maingrid4 end --------------------------------------------------------->
                        <!---------------------------------------- Contact Details ends ------------------------------------------------------------------------------>

                        <div class="ownAddstaffLineContainer">
                            <div class="ownAddstaffLines">
                            </div>
                        </div>

                        <!----------------------------------------- Bank Details starts ------------------------------------------------------------------------------>
                        <div class="ownAddstaffBankdetails">
                            <h3 class="subhead">Bank Details</h3> <br>
                            <!------------------ maingrid5 start ---------------------------------------------------------->
                            <div class="ownAddstaffMaingrid5">
                                <div class="ownAddstaffFormGroupACCNUM">
                                    <label class="ownAddstaffLabels">Account Number</label>
                                    <input type="text" name="staffAccNum" id="accnum" placeholder="Your account number here" value="<?php echo $data['staffAccNum']; ?>">
                                    <span class="error"><?php echo $data['staffAccNum_error']; ?></span>
                                </div>
                                <div class="ownAddstaffFormGroupACCNAME">
                                    <label class="ownAddstaffLabels">Account Holders Name</label>
                                    <input type="text" name="staffAccHold" id="acchold" placeholder="Your account holders name here" value="<?php echo $data['staffAccHold']; ?>">
                                    <span class="error"><?php echo $data['staffAccHold_error']; ?></span>
                                </div>
                                <div class="ownAddstaffFormGroupBankNAME">
                                    <label class="ownAddstaffLabels">Bank Name</label>
                                    <input type="text" name="staffAccBank" id="accbank" placeholder="Your bank name here" value="<?php echo $data['staffAccBank']; ?>">
                                    <span class="error"><?php echo $data['staffAccBank_error']; ?></span>
                                </div>
                                <div class="ownAddstaffFormGroupBranchNAME">
                                    <label class="ownAddstaffLabels">Branch Name</label>
                                    <input type="text" name="staffAccBranch" id="accbranch" placeholder="Your branch name here" value="<?php echo $data['staffAccBranch']; ?>" maxlength="40">
                                    <span class="error"><?php echo $data['staffAccBranch_error']; ?></span>
                                </div>
                            </div>
                            <!------------------ maingrid5 end ---------------------------------------------------------------->
                            <!----------------------------------------- Bank Details ends --------------------------------------------------------------------------->
                        </div>
                    </div>
                    <!----------------------------------------- form submit button starts ------------------------------------------------------------------------>
                    <div class="ownAddstaffButton">
                        <button type="submit" class="ownAddstaffbutton btn btn-filled btn-theme-purple">Save</button>
                    </div>
                    <!----------------------------------------- form submit button ends -------------------------------------------------------------------------->
                </form>

            </div>
        </div>



    </div>
    <!--End Content-->
    <script>
        console.log(ownAddstaffBasicinfoImagesub);
        ownAddstaffBasicinfoImagesub.onchange = evt => {
            const [file] = ownAddstaffBasicinfoImagesub.files
            if (file) {
                profileImg.src = URL.createObjectURL(file)
            }
        }
    </script>
    <script src="<?php echo URLROOT ?>/public/js/ownAutoFillDOB.js"></script>
    <?php require APPROOT . "/views/inc/footer.php" ?>