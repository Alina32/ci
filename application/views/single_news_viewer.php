<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
   <div class="spacer-60"></div>
    <div class="container">
        <div class="row">
            <!-- Blog Section -->
            <section id="blog_sec" class="col-md-8">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-image">
                            <img class="img-responsive img-hover" src="http://placehold.it/800x450" alt="">
                        </div>
                        <!-- <pre><?php print_r($single_news) ?></pre> -->
                        <div class="panel-body">
                            <div class="blog_feat">
                                <p class="area"><i class="fa fa-home"></i> By <?=$single_news[0]['author']?> <span> :: </span>
                                </p>
                                <p class="bedrom"><i class="fa fa-comment"></i> Comments (3) <span> :: </span>
                                </p>
                                <p class="bedrom"><i class="fa fa-folder-open"></i> Real Estate <span> :: </span> </p>
                                <p class="bedrom"><i class="fa fa-clock-o"></i> <?=$single_news[0]['date']?> </p>
                            </div>
                            <h3 class="sec_titl"><?=$single_news[0]['title']?></h3>
                            <p class="sec_desc"><?=$single_news[0]['description']?></p>
                            <p class="blo_tags">
                                <span>Tags:</span>
                                <a href="#"> Themeforest </a>,<a href="#"> Development </a>, <a href="#"> HTML </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="spacer-30"></div>
                <!-- Comment Section -->
                <div class="row commen_sec">
                    <div class="titl_sec">
                        <div class="col-lg-12">
                            <h3 class="main_titl text-left">
                    Comments (3)
                </h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 comm_sec">
                        <div class="col-md-2">
                            <img class="img-responsive img-hover" src="http://placehold.it/100x100" alt="" />
                        </div>
                        <div class="col-md-10">
                            <h3 class="sec_titl">
                         Rebecca Dee
                    </h3>
                            <p class="comm_dtd">
                                13 April, 2015 at 14:00 pm
                            </p>

                            <p class="sec_desc">
                                Cardigan plaid Schlitz, put a bird on it selfies biodiesel authentic PBR shabby chic.
                            </p>
                            <a href="#" class="comm_repl"> Reply </a>
                        </div>
                    </div>
                    <div class="col-md-12 comm_sec">
                        <div class="col-md-2"> </div>
                        <div class="col-md-2">
                            <img class="img-responsive img-hover" src="http://placehold.it/100x100" alt="" />
                        </div>
                        <div class="col-md-8">
                            <h3 class="sec_titl">
                         Ingrid Hoch
                    </h3>
                            <p class="comm_dtd">
                                13 April, 2015 at 14:00 pm
                            </p>

                            <p class="sec_desc">
                                Etsy small batch plaid chillwave. Chambray iPhone.
                            </p>
                            <a href="#" class="comm_repl"> Reply </a>
                        </div>
                    </div>
                    <div class="col-md-12 comm_sec">
                        <div class="col-md-2">
                            <img class="img-responsive img-hover" src="http://placehold.it/100x100" alt="" />
                        </div>
                        <div class="col-md-10">
                            <h3 class="sec_titl">
                         Doreen Ginyard
                    </h3>
                            <p class="comm_dtd">
                                13 April, 2015 at 14:00 pm
                            </p>

                            <p class="sec_desc">
                                IPhone selvage lumbersexual readymade lomo
                            </p>
                            <a href="#" class="comm_repl"> Reply </a>
                        </div>
                    </div>

                    <div class="col-md-12 comm_sec">
                        <div class="col-md-2">
                            <img class="img-responsive img-hover" src="http://placehold.it/100x100" alt="" />
                        </div>
                        <div class="col-md-10">
                            <h3 class="sec_titl">
                         Jack Milton
                    </h3>
                            <p class="comm_dtd">
                                13 April, 2015 at 14:00 pm
                            </p>
                            <p class="sec_desc">
                                Roof party Pinterest polaroid mustache craft beer. Street art four loko disrupt selfies
                            </p>
                            <a href="#" class="comm_repl"> Reply </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="spacer-30"></div>
                <!-- Comment Form -->
                <div class="row commen_frm">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                                leave a comment
                            </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 cont_frm">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group col-md-6 first">
                                <div class="controls">
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." placeholder="Your Name">
                                    <div class="in_ico">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter an email address." placeholder="Email Address">
                                    <div class="in_ico">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls">
                                    <input type="number" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." placeholder="Your Phone">
                                    <div class="in_ico">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p class="help-block"></p>
                                </div>

                                <div class="controls last">
                                    <input type="text" class="form-control" id="web" required data-validation-required-message="Please enter your website." placeholder="Website">
                                    <div class="in_ico">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <p class="help-block"></p>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                            <div class="control-group form-group col-md-6">
                                <div class="controls">
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" placeholder="Message"></textarea>
                                    <div class="in_ico">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                            <div class="clearfix"></div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                        </form>
                    </div>
                </div>
                <!-- /.row -->


            </section>

            <!-- Sidebar Section -->
            <section id="sidebar" class="col-md-4">
                <!-- Search Form -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="srch_frm">
                            <h3>Real Estate Search</h3>
                            <form name="sentMessage" id="contact_Form" novalidate>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Keyword </label>
                                        <input type="text" class="form-control" id="keyword" required data-validation-required-message="Please enter a keyword." placeholder="Any keyword">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Location </label>
                                        <select name="State" class="form-control" required data-validation-required-message="Please select a state.">
                                            <option value="" selected="selected">Any Location</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls col-md-6 first">
                                        <label>Type </label>
                                        <select name="Type" class="form-control" required data-validation-required-message="Please select a type.">
                                            <option value="" selected="selected">Industrial</option>
                                            <option value="2">Commercial</option>
                                            <option value="3">Household</option>
                                        </select>
                                    </div>
                                    <div class="controls col-md-6">
                                        <label>Actions </label>
                                        <select name="Actions" class="form-control" required data-validation-required-message="Please select a Actions.">
                                            <option value="" selected="selected">For Rent</option>
                                            <option value="2">For Sale</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="control-group form-group">
                                    <div class="controls col-md-6 first">
                                        <label>Min. Price </label>
                                        <select name="min-price" class="form-control" required data-validation-required-message="Please select a Min. Price.">
                                            <option value="" selected="selected">$50</option>
                                            <option value="2">$100</option>
                                            <option value="3">$200</option>
                                            <option value="3">$300</option>
                                            <option value="3">$400</option>
                                            <option value="3">$500</option>
                                            <option value="3">$700</option>
                                            <option value="3">$800</option>
                                            <option value="3">$900</option>
                                            <option value="3">$1000</option>
                                            <option value="3">$1500</option>
                                            <option value="3">$2000</option>
                                            <option value="3">$2500</option>
                                        </select>
                                    </div>
                                    <div class="controls col-md-6">
                                        <label>Max. Price </label>
                                        <select name="max-price" class="form-control" required data-validation-required-message="Please select a Max. Price.">
                                            <option value="" selected="selected">$200</option>
                                            <option value="2">$300</option>
                                            <option value="3">$400</option>
                                            <option value="3">$500</option>
                                            <option value="3">$600</option>
                                            <option value="3">$700</option>
                                            <option value="3">$800</option>
                                            <option value="3">$900</option>
                                            <option value="3">$1000</option>
                                            <option value="3">$1500</option>
                                            <option value="3">$2000</option>
                                            <option value="3">$2500</option>
                                            <option value="3">$3000</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <div id="success4"></div>
                                <!-- For success/fail messages -->
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                <!-- Categories -->
                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                    Categories
                </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="categ_info">

                        <div class="info_sec first">
                            <div class="col-md-6">
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    <p class="infos">Articles (3) </p>
                                </a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    <p class="infos">Real Estate (8) </p>
                                </a>
                            </div>
                        </div>

                        <div class="info_sec">
                            <div class="col-md-6">
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    <p class="infos">Branding (4) </p>
                                </a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    <p class="infos">WordPress (2) </p>
                                </a>
                            </div>
                        </div>

                        <div class="info_sec">
                            <div class="col-md-6">
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    <p class="infos">Architecture (12) </p>
                                </a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="#">
                                    <i class="fa fa-long-arrow-right"></i>
                                    <p class="infos">Resposnive (6) </p>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /.row -->


                <div class="spacer-30"></div>
                <!-- Featured Properties -->
                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                                Featured Properties
                            </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="side_feat">
                        <div class="panel panel-default">
                            <div class="panel-image col-md-3">
                                <a href="property_details.html"> <img class="img-responsive img-hover" src="http://placehold.it/100x100" alt=""> </a>
                            </div>

                            <div class="panel-body col-md-9">
                                <h3 class="sec_titl">
                                    <a href="property_details.html"> Nulla sed dolor vestibu porttitor erat ultricies </a>                         
                                </h3>

                                <div class="prop_feat">
                                    <p class="area"><i class="fa fa-home"></i> 3000 Sq Ft</p>
                                    <p class="bedrom"><i class="fa fa-car"></i> 1 Garage</p>
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-image col-md-3">
                                <a href="property_details.html"> <img class="img-responsive img-hover" src="http://placehold.it/100x100" alt=""> </a>

                            </div>

                            <div class="panel-body col-md-9">
                                <h3 class="sec_titl">
                                    <a href="property_details.html">Nulla sed dolor vestibu porttitor erat ultricies </a>                        
                                </h3>

                                <div class="prop_feat">
                                    <p class="area"><i class="fa fa-home"></i> 3000 Sq Ft</p>
                                    <p class="bedrom"><i class="fa fa-car"></i> 1 Garage</p>
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-image col-md-3">
                                <a href="property_details.html"> <img class="img-responsive img-hover" src="http://placehold.it/100x100" alt=""> </a>

                            </div>

                            <div class="panel-body col-md-9">
                                <h3 class="sec_titl">
                                    <a href="property_details.html"> Nulla sed dolor vestibu porttitor erat ultricies  </a>                       
                                </h3>

                                <div class="prop_feat">
                                    <p class="area"><i class="fa fa-home"></i> 3000 Sq Ft</p>
                                    <p class="bedrom"><i class="fa fa-car"></i> 1 Garage</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                <!-- Tags -->
                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                    Tags
                </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="tags_sec">

                        <div class="tags_box first">
                            <a href="#"> Modern </a>
                        </div>

                        <div class="tags_box">
                            <a href="#"> Amazing</a>
                        </div>

                        <div class="tags_box">
                            <a href="#"> Responsive</a>
                        </div>

                        <div class="tags_box first">
                            <a href="#"> Development</a>
                        </div>

                        <div class="tags_box">
                            <a href="#"> Rent</a>
                        </div>

                        <div class="tags_box">
                            <a href="#"> Properties</a>
                        </div>

                        <div class="tags_box first">
                            <a href="#"> Themeforest</a>
                        </div>

                        <div class="tags_box">
                            <a href="#"> Development</a>
                        </div>

                        <div class="tags_box">
                            <a href="#"> HTML  </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
            </section>
            <div class="spacer-60"></div>

        </div>
    </div>
   