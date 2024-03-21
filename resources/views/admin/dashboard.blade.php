@extends('layouts.admin')
@section('content')

    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="mb-0">Dashboard</h3>
                            <p>Buku Tamu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-12">
                    <div class="white_card  mb_30">
                        <div class="white_card_body anlite_table p-0">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Tamu Hari ini</h4>
                                        <h3><span class="counter">34</span> </h3>
                                        {{-- <div class="d-flex">
                                        <div>3.78 <i class="fa fa-caret-up"></i></div>
                                        <span>This year</span>
                                    </div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Sessions</h4>
                                        <h3><span class="counter">2025</span> </h3>
                                        <div class="d-flex">
                                            <div>3.78<i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Ethereum Wallet</h4>
                                        <h3><span class="counter">8025</span> </h3>
                                        <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Number of Clients</h4>
                                        <h3><span class="counter">5645</span> </h3>
                                        <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-xl-8 ">
                <div class="white_card mb_30 card_height_100">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Revenue Statistics</h3>
                            </div>
                            <div class="header_more_tool">
                                <div class="dropdown">
                                    <span class="dropdown-toggle" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown">
                                        <i class="ti-more-alt"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"> <i class="ti-eye"></i>
                                            Action</a>
                                        <a class="dropdown-item" href="#"> <i class="ti-trash"></i>
                                            Delete</a>
                                        <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#"> <i class="ti-printer"></i>
                                            Print</a>
                                        <a class="dropdown-item" href="#"> <i
                                                class="fa fa-download"></i> Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body pb-0">
                        <div id="bar_chart"></div>
                    </div>
                </div>
            </div> --}}
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="white_card mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Earning</h3>
                                        </div>
                                        <div class="erning_btn d-flex">
                                            <a href="#" class="small_blue_btn radius_0 border-right-0">Month</a>
                                            <a href="#" class="small_blue_btn radius_0">Week</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_card_body">
                                    <div class="QA_section">
                                        <div class="QA_table mb-0">

                                            <table class="table lms_table_active2  ">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">Currency</th>
                                                        <th scope="col">Plateform</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td> <img src="img/currency/1.svg" alt> </td>
                                                        <td>bitcoin.com</td>
                                                        <td>Using - Bank</td>
                                                        <td>-0.454 USD</td>
                                                        <td>$25.00</td>
                                                        <td><a href="#" class="status_btn pending_btn">Pending</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td> <img src="img/currency/2.svg" alt> </td>
                                                        <td>bitcoin.com</td>
                                                        <td>Using - Bank</td>
                                                        <td>-0.454 USD</td>
                                                        <td>$25.00</td>
                                                        <td><a href="#" class="status_btn pending_btn">Pending</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td> <img src="img/currency/3.svg" alt> </td>
                                                        <td>bitcoin.com</td>
                                                        <td>Using - Bank</td>
                                                        <td>-0.454 USD</td>
                                                        <td>$25.00</td>
                                                        <td><a href="#" class="status_btn pending_btn">Pending</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">1</td>
                                                        <td> <img src="img/currency/4.svg" alt> </td>
                                                        <td>bitcoin.com</td>
                                                        <td>Using - Bank</td>
                                                        <td>-0.454 USD</td>
                                                        <td>$25.00</td>
                                                        <td><a href="#" class="status_btn">Success</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-6">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Exchange</h3>
                                    </div>
                                    <div class="header_more_tool">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown">
                                                <i class="ti-more-alt"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"> <i
                                                        class="ti-eye"></i> Action</a>
                                                <a class="dropdown-item" href="#"> <i
                                                        class="ti-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#"> <i
                                                        class="fas fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#"> <i
                                                        class="ti-printer"></i> Print</a>
                                                <a class="dropdown-item" href="#"> <i
                                                        class="fa fa-download"></i> Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="Activity_timeline">
                                    <ul>
                                        <li>
                                            <div class="activity_bell"></div>
                                            <div class="timeLine_inner d-flex align-items-center">
                                                <div class="activity_wrap">
                                                    <h6>5 min ago</h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Quisque scelerisque
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity_bell "></div>
                                            <div class="timeLine_inner d-flex align-items-center">
                                                <div class="activity_wrap">
                                                    <h6>6 min ago</h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Quisque scelerisque
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity_bell bell_lite"></div>
                                            <div class="timeLine_inner d-flex align-items-center">
                                                <div class="activity_wrap">
                                                    <h6>7 min ago</h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Quisque scelerisque
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity_bell bell_lite"></div>
                                            <div class="timeLine_inner d-flex align-items-center">
                                                <div class="activity_wrap">
                                                    <h6>8 min ago</h6>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Quisque scelerisque
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        <div class="col-xl-6">
                            <div class="white_card card_height_100 mb_30">
                                <div class="date_picker_wrapper">
                                    <div class="default-datepicker">
                                        <div class="datepicker-here" data-language="en"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

  
@endsection
