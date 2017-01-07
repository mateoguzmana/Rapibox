<?
session_start();
if (empty($_SESSION["usuario"])) {?>
<script type="text/javascript">
window.location = "http://rapibox.net/Angular/app/#/";
</script>
<?
}
?>
<!DOCTYPE html>
<html lang="en" ng-app="mtek">
  <head>
    <title>Rapibox</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="Sat, 01 Dec 2001 00:00:00 GMT">
    <link rel="shortcut icon" href="images/icons/favicon.ico"/>
    <link rel="apple-touch-icon" href="images/icons/favicon.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png"/>
    <!-- Loading css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700"/>
    <link type="text/css" rel="stylesheet" href="global/vendors/font-awesome/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="global/vendors/simple-line-icons/simple-line-icons.css"/>
    <link type="text/css" rel="stylesheet" href="global/vendors/bootstrap/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="global/vendors/animate.css/animate.css"/>
    <link type="text/css" rel="stylesheet" href="global/vendors/iCheck/skins/all.css"/>
    <link type="text/css" rel="stylesheet" href="assets/vendors/bootstrap-switch/css/bootstrap-switch.css"/>
    <link type="text/css" rel="stylesheet" href="assets/vendors/google-code-prettify/prettify.css"/>
    <link type="text/css" rel="stylesheet" href="" id="font-layout"/>
    <link type="text/css" rel="stylesheet" href="global/css/core.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/system.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/system-responsive.css"/>
    <link type="text/css" rel="stylesheet" href="assets/vendors/jquery-toastr/toastr.css"/>
    <!-- Loading Angular libs-->
    <script src="global/js/jquery-1.10.2.min.js"></script>
    <script src="js/libs/angular.js"></script>
    <script src="js/libs/angular-route.js"></script>
    <script src="js/libs/angular-ui-router.js"></script>
    <script src="js/libs/ocLazyLoad.js"></script>
    <script src="js/libs/ui-bootstrap.js"></script>
    <!-- Loading jQuery libs-->
    <script src="global/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="global/js/jquery-ui.js"></script>
    <script src="global/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="global/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
    <script src="global/js/html5shiv.js"></script>
    <script src="global/js/respond.min.js"></script>
    <script src="global/vendors/metisMenu/jquery.metisMenu.js"></script>
    <script src="global/vendors/slimScroll/jquery.slimscroll.js"></script>
    <script src="global/vendors/iCheck/icheck.min.js"></script>
    <script src="global/vendors/iCheck/custom.min.js"></script>
    <script src="assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="assets/vendors/jquery-cookie/jquery.cookie.js"></script>
    <script src="assets/vendors/bootstrap-datepaginator/moment.js"></script>
    <script src="assets/vendors/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="assets/vendors/flot-chart/jquery.flot.js"></script>
    <script src="assets/vendors/jquery-jvectormap/jquery-jvectormap-2.0.1.min.js"></script>
    <script src="assets/vendors/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/jquery-toastr/toastr.js"></script>
    <script src="assets/vendors/pace.js"></script>
    <!-- Loading core javascript-->
    <script src="js/main.js"></script>
    <!-- Loading script for each page using LazyLoad-->
  </head>
  <body ng-controller="AppController" ng-class="[header.layout_menu]" class="ng-scope layout-sidebar-collapse sidebar-color-white menu-toggle layout-header-fixed">
    <!--Modal Default-->
    <div ng-class="header.boxed" class="fluid">
      <!--BEGIN TEMPLATE SETTING-->
        <div ng-include="'templates/states/_includes/template-setting.html'" class="hidden-xs hidden-sm"></div>
      <!--END TEMPLATE SETTING-->
      <!--BEGIN TOPBAR-->
      <div ng-include="'templates/states/_includes/topbar.php'" class="page-header-topbar"></div>
      <!--END TOPBAR-->
      <!--BEGIN HORIZONTAL MENU-->
      <div ng-include="'templates/states/_includes/horizontal-menu.html'" class="page-horizontal-menu"></div>
      <!--END HORIZONTAL MENU-->
      <div id="wrapper">
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
          <!--BEGIN SIDEBAR MAIN-->
          <div ng-include="'templates/states/_includes/sidebar-main.php'" class="sidebar-main sidebar"></div>
          <!--END SIDEBAR MAIN-->
          <!--BEGIN CHAT FORM-->
          <div ng-include="'templates/states/_includes/chat-form.php'" class="chat-form-wrapper"></div>
          <!--END CHAT FORM-->
          <!--BEGIN PAGE CONTENT-->
          <div ng-class="[header.animation]" ng-generaltab="" class="page-content animated">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div ng-include="'templates/states/_includes/title-breadcrumb.html'" class="page-title-breadcrumb"></div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <div class="box-content">
              <!--BEGIN CONTENT-->
              <div ui-view="" class="content"></div>
              <!--END CONTENT-->
            </div>
          </div>
          <!--END PAGE CONTENT-->
        </div>
        <!--END PAGE WRAPPER-->
      </div>
      <!--BEGIN FOOTER-->
      <div id="footer">
        <div class="copyright"> Creado por: <a href="http://www.webevolution.com.co" target="_blank">WebEvolution</a>
          <div class="pull-left">©2015 Rapibox - Sistema de control</div>
        </div>
      </div>
      <!--END FOOTER-->
    </div>
  </body>
  <div id="color-picker-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
          <h4 id="modal-default-label" class="modal-title">Color Picker</h4>
        </div>
        <div class="modal-body">
          <form role="form" class="form-horizontal form-seperated">
            <div class="form-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-9">
                  <input type="text" class="colorpicker-default form-control"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">RGBA format</label>
                <div class="col-md-9">
                  <input type="text" data-color-format="rgba" class="colorpicker-rgba form-control"/>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div id="date-range-picker-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
          <h4 id="modal-default-label" class="modal-title">Date Range Picker</h4>
        </div>
        <div class="modal-body">
          <form role="form" class="form-horizontal form-seperated">
            <div class="form-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Date</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    <input type="text" name="daterangepicker-default" class="form-control"/>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Date & Time</label>
                <div class="col-md-7">
                  <div class="input-group">
                    <input type="text" name="daterangepicker-date-time" class="form-control"/>
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Advance Date Range Picker</label>
                <div class="col-md-6">
                  <div class="btn btn-success reportrange"><i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;<i class="fa fa-angle-down"></i>
                    <input type="hidden" name="datestart"/>
                    <input type="hidden" name="endstart"/>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div id="datetime-picker-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
          <h4 id="modal-default-label" class="modal-title">Datetime Picker</h4>
        </div>
        <div class="modal-body">
          <form role="form" name="datetime-picker" class="form-horizontal form-seperated">
            <div class="form-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-6">
                  <div class="input-group datetimepicker-default date">
                    <input type="text" name="datetime" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Disable date</label>
                <div class="col-md-6">
                  <div class="input-group datetimepicker-disable-date date">
                    <input type="text" name="time" class="form-control"/><span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Disable time</label>
                <div class="col-md-6">
                  <div class="input-group datetimepicker-disable-time date">
                    <input type="text" name="date" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Events and linked pickers</label>
                <div class="col-md-6">
                  <div class="input-group datetimepicker-start date mbl">
                    <input type="text" name="datetime_event_start" class="form-control"/><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                  <div class="input-group datetimepicker-end date">
                    <input type="text" name="datetime_event_end" class="form-control"/><span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div id="time-picker-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
          <h4 id="modal-default-label" class="modal-title">Time Picker</h4>
        </div>
        <div class="modal-body">
          <form role="form" class="form-horizontal form-seperated">
            <div class="form-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-4">
                  <div class="input-group bootstrap-timepicker">
                    <input type="text" class="timepicker-default form-control"/><span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Timepicker 24hr</label>
                <div class="col-md-4">
                  <div class="input-group bootstrap-timepicker">
                    <input type="text" class="timepicker-24hr form-control"/><span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div id="date-picker-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
          <h4 id="modal-default-label" class="modal-title">Date Picker</h4>
        </div>
        <div class="modal-body">
          <form role="form" class="form-horizontal form-seperated">
            <div class="form-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-5">
                  <input type="text" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" class="datepicker-default form-control"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Format</label>
                <div class="col-md-5">
                  <input type="text" data-date-format="mm-dd-yyyy" placeholder="mm-dd-yyyy" class="datepicker-default form-control"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Start with years</label>
                <div class="col-md-5">
                  <div class="input-group">
                    <input type="text" class="datepicker-years form-control"/>
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Range</label>
                <div class="col-md-8">
                  <div class="input-group input-daterange">
                    <input type="text" name="startdate" class="form-control"/><span class="input-group-addon">to</span>
                    <input type="text" name="enddate" class="form-control"/>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div id="clockface-picker-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
          <h4 id="modal-default-label" class="modal-title">Clockface Picker</h4>
        </div>
        <div class="modal-body">
          <form role="form" class="form-horizontal form-seperated">
            <div class="form-body">
              <div class="form-group">
                <label class="col-md-3 control-label">Default</label>
                <div class="col-md-4">
                  <input type="text" value="2:30 PM" data-format="hh:mm A" class="clockface-default form-control"/>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Clockface Inline</label>
                <div class="col-md-4">
                  <div style="padding: 0; float: left;" class="clockface-inline well"></div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div id="lightbox-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default-label" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content"><img src="" class="img img-responsive"/></div>
    </div>
  </div>
</html>