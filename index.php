<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>63116503</title>

    <style>
        .bg1 {
            text-align: center;
            background-color: #80deea;
        }

        .bg2 {
            background-color: #e1f5fe;
        }

        .bg3 {
            text-align: center;
        }

    </style>

    <div class="bg3">
        <h1>K-pop</h1>
        <p>GOT7</p>
    </div>

    <div class="container">
        <div>
            <img src=" https://f.ptcdn.info/214/050/000/ononbjjl5RFheSJGJpq-o.jpg" class="img-fluid" alt="...">
        </div>

        <div class="bg3">
            <p><h1>Mark Tuan</h1></p>
        </div>

</head>

<br>

<body class="bg2">
    <div class="row">
        <div class="col-3"></div>

        <div class="col-4">
            <img src="https://i.pinimg.com/564x/3b/ed/9c/3bed9ca0f4bd019c46a1a9d9c82629ad.jpg" class="img-fluid"
                alt="Mark">
            <p class="card text">มาร์ก ต้วน เกิดวันที่ 4 กันยายน ค.ศ. 1993 เป็นนักร้อง นักเต้น นักแต่งเพลง
                สัญชาติอเมริกัน-ไต้หวัน
                เป็นหนึ่งในสมาชิกวงก็อตเซเวน ประเทศเกาหลีใต้ เริ่มเข้าสู่วงการบันเทิงตั้งแต่ พ.ศ. 2557
                มีความสามารถพิเศษด้านศิลปะการต่อสู้เป็นบุตรคนที่สาม มีพี่สาว 2 คนและน้องชายอีก 1 คน
                ตอนที่เขายังเด็กไม่ได้สนใจที่จะเป็นนักร้อง แต่ในปี ค.ศ. 2010
                ทางค่ายเจวายพีได้เข้ามารับสมัครออดิชั่นเพื่อเป็นศิลปินที่โรงเรียนของเขา มาร์กไม่ได้สนใจ</p>
        </div>

        <div class="col-4">
            <img src="https://i.pinimg.com/564x/3b/ed/9c/3bed9ca0f4bd019c46a1a9d9c82629ad.jpg" class="img-fluid"
                alt="Mark">
            <p class="card text"> จนกระทั่งได้รับการผลักดันจากพ่อแม่และทางโรงเรียนบอกให้เขาเข้ารับการคัดเลือก
                มาร์กจึงตัดสินใจเข้าร่วมจนได้รับคัดเลือก ซึ่งเป็นครั้งแรกที่เขาได้ขึ้นแสดงบนเวที
                การฝึกอบรมของเขาใช้เวลาประมาณ 3 ปีครึ่งก่อนที่จะรวมกับสมาชิกอีก 6 คน
                เปิดตัวอย่างเป็นทางการครั้งแรกเมื่อวันที่ 15 มกราคม ค.ศ. 2014 ในฐานะสมาชิกของวงบอยแบนด์ชาวเกาหลีใต้
                ก็อตเซเวน มาร์กรับหน้าที่เป็นแร็ปเปอร์</p>
        </div>

    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9 pull-right ">
                <button id="btnBack"> back </button>
                <div id="main">
                    <table class="table table-success table-striped ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody id="tblPost"></tbody>
                    </table>
                </div>
                <div id="detail">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>UserID</th>
                            </tr>
                        </thead>
                        <tbody id="tblDetails">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

<script>
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();

        var url = "https://jsonplaceholder.typicode.com/posts/" + id
        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='detailROW'";
                line += "><td>" + data.id + "</td>"
                line += "<td><b>" + data.title + "</b><br/>"
                line += data.body + "</td>"
                line += "<td>" + data.userId + "</td>"
                line += "</tr>";
                $("#tblDetails").append(line);
            })
            .fail((xhr, err, status) => {
            })
    }
    function LoadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts"
        var i = 0;
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {

                    i++;
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                    if (i == 10) {
                        loadPost().stop();
                    };
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {
            })
    }
    $(() => {
        LoadPosts();
        $("#detail").hide();
        $("#btnBack").click(() => {
            $("#main").show();
            $("#detail").hide();
            $("#detailROW").remove();
        });
    })
</script>


<footer>
    <div class="bg1">
        Chanettee Leklee
    </div>

</footer>


</html>
