
async function getdataglobaldata() {
        const resp = await fetch("https://api.covid19api.com/summary");
        const respData = await resp.json();
        document.getElementById("tcg").innerText=respData.Global.TotalConfirmed;
        document.getElementById("dcg").innerText="^ "+respData.Global.NewConfirmed;
        document.getElementById("tdg").innerText=respData.Global.TotalDeaths;
        document.getElementById("ddg").innerText="^ "+respData.Global.NewDeaths;
        document.getElementById("trg").innerText=respData.Global.TotalRecovered;
        document.getElementById("drg").innerText="^ "+respData.Global.NewRecovered;
        document.getElementById("lastupdateglobal").innerText=respData.Global.Date;
    }

    getdataglobaldata()


async function getdataglobal() {
    let globalmapdata=[]
    globalmapdata.push(['Country Code','Country', 'TotalConfirmed '])
    const resp = await fetch("https://api.covid19api.com/summary");
    const respData = await resp.json();
    let temparr=[]
    let myarr=(respData.Countries)
    for(let i=0;i<myarr.length;i++){
        temparr.push(myarr[i].CountryCode)
        temparr.push(myarr[i].Country)
        temparr.push(myarr[i].TotalConfirmed)
        globalmapdata.push(temparr)
        temparr=[]
    }
    document.getElementById("tcg").innerText=respData.Global.TotalConfirmed;
    document.getElementById("dcg").innerText="^ "+respData.Global.NewConfirmed;
    document.getElementById("tdg").innerText=respData.Global.TotalDeaths;
    document.getElementById("ddg").innerText="^ "+respData.Global.NewDeaths;
    document.getElementById("trg").innerText=respData.Global.TotalRecovered;
    document.getElementById("drg").innerText="^ "+respData.Global.NewRecovered;


    google.charts.load('current', {
        'packages':['geochart'],
      });
      google.charts.setOnLoadCallback(drawRegionsMap);
    // console.log(globalmapdata)
      function drawRegionsMap() { 
        var data = google.visualization.arrayToDataTable(globalmapdata);
    
        var options = {
            colorAxis: {colors: ['#00853f', 'black', '#e31b23']},
            datalessRegionColor: '#fff',
        };
    
        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
    
        chart.draw(data, options);
      }
}
getdataglobal()

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


