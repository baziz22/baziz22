d3.json("./data/users.json") .then((data) => {
        
    console.log(data);
    for (var i = 0; i < data.length; i++) {
        console.log(data[i]);
        console.log(data[i].Name);
        console.log(data[i].Salary);
        console.log(data[i].City);
    }
    
    d3.select(".loaded-data")
    .selectAll("p")
    .data(data)
    .enter().append("p")
    .text((d) => d.Name + ", " + d.Salary + ", " + d.City)

}).then((error) => {
    if (error) {
        console.log("Error: "+error);
    }else {
        console.log("ther ei s no error");
    }
})