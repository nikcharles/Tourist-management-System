const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '0d3d382ff4msh2914476b6081d92p1574cfjsnbca00f149b69',
		'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
	}
};

fetch('https://tripadvisor16.p.rapidapi.com/api/v1/flights/searchFlights?sourceAirportCode=BOM&destinationAirportCode=DEL&date=2022-12-01&itineraryType=ONE_WAY&sortOrder=PRICE&numAdults=1&numSeniors=0&classOfService=ECONOMY&returnDate=2022-12-03&currencyCode=IND', options)
	.then((data)=>{
		//console.log(data);
		return data.json();
	}).then((objectData)=>{
		let tableData = "";

		for (var i =0; i < 5; i++) {
			var a = objectData.data.flights[i].segments[0].legs[0].flightNumber;
			var b = objectData.data.flights[i].segments[0].legs[0].originStationCode;
			var c = objectData.data.flights[i].segments[0].legs[0].destinationStationCode;
			var d = objectData.data.flights[i].purchaseLinks[0].totalPricePerPassenger;

			tableData += `<div class="topnav">`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].flightNumber}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].originStationCode}</a>`;
			tableData += `<a>${objectData.data.flights[i].segments[0].legs[0].destinationStationCode}</a>`;
			tableData += `<a>${objectData.data.flights[i].purchaseLinks[0].totalPricePerPassenger}</a>`;
			tableData += `<button onclick="addIT(${a},'${b}','${c}',${d});">ADD</button>`;
			tableData += `</div>`;
		}
		document.getElementById("table_body").innerHTML = tableData;
	})
