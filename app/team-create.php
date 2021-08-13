<?php
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
?>


<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0" id="mainPanel" style="height: 35rem">
    <!-- Page Heading -->
    <h3 class="text-center bg-primary text-white p-0 m-0 shadow">Create Team</h3>

    <div class="p-3">
        <form action="">
            <form>
                <div class="row d-flex">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label for="projectname" class="form-label">Project Name</label>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <input type="text" class="form-control" id="projectname"
                                        aria-describedby="projectHelp">
                                </div>
                                <div class="col-4">
                                    <h6>Abailable</h6>
                                </div>
                            </div>
                            <div id="projectHelp" class="form-text m-0">Select an unique project name.</div>
                        </div>


                        <div class="mb-3">
                            <label for="project-descriptions" class="form-label">Project Descriptions</label>
                            <textarea class="form-control" rows="5" id="project-descriptions"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-3">
                        <h4>Add Members <button class="text-dark border-0 shadow bg-white rounded-3 dorpdown"><i
                                    class="fas fa-user-plus"></i></button></h4>
                        <div class="row d-flex align-items-center">
                            <div class="col-5">
                                <label for="projectname" class="form-label">Members Name</label>
                            </div>
                            <div class="col-5">
                                <label for="projectname" class="form-label">Members Role</label>
                            </div>
                        </div>

                        <div class="row d-flex align-items-center">
                            <div class="col-5">
                                <input type="text" class="form-control" id="projectname" aria-describedby="projectHelp">
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" id="projectname" aria-describedby="projectHelp">
                            </div>
                            <div class="col-2">
                                <i class="fas fa-trash-alt shadow"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </form>
    </div>
</div>
<!-- CONTENT SECTION END -->


<?php
    require_once "includes/footer.php";
?>
<!-- COMMON JAVASCRIPT CODE -->
<script src="js/common.js"></script>