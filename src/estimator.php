<?php

$data=json_encode($data);



function doCompute($input_array,$data_array,$input_data)
{
    foreach($input_data as $x) {
        if($x[2]==1)
        {
            $input_array[$x[0]][$x[1]]=intval(floor($data_array[$x[3][0]] * $x[4]));
        }
        elseif ($x[2]==2)
        {
            $input_array[$x[0]][$x[1]]=intval(floor($input_array[$x[3][0]][$x[3][1]]* $x[4]));
        }
        elseif ($x[2]==3)
        {
            $input_array[$x[0]][$x[1]]=intval(floor($data_array[$x[5]]-$input_array[$x[3][0]][$x[3][1]]));
        }else {
            $input_array[$x[0]][$x[1]]=intval(floor(($input_array[$x[3][0]][$x[3][1]]*$data_array[$x[3][2]][$x[3][3]]*$data_array[$x[3][2]][$x[3][4]])/$x[4]));
        }
    }
    return $input_array;
}

function covid19ImpactEstimator($data)
{
    $data1=array();
    $data=json_decode($data,true);
    $t=array('days'=>1,'weeks'=>7,'month'=>30);
    $days=$data['timeToElapse']*$t[$data['periodType']];
    $inp1=array(['impact','currentlyInfected',1,['reportedCases'],10],['severeImpact','currentlyInfected',1,['reportedCases'],50],
        ['impact','infectionsByRequestedTime',2,['impact','currentlyInfected'],pow(2,$days/3)],
        ['severeImpact','infectionsByRequestedTime',2,['severeImpact','currentlyInfected'],pow(2,$days/3)],
        ['impact','severeCasesByRequestedTime',2,['impact','infectionsByRequestedTime'],0.15],
        ['severeImpact','severeCasesByRequestedTime',2,['severeImpact','infectionsByRequestedTime'],0.15],
        ['impact','hospitalBedsByRequestedTime',3,['impact','severeCasesByRequestedTime'],0.15,'totalHospitalBeds'],
        ['severeImpact','hospitalBedsByRequestedTime',3,['severeImpact','severeCasesByRequestedTime'],0.15,'totalHospitalBeds'],
        ['impact','casesForICUByRequestedTime',2,['impact','infectionsByRequestedTime'],0.05],
        ['severeImpact','casesForICUByRequestedTime',2,['severeImpact','infectionsByRequestedTime'],0.05],
        ['impact','casesForVentilatorsByRequestedTime',2,['impact','infectionsByRequestedTime'],0.02],
        ['severeImpact','casesForVentilatorsByRequestedTime',2,['severeImpact','infectionsByRequestedTime'],0.02],
        ['impact','dollarsInFlight',4,['impact','infectionsByRequestedTime','region','avgDailyIncomePopulation','avgDailyIncomeInUSD'],$days],
        ['severeImpact','dollarsInFlight',4,['severeImpact','infectionsByRequestedTime','region','avgDailyIncomePopulation','avgDailyIncomeInUSD'],$days]);
    $d=doCompute($data1,$data,$inp1);
    return $d;
}
covid19ImpactEstimator($data);

