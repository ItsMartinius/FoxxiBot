<?php
// Copyright (C) 2020-2022 FoxxiBot
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.

// Check for Secure Connection
if (!defined("G_FW") or !constant("G_FW")) die("Direct access not allowed!");

$options = array();

$result = $PDO->query("SELECT * FROM gb_options");
foreach($result as $row)
{
  $options[$row["parameter"]] = $row["value"];
}
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Twitter Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Twitter Settings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <form method="post" enctype="multipart/form-data" action="<?php print $gfw["site_url"]; ?>/index.php?p=twitter&a=funcs&v=settings">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- first column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
              <h3 class="card-title"><i class="fab fa-twitter"></i>&nbsp; Twitter Settings</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">

                <div class="form-group">
                  <label>Twitter Features</label>
                    <div style="float: right;">
                    <?php
                    if ($options["twitter_features"] == "off") {
                    print '<input type="checkbox" name="twitter_features" data-bootstrap-switch data-off-color="danger" data-on-color="success">';
                    } else {
                      print '<input type="checkbox" name="twitter_features" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">';
                    }
                    ?>
                  </div>
                </div>

                <div class="form-group">
                  <label>Twitter Username</label>
                  <input type="text" class="form-control" id="twitter_username" name="twitter_username" placeholder="Enter Your Twitter Username" value="<?php print $options["twitter_username"]; ?>">
                </div>

                <div class="form-group">
                  <label>User Access Token</label>
                  <input type="text" class="form-control" id="twitter_usertoken" name="twitter_usertoken" placeholder="Enter Your User Token" value="<?php print $options["twitter_usertoken"]; ?>">
                </div>

                <div class="form-group">
                  <label>User Access Secret</label>
                  <input type="text" class="form-control" id="twitter_usertokensecret" name="twitter_usertokensecret" placeholder="Enter Your Application API Key Secret" value="<?php print $options["twitter_usertokensecret"]; ?>">
                </div>

                <div class="form-group">
                  <label>Application API Key</label>
                  <input type="text" class="form-control" id="twitter_consumerkey" name="twitter_consumerkey" placeholder="Enter Your Consumer Key" value="<?php print $options["twitter_consumerkey"]; ?>">
                </div>

                <div class="form-group">
                  <label>Application API Key Secret</label>
                  <input type="text" class="form-control" id="twitter_consumersecret" name="twitter_consumersecret" placeholder="Enter Your Consumer Secret" value="<?php print $options["twitter_consumersecret"]; ?>">
                </div>

                <div class="form-group">
                  <label>Live Auto-Tweet</label>
                    <div style="float: right;">
                    <?php
                    if ($options["twitter_livestatement_status"] == "off") {
                    print '<input type="checkbox" name="twitter_livestatement_status" data-bootstrap-switch data-off-color="danger" data-on-color="success">';
                    } else {
                      print '<input type="checkbox" name="twitter_livestatement_status" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">';
                    }
                    ?>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->

            </div>
            <!-- /.card -->

          <!-- second column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              
                <div class="card-footer">
                  <input type="hidden" id="submit" name="submit" value="submit">
                    <p style="float: left; margin-top:15px;">This is an optional service if you want Twitter functionality.</p>
                    <button style="float: right; margin-top:9px;" type="submit" class="btn btn-primary">Save Settings</button>
                  </div>
                </div>

            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->

  </form>
  <!-- /.form -->

</div>
<!-- /.content-wrapper -->