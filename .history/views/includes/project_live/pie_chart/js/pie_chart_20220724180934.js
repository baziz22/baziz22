function load_contents(){
    let pie_chart_csv_width = 500;
    let pie_chart_csv_height = 400;
    let pie_chart_csv_radius =
      Math.min(pie_chart_csv_width, pie_chart_csv_height) / 2;
    

  let pie_chart_csv_svg = d3
        .select(".svg-container")
        .append("svg")
        /* .attr("preserveAspectRatio", "xMinYMin meet") */
        .attr("viewBox", "0 0 "+pie_chart_csv_width+" "+pie_chart_csv_height)
        .classed("svg-content", true)
        .style("font-family", "Bradley Hand,  Arial, Helvetica, sans-serif");

let pie_chart_csv_g = pie_chart_csv_svg
  .append("g")
  .attr(
    "transform",
    "translate(" +
      pie_chart_csv_width / 2 +
      "," +
      pie_chart_csv_height / 2 +
      ")"
  );

let pie_chart_csv_color = d3.scaleOrdinal([
  "#425f76",
  "#377eb8",
  "#5a915b",
  "#39C",
  "#ef8a03",
  "#e7deb9",
  "#0a8786",
  
]);
/* const pie_chart_csv_color = d3.scaleOrdinal([
  '#ef8a03', // Orange
  '#698908', // Green
  '#9f1548', // Burgundy
  '#5a915b', // Greenish
  '#767676', // Gray
  '#0a8786', // Cyan
  '#0ea6ac', // Cyan Light
  '#e29d00', // Orange 2
  '#e7deb9', // Beige
  '#1085ab', // Blue Light
  '#425f76', // Blue Dark
  '#d03112', // Red
  "#d03112",
  '#E71D7A', // Pink
  '#843A8E', // Purple
  ]); */
let pie_chart_csv_pie = d3.pie().padAngle(0.001).value(function (d) {
  return d.population;
}).sort(null);
let pie_chart_csv_path = d3
  .arc()
  .outerRadius(pie_chart_csv_radius - 30)
  .innerRadius(100);

let pie_chart_csv_label = d3
  .arc()
  .outerRadius(pie_chart_csv_radius)
  .innerRadius(pie_chart_csv_radius - 120);

d3.csv("views/includes/project_live/pie_chart/data/population.csv").then((data) => {
  let pie_chart_csv_arc = pie_chart_csv_g
    .selectAll(".arc")
    .data(pie_chart_csv_pie(data))
    .enter()
    .append("g")
    .attr("class", "arc");

  pie_chart_csv_arc
    .append("path")
    .attr("d", pie_chart_csv_path)
    .attr("fill", function (d) {
      return pie_chart_csv_color(d.data.continent);
    }).transition().delay(function(d, i) { return i * 500; }).duration(500)
    .attrTween('d', function(d) {
      console.log("object: " ,d.startAngle);
        var i = d3.interpolate(d.startAngle+0.1, d.endAngle);
        return function(t) {
            if (d.value!=0) {
              console.log("value: ", d.value);
                d.endAngle = i(t);
                return pie_chart_csv_path(d); 
            }
        };
    });;

// add legend: color box plus status label and number 
var legend = pie_chart_csv_svg.selectAll(".legend")
.data(pie_chart_csv_pie(data))
.enter().append("g")
.attr("class", "legend")
.attr("transform", function(d, i) { 
    return "translate(0," + i * 20 + ")"; });

legend.append("rect")
.attr("x", pie_chart_csv_width/1.75) 
.attr("y", pie_chart_csv_height/3)
.attr("width", 25)
.attr("height", 20)
.style("fill", function(d) { return pie_chart_csv_color(d.data.continent); });

legend.append("text")
.attr("x", pie_chart_csv_width/1.75 -10)
.attr("y", pie_chart_csv_height/3)
.attr("dy", ".95em")
.style("text-anchor", "end")
.text(function(d) { 
    if (d.population != 0) { 
        if (d.data.population.length == 10) {
            console.log("Population Length : ", d.data.population.length);
        } else {
            console.log("Population Length Not: ", d.data.population.length);
            console.log("Population Length Not: ", d.data.population);
            return d.data.continent + " (" + d.data.population + ")" 
        }
        
    } else {
        return d.continent
    }
});;

  console.log(pie_chart_csv_arc);

  pie_chart_csv_arc
    .append("text")
    .attr("transform", function (d) {
      return "translate(" + pie_chart_csv_label.centroid(d) + ")";
    })
    .text(function (d) {
      return d.data.continent;
    })
    .style("font-size","12px")
    .style("font-weight","bold")
    .attr("fill", "#fff");
    // print the total number of population in the pie center
pie_chart_csv_svg.append("svg:text")
.attr("dy", ".70em")
.attr("text-anchor", "middle")
.style("font-size","14px")
.style("font-weight","bold")
.text("Instances")
});

pie_chart_csv_svg
  .append("g")
  .attr(
    "transform",
    "translate(" + (pie_chart_csv_width / 2 - 120) + "," + 15 + ")"
  )
  .append("text")
  .text("Continent Population 2022")
  .style("font-size","14px")
  .attr("class", "title");
}




load_contents();

