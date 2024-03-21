@extends('layouts.admin')
@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="white_box_tittle">
                            <h4>From Input Tamu</h4>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form action="{{route('tambahtamu')}}" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="form-label">Name</label>
                                <div class="common_input mb_20">
                                    <input type="text" placeholder=" Name" name="nama">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Alamat</label>
                                <div class="common_input mb_20">
                                    <textarea class="form-control" maxlength="225" rows="3"
                                    placeholder="Isi Alamat." name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="common_input mb_20">
                                    <label class="form-label">No.Telp</label>
                                    <input type="number" placeholder="No Telefon" name="no_telefon">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Pesan</label>
                                <div class="common_input ">
                                    <textarea class="form-control" maxlength="225" rows="3"
                                    placeholder="Isi Pesan." name="pesan"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Email</label>
                                <div class="common_input mb_20">
                                    <input type="email" placeholder=" Isi Email" name="email">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <button style="border: none;background: none" type="submit" >
                                        <a class="btn_1 w-100">tambah</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
