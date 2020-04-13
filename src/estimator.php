<?php
/*$input = trim(file_get_contents("PHP://input"));
$your_var = json_decode($input)*/
function trunc($g)
{
    if($g<0)$g=intval(ceil($g));
    else $g=(int)floor($g);
    return $g;
}

function covid19ImpactEstimator($data)
{
    $data1=array('data'=>$data);
    $t=array('days'=>1,'weeks'=>7,'months'=>30);
    $days=$data['timeToElapse']*$t[$data['periodType']];
    $data1['impact']['currentlyInfected']=trunc($data['reportedCases']*10);
    $data1['severeImpact']['currentlyInfected']=trunc($data['reportedCases']*50);
    $data1['impact']['infectionsByRequestedTime']=trunc($data1['impact']['currentlyInfected']*pow(2,(int)($days/3)));
    $data1['severeImpact']['infectionsByRequestedTime']=trunc($data1['severeImpact']['currentlyInfected']*pow(2,(int)($days/3)));
    $data1['impact']['severeCasesByRequestedTime']=trunc($data1['impact']['infectionsByRequestedTime']*0.15);
    $data1['severeImpact']['severeCasesByRequestedTime']=trunc($data1['severeImpact']['infectionsByRequestedTime']*0.15);
    $data1['impact']['hospitalBedsByRequestedTime']=trunc(($data['totalHospitalBeds']*0.35)-$data1['impact']['severeCasesByRequestedTime']);
    $data1['severeImpact']['hospitalBedsByRequestedTime']=trunc(($data['totalHospitalBeds']*0.35)-$data1['severeImpact']['severeCasesByRequestedTime']);
    $data1['impact']['casesForICUByRequestedTime']=trunc($data1['impact']['infectionsByRequestedTime']*0.05);
    $data1['severeImpact']['casesForICUByRequestedTime']=trunc($data1['severeImpact']['infectionsByRequestedTime']*0.05);
    $data1['impact']['casesForVentilatorsByRequestedTime']=trunc($data1['impact']['infectionsByRequestedTime']*0.02);
    $data1['severeImpact']['casesForVentilatorsByRequestedTime']=trunc($data1['severeImpact']['infectionsByRequestedTime']*0.02);
    $data1['impact']['dollarsInFlight']=trunc(($data1['impact']['infectionsByRequestedTime']*$data['region']['avgDailyIncomePopulation']*$data['region']['avgDailyIncomeInUSD'])/$days);
    $data1['severeImpact']['dollarsInFlight']=trunc(($data1['severeImpact']['infectionsByRequestedTime']*$data['region']['avgDailyIncomePopulation']*$data['region']['avgDailyIncomeInUSD'])/$days);
    return $data1;
}

