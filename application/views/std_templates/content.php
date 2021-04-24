<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4>Restaurant</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="">Restaurant</a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="row" id="dragdrop">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-two">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="mt-0 mb-1 text-info">2,02,150</h2><span class="">Total Orders</span>
                                </div>
                                <img class="ml-3" src="<?=base_url()?>public/newtemplate/assets/images/icons/1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-two">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="mt-0 mb-1 text-danger">2,02,150</h2><span class="">Total Orders</span>
                                </div>
                                <img class="ml-3" src="<?=base_url()?>public/newtemplate/assets/images/icons/2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-two">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="mt-0 mb-1 text-warning">2,02,150</h2><span class="">Total Orders</span>
                                </div>
                                <img class="ml-3" src="<?=base_url()?>public/newtemplate/assets/images/icons/3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-xxl-7 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title m-t-10">Orders Monthly</h4>
                        <div class="table-action float-right">
                            <form action="#">
                                <div class="form-row">
                                    <div class="form-group m-b-0">
                                        <select class="selectpicker show-tick" data-width="auto">
                                            <option selected="selected">Last 30 Days</option>
                                            <option>Last 1 Month</option>
                                            <option>Last 6 Month</option>
                                            <option>Last Year</option>
                                        </select>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="monthly-orders-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-xxl-5 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <!-- <div class="card-action"><a href="javascript:void(0)" data-action="collapse"><i class="ti-plus"></i></a> <a href="javascript:void(0)" data-action="expand"><i class="icon-size-fullscreen"></i></a>
                            <a href="javascript:void(0)" data-action="close"><i class="ti-close"></i>
                            </a><a href="javascript:void(0)" data-action="reload"><i class="icon-reload"></i></a>
                        </div> -->
                        <h4 class="card-title">Most Selling Items</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="most-selling-items"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Worldwide Customers</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 col-xl-6">
                                <div id="world-map-restaurant"></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="map-coruntry-list">
                                    <h4 class="mb-5">Country List</h4>
                                    <ul>
                                        <li><a href="javascript:void()"><i class="fa fa-circle-o text-success"></i> Canada <span>55%</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="fa fa-circle-o text-warning"></i> Brasil <span>60%</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="fa fa-circle-o text-info"></i> Russia <span>18%</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="fa fa-circle-o text-secondary"></i> Egypt <span>20%</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3">
                                <div class="restaurant-country-data">
                                    <div id="australia"></div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 col-sm-4">
                                            <p>Percentage</p>
                                            <h3>65%</h3>
                                        </div>
                                        <div class="col-xl-6 col-lg-12 col-sm-4">
                                            <p>Customers</p>
                                            <h3>12,500</h3>
                                        </div>
                                        <div class="col-lg-12 col-sm-4">
                                            <p>Profit</p>
                                            <h3>25.20%</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <!-- <div class="col-lg-12 d-flex"> -->
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="row">
                            <div class="col-sm-3 mb-sm-0">
                                <div class="stat-widget-three py-2">
                                    <div class="media">
                                        <img class="mr-4 mt-3" src="<?=base_url()?>public/newtemplate/assets/images/icons/4.png" alt="">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-info">62,150</h2>
                                            <span class="text-pale-sky ">Total Orders</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-sm-0">
                                <div class="stat-widget-three py-2">
                                    <div class="media">
                                        <img class="mr-4 mt-3" src="<?=base_url()?>public/newtemplate/assets/images/icons/5.png" alt="">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-success">9,750</h2>
                                            <span class="text-pale-sky ">Total Delivery</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="stat-widget-three py-2">
                                    <div class="media">
                                        <img class="mr-4 mt-3" src="<?=base_url()?>public/newtemplate/assets/images/icons/6.png" alt="">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-danger">4,250</h2>
                                            <span class="text-pale-sky ">Pending Orders</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="stat-widget-three py-2">
                                    <div class="media">
                                        <img class="mr-4 mt-3" src="<?=base_url()?>public/newtemplate/assets/images/icons/7.png" alt="">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-warning">4,250</h2>
                                            <span class="text-pale-sky ">Orders Hold</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="stat-widget-three py-2">
                            <div class="media">
                                <img class="mr-4" src="<?=base_url()?>public/newtemplate/assets/images/icons/8.png" alt="">
                                <div class="media-body">
                                    <div class="rating d-flex align-items-center">
                                                    <span class="m-0">
                                                        <span class="text-warning"><i class="fa fa-star"></i></span>
                                                        <span class="text-warning"><i class="fa fa-star"></i></span>
                                                        <span class="text-warning"><i class="fa fa-star"></i></span>
                                                        <span class="text-warning"><i class="fa fa-star"></i></span>
                                                        <span class=""><i class="fa fa-star"></i></span>
                                                    </span>
                                        <h2 class="mt-0 mb-0 ml-3 text-warning">4.0</h2>
                                    </div>
                                    <span class="text-pale-sky ">Customer Satisfaction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card transparent-card">
                    <div class="card-header pb-0">
                        <h4 class="card-title mt-2"> Recent Orders List</h4>
                        <div class="table-action float-sm-right mt-4 mt-sm-0">
                            <form action="#">
                                <div class="form-row">
                                    <div class="form-group mr-3">
                                        <select class="selectpicker show-tick" data-width="auto">
                                            <option selected="selected">Russia</option>
                                            <option>USA</option>
                                            <option>Canada</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker show-tick" data-width="auto">
                                            <option selected="selected">Last 30 Days</option>
                                            <option>Last 1 MOnth</option>
                                            <option>Last 6 MOnth</option>
                                            <option>Last Year</option>
                                        </select>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                                <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Customer Name</th>
                                    <th>Delivery Date & Time</th>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>01</td>
                                    <td><a href="javascript:void()" class="mr-2 bg-primary rounded-circle text-center text-uppercase d-inline-block">SM</a> <span class="text-pale-sky">Valentino Morose</span>
                                    </td>
                                    <td class="text-muted">04 May 2018, 10:30 AM</td>
                                    <td><a href="javascript:void()" class="text-primary">Moscow</a></td>
                                    <td><span class="text-pale-sky">$ 25.000</span></td>
                                    <td><span class="label label-xl label-rounded label-warning">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td><a href="javascript:void()" class="mr-2 bg-lgreen rounded-circle text-center text-uppercase d-inline-block">RM</a> <span class="text-pale-sky">Adib</span>
                                    </td>
                                    <td class="text-muted">04 May 2018, 10:30 AM</td>
                                    <td><a href="javascript:void()" class="text-primary">Samara</a></td>
                                    <td><span class="text-pale-sky">$ 35.000</span></td>
                                    <td><span class="label label-xl label-rounded label-success">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td><a href="javascript:void()" class="mr-2 bg-dpink rounded-circle text-center text-uppercase d-inline-block">SE</a> <span class="text-pale-sky">Adam Razu</span>
                                    </td>
                                    <td class="text-muted">04 May 2018, 10:30 AM</td>
                                    <td><a href="javascript:void()" class="text-primary">Suzdal</a></td>
                                    <td><span class="text-pale-sky">$ 29.000</span></td>
                                    <td><span class="label label-xl label-rounded label-danger">Cancel</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td><a href="javascript:void()" class="mr-2 bg-success rounded-circle text-center text-uppercase d-inline-block">FM</a> <span class="text-pale-sky">David Aziz</span>
                                    </td>
                                    <td class="text-muted">04 May 2018, 10:30 AM</td>
                                    <td><a href="javascript:void()" class="text-primary">Hrasnoyarsk</a></td>
                                    <td><span class="text-pale-sky">$ 38.000</span></td>
                                    <td><span class="label label-xl label-rounded label-success">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td><a href="javascript:void()" class="mr-2 bg-info rounded-circle text-center text-uppercase d-inline-block">FK</a> <span class="text-pale-sky">David Morose</span>
                                    </td>
                                    <td class="text-muted">04 May 2018, 10:30 AM</td>
                                    <td><a href="javascript:void()" class="text-primary">Samara</a></td>
                                    <td><span class="text-pale-sky">$ 75.000</span></td>
                                    <td><span class="label label-xl label-rounded label-warning">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td><a href="javascript:void()" class="mr-2 bg-warning rounded-circle text-center text-uppercase d-inline-block">MS</a> <span class="text-pale-sky">Lionel Morose</span>
                                    </td>
                                    <td class="text-muted">04 May 2018, 10:30 AM</td>
                                    <td><a href="javascript:void()" class="text-primary">Suzdal</a></td>
                                    <td><span class="text-pale-sky">$ 225.000</span></td>
                                    <td><span class="label label-xl label-rounded label-warning">Hold</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>07</td>
                                    <td><a href="javascript:void()" class="mr-2 bg-primary rounded-circle text-center text-uppercase d-inline-block">GM</a> <span class="text-pale-sky">Cristiano Morose</span>
                                    </td>
                                    <td class="text-muted">04 May 2018, 10:30 AM</td>
                                    <td><a href="javascript:void()" class="text-primary">Moscow</a></td>
                                    <td><span class="text-pale-sky">$ 25. 000</span></td>
                                    <td><span class="label label-xl label-rounded label-danger">Cancel</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav>
                            <ul class="pagination pagination-rounded pagination-md justify-content-end">
                                <li class="page-item"><a class="page-link" href="javascript:void()">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void()">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
