<!doctype html>
<html lang="en">


<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Task List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Task</li>
                        <li class="breadcrumb-item active">Task List</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                    <a href="<?= $site_url ?>/task/add" class="btn btn-primary" >Add New Task</a>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body project_report">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom m-b-0">
                                <thead>
                                    <tr>
                                        <th>Task Name</th>
                                        <th>Deadline</th>
                                        <th>Prograss</th>
                                        <th>Lead</th>
                                        <th>Team</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="project-title">
                                            <h6>InfiniO 4.1</h6>
                                            <small>Created 14 July, 2018</small>
                                        </td>
                                        <td>8 Aug, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                            </div>
                                            <small>Completion with: 48%</small>
                                        </td>
                                        <td><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addTaskLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Add New Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Task *" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mr">
                            <input type="text" data-provide="datepicker" data-date-autoclose="true" name="tgl_mulai" class="form-control" placeholder="Tanggal Mulai *">
                            <!-- bikin default hari ini -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mr">
                            <input type="text" data-provide="datepicker" data-date-autoclose="true" name="tgl_akhir" class="form-control" placeholder="Tanggal Berakhir *">
                            <!-- bikin default hari ini -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('.knob').knob({
        draw: function() {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv) // Angle
                    ,
                    sa = this.startAngle // Previous start angle
                    ,
                    sat = this.startAngle // Start angle
                    ,
                    ea // Previous end angle
                    , eat = sat + a // End angle
                    ,
                    r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor &&
                    (sat = eat - 0.3) &&
                    (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor &&
                        (sa = ea - 0.3) &&
                        (ea = ea + 0.3);
                    this.g.beginPath();
                    this.g.strokeStyle = this.previousColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                    this.g.stroke();
                }

                this.g.beginPath();
                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                this.g.stroke();

                this.g.lineWidth = 2;
                this.g.beginPath();
                this.g.strokeStyle = this.o.fgColor;
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3,
                    0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });

    $('#linecustom1').sparkline('html', {
        height: '55px',
        width: '100%',
        lineColor: '#a095e5',
        fillColor: '#a095e5',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#e2a8df',
        spotRadius: 0
    });

    $('#linecustom2').sparkline('html', {
        height: '55px',
        width: '100%',
        lineColor: '#75c3f2',
        fillColor: '#75c3f2',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#8dbfe0',
        spotRadius: 0
    });

    $('#linecustom3').sparkline('html', {
        height: '55px',
        width: '100%',
        lineColor: '#fc7b92',
        fillColor: '#fc7b92',
        minSpotColor: true,
        maxSpotColor: true,
        spotColor: '#e0b89d',
        spotRadius: 0
    });
</script>