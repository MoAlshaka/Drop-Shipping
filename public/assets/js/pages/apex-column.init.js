var colors=["#3e60d5","#47ad77","#fa5c7c"],dataColors=document.querySelector("#basic-column").dataset.colors,options={chart:{height:396,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{horizontal:!1,endingShape:"rounded",columnWidth:"55%"}},dataLabels:{enabled:!1},stroke:{show:!0,width:2,colors:["transparent"]},colors:colors=dataColors?dataColors.split(","):colors,series:[{name:"Net Profit",data:[44,55,57,56,61,58,63,60,66]},{name:"Revenue",data:[76,85,101,98,87,105,91,114,94]},{name:"Free Cash Flow",data:[35,41,36,26,45,48,52,53,41]}],xaxis:{categories:["Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct"]},legend:{offsetY:7},yaxis:{title:{text:"$ (thousands)"}},fill:{opacity:1},grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa",padding:{bottom:5}},tooltip:{y:{formatter:function(t){return"$ "+t+" thousands"}}}},chart=new ApexCharts(document.querySelector("#basic-column"),options),colors=(chart.render(),["#3e60d5"]),dataColors=document.querySelector("#datalabels-column").dataset.colors,options={chart:{height:380,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{borderRadius:10,dataLabels:{position:"top"}}},dataLabels:{enabled:!0,formatter:function(t){return t+"%"},offsetY:-25,style:{fontSize:"12px",colors:["#304758"]}},colors:colors=dataColors?dataColors.split(","):colors,legend:{show:!0,horizontalAlign:"center",offsetX:0,offsetY:-5},series:[{name:"Inflation",data:[2.3,3.1,4,10.1,4,3.6,3.2,2.3,1.4,.8,.5,.2]}],xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],position:"top",labels:{offsetY:0},axisBorder:{show:!1},axisTicks:{show:!1},crosshairs:{fill:{type:"gradient",gradient:{colorFrom:"#D8E3F0",colorTo:"#BED1E6",stops:[0,100],opacityFrom:.4,opacityTo:.5}}},tooltip:{enabled:!0,offsetY:-10}},fill:{gradient:{enabled:!1,shade:"light",type:"horizontal",shadeIntensity:.25,gradientToColors:void 0,inverseColors:!0,opacityFrom:1,opacityTo:1,stops:[50,0,100,100]}},yaxis:{axisBorder:{show:!1},axisTicks:{show:!1},labels:{show:!1,formatter:function(t){return t+"%"}}},title:{text:"Monthly Inflation in Argentina, 2002",floating:!0,offsetY:360,align:"center",style:{color:"#444"}},grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa"}},colors=((chart=new ApexCharts(document.querySelector("#datalabels-column"),options)).render(),["#39afd1","#ffbc00","#e3eaef"]),dataColors=document.querySelector("#stacked-column").dataset.colors,options={chart:{height:380,type:"bar",stacked:!0,toolbar:{show:!1}},plotOptions:{bar:{horizontal:!1,columnWidth:"50%"}},series:[{name:"Product A",data:[44,55,41,67,22,43,21,49]},{name:"Product B",data:[13,23,20,8,13,27,33,12]},{name:"Product C",data:[11,17,15,15,21,14,15,13]}],xaxis:{categories:["2011 Q1","2011 Q2","2011 Q3","2011 Q4","2012 Q1","2012 Q2","2012 Q3","2012 Q4"]},colors:colors=dataColors?dataColors.split(","):colors,fill:{opacity:1},legend:{offsetY:7},grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa",padding:{bottom:5}}},colors=((chart=new ApexCharts(document.querySelector("#stacked-column"),options)).render(),["#39afd1","#47ad77","#e3eaef"]),dataColors=document.querySelector("#full-stacked-column").dataset.colors,options={chart:{height:380,type:"bar",stacked:!0,stackType:"100%",toolbar:{show:!1}},plotOptions:{bar:{columnWidth:"50%"}},series:[{name:"Product A",data:[44,55,41,67,22,43,21,49]},{name:"Product B",data:[13,23,20,8,13,27,33,12]},{name:"Product C",data:[11,17,15,15,21,14,15,13]}],xaxis:{categories:["2011 Q1","2011 Q2","2011 Q3","2011 Q4","2012 Q1","2012 Q2","2012 Q3","2012 Q4"]},fill:{opacity:1},legend:{offsetY:7},colors:colors=dataColors?dataColors.split(","):colors,grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa",padding:{bottom:5}}},colors=((chart=new ApexCharts(document.querySelector("#full-stacked-column"),options)).render(),["#47ad77","#fa5c7c"]),dataColors=document.querySelector("#column-with-markers").dataset.colors,options={series:[{name:"Actual",data:[{x:"2011",y:1292,goals:[{name:"Expected",value:1400,strokeHeight:5,strokeColor:(colors=dataColors?dataColors.split(","):colors)[1]}]},{x:"2012",y:4432,goals:[{name:"Expected",value:5400,strokeHeight:5,strokeColor:colors[1]}]},{x:"2013",y:5423,goals:[{name:"Expected",value:5200,strokeHeight:5,strokeColor:colors[1]}]},{x:"2014",y:6653,goals:[{name:"Expected",value:6500,strokeHeight:5,strokeColor:colors[1]}]},{x:"2015",y:8133,goals:[{name:"Expected",value:6600,strokeHeight:13,strokeWidth:0,strokeLineCap:"round",strokeColor:colors[1]}]},{x:"2016",y:7132,goals:[{name:"Expected",value:7500,strokeHeight:5,strokeColor:colors[1]}]},{x:"2017",y:7332,goals:[{name:"Expected",value:8700,strokeHeight:5,strokeColor:colors[1]}]},{x:"2018",y:6553,goals:[{name:"Expected",value:7300,strokeHeight:2,strokeDashArray:2,strokeColor:colors[1]}]}]}],chart:{height:380,type:"bar"},plotOptions:{bar:{columnWidth:"60%"}},colors:colors,dataLabels:{enabled:!1},legend:{show:!0,showForSingleSeries:!0,customLegendItems:["Actual","Expected"],markers:{fillColors:colors}}},colors=((chart=new ApexCharts(document.querySelector("#column-with-markers"),options)).render(),["#47ad77","#fa5c7c"]),optionsGroup=((dataColors=document.querySelector("#column-with-group-label").dataset.colors)&&(colors=dataColors.split(",")),dayjs.extend(window.dayjs_plugin_quarterOfYear),{series:[{name:"Sales",data:[{x:"2020/01/01",y:400},{x:"2020/04/01",y:430},{x:"2020/07/01",y:448},{x:"2020/10/01",y:470},{x:"2021/01/01",y:540},{x:"2021/04/01",y:580},{x:"2021/07/01",y:690},{x:"2021/10/01",y:690}]}],chart:{type:"bar",height:380,toolbar:{show:!1}},plotOptions:{bar:{horizontal:!1,columnWidth:"45%"}},colors:colors,xaxis:{type:"category",labels:{formatter:function(t){return"Q"+dayjs(t).quarter()}},group:{style:{fontSize:"10px",fontWeight:700},groups:[{title:"2020",cols:4},{title:"2021",cols:4}]}},tooltip:{x:{formatter:function(t){return"Q"+dayjs(t).quarter()+" "+dayjs(t).format("YYYY")}}}}),chartGroup=new ApexCharts(document.querySelector("#column-with-group-label"),optionsGroup),colors=(chartGroup.render(),["#fa5c7c"]),dataColors=document.querySelector("#rotate-labels-column").dataset.colors,options={annotations:{points:[{x:"Bananas",seriesIndex:0,label:{borderColor:"#3e60d5",offsetY:0,style:{color:"#fff",background:"#3e60d5"},text:"Bananas are good"}}]},chart:{height:380,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{columnWidth:"50%",endingShape:"rounded"}},dataLabels:{enabled:!1},stroke:{width:2},colors:colors=dataColors?dataColors.split(","):colors,series:[{name:"Servings",data:[44,55,41,67,22,43,21,33,45,31,87,65,35]}],grid:{borderColor:"#f1f3fa",padding:{top:0,right:-2,bottom:-35,left:10}},xaxis:{labels:{rotate:-45},categories:["Apples","Oranges","Strawberries","Pineapples","Mangoes","Bananas","Blackberries","Pears","Watermelons","Cherries","Pomegranates","Tangerines","Papayas"]},yaxis:{title:{text:"Servings"}},fill:{type:"gradient",gradient:{shade:"light",type:"horizontal",shadeIntensity:.25,gradientToColors:void 0,inverseColors:!0,opacityFrom:.85,opacityTo:.85,stops:[50,0,100]}}},colors=((chart=new ApexCharts(document.querySelector("#rotate-labels-column"),options)).render(),["#3e60d5"]),dataColors=document.querySelector("#negative-value-column").dataset.colors,options={chart:{height:380,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{colors:{ranges:[{from:-100,to:-46,color:"#fa5c7c"},{from:-45,to:0,color:"#ffbc00"}]},columnWidth:"80%"}},dataLabels:{enabled:!1},colors:colors=dataColors?dataColors.split(","):colors,series:[{name:"Cash Flow",data:[1.45,5.42,5.9,-.42,-12.6,-18.1,-18.2,-14.16,-11.1,-6.09,.34,3.88,13.07,5.8,2,7.37,8.1,13.57,15.75,17.1,19.8,-27.03,-54.4,-47.2,-43.3,-18.6,-48.6,-41.1,-39.6,-37.6,-29.4,-21.4,-2.4]}],yaxis:{title:{text:"Growth"},labels:{formatter:function(t){return t.toFixed(0)+"%"}}},xaxis:{categories:["2011-01-01","2011-02-01","2011-03-01","2011-04-01","2011-05-01","2011-06-01","2011-07-01","2011-08-01","2011-09-01","2011-10-01","2011-11-01","2011-12-01","2012-01-01","2012-02-01","2012-03-01","2012-04-01","2012-05-01","2012-06-01","2012-07-01","2012-08-01","2012-09-01","2012-10-01","2012-11-01","2012-12-01","2013-01-01","2013-02-01","2013-03-01","2013-04-01","2013-05-01","2013-06-01","2013-07-01","2013-08-01","2013-09-01"],labels:{rotate:-90}},grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa"}},colors=((chart=new ApexCharts(document.querySelector("#negative-value-column"),options)).render(),["#3e60d5","#6c757d","#47ad77","#fa5c7c","#ffbc00","#39afd1","#e3eaef","#313a46"]),dataColors=document.querySelector("#distributed-column").dataset.colors,options={chart:{height:380,type:"bar",toolbar:{show:!1},events:{click:function(t,e,o){console.log(t,e,o)}}},colors:colors=dataColors?dataColors.split(","):colors,plotOptions:{bar:{columnWidth:"45%",distributed:!0}},dataLabels:{enabled:!1},series:[{data:[21,22,10,28,16,21,13,30]}],xaxis:{categories:["John","Joe","Jake","Amber","Peter","Mary","David","Lily"],labels:{style:{colors:colors,fontSize:"14px"}}},legend:{offsetY:7},grid:{row:{colors:["transparent","transparent"],opacity:.2},borderColor:"#f1f3fa"}},colors=((chart=new ApexCharts(document.querySelector("#distributed-column"),options)).render(),["#47ad77","#39afd1"]),dataColors=document.querySelector("#range-column").dataset.colors,options={chart:{height:380,type:"rangeBar"},plotOptions:{bar:{horizontal:!1}},dataLabels:{enabled:!0},legend:{offsetY:7},colors:colors=dataColors?dataColors.split(","):colors,series:[{name:"Product A",data:[{x:"Team A",y:[1,5]},{x:"Team B",y:[4,6]},{x:"Team C",y:[5,8]},{x:"Team D",y:[3,11]}]},{name:"Product B",data:[{x:"Team A",y:[2,6]},{x:"Team B",y:[1,3]},{x:"Team C",y:[7,8]},{x:"Team D",y:[5,9]}]}]},colors=((chart=new ApexCharts(document.querySelector("#range-column"),options)).render(),["#3e60d5","#6c757d","#47ad77","#fa5c7c","#ffbc00","#39afd1","#e3eaef","#313a46"]);function shuffleArray(t){for(var e=t.length-1;0<e;e--){var o=Math.floor(Math.random()*(e+1)),a=t[e];t[e]=t[o],t[o]=a}return t}(dataColors=document.querySelector("#chart-year").dataset.colors)&&(colors=dataColors.split(",")),Apex={chart:{toolbar:{show:!1}},tooltip:{shared:!1},legend:{show:!1}};var arrayData=[{y:400,quarters:[{x:"Q1",y:120},{x:"Q2",y:90},{x:"Q3",y:100},{x:"Q4",y:90}]},{y:430,quarters:[{x:"Q1",y:120},{x:"Q2",y:110},{x:"Q3",y:90},{x:"Q4",y:110}]},{y:448,quarters:[{x:"Q1",y:70},{x:"Q2",y:100},{x:"Q3",y:140},{x:"Q4",y:138}]},{y:470,quarters:[{x:"Q1",y:150},{x:"Q2",y:60},{x:"Q3",y:190},{x:"Q4",y:70}]},{y:540,quarters:[{x:"Q1",y:120},{x:"Q2",y:120},{x:"Q3",y:130},{x:"Q4",y:170}]},{y:580,quarters:[{x:"Q1",y:170},{x:"Q2",y:130},{x:"Q3",y:120},{x:"Q4",y:160}]}];function makeData(){var t=shuffleArray(arrayData);return[{x:"2011",y:t[0].y,color:colors[0],quarters:t[0].quarters},{x:"2012",y:t[1].y,color:colors[1],quarters:t[1].quarters},{x:"2013",y:t[2].y,color:colors[2],quarters:t[2].quarters},{x:"2014",y:t[3].y,color:colors[3],quarters:t[3].quarters},{x:"2015",y:t[4].y,color:colors[4],quarters:t[4].quarters},{x:"2016",y:t[5].y,color:colors[5],quarters:t[5].quarters}]}function updateQuarterChart(t,e){var o=[],a=[];if(t.w.globals.selectedDataPoints[0]){for(var r=t.w.globals.selectedDataPoints,s=0;s<r[0].length;s++){var l=r[0][s],n=t.w.config.series[0];o.push({name:n.data[l].x,data:n.data[l].quarters}),a.push(n.data[l].color)}return 0===o.length&&(o=[{data:[]}]),ApexCharts.exec(e,"updateOptions",{series:o,colors:a,fill:{colors:a}})}}var options={series:[{data:makeData()}],chart:{id:"barYear",height:400,width:"100%",type:"bar",events:{dataPointSelection:function(t,e,o){var a=document.querySelector("#chart-quarter"),r=document.querySelector("#chart-year");1!==o.selectedDataPoints[0].length||a.classList.contains("active")||(r.classList.add("chart-quarter-activated"),a.classList.add("active")),updateQuarterChart(e,"barQuarter"),0===o.selectedDataPoints[0].length&&(r.classList.remove("chart-quarter-activated"),a.classList.remove("active"))},updated:function(t){updateQuarterChart(t,"barQuarter")}}},plotOptions:{bar:{distributed:!0,horizontal:!0,barHeight:"75%",dataLabels:{position:"bottom"}}},dataLabels:{enabled:!0,textAnchor:"start",style:{colors:["#fff"]},formatter:function(t,e){return e.w.globals.labels[e.dataPointIndex]},offsetX:0,dropShadow:{enabled:!0}},colors:colors,states:{normal:{filter:{type:"desaturate"}},active:{allowMultipleDataPointsSelection:!0,filter:{type:"darken",value:1}}},tooltip:{x:{show:!1},y:{title:{formatter:function(t,e){return e.w.globals.labels[e.dataPointIndex]}}}},title:{text:"Yearly Results",offsetX:15},subtitle:{text:"(Click on bar to see details)",offsetX:15},yaxis:{labels:{show:!1}}},optionsQuarter=((chart=new ApexCharts(document.querySelector("#chart-year"),options)).render(),{series:[{data:[]}],chart:{id:"barQuarter",height:400,width:"100%",type:"bar",stacked:!0},plotOptions:{bar:{columnWidth:"50%",horizontal:!1}},legend:{show:!1},grid:{yaxis:{lines:{show:!1}},xaxis:{lines:{show:!0}}},yaxis:{labels:{show:!1}},title:{text:"Quarterly Results",offsetX:10},tooltip:{x:{formatter:function(t,e){return e.w.globals.seriesNames[e.seriesIndex]}},y:{title:{formatter:function(t,e){return e.w.globals.labels[e.dataPointIndex]}}}}}),chartQuarter=new ApexCharts(document.querySelector("#chart-quarter"),optionsQuarter);chartQuarter.render(),chart.addEventListener("dataPointSelection",function(t,e,o){var a=document.querySelector("#chart-quarter"),r=document.querySelector("#chart-year");1!==o.selectedDataPoints[0].length||a.classList.contains("active")||(r.classList.add("chart-quarter-activated"),a.classList.add("active")),updateQuarterChart(e,"barQuarter"),0===o.selectedDataPoints[0].length&&(r.classList.remove("chart-quarter-activated"),a.classList.remove("active"))}),chart.addEventListener("updated",function(t){updateQuarterChart(t,"barQuarter")}),document.querySelector("#model").addEventListener("change",function(t){chart.updateSeries([{data:makeData()}])});