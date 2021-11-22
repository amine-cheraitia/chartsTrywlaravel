<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chartisan example</title>
</head>

<body>
    <form action="" method="POST">
        <select name="year" id="year">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>
    </form>
    <!-- Chart's container -->
    <div id="chart" style="height: 300px;"></div>
    <!-- Charting library -->
    {{-- <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script> --}}
    <!-- Your application script -->

    <br>
    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
    <script>
        /*         const chart = new Chartisan({
        el: '#chart',
        url: "@chart('blood')",
        hooks: new ChartisanHooks()
    .legend()
    .colors()
    .tooltip(),
      }); */
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        x_data= JSON.parse('{!! json_encode($xdata) !!}');
        /*y_data=JSON.parse(); */

        $('#year').change(function (e) {

            var y = $('#year').val();
            var _token = $('input[name="_token"]').val();
            console.log(y);
            $.ajax({
                type: "post",
                url: "{{route('fetch')}}",
                data: {y:y,_token:_token },
                dataType: "dataType",
                success: function (response) {
                    x_data= response.xdata
                }
            });

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/chart-bar-demo.js')}}"></script>
</body>

</html>
