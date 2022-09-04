let width = 600;
let height = 60;
let line_svg = d3
  .select("body")
  .append("svg")
  .attr("id", "svg-shape")
  .attr("width", width)
  .attr("height", height);

let line = d3
  .select("#svg-shape")
  .append("line")
  .attr("x1", 10)
  .attr("y1", 10)
  .attr("x2", 50)
  .attr("y2", 30)
  .attr("stroke", "black");

// Rectangle
let rect = d3
  .select("#svg-shape")
  .append("rect")
  .attr("x", 60)
  .attr("y", 10)
  .attr("width", 50)
  .attr("height", 40)
  .attr("stroke", "black");

// Circle
let circle = d3
  .select("#svg-shape")
  .append("circle")
  .attr("cx", 140)
  .attr("cy", 30)
  .attr("r", 20)
  .attr("stroke", "brown")
  .attr('fill', "brown")
  .attr("fill-opacity", 0.5)
  .append("title")
            .text("bader");

// ellipse
let g = d3
  .select("#svg-shape")
  .append("g")
  .attr("transform", function (d, i) {
    return "translate(0,0)";
  });
let ellipse = g
  .append("ellipse")
  .attr("cx", 260)
  .attr("cy", 30)
  .attr("rx", 90)
  .attr("ry", 20)
  .attr("stroke", "orange")
  .attr("stroke-width", 2)
  .attr("opacity", 0.5);

g.append("text")
  .attr("x", 190)
  .attr("y", 35)
  .text("Bader Binsunbil")
  .attr("stroke", "steelblue")
  .attr("font-size", 20)
  .attr("font-family", "sans-serif")
  .attr("fill", "white")
  
  
/* d3.select("#svg-shape").remove(); */