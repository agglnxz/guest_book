@extends('layouts.admin')
@section('content')

    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">

            <div class="row">
                <div class="col-8">
                    <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="mb-0">Dashboard</h3>
                            <p>Buku Tamu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">

                <div class="col-xl-9">
                    <div class="white_card  mb_30  ">
                        <div class="white_card_body anlite_table p-0 ">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Tamu Hari ini</h4>
                                        <h3><span class="counter">{{$date->count()}}</span> </h3>
                                        {{-- <div class="d-flex">
                                        <div>3.78 <i class="fa fa-caret-up"></i></div>
                                        <span>This year</span>
                                    </div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Tamu Bulan Ini</h4>
                                        <h3><span class="counter">{{$data->count()}}</span> </h3>
                                        {{-- <div class="d-flex">
                                            <div>3.78<i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="single_analite_content">
                                        <h4>Tamu Tahun Ini</h4>
                                        <h3><span class="counter"> {{$jumlahTamuTahunIni}}</span> </h3>
                                        {{-- <div class="d-flex">
                                            <div>3.78 <i class="fa fa-caret-up"></i></div>
                                            <span>This month</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="white_card mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Data Tamu</h3>
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
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">email</th>
                                                        <th scope="col">alamat</th>
                                                        <th scope="col">No Telefon</th>
                                                        <th scope="col">pesan</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @forelse ($tamu as $num => $item )
                                                    <tr>
                                                        <td scope="row">{{$num+=1}}</td>
                                                        <td>{{$item->nama}}</td>
                                                        <td>{{$item->email}}</td>
                                                        <td>{{$item->alamat}}</td>
                                                        <td>{{$item->no_telefon}}</td>
                                                        <td>{{$item->pesan}}</td>
                                                        <td><a href="#" class="status_btn pending_btn">Pending</a>
                                                        </td>
                                                    </tr>
                                                    @empty
                                                    <div>
                                                        <h3>Tidak ada data</h3>
                                                    </div>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-xl-6">
                            <div class="white_card card_height_100 mb_30">
                                <div class="date_picker_wrapper">
                                    <div class="default-datepicker">
                                        <div class="datepicker-here" data-language="en"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
