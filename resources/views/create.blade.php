<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ubu-studentloan</title>
    <link rel="shortcut icon" href="https://i.ibb.co/2sFrKKd/cri.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;200;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<style>
    * {
        font-family: 'K2D', sans-serif;
        padding: 0;
        margin: 0 auto;
    }
    .ma-con {
        padding-top: 2rem;
    }

    .con {
        margin-bottom: 5rem;
        padding: 5rem;

    }

    .img {
        width: 120px;
        height: 96px;
    }

    .pa-head {
        display: inline;
    }

    .head {
        background: linear-gradient(#00289D, #3C6FE7);
        color: white;
    }

    .submit.btn.color {
        background-color: white;
        color: #3C6FE7;
        border: 2px solid #3C6FE7;
    }

    .submit.btn.color:hover {
        background-color: #3C6FE7;
        color: white;
    }

    .back.btn.color {
        background-color: white;
        color: #E74C3C;
        border: 2px solid #E74C3C;
    }

    .back.btn.color:hover {
        background-color: #E74C3C;
        color: white;
        
    }
    .nav_b:hover{
        text-decoration: none;
    }
</style>

<body>
    <div class="container-fluid  ma-con">
        <div class="jumbotron  text-center head">
            <div class="pa-head">
                <p>( *ใช้เพื่อการศึกษา <b>1143111-59 Web Programing</b> )</p>
                <div>
                    <img src="https://i.ibb.co/2sFrKKd/cri.png" alt="logo-cri" class="d-inline-block align-text-top img">
                    <img src="https://i.ibb.co/Fh0y04R/U-logo.png" alt="U-logo" class="d-inline-block align-text-top img">
                </div>
                <hr>
                <h2>ระบบจัดการข้อมูลการกู้ กยศ. มหาวิทยาลัยอุบลราชธานี</h2>
            </div>
        </div>
        <H1 class="text-center">เพิ่มข้อมูลนักศึกษา ผู้กู้ยืม กยศ. </h1>
        <div class="con">
            <form action="/index" method="post">
                {{csrf_field()}}
                <div>
                    <div class="row form-group">
                        <label class="col-sm-4 ">รหัสนักศึกษา :</label>
                        <div class="col-sm-8 ">
                            <input type="text" class="form-control" id="stdid" placeholder="กรอกรหัสนักศึกษา" name="stdid" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-4 ">ชื่อ-สกุล :</label>
                        <div class="col-sm-8 ">
                            <input type="text" class="form-control" id="stdname" placeholder="กรอกชื่อ - สกุล" name="stdname" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-4 ">คณะสังกัด :</label>
                        <div class="col-sm-8 ">
                            <select class="form-control" id="faculty" name="faculty" required>
                                <option value="none" selected>--เลือก--</option>
                                <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
                                <option value="เกษตรศาสตร์">เกษตรศาสตร์</option>
                                <option value="วิศวกรรมศาสตร์">วิศวกรรมศาสตร์</option>
                                <option value="ศิลปศาสตร์">ศิลปศาสตร์</option>
                                <option value="เภสัชศาสตร์">เภสัชศาสตร์</option>
                                <option value="บริหารศาสตร์">บริหารศาสตร์</option>
                                <option value="พยาบาลศาสตร์">พยาบาลศาสตร์</option>
                                <option value="วิทยาลัยแพทยศาสตร์และการสาธารณสุข">วิทยาลัยแพทยศาสตร์และการสาธารณสุข</option>
                                <option value="ศิลปประยุกต์และสถาปัตยกรรมศาสตร์">ศิลปประยุกต์และสถาปัตยกรรมศาสตร์</option>
                                <option value="นิติศาสตร์">นิติศาสตร์</option>
                                <option value="รัฐศาสตร์">รัฐศาสตร์</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-4 ">ประเภทที่กู้:</label>
                        <div class="col-sm-8 ">
                            <select class="form-control" id="type" name="type" required>
                                <option value="none" selected>--เลือก--</option>
                                <option value="กยศ.">กยศ.</option>
                                <option value="กรอ.">กรอ.</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-4 ">ปีการศึกษา :</label>
                        <div class="col-sm-8 ">
                            <input type="number" class="form-control" id="year" placeholder="ปีการศึกษา เช่น 2564" name="year" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-4 ">ภาคเรียน :</label>
                        <div class=" col-sm-8 ">
                            <select class=" form-control" id="term" name="term" required>
                                <option value="none" selected>--เลือก--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-4 ">ค่าเทอม :</label>
                        <div class="col-sm-8 ">
                            <input type="number" class="form-control" id="termfees" placeholder="กรอกค่าเทอมตามจริง" name="termfees" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-sm-4 ">ค่าครองชีพ :</label>
                        <div class="col-sm-8 ">
                            <input readonly type="number" class="form-control" id="livecost" value="18000" placeholder="18,000" name="livecost" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row form-group">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-8 ">
                        <button type="submit" class="btn submit btn-lg btn-block color">Submit</button>
                    </div>
                </div>
                @if(count($errors))
                <div class="form-group">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </form>
            <br>
            <div class="row form-group">
                <div class="col-sm-4">
                    <a class="nav_b nav-link" href="{{ url('/index') }}">
                        <button type="button" class="btn back btn-lg btn-block color">Back</button>
                        <br>
                    </a>
                </div>
                <div class="col-sm-8"></div>
            </div>

        </div>

</body>

</html>