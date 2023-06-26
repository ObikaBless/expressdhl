<?php require('header.php') ?>

<section>
    <style>
        .tracking_form_wrapper_main {
            height: 70vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: rgb(223, 223, 223);
        }

        .more_tracking_mini_box {
            height: 70px;
            width: 80%;

            display: flex;

        }

        .more_tracking_mini_box input {
            width: 80%;
            height: 100%;
            padding-left: 10px;
        }

        .more_tracking_mini_box button {
            width: 20%;
            height: 100%;
            background-color: #413686;
            color: white;
        }

        .tracking_form_wrapper_main h1 {
            align-items: left;
            width: 80%;
        }
    </style>



    <form action="track/trackingInformation.php">
        <div class="tracking_form_wrapper_main">
            <h1>Track Your Shipment</h1>
            <div class="more_tracking_mini_box">
                <input type="text" name="trackingID">
                <button type="submit">Track</button>
    </form>
</section>
<?php require('footer.php') ?>