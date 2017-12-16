    <div class="spacer-60"></div>
    <div class="container">
        <div class="row">
            <!-- Proerty Details Section -->
            <section id="prop_detal" class="col-md-8">
                <div class="row">
                    <div class="panel panel-default">
                       <!-- Proerty Slider Images -->
                        <div class="panel-image">
                            <ul id="prop_slid">
                                <li><img class="img-responsive" src="images/property/prop.png" alt="Property Slide Image">
                                </li>
                                <li><img class="img-responsive" src="images/property/prop.png" alt="Property Slide Image">
                                </li>
                                <li><img class="img-responsive" src="images/property/prop.png" alt="Property Slide Image">
                                </li>
                                <li><img class="img-responsive" src="images/property/prop.png" alt="Property Slide Image">
                                </li>
                                <li><img class="img-responsive" src="images/property/prop.png" alt="Property Slide Image">
                                </li>
                            </ul>
                        <!-- Proerty Slider Thumbnails -->    
                            <div class="col-md-12 rel_img">
                                <ul id="slid_nav">
                                    <li>
                                        <a data-slide-index="0" href=""><img class="img-responsive img-hover" src="images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href=""><img class="img-responsive img-hover" src="images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href=""><img class="img-responsive img-hover" src="images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href=""><img class="img-responsive img-hover" src="images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="4" href=""><img class="img-responsive img-hover" src="images/property/prop_thumb.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="panel-body">
                            <div class="prop_feat">
                                <p class="area"><i class="fa fa-home"></i> <?=$property_details[0]['area']?> Sq Ft</p>
                                <p class="bedrom"><i class="fa fa-bed"></i> <?=$property_details[0]['bedroom']?> Bedrooms</p>
                                <p class="bedrom"><i class="fa fa-car"></i> <?=$property_details[0]['garage']?> Garage</p>
                                <p class="bedrom"><i class="fa fa-star-o"></i> Add to Favorites </p>
                                <p class="bedrom"><i class="fa fa-print"></i> Print This Details </p>
                                <div class="share_btn">
                                    <a href="#"> <i class="fa fa-share-alt"></i>
                                    </a>
                                    <div class="soc_btn">
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-google-plus"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3 class="sec_titl"><?=$property_details[0]['title']?></h3>
                            <div class="col_labls larg_labl">
                                <?php if ('1' === $property_details[0]['for_sale']): ?>
                                    <p class="or_labl">For Sale</p>
                                <?php endif ?>
                                 <?php if ('1' === $property_details[0]['for_rent']): ?>
                                    <p class="or_labl">For Rent</p>
                                <?php endif ?>
                                <p class="blu_labl"> <?= number_format($property_details[0]['price'], 2, ',', ' '); ?> </p>
                            </div>
                            <p class="sec_desc">
                               <?=$property_details[0]['description']?>
                            </p>
                                                        <!-- Proerty Additional Info -->
                            <div class="prop_addinfo">
                                <h2 class="add_titl">
                                Additional Details
                            </h2>
                                <div class="info_sec first">
                                    <div class="col-md-5">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> Price: <span> $250.100 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> For Sale/Rent: <span> Sale </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> Cross Streets: <span> City of New York </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> Area: <span> 3000 Sq Ft </span> </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos"> Garages: <span> 1 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Bedrooms: <span> 3 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Bathrooms: <span> 2 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Acres: <span> 0.19 </span> </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Heat: <span> Forced Air </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Dimensions: <span> 80x100 </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">Size Source: <span> Assessor </span> </p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                    <p class="infos">AC: <span> Center </span> </p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                
                <!-- Agent Info -->
                <div class="row">
                    <div class="agen_info">

                        <div class="col-md-4">
                            <a href="agents_single.html"><img class="img-responsive img-hover" src="http://placehold.it/270x260" alt="">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="row agen_desc">
                                        <div class="col-sm-8">
                                            <h3 class="sec_titl">
                            <a href="agents_single.html"> Scott Berends </a>                                   </h3>
                                            <p class="sec_desc">
                                                Buying Agents
                                            </p>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="soc_icon">
                                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                                <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                            </div>

                                        </div>
                                    </div>
                                    <p class="sec_desc">
                                        Single origin coffee crucifix tousled freegan lo-fi wayfare flexitaria Marfa deepbanh mi church-key direct trad street American Apparel Pinterest pop-up banh mi you probably.
                                    </p>
                                    <div class="panel_bottom">
                                        <div class="agen_feat">
                                            <p class="area">
                                                <a href="tel:910-213-7890"> <i class="fa fa-phone"></i> 910-213-7890 </a>
                                            </p>
                                            <p class="bedrom">
                                                <a href="mailto:scott@berends.com?Subject=Agent%20enquiry"> <i class="fa fa-envelope"></i> scott@berends.com </a>
                                            </p>
                                            <p class="bedrom"><a href="skype:-scottberends1-?chat"><i class="fa fa-skype"></i> scottberends1 </a> </p>
                                        </div>



                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>
                
                <!-- Proerty Map -->

                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                    Property Map
                </h3>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="prop_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3023.0855969237605!2d-73.99038!3d40.738141999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a238556ce7%3A0x3445b7afb4f445e3!2sTaz+Studios!5e0!3m2!1sen!2sin!4v1432831471606" width="600" height="350"></iframe>
                        </div>

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
                            <form name="sentMessage" id="contactForm" novalidate>
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

                                <div id="success"></div>
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
    