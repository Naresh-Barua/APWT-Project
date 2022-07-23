fetch("http://127.0.0.1:8000/api/prescription/list").then(
    response => {
        response.json().then(
            data => {
                console.log(data);
                if (data.length > 0) {
                    var getData = "";
                    data.forEach((object) => {
                        getData += "<tr>";
                        getData += "<td>" + object.name + "</td>";
                        getData += "<td>" + object.dob + "</td>";
                        getData += "<td>" + object.weight + "</td>";
                        getData += "<td>" + object.type + "</td>";
                        getData += "<td>" + object.ins + "</td>";
                        getData += "<td>" + object.sub + "</td>";
                        getData += "<td>" + object.address + "</td></td>";
                    })
                    document.getElementById("loadData").innerHTML = getData;
                }
            }
        )
    }
)