@extends('layouts.app')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    </ol>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="text-value-lg">9.823</div>
                            <div>Members online</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70"
                            style="display: block; width: 202px; height: 70px;" width="202"></canvas>
                        <div id="card-chart1-tooltip" class="c-chartjs-tooltip top"
                            style="opacity: 0; left: 115.76px; top: 123.662px;">
                            <div class="c-tooltip-header">
                                <div class="c-tooltip-header-item">June</div>
                            </div>
                            <div class="c-tooltip-body">
                                <div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color"
                                        style="background-color: rgb(50, 31, 219);"></span><span
                                        class="c-tooltip-body-item-label">My First dataset</span><span
                                        class="c-tooltip-body-item-value">55</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info">
                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="text-value-lg">9.823</div>
                            <div>Members online</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70" width="202"
                            style="display: block; width: 202px; height: 70px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="text-value-lg">9.823</div>
                            <div>Members online</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70" width="234"
                            style="display: block; width: 234px; height: 70px;"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="text-value-lg">9.823</div>
                            <div>Members online</div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="card-chart4" height="70" width="202"
                            style="display: block; width: 202px; height: 70px;"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
