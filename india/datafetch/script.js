async function getdataindia() {
    const resp = await fetch("https://data.covid19india.org/data.json");
    const respData = await resp.json();
    document.getElementById("tci").innerText=respData.statewise[0].confirmed;
    document.getElementById("dci").innerText="^ "+respData.statewise[0].deltaconfirmed;
    document.getElementById("tdi").innerText=respData.statewise[0].deaths;
    document.getElementById("ddi").innerText="^ "+respData.statewise[0].deltadeaths;
    document.getElementById("tri").innerText=respData.statewise[0].recovered;
    document.getElementById("dri").innerText="^ "+respData.statewise[0].deltarecovered;
    document.getElementById("lastupdateindia").innerText=respData.statewise[0].lastupdatedtime;


}
getdataindia()

async function getdataindiamap() {
    let mytablehtml=`        <tr class="header">
    <th>Location</th>
    <th>Confirmed-Cases</th>
    <th>Recovered</th>
    <th>Deaths</th>
    <th>Active-Cases</th>
    </tr>`;
    let globalmapdata=[]
    globalmapdata.push(['State Code', 'State', 'TotalConfirmed'])
    const resp = await fetch("https://data.covid19india.org/data.json");
    const respData = await resp.json();
    let temparr=[]
    let temparr2=[]
    let myarr=(respData.statewise)
    console.log(myarr)
    for(let i=1;i<myarr.length;i++){
        temparr.push('IN-'+myarr[i].statecode)
        temparr.push(myarr[i].state)
        temparr.push(parseInt(myarr[i].confirmed))
        globalmapdata.push(temparr)
        temparr=[]
        mytablehtml=mytablehtml+`<tr>
        <td>`+myarr[i].state+`</td>
        <td>`+myarr[i].confirmed+`<br>+ `+myarr[i].deltaconfirmed+`</td>
        <td>`+myarr[i].deaths+`<br>+ `+myarr[i].deltadeaths+`</td>
        <td>`+myarr[i].recovered+`<br>+ `+myarr[i].deltarecovered+`</td>
        <td>`+myarr[i].active+`</td>

        </tr>`;
    }

    document.getElementById("myTable").innerHTML=mytablehtml;
    
    google.charts.load('current', {
        'packages':['geochart'],
      });
      google.charts.setOnLoadCallback(drawRegionsMap);
    
      function drawRegionsMap() { 
        var data = google.visualization.arrayToDataTable(globalmapdata);
    
        var options = {    region: 'IN',
        displayMode: 'regions',
        resolution: 'provinces',
            colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
            datalessRegionColor: '#fff',
        };
    
        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
    
        chart.draw(data, options);
      }


}
getdataindiamap()


async function getdataindiachart() {
    let indiachartdatacon=[]
    indiachartdatacon.push(['Date', 'Confirmed'])
    let indiachartdatade=[]
    indiachartdatade.push(['Date', 'Deaths'])
    let indiachartdatare=[]
    indiachartdatare.push(['Date', 'Recovered'])
    const resp = await fetch("https://data.covid19india.org/data.json");
    const respData = await resp.json();
    let temparr2=[]
    let myarr=(respData.cases_time_series)
    for(let i=0;i<myarr.length;i++){
        temparr2.push(myarr[i].dateymd)
        temparr2.push(parseInt(myarr[i].dailyconfirmed))
        indiachartdatacon.push(temparr2)
        temparr2=[]
        temparr2.push(myarr[i].dateymd)
        temparr2.push(parseInt(myarr[i].dailydeceased))
        indiachartdatade.push(temparr2)
        temparr2=[]
        temparr2.push(myarr[i].dateymd)
        temparr2.push(parseInt(myarr[i].dailyrecovered))
        indiachartdatare.push(temparr2)
        temparr2=[]
    }
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable(indiachartdatacon);

      var options = {
        title: 'Date wise chart of confirmed cases',
        curveType: 'function',
        legend: { position: 'top' },
        colors: ['orange']
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartde);
    function drawChartde() {
      var data = google.visualization.arrayToDataTable(indiachartdatade);
      var options = {
        title: 'Date wise chart of death cases',
        curveType: 'function',
        color:'red',
        legend: { position: 'top' },
        colors: ['red']
      };
      var chart = new google.visualization.LineChart(document.getElementById('curve_chartde'));
      chart.draw(data, options);
    }


    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartre);
    function drawChartre() {
      var data = google.visualization.arrayToDataTable(indiachartdatare);
      var options = {
        title: 'Date wise chart of recovered cases',
        curveType: 'function',
        color:'red',
        legend: { position: 'top' },
        colors: ['green']
      };
      var chart = new google.visualization.LineChart(document.getElementById('curve_chartre'));
      chart.draw(data, options);
    }

}
getdataindiachart()
