<div class="content-wrapper" style="min-height: 1490px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Units</span>
                <span class="info-box-number">
                  <?php
                  $nonelect=count(getlocationwiseunits());
                  $elect=count(getlocationwiseElectunits());
                  echo $nonelect+$elect;
                  
                  ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Upcoming Units</span>
                <span class="info-box-number">
                  <?php
                        $url=base_url().'api/units/unit/unitsfetch';
                        $arr=fetchapidata($url);
                        $result=($arr['results']);
                        echo count($result);
                    ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-train"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Avg. Distance from Railway Stns.</span>
                <span class="info-box-number">
                    <?php
                    $distance=totalavgdistancefrmhotel('Railway Station');
                    //print_r($distance['totaavgdistance']);
                    $totalunits=$nonelect+$elect;
                    
                    echo $result = intdiv($distance['totaavgdistance'], $totalunits);
                    
                    ?>
                    Kms.
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-plane"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Avg. Distance from Airport</span>
                <span class="info-box-number">
                    <?php
                        $distance=totalavgdistancefrmhotel('Airport');
                    //print_r($distance['totaavgdistance']);
                    $totalunits=$nonelect+$elect;
                    
                    echo $result = intdiv($distance['totaavgdistance'], $totalunits);
                    
                    ?>
                Kms.
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!--<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              
            </div>
            
          </div>-->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>