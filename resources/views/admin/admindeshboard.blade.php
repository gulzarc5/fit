@extends('admin.template.admin_master')

@section('content')

  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> PHP</span>
        <div class="count green">0</div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-clock-o"></i> Web Design</span>
        <div class="count green">0</div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Android</span>
          <div class="count green">0</div>
      </div>
      
    </div>
    <!-- /top tiles -->

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
              <div class="x_content">
                 {{--//////////// Last Ten Sellers //////////////--}}
                 <div class="table-responsive">
                    <h2>Last Ten Applications</h2>
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                            <tr class="headings">                
                                <th class="column-title">Sl No. </th>
                                <th class="column-title">Name</th>
                                <th class="column-title">Email</th>
                                <th class="column-title">Mobile No</th>
                                <th class="column-title">Varification Status</th>
                                <th class="column-title">Date</th>
                            </tr>
                        </thead>

                        <tbody>
                          
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>

    </div>

  </div>

 @endsection