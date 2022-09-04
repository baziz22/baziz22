function load_contents(){
let pie_chart_csv_width = pie_chart_csv_svg.attr("width");
let pie_chart_csv_height = pie_chart_csv_svg.attr("height");
let pie_chart_csv_radius =
  Math.min(pie_chart_csv_width, pie_chart_csv_height) / 2;

  let pie_chart_csv_svg = d3
        .select(".svg-container")
        .append("svg")
        /* .attr("preserveAspectRatio", "xMinYMin meet") */
        .attr("viewBox", "0 0 "+pie_chart_csv_width+" "+barchart_scale_axis_height)
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
  "#ef8a03",
  "#5a915b",
  "#d03112",
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
  '#E71D7A', // Pink
  '#843A8E', // Purple

  ]); */
let pie_chart_csv_pie = d3.pie().value(function (d) {
  return d.population;
});
let pie_chart_csv_path = d3
  .arc()
  .outerRadius(pie_chart_csv_radius - 25)
  .innerRadius(75);

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
    });

  console.log(pie_chart_csv_arc);

  pie_chart_csv_arc
    .append("text")
    .attr("transform", function (d) {
      return "translate(" + pie_chart_csv_label.centroid(d) + ")";
    })
    .text(function (d) {
      return d.data.continent;
    });
});

pie_chart_csv_svg
  .append("g")
  .attr(
    "transform",
    "translate(" + (pie_chart_csv_width / 2 - 120) + "," + 20 + ")"
  )
  .append("text")
  .text("Browser use statistics - Jan 2017")
  .attr("class", "title");
}

load_contents();