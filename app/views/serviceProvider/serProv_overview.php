<?php require APPROOT . "/views/inc/header.php" ?>


<body class="layout-template-1">

    <?php
    $selectedMain = "Overview";
    require APPROOT . "/views/serviceProvider/serProv_sideNav.php"
    ?>

    <?php
    $title = "Overview";

    require APPROOT . "/views/inc/headerBar.php"
    ?>

    <!--Content-->
    <div class="content serprov">
        <!--sub-container1-card 1-->
        <div class="container1-card card">
            <div class="sub-container1-card-content">
                <div class="sub-container1-card-title">Completed</div>
                <div class="sub-container1-card-count">5</div>
            </div>
        </div>
        <!--End sub-container1-card  1-->
        <!--sub-container2-->
        <div class="sub-content-container2">
            <div class="topic">
                <h2>Upcoming reservations today</h2>
            </div>
            <!--sub-container2-card-->
            <div class="reservationlist">
                <div class="scroll-area">
                    <?php foreach ($data['reservationData'] as $reservation) : ?>
                        <div class="sub-container2-card">
                            <!--sub-container2-card-timetype-->
                            <div class="sub-container2-card-ts">
                                <span class="sub-container2-card-time"><?php echo $reservation->startTime . " - " . $reservation->endTime; ?></span>
                                <span class="sub-container2-card-service"><?php echo $reservation->name; ?></span>
                            </div>
                            <!--sub-container2-card-timetype-->
                            <div class="sub-container2-card-name">
                                <span class="sub-container2-card-cstname">Customer</span>
                                <span class="name"><?php echo $reservation->fName . " " . $reservation->lName; ?></span>
                            </div>
                            <div class="confbtn">
                                <?php if ($reservation->status == 1) : ?>
                                    <div class="confirm-status yellow">
                                        <span>Not Confirmed</span>
                                    </div>
                                <?php elseif ($reservation->status == 2) : ?>
                                    <div class="confirm-status blue">
                                        <span>Confirmed</span>
                                    </div>
                                <?php elseif ($reservation->status == 4) : ?>
                                    <div class="confirm-status green">
                                        <span>Completed</span>
                                    </div>
                                <?php elseif ($reservation->status == 5) : ?>
                                    <div class="confirm-status gray">
                                        <span>Recalled</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="sub-container2-card-link">
                                <button class="btnOpen btnResMoreInfo" data-id="<?php echo $reservation->reservationID; ?>">More
                                    Info
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

        <!-- modal -->
        <div class="modal-container reservation-more-info">
            <div class="modal-box">
                <form>

                    <h1 class="header">Reservation details</h1>
                    <div class="modelcontent">

                        <div class="modaldetails">
                            <div class="modaldetails-name">

                                <span class="service"></span><br>
                                <span class="name cust"></span>
                            </div>
                            <div class="modaldetails-status green">

                                <div class="moredetails-confirm-status" id="resStatus">
                                    <span class="spn-moredetails-confirm-status"></span>
                                </div>

                            </div>

                        </div>
                        <div class="modaldatetime">
                            <div class="modaldatetime-time">
                                <span class="serviceTime"></span><br>
                                <span class="duration"></span>
                            </div>
                            <div class="modaldatetime-date">

                                <span class="month-day"></span><br>
                                <span class="year"></span>
                            </div>
                        </div>

                        <div class="Reservationnote-cust">
                            <div class="Reservationnote-name">
                                <span>Reservation Note</span>
                            </div>
                            <div class="Reservationnote-note">
                                <span class="Reservationnote"></span>

                            </div>
                        </div>
                        <div class="Reservationnote">
                            <div class="Reservationnote-name">
                                <span>Customer Note</span>
                            </div>
                            <div class="Reservationnote-note editable" contenteditable="true">
                                <textarea class="customerNoteSection" name="customerNote" value=""></textarea>
                            </div>

                        </div>
                        <div class="savechange">
                            <button class="proceedBtn" value="saveChanges" onclick="editCustNote(this);">Save Changes</button>

                        </div>

                        <div class="modalbutton-more">
                            <div class="more-details-modalbtnsection">
                                <button class="btn modelbtnClose normal">Close</button>




                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
        <!-- end modal -->


        <!-- end modal -->


    </div>
    </div>

    <!--End Content-->
    <script src="<?php echo URLROOT ?>/public/js/fetchRequests/reservationMoreview.js"></script>
    <?php require APPROOT . "/views/inc/footer.php" ?>