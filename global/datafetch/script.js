async function getdataglobaltable() {
    let mytablehtml=`        <tr class="header">
    <th>Location</th>
    <th>Confirmed-Cases</th>
    <th>Deaths</th>
    <th>Recovered</th>
    </tr>`;
    const resp = await fetch("https://api.covid19api.com/summary");
    const respData = await resp.json();
    let myarr=(respData.Countries)
    for(let i=0;i<myarr.length;i++){

        mytablehtml=mytablehtml+`<tr>
        <td>`+myarr[i].Country+`</td>
        <td>`+myarr[i].TotalConfirmed+`<br>+ `+myarr[i].NewConfirmed+`</td>
        <td>`+myarr[i].TotalDeaths+`<br>+ `+myarr[i].NewDeaths+`</td>
        <td>`+myarr[i].TotalRecovered+`<br>+ `+myarr[i].NewRecovered+`</td>
        </tr>`;
    }

    document.getElementById("myTable").innerHTML=mytablehtml;
}
getdataglobaltable()
