@extends('master')

        @section('content')
        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page title box -->
                <div class="page-title-alt-bg"></div>
                <div class="page-title-box">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hb Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <h4 class="page-title">Dashboard</h4>
                </div>
                <!-- End page title box -->
                
                <div class="row">
                    <div class="col-xl-4">

                        <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                            <div class="float-left">
                                <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                        data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="49" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1"/>
                            </div>
                            <div class="widget-chart-one-content text-right">
                                <p class="text-white mb-0 mt-2">Statistics</p>
                                <h3 class="text-white">$714</h3>
                            </div>
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                            <div class="float-left">
                                <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                        data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="49" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1"/>
                            </div>
                            <div class="widget-chart-one-content text-right">
                                <p class="text-white mb-0 mt-2">Statistics</p>
                                <h3 class="text-white">$714</h3>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                            <div class="float-left">
                                <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                        data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="49" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1"/>
                            </div>
                            <div class="widget-chart-one-content text-right">
                                <p class="text-white mb-0 mt-2">Statistics</p>
                                <h3 class="text-white">$714</h3>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
        @endsection




        
