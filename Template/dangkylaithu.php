<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký lái thử</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/dangkylaithu.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Đăng ký lái thử</h2>
                    <form id="msform" action="https://formspree.io/f/xgerpbgd"  method="POST">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Chọn Xe</strong></li>
                            <li id="personal"><strong>Đặt lịch hẹn</strong></li>
                            <li id="payment"><strong>Thông tin</strong></li>
                            <li id="confirm"><strong>Hoàn tất</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>  <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Chọn mẫu xe</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 1 - 4</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/9.png">
                                                <input type="radio"  value="WIGO 5MT" name="Mẫu Xe:" checked>
                                                WIGO 5MT
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/Audi_R8-removebg-preview.png">
                                                <input type="radio" value="Adui R8" name="Mẫu Xe:">
                                                Audi R8
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/roll_royce.png">
                                                <input type="radio" value="Roll Royce" name="Mẫu Xe:">
                                                Roll Royce 
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/roll_royce.png">
                                                <input type="radio" value="Roll Royce" name="Mẫu Xe:">
                                                Roll Royce 
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/roll_royce.png">
                                                <input type="radio" value="Roll Royce" name="Mẫu Xe:">
                                                Roll Royce 
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/Lamborghini-Huracan-removebg-preview.png">
                                                <input type="radio" value="Lamborghini Huracan" name="Mẫu Xe:">
                                                Lamborghini Huracan
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/Nissan_GTR-removebg-preview.png">
                                                <input type="radio" value="Nissan GTR" name="Mẫu Xe:">
                                                 Nissan GTR
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/maybach_s650-removebg-preview.png">
                                                <input type="radio" value="Maybach S650" name="Mẫu Xe:">
                                                 Maybach S650
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/land_rover-removebg-preview.png">
                                                <input type="radio" value="Land Rover Discovery" name="Mẫu Xe:">
                                                Land Rover Discovery
                                            </label>
                                        </div>    
                                    </div>
                                    <div class="col">
                                        <div class="form-check-inline">
                                            <label class="">
                                                <img  src="images/asian/bentley-removebg-preview.png">
                                                <input type="radio" value="Bentley" name="Mẫu Xe:">
                                                Bentley
                                            </label>
                                        </div>    
                                    </div>
                                </div>
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Tiếp" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Đặt lịch hẹn</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 2 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels" name="Ngày Dự Kiến:">Ngày dự kiến (*) </label> 
                                <input type="date" name="Thời Gian Dự Kiến:"/> 
                                <label class="fieldlabels">Thời gian dự kiến (*)</label>
                                <select>
                                    <option>Chọn giờ</option>
                                    <option>08:00 - 09:00</option>
                                    <option>09:00 - 10:00</option>
                                    <option>10:00 - 11:00</option>
                                </select> 
                                <label class="fieldlabels">Đại lý (*)</label>
                                <select  name="Đại Lý:">
                                    <option>Chọn đại lý</option>
                                    <option>Toyota Bến Thành</option>
                                    <option>Toyota Bến Thành</option>
                                    <option>Toyota Bến Thành</option>
                                    <option>Toyota Bến Thành</option>
                                    <option>Toyota Bến Thành</option>
                                </select>
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Tiếp" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Quay lại" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Thông tin</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 3 - 4</h2>
                                    </div>
                                </div> 
                                <label class="fieldlabels" >Danh xưng (*)</label>
                                <select name="Danh Xưng:">
                                    <option>Chọn</option>
                                    <option>Ông</option>
                                    <option>Bà</option>
                                    <option>Anh</option>
                                    <option>Chị</option>
                                </select> 
                                <label  class="fieldlabels">Họ tên (*)</label>
                                <input  name="Họ Tên :"type="text" name="pic" placeholder="Trần lê">
                                <input  name="Tên"type="text" name="pic" placeholder="Nam">
                                <label  class="fieldlabels">Email</label>
                                <input  name="Email:"type="email" name="pic" placeholder="abc@example.com">
                                <label  class="fieldlabels">Ghi chú</label>
                                <textarea name="Ghi Chú:"></textarea> 
                            </div>  
                            <input type="button" name="next" class="next action-button" value="Tiếp" />                         
                            <input type="button" name="previous" class="previous action-button-previous" value="Quay lại" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Hoàn tất đăng ký</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <div class="row">
                                    <div class='console-container'>
                                        <span id='text'></span>
                                    </div>
                                <!-- <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                     <button type="submit" class="btn btn-info btn-fill pull-right">Đăng Ký</button>
                                    </div>
                                </div>   -->
                                </div>
                                <br><br>

                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                     <button type="submit" class="btn btn-info btn-fill pull-right">Xác Nhận</button>
                                    </div>
                                </div>  
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/dangkylaithu.js"></script>
</body>
</html>