<?php require('header.php') ?>
<section>
    <!-- end full-header -->
    <section class="sub-header">
        <h5 class="page-title">CONTACT</h5>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><span class="active">Contact</span></li>
        </ul>
    </section>
    <!-- end sub-header -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="section-title"><span>01</span>ADDRESS INFOS</h4>
                </div>
                <!-- end col-12 -->
                <!-- end col-4 -->
                <div class="col-xs-12">


                    <div class="column">
                        
                        <!-- end left-side -->
                        <div class="right-side">
                            <form id="contact" name="contact" method="post">
                                <div class="form-group">
                                    <label>Your name</label>
                                    <input type="text" name="name" id="name" required>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <label>Your e-mail</label>
                                    <input type="text" name="email" id="email" required>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <label>What about ?</label>
                                    <select class="selectpicker" name="subject" id="subject">
                                        <option>Marketting Department</option>
                                    </select>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <label>Your message</label>
                                    <textarea name="message" id="message" required></textarea>
                                </div>
                                <!-- end form-group -->
                                <div class="form-group">
                                    <button id="submit" type="submit" name="submit">SUBMIT</button>
                                </div>
                                <!-- end form-group -->
                            </form>
                            <div id="success" class="alert alert-success" role="alert">
                                <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
                            </div>
                            <!-- end success -->
                            <div id="error" class="alert alert-danger" role="alert">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <!-- end error -->
                        </div>
                        <!-- end right-side -->
                    </div>
                    <!-- end column -->

                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end contact -->
    <div></div>

</section>

<?php require('footer.php') ?>