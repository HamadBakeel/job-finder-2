"use strict";!function(){let o,e,r,s,t;r=isDarkStyle?(o=config.colors_dark.cardColor,e=config.colors_dark.cardColor,s=config.colors_dark.axisColor,t=config.colors_dark.headingColor,"dark"):(o=config.colors.white,s=config.colors.axisColor,e=config.colors.white,t=config.colors.headingColor,"");var a={donut:{series1:config.colors.success,series2:"#99E570",series3:"#B5EC97",series4:"#E3F8D7"}},i=document.querySelector("#orderChart"),n={chart:{height:80,type:"area",toolbar:{show:!1},sparkline:{enabled:!0}},markers:{size:6,colors:"transparent",strokeColors:"transparent",strokeWidth:4,discrete:[{fillColor:config.colors.white,seriesIndex:0,dataPointIndex:6,strokeColor:config.colors.success,strokeWidth:2,size:6,radius:8}],hover:{size:7}},grid:{show:!1,padding:{right:8}},colors:[config.colors.success],fill:{type:"gradient",gradient:{shade:r,shadeIntensity:.8,opacityFrom:.8,opacityTo:.25,stops:[0,85,100]}},dataLabels:{enabled:!1},stroke:{width:2,curve:"smooth"},series:[{data:[180,175,275,140,205,190,295]}],xaxis:{show:!1,lines:{show:!1},labels:{show:!1},stroke:{width:0},axisBorder:{show:!1}},yaxis:{stroke:{width:0},show:!1}};if(null!==i){const l=new ApexCharts(i,n);l.render()}i=document.querySelector("#revenueChart"),n={chart:{height:80,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{barHeight:"80%",columnWidth:"75%",startingShape:"rounded",endingShape:"rounded",borderRadius:2,distributed:!0}},grid:{show:!1,padding:{top:-20,bottom:-12,left:-10,right:0}},colors:[config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors.primary,config.colors_label.primary,config.colors_label.primary],dataLabels:{enabled:!1},series:[{data:[40,95,60,45,90,50,75]}],legend:{show:!1},xaxis:{categories:["M","T","W","T","F","S","S"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:config.colors.secondary,fontSize:"13px"}}},yaxis:{labels:{show:!1}}};if(null!==i){const d=new ApexCharts(i,n);d.render()}i=document.querySelector("#profitChart"),n={series:[{data:[58,28,50,80]},{data:[50,22,65,72]}],chart:{type:"bar",height:90,toolbar:{tools:{download:!1}}},plotOptions:{bar:{columnWidth:"65%",startingShape:"rounded",endingShape:"rounded",borderRadius:3,dataLabels:{show:!1}}},grid:{show:!1,padding:{top:-30,bottom:-12,left:-10,right:0}},colors:[config.colors.success,config.colors_label.success],dataLabels:{enabled:!1},stroke:{show:!0,width:5,colors:o},legend:{show:!1},xaxis:{categories:["Jan","Apr","Jul","Oct"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:config.colors.secondary,fontSize:"13px"}}},yaxis:{labels:{show:!1}}};if(null!==i){const c=new ApexCharts(i,n);c.render()}i=document.querySelector("#sessionsChart"),n={chart:{height:90,type:"area",toolbar:{show:!1},sparkline:{enabled:!0}},markers:{size:6,colors:"transparent",strokeColors:"transparent",strokeWidth:4,discrete:[{fillColor:config.colors.white,seriesIndex:0,dataPointIndex:8,strokeColor:config.colors.warning,strokeWidth:2,size:6,radius:8}],hover:{size:7}},grid:{show:!1,padding:{right:8}},colors:[config.colors.warning],fill:{type:"gradient",gradient:{shade:r,shadeIntensity:.8,opacityFrom:.8,opacityTo:.25,stops:[0,95,100]}},dataLabels:{enabled:!1},stroke:{width:2,curve:"straight"},series:[{data:[280,280,240,240,200,200,260,260,310]}],xaxis:{show:!1,lines:{show:!1},labels:{show:!1},axisBorder:{show:!1}},yaxis:{show:!1}};if(null!==i){const h=new ApexCharts(i,n);h.render()}i=document.querySelector("#expensesChart"),n={chart:{sparkline:{enabled:!0},parentHeightOffset:0,type:"radialBar"},colors:[config.colors.primary],series:[78],plotOptions:{radialBar:{startAngle:-90,endAngle:90,hollow:{size:"65%"},dataLabels:{name:{show:!1},value:{fontSize:"22px",color:t,fontWeight:500,offsetY:0}}}},grid:{show:!1,padding:{left:-10,right:-10}},stroke:{lineCap:"round"},labels:["Progress"]};if(null!==i){const p=new ApexCharts(i,n);p.render()}i=document.querySelector("#visitorsChart"),n={chart:{height:120,width:200,parentHeightOffset:0,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{barHeight:"75%",columnWidth:"40px",startingShape:"rounded",endingShape:"rounded",borderRadius:5,distributed:!0}},grid:{show:!1,padding:{top:-25,bottom:-12}},colors:[config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors_label.primary,config.colors.primary,config.colors_label.primary],dataLabels:{enabled:!1},series:[{data:[40,95,60,45,90,50,75]}],legend:{show:!1},xaxis:{categories:["M","T","W","T","F","S","S"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{colors:config.colors.secondary,fontSize:"13px"}}},yaxis:{labels:{show:!1}},responsive:[{breakpoint:1440,options:{plotOptions:{bar:{borderRadius:9,columnWidth:"60%"}}}},{breakpoint:1300,options:{plotOptions:{bar:{borderRadius:9,columnWidth:"60%"}}}},{breakpoint:1200,options:{plotOptions:{bar:{borderRadius:8,columnWidth:"50%"}}}},{breakpoint:1040,options:{plotOptions:{bar:{borderRadius:8,columnWidth:"50%"}}}},{breakpoint:991,options:{plotOptions:{bar:{borderRadius:8,columnWidth:"50%"}}}},{breakpoint:420,options:{plotOptions:{bar:{borderRadius:8,columnWidth:"50%"}}}}]};if(null!==i){const g=new ApexCharts(i,n);g.render()}i=document.querySelector("#activityChart"),n={chart:{height:120,width:220,parentHeightOffset:0,toolbar:{show:!1},type:"area"},dataLabels:{enabled:!1},stroke:{width:2,curve:"smooth"},series:[{data:[15,20,14,22,17,40,12,35,25]}],colors:[config.colors.success],fill:{type:"gradient",gradient:{shade:r,shadeIntensity:.8,opacityFrom:.8,opacityTo:.25,stops:[0,85,100]}},grid:{show:!1,padding:{top:-20,bottom:-8}},legend:{show:!1},xaxis:{categories:["A1","A2","A3","A4","A5","A6","A7","A8","A9"],axisBorder:{show:!1},axisTicks:{show:!1},labels:{style:{fontSize:"13px",colors:s}}},yaxis:{labels:{show:!1}}};if(null!==i){const f=new ApexCharts(i,n);f.render()}i=document.querySelector("#leadsReportChart"),n={chart:{height:157,width:130,parentHeightOffset:0,type:"donut"},labels:["Electronic","Sports","Decor","Fashion"],series:[45,58,30,50],colors:[a.donut.series1,a.donut.series2,a.donut.series3,a.donut.series4],stroke:{width:0},dataLabels:{enabled:!1,formatter:function(o,e){return parseInt(o)+"%"}},legend:{show:!1},tooltip:{theme:!1},grid:{padding:{top:15}},plotOptions:{pie:{donut:{size:"75%",labels:{show:!0,value:{fontSize:"1.5rem",fontFamily:"Public Sans",color:t,fontWeight:500,offsetY:-15,formatter:function(o){return parseInt(o)+"%"}},name:{offsetY:20,fontFamily:"Public Sans"},total:{show:!0,value:{fontSize:"1.5rem",fontFamily:"Open Sans",color:t,fontWeight:500,offsetY:-15,formatter:function(o){return parseInt(o)+"%"}},name:{offsetY:20,fontFamily:"Open Sans"},total:{show:!0,fontSize:".7rem",label:"1 Week",color:s,formatter:function(o){return"32%"}}}}}}}};if(null!==i){const b=new ApexCharts(i,n);b.render()}}();
