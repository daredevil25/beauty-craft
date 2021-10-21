<?php require APPROOT . "/views/inc/header.php" ?>


<body class="layout-template-1">

    <?php
    $selectedMain = "Reservations";
    require APPROOT . "/views/serviceProvider/serProv_sideNav.php"
    ?>

    <?php
    $title = "Reservations";
    require APPROOT . "/views/inc/headerBar.php"
    ?>



    <!--Content-->
    <!--Content-->
    <div class="content serprov">
        <!--sub-container1-card 1-->
        <div class="container1-card">
            <div class="sub-container1-card-content res">
                <div class="mainsection">

                    <form>

                        <a href="#" class="previous round">&#8249;</a>
                        <input class="selecteddate" type="date" id="date_input" value="2021-10-21" />
                        <a href="#" class="next round">&#8250;</a>
                        <!-- <input type="button" value="Get Weekday" onclick="day_of_week()" /> -->
                    </form>
                    <div class="day" id="output">Thursday</div>
                </div>
            </div>
        </div>
        <!--End sub-container1-card  1-->
        <!--sub-container2-->
        <div class="sub-content-container2">
            <div class="topic">
                <h2> Reservations List</h2>
            </div>
            <!--sub-container2-card-->
            <div class="reservationlist">
                <div class="scroll-area">


                    <div class="sub-container2-card">
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-ts">
                            <span class="sub-container2-card-time"> 8.30 - 9.00 </span>
                            <span class="sub-container2-card-service">Meckup</span>
                        </div>
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-name">
                            <span class="sub-container2-card-cstname">Customer</span>
                            <span class="name">Sanjana Rajapaksha</span>
                        </div>
                        <div class="confbtn">
                            <div class="confirm-status green">
                                <span>Confirmed</span>
                            </div>
                        </div>
                        <div class="sub-container2-card-link">
                            <button class="btnOpen btnResMoreInfo" type="button">More Info</button>
                        </div>
                    </div>
                    <div class="sub-container2-card">
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-ts">
                            <span class="sub-container2-card-time"> 10.30 - 11.00 </span>
                            <span class="sub-container2-card-service">Hair rebonding</span>
                        </div>
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-name">
                            <span class="sub-container2-card-cstname">Customer</span>
                            <span class="name">Hashini Gamage</span>
                        </div>
                        <div class="confbtn">
                            <div class="confirm-status blue">
                                <span>Not Confirmed</span>
                            </div>
                        </div>
                        <div class="sub-container2-card-link">
                            <button class="btnOpen btnResMoreInfo" type="button">More Info</button>
                        </div>
                    </div>
                    <div class="sub-container2-card">
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-ts">
                            <span class="sub-container2-card-time"> 12.30 - 1.00 </span>
                            <span class="sub-container2-card-service">Hair extension</span>
                        </div>
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-name">
                            <span class="sub-container2-card-cstname">Customer</span>
                            <span class="name">Sarani Chethana</span>
                        </div>
                        <div class="confbtn">
                            <div class="confirm-status green">
                                <span>Confirmed</span>
                            </div>
                        </div>
                        <div class="sub-container2-card-link">
                            <button class="btnOpen btnResMoreInfo" type="button">More Info</button>
                        </div>
                    </div>
                    <div class="sub-container2-card">
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-ts">
                            <span class="sub-container2-card-time"> 1.15 - 1.45 </span>
                            <span class="sub-container2-card-service">Ladies hair cut</span>
                        </div>
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-name">
                            <span class="sub-container2-card-cstname">Customer</span>
                            <span class="name">Neluni Apsara</span>
                        </div>
                        <div class="confbtn">
                            <div class="confirm-status blue">
                                <span>Not Confirmed</span>
                            </div>
                        </div>
                        <div class="sub-container2-card-link">
                            <button class="btnOpen btnResMoreInfo" type="button">More Info</button>
                        </div>
                    </div>
                    <div class="sub-container2-card">
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-ts">
                            <span class="sub-container2-card-time"> 2.30 - 3.00 </span>
                            <span class="sub-container2-card-service">Ladies hair cut</span>
                        </div>
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-name">
                            <span class="sub-container2-card-cstname">Customer</span>
                            <span class="name">Kasuni Silva</span>
                        </div>
                        <div class="confbtn">
                            <div class="confirm-status green">
                                <span>Confirmed</span>
                            </div>
                        </div>
                        <div class="sub-container2-card-link">
                            <button class="btnOpen btnResMoreInfo" type="button">More Info</button>
                        </div>
                    </div>
                    <div class="sub-container2-card">
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-ts">
                            <span class="sub-container2-card-time"> 3.30 - 4.00 </span>
                            <span class="sub-container2-card-service">Ladies hair cut</span>
                        </div>
                        <!--sub-container2-card-timetype-->
                        <div class="sub-container2-card-name">
                            <span class="sub-container2-card-cstname">Customer</span>
                            <span class="name">Amasha Munasinghe</span>
                        </div>
                        <div class="confbtn">
                            <div class="confirm-status green">
                                <span>Confirmed</span>
                            </div>
                        </div>
                        <div class="sub-container2-card-link">
                            <button class="btnOpen btnResMoreInfo" type="button">More Info</button>
                        </div>
                    </div>

                    <!-- end web view -->
                </div>
                <!-- <div class="mobview">

                        End mobile sub-container2-card
                    </div> -->
                <!--End scroll area-->
            </div>
        </div>

        <!-- modal -->
        <div class="modal-container reservation-more-info">
            <div class="modal-box">
                <h1>Reservation details</h1>
                <div class="modelcontent">

                    <div class="modaldetails">
                        <div class="modaldetails-name">
                            <span class="service">Meckup</span><br>
                            <span class="name">Sanjana Rajapaksha</span>
                        </div>
                        <div class="modaldetails-status">
                            <div class="confirm-status green">
                                <span>Confirmed</span>
                            </div>
                        </div>
                    </div>
                    <div class="modaldatetime">
                        <div class="modaldatetime-time">
                            <span>8.30 - 9.00</span><br>
                            <span class="duration">25 mins</span>
                        </div>
                        <div class="modaldatetime-date">
                            <span>OCTOBER 21</span><br>
                            <span>2021</span>
                        </div>
                    </div>

                    <div class="Reservationnote-cust">
                        <div class="Reservationnote-name">
                            <span>Reservation Note</span>
                        </div>
                        <div class="Reservationnote-note">
                            <span>simple makeup for birthday party.</span>

                        </div>
                    </div>
                    <div class="Reservationnote">
                        <div class="Reservationnote-name">
                            <span>Customer Note</span>
                        </div>
                        <div class="Reservationnote-note editable" contenteditable="true">
                            <span>Cosmetic product No. s12II can provoke allergies.</span>
                        </div>

                    </div>
                    <div class="savechange">
                        <button>Save Changes</button>
                    </div>
                    <div class="modalbutton-more">
                        <div class="more-details-modalbtnsection">
                            <button class="btn btnClose normal">Close</button>

                            <button class="btnOpen btnResRecall button">Recall</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

        <div class="modal-container reservation-recall">
            <div class="modal-box addItems">
                <h1>Recall request</h1>
                <div class="modaldetails">
                    <div class="modaldetails-name">
                        <span class="service">Meckup</span><br>
                        <span class="name">Sanjana Rajapaksha</span>
                    </div>

                </div>
                <div class="modelcontent">
                    <div class="modaldatetime">
                        <div class="modaldatetime-time">
                            <span>8.30 - 9.00</span><br>

                        </div>
                        <div class="modaldatetime-date">
                            <span>OCTOBER 21</span><br>
                            <span>2021</span>
                        </div>
                    </div>

                    <div class="Reservationnote">
                        <div class="Reservationnote-name">
                            <span>Reason</span>
                        </div>
                        <div class="Reservationnote-note editable" contenteditable="true">
                            <span></span>
                        </div>

                    </div>
                    <div class="savechange">

                    </div>


                    <div class="modalbutton-more">
                        <div class="more-details-modalbtnsection">
                            <button class="btn btnClose new">Cancel</button>

                            <button class="btnOpen new" type="button">Proceed</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function day_of_week() {
            var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

            var d = document.getElementById('date_input').valueAsDate;
            var n = d.getDay()
            document.getElementById("output").innerHTML = weekday[n];
        }
    </script>

    <!--End Content-->

    <?php require APPROOT . "/views/inc/footer.php" ?>