function load_contents(){
  // margins, which surround the block where the graph is positioned.
const line_graph_margin = { top: 30, right: 20, bottom: 30, left: 75 };
/* const line_graph_width = 600 - line_graph_margin.left - line_graph_margin.right;
const line_graph_height = 500 - line_graph_margin.top - line_graph_margin.bottom; */
const line_graph_width = 600;
const line_graph_height = 500;

// parse the date / time
var parseTime = d3.timeParse("%d-%b-%y");
var formatTime = d3.timeFormat("%e %B");

// set the ranges
let line_graph_x_scale = d3.scaleTime().range([0, line_graph_width]);
let line_graph_y_scale = d3.scaleLinear().range([line_graph_height, 0]);

// define the line
let draw_line = d3
  .line()
  .x(function (d) {
    return line_graph_x_scale(d.date);
  })
  .y((d) => line_graph_y_scale(d.close));

// tooltip

let line_graph_svg = d3
  .select(".svg-container")
  .append("svg")
  .attr("id", "line-graph-svg")
  /* .attr("width", "600")
  .attr("height", "550") */
  .attr("viewBox", "0 0 "+line_graph_width+" "+line_graph_height)
  .classed("svg-content", true)
  .style("font-family", "Bradley Hand,  Arial, Helvetica, sans-serif")      
  // moves the 'group' element to the top left margin
  /* .append("g")
  .attr(
    "transform",
    "translate(" + 35 + "," + 10 + ")"
  ) */
  ;
  let g_main_line_chart = line_graph_svg
      .append("g")
      .attr("id", "g-main-line-char-scale-axis")
      .attr("transform", "translate(" + 100 + "," + 35 + ")")

// Get the data
d3.csv("views/includes/project_live/line_chart/data/date_data.csv").then((data) => {
  // format the data
  data.forEach(function (d) {
    d.date = parseTime(d.date);
    d.close = +d.close;
    //d.date = d.date.split("-").join(" ");
  });

  // Scale the range of the data
  line_graph_x_scale.domain(
    d3.extent(data, function (d) {
      return d.date;
    })
  );
  line_graph_y_scale.domain([0, d3.max(data, (d) => d.close)]);
  // Append the line
  g_main_line_chart
    .append("path")
    .data([data])
    .attr("class", "line")
    .attr("d", draw_line);

  // Add the X Axis
  g_main_line_chart
    .append("g")
    .attr("transform", "translate(0," + line_graph_height + ")")
    .call(d3.axisBottom(line_graph_x_scale))
    .selectAll("text")
    .style("text-anchor", "end")
    .attr("dx", "-2.8em")
    .attr("dy", ".15em")
    .attr("transform", function (d) {
      return "rotate(-65)";
    });

  // Add the Y Axis
  g_main_line_chart.append("g").call(
    d3
      .axisLeft(line_graph_y_scale)
      .tickFormat(function (d) {
        return "$" + d;
        //return d3.format(".0%") + d;
      })
      .ticks(10)
  );

  var line_graph_tooltip = d3
    .select(".line-graph-svg")
    .append("div")
    .attr("class", "tooltip")
    .style("opacity", 1);

  // add the dots with tooltips
  line_graph_svg
    .selectAll("dot")
    .data(data)
    .enter()
    .append("circle")
    .attr("r", 3)
    .attr("cx", function (d) {
      return line_graph_x_scale(d.date);
    })
    .attr("cy", function (d) {
      return line_graph_y_scale(d.close);
    })
    .on("mouseover", function (event, d) {
      line_graph_tooltip.transition().duration(200).style("opacity", 0.9);
      line_graph_tooltip
        .html(formatTime(d.date) + "<br/>" + d.close)
        .style("left", event.pageX - 20 + "px")
        .style("top", event.pageY - 40 + "px");
    });
});
  
  // Add Label to the Chart
  line_graph_svg.append("text")
      .attr("transform", "translate(100,20)")
      .attr("x", "0")
      .attr("y", "0")
      .text("Dunkin Donuts Stock Price")
      .style("font-size", "24")
}



load_contents();