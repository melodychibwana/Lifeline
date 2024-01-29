<?php 
include "connection.php";

$sql = "SELECT * FROM `doctors`";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="row media-contant">
        <div class="col-12 col-lg-6">
            <div class="card card-statistics media-contant">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="mt-0"><p>Doctor</p><?php echo $row['firstname']  ?></h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="media">
                        <img class="mr-3 mb-3 mb-xxs-0 img-fluid" src="images/<?php echo $row["image"]; ?>" width="250" height="250">
                        <div class="media-body">
                            <h5>Department <i class="fa fa-building-o"></i></h5>
                            <?php echo $row['department']; ?>
                            <br>
                            <!-- Button to open the modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#chatModal<?php echo $row["id"]; ?>">
                                <i class="fa fa-comment"></i> Chat
                            </button>

                            <!-- Chat Modal -->
                            <div class="modal fade" id="chatModal<?php echo $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="chatModalLabel">Chat with <?php echo $row['firstname']; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                       <div class="modal-body">
                <!-- Adjust width and height of the textarea -->
                <textarea id="chatInput<?php echo $row["id"]; ?>" style="width: 100%; height: 200px;" placeholder="Type your message..."></textarea>
            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" onclick="sendMessage(<?php echo $row["id"]; ?>)">Send Message</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
<?php
}
?>

<!-- JavaScript for Chat Modal -->
<script>
    function sendMessage(doctorId) {
        // Implement logic to send a message to the doctor
        // You can use AJAX to send the message to the server and save it in the database.
        // Example: sendChatMessage(doctorId, message);
        // After sending the message, you may want to close the modal.
        $('#chatModal' + doctorId).modal('hide');
    }
</script>
