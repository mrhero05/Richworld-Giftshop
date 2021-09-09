<?php
include 'include/head.inc.php';
include 'include/nav.inc.php';
?>

<div class="col-lg-10">
    <div class="row">
        <div class="request-header">
            <h2>Request Leave</h2>
        </div>
        <div class="col-lg-7 leave-list">
            <h4>Leave List</h4>

            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Leave Type</th>
                    <th scope="col">From Date</th>
                    <th scope="col">To Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Kenneth Pole</td>
                    <td>12/22/21</td>
                    <td>12/22/22</td>
                    <td>Sick Leave</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Daryl Rodriguez</td>
                    <td>12/22/21</td>
                    <td>12/22/22</td>
                    <td>Sick Leave</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mark Angelo Reynante</td>
                    <td>12/22/21</td>
                    <td>12/22/22</td>
                    <td>Sick Leave</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="col-lg-4 create-leave">
            <h4>Create Request Leave </h4>

            <div class="leave-info">
                <label for="fullname">Full Name</label>
                <br>
                <input type="text" name="fullname" id="fullname">
                <br>
                <label for="floatingSelect">Leave Type</label>
                <!-- <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="tanswer">

                </select> -->

                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Options</option>
                    <option value="1">Sick Leave</option>
                    <option value="2">Vacation Leave</option>
                    <option value="3">Parental Leave</option> 
                    <option value="4">Public Holiday</option> 
                    <option value="5">Maternity Leave</option> 
                    <option value="6">Paternity Leave</option> 
                    <option value="7">Compensatory Leave</option> 
                    <option value="8">Unpaid Leave</option> 
                  </select>
                  <div class="leave-date">
                    <label class="left-date">From Date</label>
                    <label class="right-date">To Date</label>
                  </div>
                <br>
                <button type="submit" name="submit">Post</button>  
                </div>  
            </div>
        </div>
    </div>
</div>