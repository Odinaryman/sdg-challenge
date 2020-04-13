<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Covid-19 Estimator</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script

</head>

<body>
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <p>You can now estimate the impact of the covid-19 pandemic across the many regions of the world.</p>
            <div class="register-covid"><span>#SDG-Challenge<span></span></div><br/>
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Enter Parameters to Estimate Impact</h3>
                    <form id="estimator" action="javascript:;">
                        <div class="row register-form">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Region Name*" name="region" required data-region="region" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Population *" name="population" required data-population="population" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Average Age *" name="avgAge" required data-average-age="avgAge" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Average Daily Income*" name="avgDailyIncomeInUSD" required data-average-daily-income-in-USD="avgDailyIncomeInUSD" value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control" required name="periodType" data-period-type="periodType">
                                        <option value="days">Days</option>
                                        <option value="weeks">Weeks</option>
                                        <option selected value="months">Months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Average Daily Income Population *" name="avgDailyIncomePopulation" required data-average-daily-income-population="avgDailyIncomePopulation" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Time to Elapse *" name="timeToElapse" required data-time-to-elapse="timeToElapse" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Reported Cases *" name="reportedCases" required data-reported-cases="reportedCases" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Total Hospital Beds*" name="totalHospitalBeds" required data-total-hospital-beds="totalHospitalBeds" value="" />
                                </div>
                                <input type="submit" data-go-estimate="go-estimate" class="btnRegister" onclick="confirmValidity()"  value="Estimate Impact"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    function confirmValidity(){
        var form = document.getElementById('estimator');
        if(form.checkValidity()){
            var d={
                region:{name:$("input[name=region]").val(),avgAge:parseFloat($("input[name=avgAge]").val()),avgDailyIncomeInUSD:parseFloat($("input[name=avgDailyIncomeInUSD]").val()),avgDailyIncomePopulation:parseFloat($("input[name=avgDailyIncomePopulation]").val())},
                periodType:$("select[name=periodType] option:selected").val(),
                timeToElapse:parseFloat($("input[name=timeToElapse]").val()),
                reportedCases:parseFloat($("input[name=reportedCases]").val()),
                population:parseFloat($("input[name=population]").val()),
                totalHospitalBeds:parseFloat($("input[name=totalHospitalBeds]").val())
            }
            var json=JSON.stringify(d);
            $.post('estimator.php',json,function(data,status){

            })
        }
    }

</script>
</body>

</html>
