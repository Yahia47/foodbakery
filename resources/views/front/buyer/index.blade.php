@extends('front.buyer.master')

@section('title')
    My Account - FoodBakery
@endsection

@section('content')
    <!-- Main Section Start -->
    <div class="main-section">
        @include('front.buyer.body.header')

        <div class="page-section account-header buyer-logged-in">
            <div class="container">
                <div class="row">
                    <!-- ========== menu Start ========== -->
                    @include('front.buyer.body.menu')
                    <!-- menu End -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="user-dashboard">
                            <div class="user-holder">
                                <div id="close-me" class="user-message" style="background-color:#1e73be;">
                                    <a class="close close-div" href="#"><i class="icon-cross-out"></i></a>
                                    <h2>Welcome to your account</h2>
                                    <p>My Account gives you quick access to settings and tools for managing your Account
                                        like [Change address] and [Change password] . You can [manage Orders] Booking, and
                                        access even more [Shortlists] and [Statements] and may more.</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="user-suggest-list listing simple">
                                            <div class="element-title">
                                                <h5>Suggested Restaurants</h5>
                                                <span>Define <em data-target="#suggestions-box" data-toggle="modal">Search
                                                        criteria</em> to search for specific</span>
                                            </div>
                                            <ul class="user-suggest-list-holder">
                                                <li>
                                                    <div class="suggest-list-holder">
                                                        <div class="img-holder">
                                                            <figure>
                                                                <a href="#"><img
                                                                        src="{{ asset('front/extra-images/fb-restaurant-06.jpg') }}"
                                                                        alt=""> </a>
                                                            </figure>
                                                        </div>
                                                        <div class="text-holder">
                                                            <div class="post-title">
                                                                <h5><a href="#">Dragon Express</a></h5>
                                                            </div>
                                                            <span class="post-categories"> Apple Juice , Carrot Juice , Ice
                                                                Cream </span>
                                                            <div class="list-option">
                                                                <a href="#" class="shortlist-btn shortlisted"><i
                                                                        class="icon-heart4"></i></a>
                                                                <a href="#" class="viewmenu-btn">View Menu</a>
                                                            </div>
                                                            <div class="delivery-potions">
                                                                <div class="post-time">
                                                                    <i class="icon-motorcycle"></i>
                                                                    <div class="time-tooltip">
                                                                        <div class="time-tooltip-holder"><b
                                                                                class="tooltip-label">Delivery time</b><b
                                                                                class="tooltip-info">10</b> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-time">
                                                                    <i class="icon-clock4"></i>
                                                                    <div class="time-tooltip">
                                                                        <div class="time-tooltip-holder"> <b
                                                                                class="tooltip-label">Pickup time</b> <b
                                                                                class="tooltip-info">15</b> </div>
                                                                    </div>
                                                                </div>
                                                                <span>10-11 Bethel Square, Brecon LD3 7JP, UK</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="suggest-list-holder">
                                                        <div class="img-holder">
                                                            <figure>
                                                                <a href="#"><img
                                                                        src="{{ asset('front/extra-images/listing-logo18.png') }}"
                                                                        alt=""> </a>
                                                            </figure>
                                                        </div>
                                                        <div class="text-holder">
                                                            <div class="post-title">
                                                                <h5><a href="#">Restaurant Demo </a></h5>
                                                            </div>
                                                            <span class="post-categories"> Type of food : Apple Juice</span>
                                                            <div class="list-option">
                                                                <a href="#" class="shortlist-btn shortlist-btn"><i
                                                                        class="icon-heart-o"></i> </a>
                                                                <a href="#" class="viewmenu-btn">View Menu</a>
                                                            </div>
                                                            <div class="delivery-potions">
                                                                <div class="post-time">
                                                                    <i class="icon-motorcycle"></i>
                                                                    <div class="time-tooltip">
                                                                        <div class="time-tooltip-holder"><b
                                                                                class="tooltip-label">Delivery time</b><b
                                                                                class="tooltip-info">10</b> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post-time">
                                                                    <i class="icon-clock4"></i>
                                                                    <div class="time-tooltip">
                                                                        <div class="time-tooltip-holder"> <b
                                                                                class="tooltip-label">Pickup time</b> <b
                                                                                class="tooltip-info">15</b> </div>
                                                                    </div>
                                                                </div>
                                                                <span>Totnes, Devon</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img-holder">
                                                        <figure>
                                                            <a href="#"> <img
                                                                    src="{{ asset('front/extra-images/fb-restaurant-01.jpg') }}"
                                                                    class="img-list wp-post-image" alt=""> </a>
                                                        </figure>
                                                    </div>
                                                    <div class="text-holder">
                                                        <div class="post-title">
                                                            <h5>
                                                                <a href="listing-detail.html">Jet’s Kitchen</a>
                                                            </h5>
                                                        </div>
                                                        <span class="post-categories"><span>Type of food :
                                                            </span> Chines
                                                            Soup, Egg Fry, Fish Fry</span>
                                                        <div class="delivery-potions">
                                                            <div class="post-time">
                                                                <i class="icon-motorcycle"></i>
                                                                <div class="time-tooltip">
                                                                    <div class="time-tooltip-holder"> <b
                                                                            class="tooltip-label">Delivery
                                                                            time</b> <b class="tooltip-info">Your order
                                                                            will
                                                                            be
                                                                            delivered in 10 minutes.</b> </div>
                                                                </div>
                                                            </div>
                                                            <div class="post-time">
                                                                <i class="icon-clock4"></i>
                                                                <div class="time-tooltip">
                                                                    <div class="time-tooltip-holder"> <b
                                                                            class="tooltip-label">Pickup
                                                                            time</b> <b class="tooltip-info">You
                                                                            can pickup order in
                                                                            15 minutes.</b> </div>
                                                                </div>
                                                            </div>
                                                            <span>Montrose, Angus</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-option">
                                                        <a href="javascript:void(0);" class="shortlist-btn"
                                                            data-toggle="modal" data-target="#sign-in"><i
                                                                class="icon-heart-o"></i> </a>
                                                        <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img-holder">
                                                        <figure>
                                                            <a href="#"><img
                                                                    src="{{ asset('front/extra-images/fb-restaurant-04.jpg') }}"
                                                                    class="img-list wp-post-image" alt=""> </a>
                                                        </figure>
                                                    </div>
                                                    <div class="text-holder">
                                                        <div class="post-title">
                                                            <h5>
                                                                <a href="listing-detail.html">Golden Chick Fries</a>
                                                                <span class="sponsored text-color">Sponsored</span>
                                                            </h5>
                                                        </div>
                                                        <span class="post-categories"><span>Type of food :
                                                            </span>
                                                            Doughnut, Hot Dogs, Ice Cream</span>
                                                        <div class="delivery-potions">
                                                            <div class="post-time">
                                                                <i class="icon-motorcycle"></i>
                                                                <div class="time-tooltip">
                                                                    <div class="time-tooltip-holder"> <b
                                                                            class="tooltip-label">Delivery
                                                                            time</b>
                                                                        <b class="tooltip-info">Your order will
                                                                            be
                                                                            delivered in 10 minutes.</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="post-time">
                                                                <i class="icon-clock4"></i>
                                                                <div class="time-tooltip">
                                                                    <div class="time-tooltip-holder"> <b
                                                                            class="tooltip-label">Pickup
                                                                            time</b>
                                                                        <b class="tooltip-info">You can pickup
                                                                            order in
                                                                            15 minutes.</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span>Leyton, Greater London</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-option">
                                                        <a href="javascript:void(0);" class="shortlist-btn"
                                                            data-toggle="modal" data-target="#sign-in">
                                                            <i class="icon-heart-o"></i> </a>
                                                        <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img-holder">
                                                        <figure>
                                                            <a href="#"><img
                                                                    src="{{ asset('front/extra-images/xlisting-logo03.png.pagespeed.ic_.aT-o9LinEJ.png') }}"
                                                                    class="img-list wp-post-image" alt=""> </a>
                                                        </figure>
                                                    </div>
                                                    <div class="text-holder">
                                                        <div class="post-title">
                                                            <h5>
                                                                <a href="listing-detail.html">Nature Healthy Food</a>
                                                            </h5>
                                                        </div>
                                                        <span class="post-categories"><span>Type of food :
                                                            </span> Apple
                                                            Juice, Chicken Roast, Chines Soup, Magi</span>
                                                        <div class="delivery-potions">
                                                            <div class="post-time">
                                                                <i class="icon-motorcycle"></i>
                                                                <div class="time-tooltip">
                                                                    <div class="time-tooltip-holder"> <b
                                                                            class="tooltip-label">Delivery
                                                                            time</b> <b class="tooltip-info">Your order
                                                                            will
                                                                            be
                                                                            delivered in 10 minutes.</b> </div>
                                                                </div>
                                                            </div>
                                                            <div class="post-time">
                                                                <i class="icon-clock4"></i>
                                                                <div class="time-tooltip">
                                                                    <div class="time-tooltip-holder"> <b
                                                                            class="tooltip-label">Pickup
                                                                            time</b> <b class="tooltip-info">You
                                                                            can pickup order in
                                                                            15 minutes.</b> </div>
                                                                </div>
                                                            </div>
                                                            <span>Bristol, Bristol</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-option">
                                                        <a href="javascript:void(0);" class="shortlist-btn"
                                                            data-toggle="modal" data-target="#sign-in"><i
                                                                class="icon-heart-o"></i> </a>
                                                        <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img-holder">
                                                        <figure>
                                                            <a href="#"><img
                                                                    src="{{ asset('front/extra-images/fb-restaurant-09.png') }}"
                                                                    class="img-list wp-post-image" alt=""> </a>
                                                        </figure>
                                                    </div>
                                                    <div class="text-holder">
                                                        <div class="post-title">
                                                            <h5>
                                                                <a href="listing-detail.html">Burger King</a>
                                                            </h5>
                                                        </div>
                                                        <span class="post-categories"><span>Type of food :
                                                            </span> Beef
                                                            Roast, Doughnut, Prawns</span>
                                                        <div class="delivery-potions">
                                                            <div class="post-time">
                                                                <i class="icon-motorcycle"></i>
                                                                <div class="time-tooltip">
                                                                    <div class="time-tooltip-holder"> <b
                                                                            class="tooltip-label">Delivery
                                                                            time</b> <b class="tooltip-info">Your order
                                                                            will
                                                                            be
                                                                            delivered in 10 minutes.</b> </div>
                                                                </div>
                                                            </div>
                                                            <div class="post-time">
                                                                <i class="icon-clock4"></i>
                                                                <div class="time-tooltip">
                                                                    <div class="time-tooltip-holder"> <b
                                                                            class="tooltip-label">Pickup
                                                                            time</b> <b class="tooltip-info">You
                                                                            can pickup order in
                                                                            15 minutes.</b> </div>
                                                                </div>
                                                            </div>
                                                            <span>Bridport, Dorset</span>
                                                        </div>
                                                    </div>
                                                    <div class="list-option">
                                                        <a href="javascript:void(0);" class="shortlist-btn"
                                                            data-toggle="modal" data-target="#sign-in">
                                                            <i class="icon-heart-o"></i> </a>
                                                        <a href="#" class="viewmenu-btn text-color">View Menu</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="pagination">
                                            <li class="active"><a>1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><span class="page-numbers dots">…</span></li>
                                            <li><a href="#">24</a></li>
                                            <li><a href="#">Next </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal fade" id="suggestions-box" tabindex="-1" role="dialog"
                                    style="display: none;">
                                    <div class="modal-dialog" role="document">
                                        <div class="login-form">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    <h3 class="modal-title">Suggested Restaurants Settings</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="status status-message"></div>
                                                    <form method="post" class="wp-user-form webkit"
                                                        id="ControlForm_suggestions">
                                                        <div class="input-filed">
                                                            <ul class="form-elements"
                                                                id="wrapper_suggested_restaurants_categories">
                                                                <li class="to-label"><label>Categories for
                                                                        suggestions</label></li>
                                                                <li class="to-field multiple"><select required="required"
                                                                        class="multiple" multiple="multiple"
                                                                        id="foodbakery_suggested_restaurants_categories"
                                                                        name="foodbakery_suggested_restaurants_categories[]"
                                                                        style="height: 110px !important; display: none;"
                                                                        data-placeholder="Please Select">
                                                                        <option value="all_categories">All Categories
                                                                        </option>
                                                                        <option value="apple-juice">Apple Juice</option>
                                                                        <option selected="selected" value="bb-q">BB.Q
                                                                        </option>
                                                                        <option value="beef-roast">Beef Roast</option>
                                                                        <option selected="selected" value="carrot-juice">
                                                                            Carrot Juice</option>
                                                                        <option value="cheese-burger">Cheese Burger
                                                                        </option>
                                                                        <option value="chicken-roast">Chicken Roast
                                                                        </option>
                                                                        <option value="chines-soup">Chines Soup</option>
                                                                        <option value="cold-coffee">Cold Coffee</option>
                                                                        <option value="cold-drink">Cold Drink</option>
                                                                        <option value="cupcake">Cupcake</option>
                                                                        <option value="doughnut">Doughnut</option>
                                                                        <option value="drum-stick">Drum Stick</option>
                                                                        <option value="egg-fry">Egg Fry</option>
                                                                        <option value="fish-fry">Fish Fry</option>
                                                                        <option value="fresh-juice">Fresh Juice</option>
                                                                        <option value="hot-dogs">Hot Dogs</option>
                                                                        <option value="ice-cream">Ice Cream</option>
                                                                        <option value="magi">Magi</option>
                                                                        <option value="noodles">Noodles</option>
                                                                        <option value="pastry">Pastry</option>
                                                                        <option value="pizza">Pizza</option>
                                                                        <option value="potato-fries">Potato Fries</option>
                                                                        <option value="prawns">Prawns</option>
                                                                        <option value="sham-pane">Sham pane</option>
                                                                        <option value="shawarma">Shawarma</option>
                                                                        <option value="soda-water">Soda water</option>
                                                                        <option value="stakes">Stakes</option>
                                                                        <option value="steam-roast">Steam Roast</option>
                                                                        <option value="tea">Tea</option>
                                                                    </select>
                                                                    <div class="chosen-container chosen-container-multi"
                                                                        style="width: 0px;" title=""
                                                                        id="foodbakery_suggested_restaurants_categories_chosen">
                                                                        <ul class="chosen-choices">
                                                                            <li class="search-choice"><span>BB.Q</span><a
                                                                                    class="search-choice-close"
                                                                                    data-option-array-index="2"></a></li>
                                                                            <li class="search-choice"><span>Carrot
                                                                                    Juice</span><a
                                                                                    class="search-choice-close"
                                                                                    data-option-array-index="4"></a></li>
                                                                            <li class="search-field"><input type="text"
                                                                                    value="Please Select" class=""
                                                                                    autocomplete="off"
                                                                                    style="width: 25px;"></li>
                                                                        </ul>
                                                                        <div class="chosen-drop">
                                                                            <ul class="chosen-results">
                                                                                <li class="active-result"
                                                                                    data-option-array-index="0">All
                                                                                    Categories</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="1">Apple Juice
                                                                                </li>
                                                                                <li class="result-selected"
                                                                                    data-option-array-index="2">BB.Q</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="3">Beef Roast
                                                                                </li>
                                                                                <li class="result-selected"
                                                                                    data-option-array-index="4">Carrot
                                                                                    Juice</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="5">Cheese
                                                                                    Burger</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="6">Chicken
                                                                                    Roast</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="7">Chines Soup
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="8">Cold Coffee
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="9">Cold Drink
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="10">Cupcake
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="11">Doughnut
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="12">Drum Stick
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="13">Egg Fry
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="14">Fish Fry
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="15">Fresh
                                                                                    Juice</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="16">Hot Dogs
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="17">Ice Cream
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="18">Magi</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="19">Noodles
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="20">Pastry
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="21">Pizza</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="22">Potato
                                                                                    Fries</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="23">Prawns
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="24">Sham pane
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="25">Shawarma
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="26">Soda water
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="27">Stakes
                                                                                </li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="28">Steam
                                                                                    Roast</li>
                                                                                <li class="active-result"
                                                                                    data-option-array-index="29">Tea</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="input-filed">
                                                            <label>Number of suggestions to show</label>
                                                            <input type="text" tabindex="11" placeholder="example 20"
                                                                class="form-control"
                                                                id="suggested_restaurants_max_restaurants"
                                                                name="suggested_restaurants_max_restaurants"
                                                                value="7">
                                                        </div>
                                                        <div class="input-filed">
                                                            <div class="save-search-criteria input-button-loader">
                                                                <input type="button"
                                                                    class="btn-suggestions-settings cs-bgcolor"
                                                                    name="submit-suggestions-settings"
                                                                    value="Save Settings">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->
@endsection
