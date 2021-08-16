<?php
    require_once "includes/header.php";
    require_once "includes/topbar.php";
    require_once "includes/sidebar.php";
?>

<?php
    require_once '..\config.php';
    $workId = $_GET['workId'];
    $sql = "SELECT * from work where work_id='$workId'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
?>
<!-- CONTENT SECTION START -->
<div class="col-12 col-md-9 bg-white  border rounded-3 p-0 overflow-hidden" id="mainPanel" style="height: 30rem">
    <h4 class="text-center bg-primary text-white p-0 m-0 shadow d-flex justify-content-between">
        <div class="text-center">
            <a href="worklog.php?workId=<?php echo $workId;?>" class="btn btn-light btn-sm shadow mx-2" href="">Work
                Log</a>
        </div>
        <span>
            Project Name: <?php echo $row['work_name'];?>
        </span>

        <span>
            Project ID: <?php echo $workId;?>
        </span>



    </h4>

    <div class="h-100 p-3" style="overflow-y: scroll;">
        <div class="row">
            <div class="col-12 col-md-6  my-2">
                <h5 class="">About Project:</h5>
                <?php echo $row['work_desc'];?>
            </div>
            <div class="col-12 col-md-6  my-2">
                <!-- <form id="addMembers" class="d-flex">
                    <div class="mx-1">
                        <input type="text" placeholder="Members Email" class="form-control" id="MembersEmail" required>
                    </div>
                    <div class="mx-1">
                        <input type="text" placeholder="Members Role" class="form-control" id="MembersRole" required>
                    </div>
                    <input type="hidden" id="inputTeamId" name="teamId" value="<?php echo $teamId;?>">
                    <div class="mx-1">
                        <button id="addMemberSubmit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </form> -->

                <form id="addTeamToWork" class="d-flex">
                    <h5>About Team:</h5>
                    <div class="mx-1">
                        <input type="text" placeholder="Team ID" class="form-control" name="teamId" id="teamId" required>
                    </div>
                    <input type="hidden" id="inputTeamId" name="workId" value="<?php echo $workId;?>">
                    <div class="mx-1">
                        <button id="addMemberSubmit" class="btn btn-primary btn-sm">Add</button>
                    </div>
                </form>
                <div id="members-table">
                    <?php
                    $sql1 = "SELECT * from works_member where works_id='$workId'";
                    $result1 = $conn->query($sql1);
                    echo '<table class="table table-hover table-striped">';
                        echo '<thead>';
                            echo '<tr>';
                                echo '<td> Members Email </td>';
                                echo '<td> Role </td>';
                            echo '</tr>';
                        echo '</thead>';
                        echo '<body>';
                        

                    while($row1 = $result1->fetch_assoc()) {
                        echo '<tr>';
                            echo '<td>';
                                echo $row1['members_email'];
                            echo '</td>';
                            echo '<td>';
                                echo $row1['members_role'];
                            echo '</td>';
                        echo '</tr>';

                    }
                    
                    echo '</body>';
                    echo '</table>';
                }?>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-6">
                <h5>Project File</h5>
                <div>
                    <h6>File 1</h6>
                    <h6>File 1</h6>
                    <h6>File 1</h6>
                </div>
            </div>
            <div class="col-6">
                <h5>Work Log</h5>
                <div>
                    <h6>File 1</h6>
                    <h6>File 1</h6>
                    <h6>File 1</h6>
                </div>
            </div>
        </div> -->
    </div>
</div>
</div>



<!-- CONTENT SECTION END -->

<?php
    require_once "includes/footer.php";
?>
<!-- COMMON JAVASCRIPT CODE -->
<script src="js/common.js"></script>

<script>
$(document).ready(function() {

    // $("#addMemberSubmit").click(
    //     function() {
    //         var MembersEmail = $("#MembersEmail").val().trim();
    //         var MembersRole = $("#MembersRole").val().trim();
    //         $.ajax({
    //             url: 'add-members.php',
    //             type: 'post',
    //             data: {
    //                 MembersEmail: MembersEmail,
    //                 MembersRole: MembersRole,
    //                 teamId : $teamId
    //             },
    //             success: function(response) {

    //                 $('#tname_response').html(response);

    //             }
    //         });
    //     }
    //     event.preventDefault();
    // );

    // $("#addMemberSubmit").click(function() {
    //     var formData = {
    //         MembersEmail: $("#MembersEmail").val(),
    //         MembersRole: $("#MembersRole").val(),
    //         teamId: $("#inputTeamId").val()
    //     };
    //     $.ajax({
    //         type: "POST",
    //         url: "add-member.php",
    //         data: formData,
    //         dataType: "json",
    //         success: function(data) {
    //             //alert(data);
    //             //$('#exampleModal').html(data);
    //             alert(data);
    //         }

    //     });

    //     //event.preventDefault();
    // });

    $("#addTeamToWork").on("submit", function(e) {
        var dataString = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "add-team-to-work.php",
            data: dataString,
            success: function(data) {
                // Display message back to the user here
                //alert(data);
                $('#addTeamToWork').html(data);
            }
        });

        e.preventDefault();
    });

});
</script>