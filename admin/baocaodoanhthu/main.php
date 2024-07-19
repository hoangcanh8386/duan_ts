<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><b>Báo cáo doanh thu </b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 ">
            <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                <div class="info">
                    <h4>Tổng Nhân viên</h4>
                    <p><b><?= $tongnv[0]['tongnv'] ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x'></i>
                <div class="info">
                    <h4>Tổng sản phẩm</h4>
                    <p><b><?= $tongspct[0]['tongspct'] ?> sản phẩm</b></p>
                </div>
            </div>
        </div>
       

    </div>
    <div class="row">
    <div class="col-md-6 ">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                <div class="info">
                    <h4>Tổng đơn hàng</h4>
                    <p><b><?= $tongsldh['tongdh'] ?> đơn hàng</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="widget-small primary coloured-icon"><i class='icon fa-3x bx bxs-chart'></i>
                <div class="info">
                    <h4>Tổng thu nhập</h4>
                    <p><b><?= number_format($thanhtien[0]['thanhtien']) ?>đ</b></p>
                </div>
            </div>
        </div>


        
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">SẢN PHẨM BÁN CHẠY</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Danh mục</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($spbanchay as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['idspct'] ?></td>
                                    <td><?= $value['tenspchitiet'] ?></td>
                                    <td><?= number_format($value['giasp']) ?>VND</td>
                                    <td><?= $value['tensp'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">TỔNG ĐƠN HÀNG</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ID đơn hàng</th>
                                <th>Khách hàng</th>
                                <th>Đơn hàng</th>
                                <th>size</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tongdh as $key => $value) { ?>
                                <tr>
                                    <td><?= $value['id_dh'] ?></td>
                                    <td><?= $value['tenkh'] ?></td>
                                    <td><?= $value['tenspchitiet'] ?></td>
                                    <td><?= $value['bankinh'] ?></td>
                                    <td><?= $value['sl'] ?></td>
                                    <td><?= number_format($value['tongtien']) ?>VND</td>
                                </tr>
                            <?php } ?>



                            <tr>
                                <th colspan="5">Tổng cộng:</th>
                                <td><?php echo number_format($thanhtien[0]['thanhtien']) ?>VND</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Thống kê sản phẩm</h3>
            <div id="myChart" style="width:100%; max-width:500px; height:500px;">
            </div>
        </div>
        <div class="col-md-6">
            <h3>Thống kê doanh thu</h3>
            <div id="myPlot" style="width:100%;max-width:700px"></div>
        </div>
    </div>


</main>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
const xArray = [<?php foreach ($thongkedoanhthu as $key => $value) {
    // var_dump($value);
  extract($value);
  echo "$tongtien,";
} ?>];
const yArray = [<?php foreach ($thongkedoanhthu as $key => $value) {
    
  extract($value);
  echo "'$tenspchitiet',";
} ?>];
// const yArray = ["Italy ", "France ", "Spain ", "USA ", "Argentina "];


const data = [{
  x:xArray,
  y:yArray,
  type:"bar",
  orientation:"h",
  marker: {color:"rgba(255,0,0,0.6)"}
}];

const layout = {title:"Thống kê theo doanh thu"};

Plotly.newPlot("myPlot", data, layout);
</script>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['sp', 'sl'],

<?php 
 foreach($thongkesp as $value){
    // var_dump($value);
    extract($value);
   
    echo "['$tensp',$sl],";
 }
 ?>


]);

// Set Options
const options = {
  title:'Thống kê sản phẩm theo danh mục'
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>
