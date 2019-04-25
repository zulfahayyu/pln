<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="icon-list"></i></a>
                        Home</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ACTIVITY -->
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Activity</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-5 col-sm-12">

                                <div class="form-group">
                                    <input type="text" id="tgl" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Date *">
                                    <!-- bikin default hari ini -->
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" id="nama" class="form-control" placeholder="Nama Tugas *">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control show-tick" id="opt">
                                        <option selected disabled>Pilih Divisi</option>
                                        <option value="Divisi A">Divisi A</option>
                                        <option value="Divisi B">Divisi B</option>
                                        <option value="Divisi C">Divisi C</option>
                                        <option value="Divisi D">Divisi D</option>
                                        <option value="Divisi E">Divisi E</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="2" placeholder="Keterangan Dokumen *"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <p>try not to upload file larger than 5 MB</p>
                                    <input type="file" class="dropify icon-docs" data-max-file-size="5MB">
                                </div>
                            </div>
                        </div>
                        <div class="form-group pull-right">
                            <button type="button" class="btn btn-primary" onclick="inserttmb()">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CALENDAR -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="body">
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addevent">Add New Event</button>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <!-- POSTING -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="body">
                        <div class="timeline-item green">
                            <span class="date">Just now</span>
                            <h5>Add New Task</h5>
                            <p>Web by far While that's mock-ups and this is politics Lorem card.</p>
                            <ul class="list-unstyled team-info">
                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Bernardo Galaviz"></li>
                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Mike Litorus"></li>
                            </ul>
                        </div>
                        <div class="timeline-item warning">
                            <span class="date">6 mins ago</span>
                            <h6>Lucid Admin Code Upload on Github</h6>
                            <span>By: <a href="javascript:void(0);" title="">Jessica Doe</a></span>
                            <div class="msg">
                                <p>web by far While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-warning"></i> I am getting an error when trying to push to github. It will not let me push
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item danger">
                            <span class="date">15 mins ago</span>
                            <h6>Assigning a project team</h6>
                            <span>Team Leader: <a href="javascript:void(0);" title="">Jessica Doe</a></span>
                            <div class="msg">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="list-unstyled team-info">
                                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                                    <li><img src="<?= $site_url ?>/assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Chris Fox"></li>
                                    <li><img src="<?= $site_url ?>/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Joge Lucky"></li>
                                    <li><img src="<?= $site_url ?>/assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Isabella"></li>
                                    <li><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" data-original-title="Jeffrey Warden"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SCHEDULE -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="body">
                        <div class="event-name row">
                            <div class="col-2 text-center">
                                <h4>11<span>Dec</span><span>2018</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Conference</h6>
                                <p>Mobile World Congress 2018</p>
                                <address><i class="fa fa-map-marker"></i> 4 Goldfield Rd. Honolulu, HI
                                    96815</address>
                            </div>
                        </div>
                        <div class="event-name row">
                            <div class="col-2 text-center">
                                <h4>13<span>Dec</span><span>2018</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Birthday</h6>
                                <p>Today, guests are getting in on the action</p>
                                <address><i class="fa fa-map-marker"></i> 4 Goldfield Rd. Honolulu, HI
                                    96815</address>
                            </div>
                        </div>
                        <hr>
                        <div class="event-name row">
                            <div class="col-2 text-center">
                                <h4>09<span>Dec</span><span>2018</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Repeating Event</h6>
                                <p>Before there were tech conferences, there was Disrupt.</p>
                                <address><i class="fa fa-map-marker"></i> 44 Shirley Ave. West Chicago,
                                    IL
                                    60185</address>
                            </div>
                        </div>
                        <hr>
                        <div class="event-name row">
                            <div class="col-2 text-center">
                                <h4>16<span>Dec</span><span>2018</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Repeating Event</h6>
                                <p>It is a long established fact that a reader will be distracted</p>
                                <address><i class="fa fa-map-marker"></i> 123 6th St. Melbourne, FL
                                    32904</address>
                            </div>
                        </div>
                        <div class="event-name row">
                            <div class="col-2 text-center">
                                <h4>28<span>Dec</span><span>2018</span></h4>
                            </div>
                            <div class="col-10">
                                <h6>Google</h6>
                                <p>Google Hardware and Pixel 2 Launch</p>
                                <address><i class="fa fa-map-marker"></i> 514 S. Magnolia St. Orlando,
                                    FL
                                    32806</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Default Size -->
<div class="modal animated jello" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <form action="<?= $site_url ?>/proses/model_event.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Event Title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control show-tick" name="priority">
                            <option selected disabled>Priority</option>
                            <option value="bg-danger">High</option>
                            <option value="bg-warning">Medium</option>
                            <option value="bg-success">Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                <input type="text" class="input-sm form-control" name="start" placeholder="start date" required>
                                <span class="input-group-addon text-center" style="width: 40px;">to</span>
                                <input type="text" class="input-sm form-control" name="end" placeholder="end date" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="location" placeholder="Location" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea class="form-control no-resize" rows="4" name="description" placeholder="Event Description..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>