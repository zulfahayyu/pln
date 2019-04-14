<!doctype html>
<html lang="en">


<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/taskboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 05:19:35 GMT -->

<head>
    <title>:: PLN :: Task Board</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="logo_single.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- TASK BOARD & PERCENTAGE -->
    <link rel="stylesheet" href="../assets/vendor/nestable/jquery-nestable.css" />
    <link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-orange">

    <?php  require_once 'page_loader.php' ?>
    <!-- Overlay For Sidebars -->
    <div id="wrapper">

        <?php require_once 'navbar.php' ?>
        <?php require_once 'sidebar.php' ?>
        
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="icon-list"></i></a>
                                Task Board</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item">Task Board</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- TAB PERCENTAGE -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                <div class="card tasks_report">
                                    <div class="body">
                                        <input type="text" class="knob" value="66" data-width="90" data-height="90"
                                            data-thickness="0.1" data-fgColor="#26dad2" readonly>
                                        <h6 class="m-t-20">Projects Clear</h6>
                                        <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TASK BOARD -->
                    <div class="col-lg-4 col-md-12">
                        <div class="card l-coral text-white planned_task">
                            <div class="header">
                                <!-- <h2>Planned</h2> -->
                                <ul class="header-dropdown">
                                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i
                                                class="icon-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <h6>Dashbaord</h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                                <ul class="list-unstyled team-info m-t-20">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <h6>New project</h6>
                                                <p>It is a long established fact that a reader will be distracted.</p>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="3">
                                            <div class="dd-handle">
                                                <h6>Feed Details</h6>
                                                <p>here are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered.</p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="card l-amber text-white progress_task">
                            <div class="header">
                                <h2>In progress</h2>
                                <ul class="header-dropdown">
                                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i
                                                class="icon-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <h6>New Code Update</h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry.</p>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <h6>Meeting</h6>
                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                                    below for those interested. Sections 1.10.32 and 1.10.33 from "de
                                                    Finibus Bonorum et Malorum" by Cicero</p>
                                                <ul class="list-unstyled team-info m-t-20">
                                                    <li><img src="../assets/images/xs/avatar7.jpg" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar9.jpg" title="Avatar" alt="Avatar"></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="card l-green text-black completed_task">
                            <div class="header">
                                <h2>Completed</h2>
                                <ul class="header-dropdown">
                                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i
                                                class="icon-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <h6>Job title</h6>
                                                <p>If you are going to use a passage of Lorem Ipsum, you need to be
                                                    sure there isn't anything embarrassing hidden in the middle of
                                                    text.</p>
                                                <ul class="list-unstyled team-info m-t-20">
                                                    <li><img src="../assets/images/xs/avatar4.jpg" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar6.jpg" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar8.jpg" title="Avatar" alt="Avatar"></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                <h6>Event Done</h6>
                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                    It has roots in a piece of classical</p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- List Task -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="body project_report">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom m-b-0">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
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
                                        <tr>
                                            <td class="project-title">
                                                <h6>Many desktop publishing packages and web</h6>
                                                <small>Created 18 July, 2018</small>
                                            </td>
                                            <td>18 Aug, 2018</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>                                                
                                                </div>
                                                <small>Completion with: 78%</small>
                                            </td>
                                            <td><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td class="project-actions">
                                                <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>iNext - One Page Responsive Template</h6>
                                                <small>Created 14 July, 2018</small>
                                            </td>
                                            <td>22 Aug, 2018</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>                                                
                                                </div>
                                                <small>Completion with: 29%</small>
                                            </td>
                                            <td><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-default">InActive</span></td>
                                            <td class="project-actions">
                                                <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>Massive Event - Conference and Event</h6>
                                                <small>Created 18 July, 2018</small>
                                            </td>
                                            <td>25 Sept, 2018</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>                                                
                                                </div>
                                                <small>Completion with: 100%</small>
                                            </td>
                                            <td><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-danger">Closed</span></td>
                                            <td class="project-actions">
                                                <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>Oakleaf Admin - Bootstrap html5 with SASS</h6>
                                                <small>Created 18 July, 2018</small>
                                            </td>
                                            <td>29 Aug, 2018</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%;"></div>                                                
                                                </div>
                                                <small>Completion with: 13%</small>
                                            </td>
                                            <td><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
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
                                        <tr>
                                            <td class="project-title">
                                                <h6>InfiniO 4.1</h6>
                                                <small>Created 14 July, 2018</small>
                                            </td>
                                            <td>05 Sept, 2018</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                                </div>
                                                <small>Completion with: 48%</small>
                                            </td>
                                            <td><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
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
                                        <tr>
                                            <td class="project-title">
                                                <h6>Many desktop publishing packages and web</h6>
                                                <small>Created 18 July, 2018</small>
                                            </td>
                                            <td>15 Sept, 2018</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>                                                
                                                </div>
                                                <small>Completion with: 78%</small>
                                            </td>
                                            <td><img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-success">Active</span></td>
                                            <td class="project-actions">
                                                <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>InfiniO 4.2</h6>
                                                <small>Created 14 July, 2018</small>
                                            </td>
                                            <td>25 Sept, 2018</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                                </div>
                                                <small>Completion with: 48%</small>
                                            </td>
                                            <td><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td class="project-actions">
                                                <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="project-title">
                                                <h6>Startup - OnePage Business Corporate Template</h6>
                                                <small>Created 14 July, 2018</small>
                                            </td>
                                            <td>26 Sept, 2018</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>                                                
                                                </div>
                                                <small>Completion with: 56%</small>
                                            </td>
                                            <td><img src="../assets/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar9.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-warning">Pending</span></td>
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
            </div>
        </div>

    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <!-- TASK BOARD -->
    <script src="../assets/vendor/nestable/jquery.nestable.js"></script> <!-- Jquery Nestable -->
    <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js -->
    <script src="assets/js/pages/ui/sortable-nestable.js"></script>
    <script src="assets/js/pages/ui/dialogs.js"></script>
    <!-- PERCENTAGE -->
    <script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
    <script src="assets/js/widgets/infobox/infobox-1.js"></script>
    <script>
        $('.knob').knob({
            draw: function () {
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
</body>

<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/taskboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 05:19:35 GMT -->

</html>