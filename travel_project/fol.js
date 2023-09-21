const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'fd525dc39cmsh1260b967caf663ep159e97jsn86b203d27600',
		'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
	}
};

fetch('https://tripadvisor16.p.rapidapi.com/api/v1/restaurant/searchRestaurants?locationId=304554', options)
	.then((data)=>{
		//console.log(data);
		return data.json();
	}).then((objectData)=>{
		//console.log(objectData.data.data[i].averageRating);
		let tableData = "";

		for (var i =0; i < 5; i++) {
			var a = objectData.data.data[i].name;
			var b = objectData.data.data[i].averageRating;
			var c = objectData.data.data[i].establishmentTypeAndCuisineTags[0];
			var d = objectData.data.data[i].currentOpenStatusText;

			tableData += `<div class="topnav">`;
			tableData += `<a>${objectData.data.data[i].name}</a>`;
			tableData += `<a>${objectData.data.data[i].averageRating}</a>`;
			tableData += `<a>${objectData.data.data[i].establishmentTypeAndCuisineTags[0]}</a>`;
			tableData += `<a>${objectData.data.data[i].currentOpenStatusText}</a>`;
			tableData += `<button onclick="addIT('${a}',${b},'${c}','${d}');">ADD</button>`;
			tableData += `</div>`;
		}
		document.getElementById("table_body").innerHTML = tableData;
	})