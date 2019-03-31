@extends('layouts.app')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th scope="col">GROUPS</th>
                <th scope="col">FILM</th>
                <th scope="col">ESSAY</th>
                <th scope="col">PHOTO</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td scope="row">
                    A <br>
                    1st to 3rd std
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
            </tr>
            <tr>
                <td scope="row">
                    B <br>
                    4th to 6th std</td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>

            </tr>
            <tr>
                <td scope="row">
                    C <br>
                    7th to 9th std</td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
            </tr>
            <tr>
                <td scope="row">
                    D <br>
                    10th to 12th std</td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
            </tr>
            <tr>
                <td scope="row">
                    E <br>
                    above 12th std</td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
                <td>
                    1st <br>
                    2nd <br>
                    3rd
                </td>
            </tr>
            {{--<tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>--}}
            </tbody>
        </table>
    </div>
    <div class="heading">
        PRIZES
    </div>
    <b-container class="bv-example-row bv-example-row-flex-cols">
        <b-row>
            <div style="text-align: center;">
                <b-col class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                    <span class="box"></span>
                </b-col>
                <b-col class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                    <span class="box"></span>
                </b-col>
                <b-col class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                    <span class="box"></span>
                </b-col>
            </div>
        </b-row>
    </b-container>
@endsection
<style>
    td{
        text-align: center;
    }
    th{
        text-align: center !important;
    }
    .heading{
        text-align: center;
        font-weight: bold;
        font-size: 1.5rem;
    }
    .box{
        background-color: gray;
        height: 20vh;
        width: 20vw;
        display: inline-block;
    }
</style>
