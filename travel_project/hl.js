function go()
{
	const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '0d3d382ff4msh2914476b6081d92p1574cfjsnbca00f149b69',
		'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
	}
};

var op1 = "BOM";
var op2 = "DEL";
var op3 = document.getElementById("gid").value;


fetch('https://tripadvisor16.p.rapidapi.com/api/v1/hotels/searchHotels?geoId='+op3.toString()+'&checkIn=2022-12-01&checkOut=2022-12-02&pageNumber=1&currencyCode=IND', options)
	.then((data)=>{
		console.log(data);
		return data.json();
	}).then((objectData)=>{
		//console.log(objectData.data.data[0].title);
		let tableData = "";
		for (var i =0; i < 5; i++) {
			var a = objectData.data.data[i].title;
			var b = objectData.data.data[i].secondaryInfo;
			var c = objectData.data.data[i].bubbleRating.rating;
			var d = objectData.data.data[i].provider;

			tableData += `<div class="topnav">`;
			tableData += `<a>${objectData.data.data[i].title}</a>`;
			tableData += `<a>${objectData.data.data[i].secondaryInfo}</a>`;
			tableData += `<a>${objectData.data.data[i].bubbleRating.rating}</a>`;
			tableData += `<a>${objectData.data.data[i].provider}</a>`;
			tableData += `<button onclick="addIT('${a}','${b}',${c},'${d}');">ADD</button>`;
			tableData += `</div>`;
		}
		document.getElementById("table_body").innerHTML = tableData;
	}).catch(err => console.error(err));

}