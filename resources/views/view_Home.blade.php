<!DOCTYPE html>
<html>

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

    .pa-head {
        display: inline;
    }


    .tool {
        margin-right: 5px;
        width: 25px;
        height: 25px;
    }

    .head {
        background: linear-gradient(#00289D, #3C6FE7 );
        color: white;
    }

    .color {
        float: right;
        padding-right: 10rem;
        padding-left: 10rem;
        background-color: #F0B800;
        color: white;
        margin-top: 2rem;
        margin-bottom: 4rem;
    }

    .btn.color {
        background-color: white;
        color: #00b300;
        border: 2px solid #00b300;
    }

    .btn.color:hover {
        background-color: #00b300;
        color: white;
    }

    
</style>

<body>
    <div class="container-fluid  ma-con">
        <div class="jumbotron text-center head">
            <div class="pa-head">
                <p>( *ใช้เพื่อการศึกษา <b>1143111-59 Web Programing</b> )</p>
                <div>
                    <img src="https://i.ibb.co/2sFrKKd/cri.png" alt="logo-cri" width="120" height="96" class="d-inline-block align-text-top">
                    <img src="https://i.ibb.co/Fh0y04R/U-logo.png" alt="U-logo" width="100" height="96" class="d-inline-block align-text-top">
                </div>
                <hr>
                <h2>ระบบจัดการข้อมูลการกู้ กยศ. มหาวิทยาลัยอุบลราชธานี</h2>

            </div>
        </div>

        <br />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif

        <a class="nav-link" href="{{ url('/create') }}">
            <button type="submit" class="btn btn-lg color btn-success">เพิ่มข้อมูล</button>
            <br>
        </a>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>รหัสนักศึกษา</th>
                    <th>ชื่อ-สกุล</th>
                    <th>คณะสังกัด</th>
                    <th>ประเภทที่กู้</th>
                    <th>ปีการศึกษา</th>
                    <th>ภาคเรียน</th>
                    <th>ค่าเทอม</th>
                    <th>ค่าครองชีพ</th>
                    <th colspan="2">เครื่องมือ</th>
                </tr>
            </thead>

            <tbody>
                <!-- loop of pull data on database -->
                <?php foreach ($studentloads as $tmp) { ?>
                    <tr>
                        <!-- show data on database -->
                        <!-- <td> {{$tmp['id']}} </td> -->
                        <td> {{$tmp['stdid']}} </td>
                        <td> {{$tmp['stdname']}} </td>
                        <td> {{$tmp['faculty']}} </td>
                        <td> {{$tmp['type']}} </td>
                        <td> {{$tmp['year']}} </td>
                        <td> {{$tmp['term']}} </td>
                        <td> {{number_format($tmp['termfees'])}} </td>
                        <td> {{number_format($tmp['livecost'])}} </td>

                        <!-- show Action of database -->
                        <td><a href="{{action('App\Http\Controllers\StudentloadController@edit', $tmp['id'])}}" class="btn btn-warning">Edit</a></td>
                        <!-- <td>
                            <a class="nav-link" href="{{ url('/students_edit') }}">
                                <button type="submit" class="btn btn-lg btn-warning">Create</button>
                            </a>
                        </td> -->
                        <td>
                            <form action="{{action('App\Http\Controllers\StudentloadController@destroy', $tmp['id'])}}" method="post" onsubmit="return confirm('Do you want to delete')">
                                <!-- csrf .. >> ช่วยในการส่งข้อมูล id ไปยัง destoy-->
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>



                    </tr>

                <?php } ?>

            </tbody>
        </table>

    </div>
</body>

</html>