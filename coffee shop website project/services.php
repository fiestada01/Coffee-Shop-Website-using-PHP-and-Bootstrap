<?php

include('connection.php');
session_start();

  global $conn;

  $check_login = $conn->query("SELECT
                            users.*,
                            user_logs.is_login,
                            user_logs.created_at as date_logs
                          FROM users LEFT JOIN user_logs ON users.id = user_logs.users_id
                          ORDER BY user_logs.created_at DESC");
  $cl = mysqli_fetch_assoc($check_login);

  if ($cl['is_login'] == 1) {
    include('userheader.php');
  }else{
    include('header.php');
  }

?>

<div class="container services">
    <p class="h1 text-center font-title my-5">SERVICES</p>
</div>

<div class="container-fluid">
<div class="row py-4" id="card">
        <div class="col-sm">
            <div class="card text-center " id="card-border">
                <img src="image/transpo/advance-order.jpg" class="card-img-top card-radius" alt="...">
                <div class="card-body text-center">
                    <div class="col-3 checkout text-center">
					    <button class="btn btn-lightbrown">ADVANCE ORDER</button>
				    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" id="card-border">
                <img src="image/transpo/pickup.jpg" class="card-img-top card-radius" alt="...">
                <div class="card-body text-center">
                    <div class="col-3 checkout text-center">
					    <button class="btn btn-lightbrown">PICK-UP</button>
				    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" id="card-border">
                <img src="image/transpo/deliver.jpg" class="card-img-top card-radius" alt="...">
                <div class="card-body text-center">
                    <div class="col-3 checkout text-center">
					    <button class="btn btn-lightbrown">DELIVERY</button>
				    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include_once 'footer.php'
?>
