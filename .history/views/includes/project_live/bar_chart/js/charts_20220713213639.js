let element_value = [5,14,7,18,3,4,7,22,5,28,15];
let svg_chart_box_width = 400;
let barHeight = 19;
let scaleFactor = 10;

let graph = d3
    .select(".bader)
    .append('svg')
    .attr("id", "bar-chart")
    .attr("width", svg_chart_box_width)
    .attr("height", barHeight * element_value.length)
    
let bar = graph
.selectAll("g")
.data(element_value)
.enter().append("g")
.attr("transform",function (d, i) {return  "translate(0," + i * barHeight+")"} )

bar.append("rect")
.attr("width", function(d) {return d * scaleFactor})
.attr("height", barHeight)
.attr("rx","7")
.attr("fill","#e5ba7f")
.attr("stroke", "pink")


bar.append("text")
.attr("x", function (d) {return d * scaleFactor})
.attr("y", barHeight/2)
.attr("dy", ".35em")
.attr("fill", "white")
.style("text-anchor", "end")
.text(function (d) {return d})

// Circle Chart
let circle_element_value = [15,24,17,13,20,7,28];
let svg_circle_chart_box_width = 200;
let random_color = ["#d79921","#458588","#b16286","#98971a","#d5c4a1","#d5c4a1"]
let circle_graph = d3
.select("body")
.append("svg")
.attr("id", "bubble-chart")
.attr("width", svg_chart_box_width)
.attr("height", 200)

let circle_shape = circle_graph
.selectAll("g")
.data(circle_element_value)
.enter().append("g")
.attr("transform", function(d, i) {return "translate(0,0)"})

circle_shape.append("circle")
.attr("cx", function(d,i) {
    return i*60 + 25
})
.attr("cy", "90")
.attr("r",function(d){return d*1.5})
.attr("fill", function(d,i) {return random_color[Math.floor(Math.random()*6)]})

circle_shape.append("text")
.attr("x", function(d,i) {
    return i*60 + 18})
.attr("y", "95")
.attr("stroke", "teal")
     .attr("font-size", "12px")
     .attr("font-family", "sans-serif")
.text(function(d) {return d})

graph.remove()
circle_graph.remove()